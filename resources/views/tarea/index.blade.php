@extends('layouts/app')

@section('content')
<div class="container">

  <table class="table">
    <thead class="thead-dark">
      <tr>
        
        <th scope="col">Titulo</th>
        <th scope="col">Materia</th>
        <th scope="col">Curso</th>
        <th scope="col">Profesor</th>
        <th scope="col">Accion</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tareas as $tarea)
      <tr class="bg-light" >
        
        <td>{{$tarea->archivo_verbose}}</td>
      <td>{{ $asignaturas->find($tarea->asignatura_id)->asignatura}}</td>
      <td>{{$tarea->curso}}</td>
      <td>{{$profesores->find($tarea->user_id)->name}} {{$profesores->find($tarea->user_id)->apellido}}</td>
      <td><a href="/tarea/{{$tarea->id}}" class="btn btn-primary">Ver</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection