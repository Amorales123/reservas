@extends('layout')
@section('title', "Detalles de las habitaciones")
@section('content-title',"Detalles de las habitaciones")
@section('css-template')
    @parent
    <link href="{{asset("css/form-validation.css")}}" rel="stylesheet">
@endsection
@section('content-header-buttons')
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a class="btn btn-sm btn-outline-secondary" href="{{route('nuevasHabitaciones')}}">
                <span data-feather="arrow-left-circle"></span>
                Cancelar
            </a>
        </div>
    </div>
@endsection
@section('content')
    <form class="needs-validation" method="POST" action="{{url("/nuevasHabitaciones/{$habitaciones->ID_ESTADO_HABITACION}")}}">
	    {{ method_field('PUT') }}
	    {{csrf_field()}}
        <div class="row">
            <div class="col-6 mb-3">
                <label for="code">Tipo de habitacion</label>
                <input type="text" class="form-control" id="firstName" name="tipo" value="{{$habitaciones->ID_TIPO_HABITACION}}">
            </div>
            <div class="col-6 mb-3">
                <label for="description">Estado</label>
                <input type="text" class="form-control" id="lastName"  name="estado" value="{{$habitaciones->ID_ESTADO_HABITACION}}">
            </div>
		  <div class="col-6 mb-3">
                <label for="description">Detalles</label>
                <input type="text" class="form-control" id="lastName"  name="description" value="{{$habitaciones->DETALLES}}">
            </div>
        </div>
	   <div class="row">
            <div class="col-12"></div>
            <div class="col-6">
                <button class="btn btn-sm btn-outline-secondary">
                    <span data-feather="save"></span>
                    Actualizar
                </button>
            </div>
        </div>
    </form>
@endsection
