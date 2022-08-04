@extends('layouts.app')

@section('content')

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-black-50">Clientes</h1>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Telefono</th>
                                        <th>Correo</th>
                                        <th>Pais</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ $cliente->id }}</td>
                                            <td>{{ $cliente->nombre }}</td>
                                            <td>{{ $cliente->telefono }}</td>
                                            <td>{{ $cliente->correo }}</td>
                                            <td>{{ $cliente->pais }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a class="dropdown-item" href=" {{ route('clientes.show', $cliente) }} ">Ver</a>
                                                    <a class="dropdown-item" href=" {{ route('clientes.edit', $cliente) }} ">Editar</a>
                                                    <form id="{{ 'destroyForm'.$cliente->id }}" method="POST" action="{{ route('clientes.destroy', $cliente) }}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <a href="javascript:{}" onclick="document.getElementById('{{ 'destroyForm'.$cliente->id }}').submit();" class="dropdown-item">Eliminar</a>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
