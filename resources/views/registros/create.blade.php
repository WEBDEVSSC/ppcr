@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><strong>Nuevo registro</strong></h1>
@stop

@section('content')

    <form action="{{ route('storeRegistro') }}" method="POST">
    
    @csrf

    <div class="card card-info card-outline">
        <div class="card-header">

        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-3">
                    <p><strong>Propietario</strong></p>
                    <input type="text" name="propietario" id="propietario" class="form-control">
                </div>
                <div class="col-md-3">
                    <p><strong>Especie</strong></p>
                    <select name="especie" id="especie" class="form-control">
                        <option value="">-- Seleccione una opción --</option>
                        <option value="CANINA">CANINA</option>
                        <option value="FELINA">FELINA</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <p><strong>Sexo</strong></p>
                    <select name="sexo" id="sexo" class="form-control">
                        <option value="">-- Seleccione una opción --</option>
                        <option value="MACHO">MACHO</option>
                        <option value="HEMBRA">HEMBRA</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <p><strong>Edad</strong> <small>(Años cumplidos)</small></p>
                    <select name="edad" id="edad" class="form-control">
                        <option value="">-- Seleccione una opción --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-3">
                    <p><strong>Nombre de la mascota</strong></p>
                    <input type="text" name="nombre_mascota" id="nombre_mascota" class="form-control">
                </div>
                <div class="col-md-3">
                    <p><strong>Dosis</strong></p>
                    <select name="dosis" id="dosis" class="form-control">
                        <option value="">-- Seleccione una opción --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="card-footer">

            <button type="submit" class="btn btn-info">REGISTRAR DATOS</button>

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