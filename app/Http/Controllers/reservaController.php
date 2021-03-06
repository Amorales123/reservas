<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Reserva;
use App\Models\fuenteReserva;
use App\Models\nuevaHabitacion;
use App\Models\habitacion_reserva;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class reservaController extends Controller
{
	public function index(){
         $reservas = Reserva::all();
         $title = 'Listado de reservas';
         return view('reservas.index', compact('reservas','title'));
     }
     public function create(){
         $title = 'Definir reservas';
	     $clientes=Client::all();
		 $fuentes=fuenteReserva::all();
		 $habitaciones=nuevaHabitacion::all();
		 $reservas=habitacion_reserva::all();
		 $precios = DB::table('PRECIO')->pluck('PRECIO');

         return view('reservas.create',compact('reservas','precios','habitaciones','fuentes','clientes','title'));
     }

     public function details(Reserva $reserva){
 	   // dd($currency);
         return view('reservas.details',compact('reserva'));
     }
     public function store(){
         $data = request()->all();
 	   //dd($data);
         Reserva::create([
             'CODIGO' => $data['code'],
             'DESCRIPCION'   => $data['description'],
		   'ID_CLIENTE'   => $data['cliente'],
		   'ID_FUENTE'   => $data['fuente'],
		   'ID_ESTADO_RESERVA'   => $data['estado'],
		   'FECHA_INGRESO'   => $data['fechaIngreso'],
		   'FECHA_RETIRO'   => $data['fechaSalida'],
		   'CODIGO_VUELO'   => $data['codigoVuelo'],
         ]);
         return redirect()->route('reservas');
     }
     public function update(Reserva $reserva){
 	    $data = request()->all();
  	   	//dd($data);
 		$reserva->update([
			'CODIGO' => $data['code'],
               'DESCRIPCION'   => $data['description'],
  		   'ID_CLIENTE'   => $data['cliente'],
  		   'ID_FUENTE'   => $data['fuente'],
  		   'ID_ESTADO_RESERVA'   => $data['estado'],
  		   'FECHA_INGRESO'   => $data['fechaIngreso'],
  		   'FECHA_RETIRO'   => $data['fechaSalida'],
  		   'CODIGO_VUELO'   => $data['codigoVuelo'],
 		]);
 	    return redirect()->route('reservas');
     }
}
