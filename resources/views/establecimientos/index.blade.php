@extends('layouts.app')


@section('content')
<div class="container">

<h1 class="text-white">Establecimientos</h1>
@foreach($establecimientos  as $establecimiento)

    <div class="card mt-2 " style="width: 18rem;">
        <div class="card-header">

            <h3>{{$establecimiento->nombre}}</h3>
        </div>
        <div class="card-body">
            <h3>{{$establecimiento->numero}}</h3>
            <h3>{{$establecimiento->numero_distrito}}</h3>
            <h3>{{$establecimiento->direccion}}</h3>
            <h3>{{$establecimiento->telefono}}</h3>
            <h3>{{$establecimiento->ciudad}}</h3>
            <h3>{{$establecimiento->provincia}}</h3>
            <h3>{{$establecimiento->user_id}}</h3>
        </div>
    </div>

  

@endforeach

</div>

@endsection
