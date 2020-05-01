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
    

</style>
<div class="container">

    <div class="box_wrapper mt-3 mx-1 shadow-sm">

        <div class="row">
            <div class="col">
                <div class="text-box">
                    <p class="desc"> Podes ver todas las tareas ordenadas por la fecha en que fueron subidas. También podes descargar cualquiera de ellas.</p>
                </div>
            </div>
            <div class="col">
                <img src="{{asset('/img/foto1.jpg')}}" alt="" class="image">
            </div>
        </div>
        <div class="row azul-medio ">
            <div class="col-auto mr-auto">
                <h2 class="titulo"> Ver la lista de tareas</h2>
                
            </div>
            <div class="col-auto">
                <a href="/tarea/" class="btn btn-primary mr">Lista completa</a>
            </div>
        </div>
    </div>

    <div class="box_wrapper mt-3 mx-1">

        <div class="row">
            <div class="col">
                <div class="text-box">
                    <p class="desc">Encuentra a tu profesor y descarga su tarea. Estan ordenados alfabeticamente por su apellido para facil visualizacion.</p>
                </div>
            </div>
            <div class="col">
                <img src="{{asset('/img/foto1.jpg')}}" alt="" class="image">
            </div>
        </div>
        <div class="row azul-medio">
            <div class="col-auto mr-auto">
                <h2 class="titulo"> Ver todos los profesores</h2>
                
            </div>
            <div class="col-auto">
                <a href="/profesores/" class="btn btn-primary mr">Lista completa</a>
            </div>
        </div>
    </div>
    
    <div class="box_wrapper mt-3 mx-1">

        <div class="row">
            <div class="col">
                <div class="text-box">
                    <p class="desc">nda delectus eos dignissimos magnam minima laboriosam, et sequi neque excepturi, harum exercitationem inventore odio.</p>
                </div>
            </div>
            <div class="col">
                <img src="{{asset('/img/foto1.jpg')}}" alt="" class="image">
            </div>
        </div>
        <div class="row azul-medio">
            <div class="col-auto mr-auto">
                <h2 class="titulo"> Ver establecimientos</h2>
                
            </div>
            <div class="col-auto">
                <a href="/establecimientos/" class="btn btn-primary m">Lista completa</a>
            </div>
        </div>
    </div>



        
        
  
        {{-- ******************** --}} 
     


        @if (Auth::user()->is_profesor == 1)


     
        <div class="box_wrapper mt-3 mx-1">

            <div class="row">
                <div class="col">
                    <div class="text-box">
                        <p class="desc">nda delectus eos dignissimos magnam minima laboriosam, et sequi neque excepturi, harum exercitationem inventore odio.</p>
                    </div>
                </div>
                <div class="col">
                    <img src="{{asset('/img/foto1.jpg')}}" alt="" class="image">
                </div>
            </div>
            <div class="row azul-medio">
                <div class="col-auto mr-auto">
                    <h2 class="titulo"> Crear nueva tarea</h2>
                    
                </div>
                <div class="col-auto">
                    <a href="/tarea/create/" class="btn btn-primary">Crear tarea</a>
                </div>
            </div>
        </div>
@else
@endif
        

    </div>

</div>
    

@endsection
