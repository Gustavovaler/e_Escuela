
@extends('layouts.app')


@section('content')
@if(!Auth::user()->is_profesor)

    no profesor

@endif


<div class="container justify-content-md-center">
     <div class="row justify-content-md-center mt-3 bt-2 ">
        <div class="col-6 bg-light m-2 p-3 shadow">    
                
            <form action='/tarea/' method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Curso o Grado</label>
                    <input type="text" class="form-control" name="curso" placeholder="Ej.  2do - 1ra T.Tarde" maxlength="48" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Materia o asignatura.</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2" name="asignatura_id" required>
                        @foreach($asignaturas as $asignatura)
                            <option value="{{$asignatura->id}}">{{$asignatura->asignatura}}</option>
                        @endforeach
                    </select>
                </div>
                   
                <div class="form-group">
                    <label for="descripcion">Descripción (Opcional)</label>
                    <textarea class="form-control"  rows="3" name="descripcion" maxlength="240"></textarea>
                </div>
                <div class="form-group">
                    <label for="fileInput" ><span class="btn btn-primary" id="labelFile">Selecionar archvo</span></label>
                    
                    <span id="info" class="ml-4 btn btn-outline-success" style="display:none"></span>
                    <input type="file"   
                    accept="image/gif,image/jpeg,image/jpg,image/png,application/vnd.ms-excel,
                    application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, .pdf, .txt,  .svg"
                    onchange="chooseFile()" name="archivo" required hidden id="fileInput" maxlength="198">
                </div>
                    <input type="text" name="user_id" class="form-control" required value="{{ Auth::user()->id }}" hidden><br>
                    <input type="submit" class="btn btn-azul-medio text-white  btn-lg btn-block" value="Publicar Tarea">

            </form>
          <div class="row">
              <div class="col-md-5 align-self-start">

              </div>
              <div class="col-md-5 align-self-center">

              </div>
              <div class="col-md-2 mt-2 align-self-end shadow">
                <a href="/home/">Cancelar</a>
              </div>
          </div>

        </div>
        
    </div>
</div>
<script>

function chooseFile(){

let fileInput = document.getElementById('fileInput').files[0].name;
document.getElementById('info').innerHTML = fileInput;
let info = document.getElementById("info").style.display = "inline";

}

</script>
@endsection