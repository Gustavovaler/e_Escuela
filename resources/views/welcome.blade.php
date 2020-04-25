<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/landing.css') }}">

        <div class="top">

        </div>
        <div class="half">
            
            <div class="container">
                
                <div class="row">
                    <h1 class="text-white masthead-heading text-uppercase mt-5">Vamos a comenzar</h1>

                    <div class="col mt-5">
                        
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



          
       
</html>
