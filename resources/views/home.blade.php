@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><strong>Dashboard 2024</strong></h1>
@stop

@section('content')

<!-- ---------------------------------------------------------------------- -->
<div class="row">
    <div class="col-md-3">
        <div class="small-box bg-purple">
            <div class="inner">
              <h3>{{$parametro->meta_anual}}</h3>

              <p>Meta Anual</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="small-box bg-purple">
            <div class="inner">
              <h3>{{$contadorRegistros}}</h3>

              <p>Avance</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="small-box bg-purple">
            <div class="inner">
                <h3>{{ number_format(($contadorRegistros / $parametro->meta_anual) * 100, 2) }}%</h3>

              <p>Porcentaje</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
        </div>
    </div>
</div>

<!-- ---------------------------------------------------------------------- -->

    <div class="progress mb-3">
        <div class="progress-bar bg-purple" role="progressbar" 
             aria-valuenow="{{ $contadorRegistros }}" 
             aria-valuemin="0" 
             aria-valuemax="{{ $parametro->meta_anual }}" 
             style="width: {{ ($contadorRegistros / $parametro->meta_anual) * 100 }}%">
            <span class="sr-only">{{ ($contadorRegistros / $parametro->meta_anual) * 100 }}% Complete</span>
        </div>
    </div>

<!-- ---------------------------------------------------------------------- -->

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop