
@extends('layouts.app')


@section('content')
@if(!Auth::user()->is_profesor)

    no profesor

@endif

<div class="container">
    <form action='/tarea/' method="POST">
        @csrf
    <label for="archivo">Archivo</label>
    <input type="text" name="archivo" class="form-control" required>
    <label for="">Curso</label>
    <input type="text" name="curso" class="form-control" required>
    <label for="">Asignatura</label>
    <input type="number" name="asignatura_id" class="form-control" required>
    
    <input type="text" name="user_id" class="form-control" required value="{{ Auth::user()->id }}" hidden><br>
    
    <input type="submit" class="btn btn-primary">

</form>

</div>
@endsection