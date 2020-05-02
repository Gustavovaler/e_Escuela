@extends('layouts.app')

@section('content')

<div class="container">
   
    <div class="mt-5" style="width: 60%">
    <table class="table shadow">
      <thead class="thead text-white azul-medio">
        <tr>       
  
          <th class="col xs-4"><h4>Profesor</h4></th>
          <th class="col xs-4"></th>
        
        </tr>
      </thead>
      <tbody>
        @foreach($profesores as $profesor)
        <tr class="bg-light" >
          
  
        <td><h3>{{ $profesor->apellido}}, {{ $profesor->name }} </h3></td>
        
        <td><a href="/profesores/{{$profesor->id}}" class="btn btn-primary ">Ver Tareas</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
    <div class="row">
      <div class="col">
        
      </div>
      <div class="col align-self-center">
        <div style="align-content: center">
          {{ $profesores->links() }}
        </div>
        
      </div>
      <div class="col">
  
      </div>
    </div>
  </div>




@endsection