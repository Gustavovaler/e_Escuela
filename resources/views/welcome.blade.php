@extends('layouts.app')

@section('content')
  	
<div class="row mt-5">
    <div class="col-md-6 xs-12 text-center">
        <h1 class="display-2"> Distribuye tus tareas de forma muy sencilla con tus alumnos. </h1>
    </div>
    <div class="col-md-6 xs-12 ">
        <img src="img/foto1.jpg" alt="" class="foto-central rounded shadow mt-2">
    </div>
</div>
<div class="container">
    <hr>

    <div class="row justify-content-md-center">
        <div class="col-md-auto ">
            <a href="" class="btn btn-primary btn-lg ">Acceder</a>
            <a href="" class="btn btn-outline-primary btn-lg">Registrarme</a>
        </div>
    </div>
</div>

<!-- --------------------------------------------------------------- -->

<div class="container">
    

<div class="row mt-4 justify-content-md-center">
    <div class="col ">
        <h3><span class="ml-4"><img src="img/award.svg" alt=""></span> Facil de usar</h3>
    </div>
    <div class="col text-center">
        <h3><span><img src="img/rocket.svg" alt=""></span> Facil para tus alumnos</h3>
    </div>
    <div class="col text-center">
        <h3><span><img src="img/list-unordered.svg" alt=""> Todo en un solo lugar</h3>
    </div>
</div>
<div class="row mt-4 justify-content-md-center">
    <div class="col">
        <div class="text-wrapper">

            <p class="display-6">
                Facilmente podrás subir tus archivos para distribuir con tus alumnos en apenas unos pocos clicks. Tu tarea en jpg , word , pdf, o excel suede ser subida sin rodeos y ser descargada por todos tus alumnos cuantas veces quieras, sin enviar mails ni nada que se le parezca.
            </p>
            <a href="#">Mas info ...</a>
        </div>
    </div>
    <div class="col">
        <div class="text-wrapper">
            <p class="display-6">
                Solo con saber tu nombre o apellido buscandote en la lista de <a href="">profesores</a> podrán
                 encontrar la tarea con la fecha en que fue publicada y la materia correspondiente .
                  Como alumno no vas a renegar mas con e-mails o whatsapp ni te perderas una tarea porque no te llegó.
            </p>
            <a href="#">Mas info ...</a>
        </div>
    </div>
    <div class="col">
        <div class="text-wrapper">
            <p class="display-6">
                Conviértenos en tu canal favorito para compartir las tareas ya seas profesor o alumno. De manera totalmente gratis accedes a tus archivos en estos tiempos donde la enseñanza afronta su etapa mas complicada. En la sección <a href="">contacto</a> esperamos tus dudas o sugerencias.
            </p>
            <a href="#">Mas info ...</a>

        </div>
    </div>
</div>
<!-- ***************************************************** -->
<hr>

<div class="row mt-3 justify-content-md-center">
    <div class="col-md-auto">
        <h1 class="display-4">Cómo funciona ?</h1>
    </div>
</div>
<div class="row mt-3 ">
    <div class="col-md-auto">
        <p class="display-4 gris">Primero desbes registrarte:</p>
    </div>
</div>
<div class="row mt-3 justify-content-md-center">
    <div class="col-md-auto">
        <img src="img/registro.jpg" alt="">
    </div>
</div>
<div class="row mt-3 justify-content-md-center">
    <div class="col-md-auto">
        <a href="" class="btn btn-outline-primary btn-lg">Registrarme ahora</a>
    </div>
</div>
<hr>

<div class="row mt-3 ">
    <div class="col-md-auto">
        <p class="display-4 gris">Ya puedes subir tu tarea:</p>
    </div>
</div>

<div class="row mt-3 justify-content-md-center  ">
    <div class="col-md-auto">
        <img src="img/tarea.jpg" alt="" class="shadow">
    </div>
</div>

<div class="row mt-3 justify-content-md-center  ">
    <div class="col-md-auto">
        <p class="display-4 mt-4 text-center">
            Seguimos trabajando para ofrecer mas y mejores herramientas para la comunicación entre los docentes 
            y los alumnos durante este periodo de aislamiento social obligatorio.
        </p>
    </div>
</div>


</div>

<!-- ///////////////////////////////////////////////////////////// -->

<!-- Footer -->
<footer class="page-footer font-small bg-primary pt-4 text-white mt-5">

<!-- Footer Elements -->
<div class="container">

<!-- Call to action -->
<ul class="list-unstyled list-inline text-center py-2">
<li class="list-inline-item">
<h5 class="mb-1">Registrate gratis</h5>
</li>
<li class="list-inline-item">
<a href="#!" class="btn btn-outline-light btn-rounded">Registrate</a>
</li>
</ul>
<!-- Call to action -->

</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
<span >  Gustavo Valerio</span>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>
        
    {{-- <div class="row mt-5 justify-center">
        @if (Route::has('register'))

        <div class="col xs-6 ">
            <a href="{{ route('login') }}" class="btn btn-outline-dark justify-center align-center" >Acceder</a>
            <a href="{{ route('register') }}" class="btn btn-outline-dark">Registrarme</a>
        </div>
        @endif --}}
 

    
@endsection