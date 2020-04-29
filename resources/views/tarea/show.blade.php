@extends('./layouts.app')
@section('content')

<div class="container">

    <div class="row">
        
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <div class="cad-title mt-2 mb-2"><h1>{{ $tarea->archivo_verbose }}</h1></div>
                  <h3 class="text-muted">{{$profesores->find($tarea->user_id)->name}} {{$profesores->find($tarea->user_id)->apellido}}</h3>
                  <h3 class="card-subtitle mb-2  mt-2 ">{{ $asignaturas->find($tarea->asignatura_id)->asignatura}}</h3>
                <p class="card-text">{{$tarea->descripcion}}</p>
                <a href="/tarea/download/{{$tarea->archivo}}/{{$tarea->archivo_verbose}}" class="card-link">Descargar</a>
                  <a href="#" class="card-link">Ver Online</a>
                </div>
              </div>
            
        </div>
    </div>
    
</div>
@endsection