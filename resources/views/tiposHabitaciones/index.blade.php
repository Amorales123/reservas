@extends('layout')
@section('title', "Tipos de habitaciones")
@section('content-title',"Tipos de habitaciones")

@section('content-header-buttons')
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a class="btn btn-sm btn-outline-secondary" href="{{route('tiposHabitaciones.create')}}">
                <span data-feather="arrow-up-circle"></span>
                Nuevo tipo de habitacion
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
                <th>Descripcion</th>
                <th>Numero de personas</th>
                <th>Precio</th>
            </tr>
            </thead>
            <tbody>

            @forelse($tipos as $tipo)
                <tr>
                    <td> {{$tipo->ID_TIPO_HABITACION}}</td>
                    <td> {{$tipo->DESCRIPCION}}</td>
                    <td> {{$tipo->PERSONAS}}</td>
                    <td> {{$tipo->ID_PRECIO}}</td>
                    <td>
                        <a href="{{route('tiposHabitaciones.details',[$tipo->ID_TIPO_HABITACION])}}">
                            <span data-feather="edit"></span>
                            Ver Detalles
                        </a>
                    </td>
                </tr>
            @empty
                <p><strong>NO HAY HABITACIONES DEFINIDAS</strong></p>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
