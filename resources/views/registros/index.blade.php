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
                            <th>ESPECIE</th>
                            <th>SEXO</th>
                            <th>EDAD</th>
                            <th>MASCOTA</th>
                            <th>DOSIS</th>
                            <th>FOLIO</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($registros as $registro)
                            <tr>
                                <td>{{ $registro->propietario }}</td>
                                <td>{{ $registro->especie }}</td>
                                <td>{{ $registro->sexo }}</td>
                                <td>{{ $registro->edad }} años</td>
                                <td>{{ $registro->nombre_mascota }}</td>
                                <td>{{ $registro->dosis }} °</td>
                                <td>{{ $registro->folio }}</td>
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