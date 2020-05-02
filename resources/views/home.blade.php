@extends('layouts.app')

@section('content')
<style>
   

</style>
<div class="container">

    <div class="title">
        <p class="display-4">Panel de tareas</p>
    </div>

    <div class="row mt-5">
        <div class="col-md-3 ">
        <img src="{{asset('img/foto1.jpg')}}" alt="" id="img-card" class="rounded">
            <p class="p-3 text-center txt">Podes ver todas las tareas ordenadas por la fecha en que fueron subidas. También podes descargar cualquiera de ellas.</p>
        </div>
        <div class="col-md-3">
            <img src="{{asset('img/foto1.jpg')}}" alt="" id="img-card" class="rounded" >
           <p class="p-3 text-center txt"> Encuentra a tu profesor y descarga su tarea. Estan ordenados alfabeticamente por su apellido para facil visualizacion.</p>
        </div>
        <div class="col-md-3">
            <img src="{{asset('img/foto1.jpg')}}" alt="" id="img-card" class="rounded"  >
            <p class="p-3 text-center txt ">Las escuelas, institutos y demas centros educativos que representan los profesores que aqui exponen sus tareas </p>
        </div>
        @if (Auth::user()->is_profesor == 1)
        <div class="col-md-3">
            <img src="{{asset('img/foto1.jpg')}}" alt="" id="img-card" class="rounded">
            <p class="p-3 text-center txt" >Si ya estas list@ para publicar tu tarea y que tus alumnos puedan descargarla solo debes subirla siguiendo este enlace.</p>
        </div>
        @endif
    </div>
    <div class="row mt-2">
        <div class="col-md-3 text-center">
          <a href="/tarea/" class="btn btn-primary btn-block ">Ver Tareas</a>
        </div>
        <div class="col-md-3 text-center">
            <a href="/profesores/" class="btn btn-primary btn-block">Ver Profesores</a>
        </div>
        <div class="col-md-3 text-center">
            <a href="/establecimientos/" class="btn btn-primary btn-block ">Ver Establecimientos</a>
        </div>
        @if (Auth::user()->is_profesor == 1)
        <div class="col-md-3 text-center">
            <a href="/tarea/create/" class="btn btn-primary btn-block ">Crear Tarea</a>
        </div>

        @endif
    </div>





        
        
  
        {{-- ******************** --}} 
     


        @if (Auth::user()->is_profesor == 1)@endif
        


    

@endsection
