@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif





                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <img src = "{{url ('/img/logo.png')}}" alt = "Imagen" width="150" height="100" />

    <a class="navbar-brand" href="#">INICIO</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Datos del personal <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Datos registro</a>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="/datosdesaparecido">Datos desaparecido</a>

            </li>

        </ul>




        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>

</nav>


@endsection
