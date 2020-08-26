@extends('layouts.app')

@section('content')

@if (Auth::id() == $user->id)
    {{$user->name}}
    {{$user->apellido}}
    {{$user->telefono}}
    {{$user->email}}
    {{$user->dni}}
    {{$user->is_profesor}}

@else
<div class="container">
    <h3>Lo sentimos</h3>
    <hr>
    <h5 class="bg-danger text-white p-2">No cuentas con autorización para ver este perfil.</h5>
</div>
    
@endif



@endsection