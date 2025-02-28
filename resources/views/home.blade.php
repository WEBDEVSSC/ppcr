@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Chartjs', true)

@section('content_header')
    <h1><strong>Programa de Prevención y Control de Rabia</strong> <small>Dashboard {{$anioActual}}</small></h1>
@stop

@section('content')

<!-- ---------------------------------------------------------------------- -->
<div class="row">
    <div class="col-md-4">
        <div class="small-box bg-purple">
            <div class="inner">
              <h3>{{$parametro->meta_anual ?? 'Valor no disponible'}}</h3>
              <p>Meta Anual</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="small-box bg-purple">
            <div class="inner">
              <h3>{{$contadorRegistros}}</h3>

              <p>Avance Estatal</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="small-box bg-purple">
            <div class="inner">
                <h3>{{ isset($parametro->meta_anual) && $parametro->meta_anual > 0 ? number_format(($contadorRegistros / $parametro->meta_anual) * 100, 2) : 'Valor no disponible' }}%</h3>
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
       aria-valuemax="{{ $parametro?->meta_anual ?? 100 }}" 
       style="width: {{ ($contadorRegistros / ($parametro?->meta_anual ?? 1)) * 100 }}%">
      <span class="sr-only">{{ ($contadorRegistros / ($parametro?->meta_anual ?? 1)) * 100 }}% Complete</span>
  </div>
</div>

<!-- ---------------------------------------------------------------------- -->

<div class="row">
    <div class="col-md-9">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                  <th>Jurisdicción</th>
                  <th>Meta Anual</th>
                  <th>Avance</th>
                  <th>Progreso</th>
                  <th style="width: 40px">%</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1. Piedras Negras</td>
                  <td>{{$parametro->meta_j1 ?? 'Valor no disponible'}}</td>
                  <td>{{$contadorRegistrosDelAnioJ1}}</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-purple" style="width: {{$porcentajeJ1}}%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-purple">{{round($porcentajeJ1)}}%</span></td>
                </tr>
                <tr>
                  <td>2. Acuña</td>
                  <td>{{$parametro->meta_j2 ?? 'Valor no disponible'}}</td>
                  <td>{{$contadorRegistrosDelAnioJ2}}</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-purple" style="width: {{$porcentajeJ2}}%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-purple">{{round($porcentajeJ2)}}%</span></td>
                </tr>
                <tr>
                  <td>3. Sabinas</td>
                  <td>{{$parametro->meta_j3 ?? 'Valor no disponible'}}</td>
                  <td>{{$contadorRegistrosDelAnioJ3}}</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar bg-purple" style="width: {{$porcentajeJ3}}%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-purple">{{round($porcentajeJ3)}}%</span></td>
                </tr>
                <tr>
                  <td>4. Monclova</td>
                  <td>{{$parametro->meta_j4 ?? 'Valor no disponible'}}</td>
                  <td>{{$contadorRegistrosDelAnioJ4}}</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar bg-purple" style="width: {{$porcentajeJ4}}%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-purple">{{round($porcentajeJ4)}}%</span></td>
                </tr>
                <tr>
                    <td>5. Cuatro Cienegas</td>
                    <td>{{$parametro->meta_j5 ?? 'Valor no disponible'}}</td>
                    <td>{{$contadorRegistrosDelAnioJ5}}</td>
                    <td>
                      <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar bg-purple" style="width: {{$porcentajeJ5}}%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-purple">{{round($porcentajeJ5)}}%</span></td>
                  </tr>
                  <tr>
                    <td>6. Torreon</td>
                    <td>{{$parametro->meta_j6 ?? 'Valor no disponible'}}</td>
                    <td>{{$contadorRegistrosDelAnioJ6}}</td>
                    <td>
                      <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar bg-purple" style="width: {{$porcentajeJ6}}%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-purple">{{round($porcentajeJ6)}}%</span></td>
                  </tr>
                  <tr>
                    <td>7. Francisco I. Madero</td>
                    <td>{{$parametro->meta_j7 ?? 'Valor no disponible'}}</td>
                    <td>{{$contadorRegistrosDelAnioJ7}}</td>
                    <td>
                      <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar bg-purple" style="width: {{$porcentajeJ7}}%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-purple">{{round($porcentajeJ7)}}%</span></td>
                  </tr>
                  <tr>
                    <td>8. Saltillo</td>
                    <td>{{$parametro->meta_j8 ?? 'Valor no disponible'}}</td>
                    <td>{{$contadorRegistrosDelAnioJ8}}</td>
                    <td>
                      <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar bg-purple" style="width: {{$porcentajeJ8}}%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-purple">{{round($porcentajeJ8)}}%</span></td>
                  </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><strong>Grafica Estatal</strong></h3>
            </div>
            <div class="card-body">
                <div>
                    <canvas id="registrosPorSexo" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ---------------------------------------------------------------------- -->

<div class="row">
  <div class="col-md-12">
    
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

    <script>
        // Espera a que el contenido del DOM esté cargado
    document.addEventListener('DOMContentLoaded', function() {
        // Obtén el contexto del canvas
        var ctx = document.getElementById('registrosPorSexo').getContext('2d');
        
        // Crea la gráfica de dona
        var myDoughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['J1','J2','J3','J4','J5','J6','J7','J8'],
                datasets: [{
                    label: 'Número de votos',
                    data: [{{$contadorRegistrosDelAnioJ1}}, {{$contadorRegistrosDelAnioJ2}}, {{$contadorRegistrosDelAnioJ3}}, {{$contadorRegistrosDelAnioJ4}}, {{$contadorRegistrosDelAnioJ5}}, {{$contadorRegistrosDelAnioJ6}}, {{$contadorRegistrosDelAnioJ7}}, {{$contadorRegistrosDelAnioJ8}}],
                    backgroundColor: [
                        'rgba(153, 102, 255, 0.2)', // Tono lavanda claro
                        'rgba(128, 0, 128, 0.2)',   // Púrpura clásico
                        'rgba(186, 85, 211, 0.2)',  // Orquídea media
                        'rgba(138, 43, 226, 0.2)',  // Azul violeta
                        'rgba(218, 112, 214, 0.2)', // Orquídea pálida
                        'rgba(147, 112, 219, 0.2)', // Púrpura medio
                        'rgba(221, 160, 221, 0.2)', // Púrpura lavanda
                        'rgba(75, 0, 130, 0.2)'     // Índigo
                    ],
                    borderColor: [
                        'rgba(153, 102, 255, 1)',   // Tono lavanda claro
                        'rgba(128, 0, 128, 1)',     // Púrpura clásico
                        'rgba(186, 85, 211, 1)',    // Orquídea media
                        'rgba(138, 43, 226, 1)',    // Azul violeta
                        'rgba(218, 112, 214, 1)',   // Orquídea pálida
                        'rgba(147, 112, 219, 1)',   // Púrpura medio
                        'rgba(221, 160, 221, 1)',   // Púrpura lavanda
                        'rgba(75, 0, 130, 1)'       // Índigo
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });
    });
    
    </script>
@stop