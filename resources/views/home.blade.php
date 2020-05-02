@extends('layouts.app')

@section('content')
<style>
    .box_wrapper{
        width: 48%;
        border: 1px solid #27496d !important;
        height: 320px;
        float: left;
        padding: 10px;
        background: #fff;
        border-radius: 5px;
       
    }
    .image{
        float: right;
    }
    .text-box{
        
       
    }
    .titulo{
        display: inline;
        color: blanchedalmond;
    }
    .desc{
        font-size: 1.5em;
    }
    .azul-medio{
        width: 98%;
    }
    #img-card{
        width: 100%;
    }
    

</style>
<div class="container">

    <div class="title">
        <p class="display-4">Panel de tareas</p>
    </div>

    <div class="row mt-5">
        <div class="col-md-3 ">
        <img src="{{asset('img/foto1.jpg')}}" alt="" id="img-card">
            <p class="p-3 text-center">Podes ver todas las tareas ordenadas por la fecha en que fueron subidas. También podes descargar cualquiera de ellas.</p>
        </div>
        <div class="col-md-3">
            <img src="{{asset('img/foto1.jpg')}}" alt="" id="img-card">
           <p> Encuentra a tu profesor y descarga su tarea. Estan ordenados alfabeticamente por su apellido para facil visualizacion.</p>
        </div>
        <div class="col-md-3">
            <img src="{{asset('img/foto1.jpg')}}" alt="" id="img-card">
            <p>Encuentra a tu profesor y descarga su tarea. Estan ordenados alfabeticamente por su apellido para facil visualizacion.</p>
        </div>
        @if (Auth::user()->is_profesor == 1)
        <div class="col-md-3">
            <img src="{{asset('img/foto1.jpg')}}" alt="" id="img-card">
            <p>Encuentra a tu profesor y descarga su tarea. Estan ordenados alfabeticamente por su apellido para facil visualizacion.</p>
        </div>
        @endif
    </div>
    <div class="row mt-5">
        <div class="col-md-3 text-center">
          <a href="" class="btn btn-primary btn-block ">Ver tareas</a>
        </div>
        <div class="col-md-3 text-center">
            <a href="" class="btn btn-primary btn-block">Ver tareas</a>
        </div>
        <div class="col-md-3 text-center">
            <a href="" class="btn btn-primary btn-block ">Ver tareas</a>
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
