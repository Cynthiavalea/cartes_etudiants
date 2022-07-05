<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ secure_asset('css/all.min.css')}}" />
        <link rel="stylesheet" href="{{ secure_asset('css/print.min.css')}}"/>
        <link rel="stylesheet" href="{{ secure_asset('icofont/icofont.min.css')}}" />
        <link rel="stylesheet" href="{{ secure_asset('css/bootstrap1.min.css')}}" />
        <link rel="stylesheet" href="{{ secure_asset('css/style1.css')}}" />
        <link rel="stylesheet" href="{{  secure_asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
        <link rel="icon" href="{{ secure_asset('images/univbobo.png')}}" type="image/png">

        <script type="text/javascript" src="{{  secure_asset('js/jquery.min.js') }}" defer></script>
        <script defer type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    </head>

    <body class="crm_body_bg">
        <nav class="sidebar">
            <div class="logo d-flex justify-content-between">
                <a href=""><img src="{{ secure_asset('images/univbobo.png')}}" alt="">
                    <p style="text-align:center ;">Université Nazi Boni</p>
                </a>
                <div class="sidebar_close_icon d-lg-none">
                    <i class="ti-close"></i>
                </div>
            </div>
            <ul id="sidebar_menu">
                <li class="">
                    <a class="has-arrow" href="{{route('root')}}" aria-expanded="false">

                        <i class="icofont-home"></i>

                        <span>Acceuil</span>
                    </a>
                </li>
                <li class="">
                    <a class="has-arrow" href="{{route('etudiants.index')}}" aria-expanded="false">
                        <i class="icofont-users-social"></i>
                        <span>Etudiants</span>
                    </a>
                </li>
                @if( Auth::user()->role->type == 'directeur')
                <li class="">
                    <a class="has-arrow" href="{{route('liste_secretaire')}}" aria-expanded="false">
                        <i class="icofont-headphone-alt-2"></i>
                        <span>Secrétaire</span>
                    </a>
                </li>
                @endif
            </ul>
        </nav>


        <section class="main_content dashboard_part">

            <div class="container-fluid g-0">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="header_iner d-flex justify-content-between align-items-center">
                            <div class="sidebar_icon d-lg-none">
                                <i class="ti-menu"></i>
                            </div>
                            <div class="serach_field-area">
                                <div class="search_inner">
                                    <div class="col">
                                        <div class="row">
                                            <p class="text-3xl font-bold underline">@ {{ Auth::user()->user_name }}</p>
                                            <p class="capitalize">{{ Auth::user()->role->type }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="header_right d-flex justify-content-between align-items-center">
                                <div class="header_notification_warp d-flex align-items-center">

                                </div>
                                <div class="profile_info">

                                    <div id="menu-button" aria-expanded="true" aria-haspopup="true">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <input type="hidden" name="name" value="value" />
                                            <a onclick="this.parentNode.submit();" title="Cliquez pour se deconnecter"><img src="{{ secure_asset('storage/'. Auth::user()->photo) }}" alt="status"> Connecté <br> <br></a>
                                        </form>
                                    </div>
                                    <div>

                                        <a href="{{ route('etudiants.create')}}">
                                            <button type="button" class="btn btn-primary bg-[#1C683F]" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                Ajouter etudiant
                                            </button>
                                        </a>

                                        @if( Auth::user()->role->type == 'directeur')
                                        <a href="{{ route('secretaire')}}">
                                            <button type="button" class="bg-[#1C683F] btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                Ajouter secretaire
                                            </button>
                                        </a>
                                        @endif

                                        <a href="{{ route('etudiants.index')}}">
                                            <button type="button" class="bg-[#1C683F] btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                Liste Etudiants<i class="icofont-rounded-right"></i>
                                            </button>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_content_iner ">
                <div class="container-fluid p-0">
                    @yield('content')
                </div>
            </div>
        </section>
    </body>


</html>