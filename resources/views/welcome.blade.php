@extends('layouts.app')

@section('content')
<div class="container mt-5">
    @if (Route::has('login'))
    <div class="top-right links">
    @auth
            <a href="{{ url('/home') }}">Home</a>
    @else

    <div class="row justify-center">
        <div class="col xs-6">
            <img src="{{ asset('img/avatarM.png')}}" alt="" class="avatar-home rounded-circle" >
            <img src="{{ asset('img/avatarF.png')}}" alt="" class="avatar-home rounded-circle">
            
            
        </div>
    
    
        <div class="col xs-6">
            <img src="{{ asset('img/profeF.png')}}" alt="" class="avatar-home rounded-circle" >
            <img src="{{ asset('img/profeM.png')}}" alt="" class="avatar-home rounded-circle">
            
            
        
    </div>
    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="btn btn-outline-dark">Registrarme</a>
    @endif
    @endauth
</div>
<a href="{{ route('login') }}" class="btn btn-outline-dark" >Acceder</a>
@endif
</div>
    
@endsection