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
                            <th>AÑO</th>
                            <th>META ANUAL</th>   {{-- Asegúrate de que estos campos coincidan con los de tu modelo --}}
                            <th>META J1</th>
                            <th>META J2</th>
                            <th>META J3</th>
                            <th>META J4</th>
                            <th>META J5</th>
                            <th>META J6</th>
                            <th>META J7</th>
                            <th>META J8</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($parametros as $parametro)
                            <tr>
                                <td>{{ $parametro->anio }}</td>  {{-- Suponiendo que tienes un campo id --}}
                                <td>{{ $parametro->meta_anual }}</td>  {{-- Cambia 'nombre' por el campo que tengas --}}
                                <td>{{ $parametro->meta_j1 }}</td>  {{-- Cambia 'email' por el campo que tengas --}} 
                                <td>{{ $parametro->meta_j2 }}</td>  {{-- Cambia 'email' por el campo que tengas --}} 
                                <td>{{ $parametro->meta_j3 }}</td>  {{-- Cambia 'email' por el campo que tengas --}} 
                                <td>{{ $parametro->meta_j4 }}</td>  {{-- Cambia 'email' por el campo que tengas --}} 
                                <td>{{ $parametro->meta_j5 }}</td>  {{-- Cambia 'email' por el campo que tengas --}} 
                                <td>{{ $parametro->meta_j6 }}</td>  {{-- Cambia 'email' por el campo que tengas --}} 
                                <td>{{ $parametro->meta_j7 }}</td>  {{-- Cambia 'email' por el campo que tengas --}} 
                                <td>{{ $parametro->meta_j8 }}</td>  {{-- Cambia 'email' por el campo que tengas --}} 
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