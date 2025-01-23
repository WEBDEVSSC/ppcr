@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><strong>Parametros</strong> <small>Editar registro</small></h1>
@stop

@section('content')

    <form action="{{ route('storeParametro') }}" method="POST">
    
    @csrf

    <div class="card card-info card-outline">
        <div class="card-header">

        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-6">
                    <p><strong>Año</strong></p>
                    <input type="number" name="anio" id="anio" class="form-control" value="{{ old('anio', $parametro->anio) }}">
                    @error('anio')<br><p class="text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="col-md-6">
                    <p><strong>Meta anual</strong></p>
                    <input type="number" name="meta_anual" id="meta_anual" class="form-control" value="{{ old('meta_anual', $parametro->meta_anual) }}">
                    @error('anio')<br><p class="text-danger">{{ $message }}</p>@enderror
                </div>
                
            </div>

            <div class="row mt-3">
                <div class="col-md-3">
                    <p><strong>Meta J1</strong></p>
                    <input type="number" name="metaj1" id="metaj1" class="form-control" value="{{ old('metaj1', $parametro->meta_j1) }}">
                    @error('metaj1')<br><p class="text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="col-md-3">
                    <p><strong>Meta J2</strong></p>
                    <input type="number" name="metaj2" id="metaj2" class="form-control" value="{{ old('metaj2', $parametro->meta_j2) }}">
                    @error('metaj2')<br><p class="text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="col-md-3">
                    <p><strong>Meta J3</strong></p>
                    <input type="number" name="metaj3" id="metaj3" class="form-control" value="{{ old('metaj3', $parametro->meta_j3) }}">
                    @error('metaj3')<br><p class="text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="col-md-3">
                    <p><strong>Meta J4</strong></p>
                    <input type="number" name="metaj4" id="metaj4" class="form-control" value="{{ old('metaj4', $parametro->meta_j4) }}">
                    @error('metaj4')<br><p class="text-danger">{{ $message }}</p>@enderror
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-3">
                    <p><strong>Meta J5</strong></p>
                    <input type="number" name="metaj5" id="metaj5" class="form-control" value="{{ old('metaj5', $parametro->meta_j5) }}">
                    @error('metaj5')<br><p class="text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="col-md-3">
                    <p><strong>Meta J6</strong></p>
                    <input type="number" name="metaj6" id="metaj6" class="form-control" value="{{ old('metaj6', $parametro->meta_j6) }}">
                    @error('metaj6')<br><p class="text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="col-md-3">
                    <p><strong>Meta J7</strong></p>
                    <input type="number" name="metaj7" id="metaj7" class="form-control" value="{{ old('metaj7', $parametro->meta_j7) }}">
                    @error('metaj7')<br><p class="text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="col-md-3">
                    <p><strong>Meta J8</strong></p>
                    <input type="number" name="metaj8" id="metaj8" class="form-control" value="{{ old('metaj8', $parametro->meta_j8) }}">
                    @error('metaj8')<br><p class="text-danger">{{ $message }}</p>@enderror
                </div>
            </div>

        </div>
        <div class="card-footer">

            <button type="submit" class="btn btn-info btn-sm">ACTUALIZAR DATOS</button>

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