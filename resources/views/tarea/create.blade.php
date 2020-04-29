
@extends('layouts.app')


@section('content')
@if(!Auth::user()->is_profesor)

    no profesor

@endif


<div class="container justify-content-md-center">
     <div class="row justify-content-md-center mt-3 bt-2 ">
        <div class="col-6 bg-light m-2 p-3">    
                
            <form action='/tarea/' method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Curso o Grado</label>
                    <input type="text" class="form-control" name="curso" placeholder="Ej.  2do - 1ra T.Tarde" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Materia o asignatura.</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2" name="asignatura_id">
                        @foreach($asignaturas as $asignatura)
                            <option value="{{$asignatura->id}}">{{$asignatura->asignatura}}</option>
                        @endforeach
                    </select>
                </div>
                   
                <div class="form-group">
                    <label for="descripcion">Descripción (Opcional)</label>
                    <textarea class="form-control"  rows="3" name="descripcion"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Elegir el archivo de la tarea.</label>
                    <input type="file" class="btn btn-primary" id="exampleFormControlFile1" name="archivo"required>
                </div>
                    <input type="text" name="user_id" class="form-control" required value="{{ Auth::user()->id }}" hidden><br>
                    <input type="submit" class="btn btn-success btn-lg btn-block" value="Publicar Tarea">

            </form>

        </div>
    </div>
</div>
@endsection