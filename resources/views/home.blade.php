@extends('layouts.app')

@section('content')



<div class="container">

    <div class="row mt-5">
        
        {{-- ******************** --}}
        <div class="col xs-4">

            <div class="card" style="width: 18rem">
                <div class="card-header">
                    <div class="card-title">
                        <h3> Ver o descargar tarea</h3>
                    </div>
                </div>
                <div class="card-body">

                
                    <a href="/tarea/" class="btn btn-primary">Lista completa</a>
                </div>
            </div>
            
            
        </div>
        {{-- ******************** --}} 
     


        @if (Auth::user()->is_profesor == 1)


        {{-- ******************** --}}
        <div class="col xs-4">
        
           <div class="card">
               <div class="card-header">
                   <div class="card-title">
                       <h3> Crear nueva tarea</h3>
                   </div>
               </div>
               <div class="card-body">
        
              
                   <a href="/tarea/create/" class="btn btn-primary">Crear tarea</a>
               </div>
           </div>
           
           
        </div>
        {{-- ******************** --}} 
@else
@endif
        

    </div>

</div>
    

@endsection
