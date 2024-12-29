@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1><strong>Usuarios</strong><small> Panel de Control</small> </h1>
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
            <a href="{{ route('createUsuario') }}" class="btn btn-info btn-sm">NUEVO REGISTRO</a>
        </div>
        <div class="card-body">

            <div class="row">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NOMBRE</th>
                            <th>EMAIL</th>
                            <th>CLUES</th> 
                            <th>JURISDICCIÓN</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->clues }} - {{$usuario->unidad}}</td>
                                <td>{{ $usuario->jurisdiccion_id }} - {{ $usuario->jurisdiccion }}</td>
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