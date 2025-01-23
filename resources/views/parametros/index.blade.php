@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1><strong>Parametro</strong> <small>Panel de Control</small></h1>
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
            <a href="{{ route('createParametro') }}" class="btn btn-info btn-sm">NUEVO REGISTRO</a>
        </div>
        <div class="card-body">

            <div class="row">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>AÑO</th>
                            <th>META ANUAL</th>
                            <th>META J1</th>
                            <th>META J2</th>
                            <th>META J3</th>
                            <th>META J4</th>
                            <th>META J5</th>
                            <th>META J6</th>
                            <th>META J7</th>
                            <th>META J8</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($parametros as $parametro)
                            <tr>
                                <td>{{ $parametro->anio }}</td>
                                <td>{{ $parametro->meta_anual }}</td>
                                <td>{{ $parametro->meta_j1 }}</td>
                                <td>{{ $parametro->meta_j2 }}</td>
                                <td>{{ $parametro->meta_j3 }}</td> 
                                <td>{{ $parametro->meta_j4 }}</td> 
                                <td>{{ $parametro->meta_j5 }}</td>  
                                <td>{{ $parametro->meta_j6 }}</td>  
                                <td>{{ $parametro->meta_j7 }}</td>  
                                <td>{{ $parametro->meta_j8 }}</td>  
                                <td>
                                    <a class='btn btn-info btn-sm btn-block' href="{{ route('editParametro', $parametro->id) }}">
                                        EDITAR
                                    </a>
                                </td>  
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