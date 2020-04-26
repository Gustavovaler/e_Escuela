@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-center">
        <div class="col xs-6">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-dark" >Acceder</a>
            
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline-dark">Registrarme</a>
                    @endif
                @endauth
            </div>
            @endif

        </div>
    </div>
</div>
    
@endsection