@extends('frontend.layouts.app')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}" />
@endsection

@section('title', app_name() . ' | ' . __('navs.general.home'))
@section('content')

    <header id="header001">
        <div class="navbar fixed-top bg-transparent  navInv">
            <button class="navbar-toggler outline" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <img class="imgtest bordure" src="{{ asset ('../img/frontend/profil.jpg')}}" alt="">
            </button>
            <div class="bordure collapse navbar-collapse p-0" id="navbarTogglerDemo01">

                <ul class="nav nav-burger-link bg-white navbar-nav mr-auto d-flex justify-content-between">
                    <li class="nav-item d-sm-none d-lx-block mt-2">
                    <a class="nav-link" href="#">Acceuil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mt-2">
                    <a class="nav-link mt-1" href="#presentation">Pésentation</a>
                    </li>
                    <li class="nav-item mt-2">
                    <a class="nav-link mt-1" href="#site">Mes Projets</a>
                    </li>
                    <li class="nav-item mt-2">
                    <a class="nav-link mt-1" href="#footer001">Contact</a>
                    </li>
                    <li class="nav-item d-none d-sm-block mt-2">
                        <div class="d-flex justify-content-center p-0">
                            <div class="linkedin mt-1">Linkedin :</div>
                            <a class="iconLinkedin nav-link mb-2" href="https://www.linkedin.com/in/romain-verwaerde/" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>
                        </div>
                    </li>
                    <li class="nav-item d-block d-sm-none mt-2">
                        <a class="iconLinkedin nav-link" href="https://www.linkedin.com/in/romain-verwaerde/" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="inv"></div>
        <div class="head1">
            <p class="textHeader">Romain Verwaerde</p>
            <p class="textHeader">Dévellopeur web</p>
        </div>
    </header>
    <aside>
        <nav class="bordure">
            <a class="lienNav te" href="#header001">
                <img class="imgProfil" src="{{ asset ('../img/frontend/profil.jpg')}}" alt="">
            </a>

            <a class="lienNav" href="#presentation">A propos</a>

            <a class="lienNav" href="#site">Mes Projets</a>

            <a class="lienNav" href="#footer001">Contact</a>
            @include('includes.partials.messages')

            <h4>Linkedin :</h4>
            <a class="iconLinkedin lienNav" href="https://www.linkedin.com/in/romain-verwaerde/" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>
        </nav>
    </aside>
@endsection
