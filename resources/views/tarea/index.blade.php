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
        
        <td>{{$tarea->archivo}}</td>
      <td>{{ $asignaturas->find($tarea->asignatura_id)->asignatura}}</td>
      <td>{{$tarea->curso}}</td>
      <td>{{$profesores->find($tarea->user_id)->name}} {{$profesores->find($tarea->user_id)->apellido}}</td>
      <td><a href="/tarea/{{$tarea->id}}" class="btn btn-primary">Ver</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

    

        

    {{-- <div class="row">
    @foreach ($tareas as $tarea)
            <div class="col xs-2">
                <div class="card mt-2" style="width: 15rem;">
                <img class="card-img" src="{{ asset('img/wordexcelpdf.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{ $tarea->archivo }}</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/tarea/{{$tarea->id}}" class="btn btn-secondary">Descargar</a>
                    <a href="/tarea/{{$tarea->id}}" class="btn btn-primary">Detalle</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    
    
       
        

</div> --}}

@endsection