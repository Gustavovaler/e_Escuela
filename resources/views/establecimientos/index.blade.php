@extends('layouts.app')


@section('content')
<div class="container">

<h1>Establecimientos</h1>
@foreach($establecimientos  as $establecimiento)

    <h3>{{$establecimiento->nombre}}</h3>
    <h3>{{$establecimiento->numero}}</h3>
    <h3>{{$establecimiento->numero_distrito}}</h3>
    <h3>{{$establecimiento->direccion}}</h3>
    <h3>{{$establecimiento->telefono}}</h3>
    <h3>{{$establecimiento->ciudad}}</h3>
    <h3>{{$establecimiento->provincia}}</h3>
    <h3>{{$establecimiento->user_id}}</h3>

@endforeach

</div>

@endsection
