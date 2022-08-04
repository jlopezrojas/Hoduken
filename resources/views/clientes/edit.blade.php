@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="text-black-50">Editar Cliente</h1>
    <div class="card card-primary">
        <form method="POST" action="{{ route('clientes.update', $cliente) }}">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" value="{{ $cliente->nombre }}" class="form-control" name="nombre" placeholder="Nombre">
                    @if($errors->has('nombre'))
                        <div class="error">{{ $errors->first('nombre') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Telefono</label>
                    <input type="text" value="{{ $cliente->telefono }}" class="form-control" name="telefono" placeholder="Telefono">
                    @if($errors->has('telefono'))
                        <div class="error">{{ $errors->first('telefono') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Correo</label>
                    <input type="text" value="{{ $cliente->correo }}" class="form-control" name="correo" placeholder="Correo">
                    @if($errors->has('correo'))
                        <div class="error">{{ $errors->first('correo') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Pais</label>
                    <div class="form-group">
                        <select name="pais" class="form-control">
                            <option> Selecciona un Pais </option>
                            @foreach ($paises as $pais)
                                @if($pais->nombre == $cliente->pais)
                                    <option selected id="{{ $pais->id }}"> {{ $pais->nombre }} </option>
                                @else
                                    <option id="{{ $pais->id }}"> {{ $pais->nombre }} </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
</div>
@endsection
