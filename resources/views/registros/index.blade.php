@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1><strong>Panel de Control</strong></h1>
@stop

@section('content')

<!-- ---------------------------------------------------------------- -->

@if(session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            title: '¡Registro completado! ',
            text: "{{ session('success') }}",
            icon: 'success',
            confirmButtonText: 'Ok'
        });
    });
</script>
@endif

<!-- ---------------------------------------------------------------- -->

    <div class="card card-info card-outline">
        <div class="card-header">

        </div>
        <div class="card-body">

            <div class="row">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>PROPIETARIO</th>
                            <th>ESPECIE</th>   {{-- Asegúrate de que estos campos coincidan con los de tu modelo --}}
                            <th>SEXO</th>
                            <th>EDAD</th>
                            <th>MASCOTA</th>
                            <th>DOSIS</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($registros as $registro)
                            <tr>
                                <td>{{ $registro->propietario }}</td>  {{-- Suponiendo que tienes un campo id --}}
                                <td>{{ $registro->especie }}</td>  {{-- Cambia 'nombre' por el campo que tengas --}}
                                <td>{{ $registro->sexo }}</td>  {{-- Cambia 'email' por el campo que tengas --}} 
                                <td>{{ $registro->edad }} años</td>  {{-- Cambia 'email' por el campo que tengas --}} 
                                <td>{{ $registro->nombre_mascota }}</td>  {{-- Cambia 'email' por el campo que tengas --}} 
                                <td>{{ $registro->dosis }} °</td>  {{-- Cambia 'email' por el campo que tengas --}} 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>

        </div>
        <div class="card-footer">

        </div>
    </div>
    
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop