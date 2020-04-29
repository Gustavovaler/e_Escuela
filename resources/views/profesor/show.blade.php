@extends('layouts.app')

@section('content')

<div class="container">

    <div class="nombre bg-dark">
        <h2 class="text-white m-3 p-2">{{$profesor[0]['name']}} {{$profesor[0]['apellido']}}</h2>
    </div>
    @foreach ($tareas as $tarea)

    <div class="row bg-light m-1 p-3">
        <div class="col-2">
            {{ $tarea->created_at}}
        </div>
        <div class="col-4">
            <h3>{{ $tarea->archivo_verbose}}</h3>
        </div>
        <div class="col">
        <h4 class="text-muted">{{ $asignaturas->find($tarea->asignatura_id)->asignatura}}</h4>
        </div>
        <div class="col">
            <a href="/tarea/download/{{$tarea->archivo}}/{{$tarea->archivo_verbose}}"><i>Descargar</i></a>
        </div>
    </div>
        
    @endforeach

</div>


@endsection