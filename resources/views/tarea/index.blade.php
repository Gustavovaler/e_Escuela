@extends('layouts/app')

@section('content')
<div class="container">

    <h1 class="text-white">Mis tareas</h1>

        

    @foreach ($tareas as $tarea)
    <div class="card">
        <div class="card-title">
            @if ( $tarea->user == Auth::user())
            {{ $tarea->archivo }}
            @endif
        </div>
            
    </div>
       
        
    @endforeach

</div>

@endsection