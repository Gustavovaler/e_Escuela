
@extends('layouts.app')


@section('content')
{{-- @if(!Auth::user()->is_profesor)

    

@endif --}}


<div class="container justify-content-md-center">
    <p class="display-4 text-center">Que bueno escucharte !</p>
     <div class="row justify-content-md-center mt-3 bt-2 ">
        <div class="col-6 gris-fondo rounded m-2 p-3 shadow">    
                
            <form action='/contacto/' method="POST" enctype="multipart/form-data">
            @csrf
                
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre y apellido:</label>
                <input type="text" class="form-control" name="nombre_completo"  required>
            </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email:</label>
                    <input type="text" class="form-control" name="email"  required>
                </div>

                   
                <div class="form-group">
                    <label for="descripcion">Queremos saber tu opinion:</label>
                    <textarea class="form-control"  rows="3" name="comentario"></textarea>
                </div>

                    <input type="text" name="user_id" value="0" class="form-control" required  hidden><br>
                    <input type="text" name="is_registered_user" class="form-control" required value="1" hidden><br>
                    <input type="submit" class="btn btn-azul-medio text-white  btn-lg btn-block" value="Enviar">

            </form>

        </div>
    </div>
</div>
@endsection