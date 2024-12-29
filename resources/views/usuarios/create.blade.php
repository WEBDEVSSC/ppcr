@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><strong>Nuevo registro</strong></h1>
@stop

@section('content')

<a href="{{ route('clues.export') }}" class="btn btn-success">Exportar Clues a Excel</a>

    <form action="{{ route('storeUsuario') }}" method="POST">
    
    @csrf

    <div class="card card-info card-outline">
        <div class="card-header">

        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-3">
                    <p><strong>Nombre</strong></p>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}">
                    @error('nombre')<br><p class="text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="col-md-3">
                    <p><strong>E-mail</strong></p>
                    <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
                    @error('email')<br><p class="text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="col-md-3">
                    <p><strong>Contraseña</strong></p>
                    <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">
                    @error('password')<br><p class="text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="col-md-3">
                    <p><strong>CLUES</strong></p>
                    <select name="clues" id="clues" class="form-control">
                        <option value="">-- Selecciona una opción --</option>
                        @foreach($clues as $clue)
                            <option value="{{ $clue->id }}" {{ old('clues') == $clue->id ? 'selected' : '' }}>
                                {{ $clue->jurisdiccion_id }} - {{ $clue->unidad }}
                            </option>
                        @endforeach
                    </select>
                    @error('clues')<br><p class="text-danger">{{ $message }}</p>@enderror
                </div>
                
            </div>

        </div>
        <div class="card-footer">

            <button type="submit" class="btn btn-info btn-sm">REGISTRAR DATOS</button>

        </div>
    </div>
    </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop