@extends('layout')
@section('title', "Fuentes de reserva")
@section('content-title',"Fuentes de reserva")

@section('content-header-buttons')
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a class="btn btn-sm btn-outline-secondary" href="{{route('fuentes.create')}}">
                <span data-feather="arrow-up-circle"></span>
                Nueva fuente de reserva
            </a>
        </div>
    </div>
@endsection
@section('content')
    <h2>Resumen</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Código</th>
                <th>Fuente</th>
                <th>Detalles</th>
            </tr>
            </thead>
            <tbody>
			  @forelse($fuentes as $fuente)
			 	<tr>
			 	    <td> {{$fuente->ID_FUENTE}}</td>
			 	    <td> {{$fuente->CODIGO}}</td>
			 	    <td> {{$fuente->DESCRIPCION}}</td>
			 	    <td>
			 		   <a href="{{route('fuentes.details',[$fuente->ID_FUENTE])}}">
			 			  <span data-feather="edit"></span>
			 			  Ver Detalles
			 		   </a>
			 	    </td>
			 	</tr>
			  @empty
			 	<p>NO HAY FUENTES DEFINIDAS</p>
			  @endforelse
            </tbody>
        </table>
    </div>
@endsection
