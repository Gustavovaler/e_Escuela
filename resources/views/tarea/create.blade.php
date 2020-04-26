
@extends('layouts.app')


@section('content')

<div class="container">
    <form action='/tarea/' method="POST">
        @csrf
    <label for="archivo">Archivo</label>
    <input type="text" name="archivo" class="form-control">
    <label for="">Curso</label>
    <input type="text" name="curso" class="form-control">
    <label for="">Asignatura</label>
    <input type="number" name="asignatura_id" class="form-control">
    <label for="">Profesor</label>
    <input type="number" name="user_id" class="form-control"><br>
    
    <input type="submit" class="btn btn-primary">

</form>

</div>
@endsection