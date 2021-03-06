@extends('layout')
@section('title', "Clientes")
@section('content-title',"Clientes")

@section('content-header-buttons')
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a class="btn btn-sm btn-outline-secondary" href="{{route('clients.create')}}">
                <span data-feather="arrow-up-circle"></span>
                Nuevo Cliente
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
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
			 <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
			 <th>Telefono</th>
                <th>Email</th>
			 <th>Tipo Cliente</th>
			 <th>Descripcion</th>
                <th>Path Scan</th>
            </tr>
            </thead>
            <tbody>

            @forelse($client as $client1)
                <tr>
                    <td> {{$client1->ID_CLIENTE}}</td>
				<td> {{$client1->CODIGO}}</td>
                    <td> {{$client1->NOMBRE1}}</td>
				<td> {{$client1->NOMBRE2}}</td>
				<td> {{$client1->APELLIDO1}}</td>
				<td> {{$client1->APELLIDO2}}</td>
				<td> {{$client1->TELEFONO}}</td>
				<td> {{$client1->EMAIL}}</td>
				<td> {{$client1->TIPO_CLIENTE}}</td>
				<td> {{$client1->COMENTARIOS}}</td>
				<td> {{$client1->PATH_SCAN}}</td>
                    <td>
                        <a href="{{route('clients.details',[$client1->ID_CLIENTE])}}">
                            <span data-feather="edit"></span>
                            Ver Detalles
                        </a>
                    </td>
                </tr>
            @empty
                <p>NO EXISTEN CLIENTES</p>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
