@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-center">
        <div class="col xs-6">
            <div class="container-avatar">
                <img src="{{ asset('img/avatarM.png')}}" alt="" class="avatar-home rounded-circle" >
                <img src="{{ asset('img/avatarF.png')}}" alt="" class="avatar-home rounded-circle">
            </div>            
        </div>    
        <div class="col xs-6">
            <div class="container-avatar">
                <img src="{{ asset('img/profeF.png')}}" alt="" class="avatar-home rounded-circle" >
                <img src="{{ asset('img/profeM.png')}}" alt="" class="avatar-home rounded-circle">
            </div>         
        </div>
    </div>   
        
    <div class="row mt-5 justify-center">
        @if (Route::has('register'))

        <div class="col xs-6 ">
            <a href="{{ route('login') }}" class="btn btn-outline-dark justify-center align-center" >Acceder</a>
            <a href="{{ route('register') }}" class="btn btn-outline-dark">Registrarme</a>
        </div>
        @endif
    </div>
        
        
</div>


    
@endsection