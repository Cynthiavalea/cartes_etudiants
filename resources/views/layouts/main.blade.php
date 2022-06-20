<link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
<link rel="stylesheet" href="{{asset('icofont/icofont.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/bootstrap1.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/style1.css')}}" />
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('DataTables/DataTables/css/jquery.dataTables.min.js') }}" ></script>
<link rel="stylesheet" type="text/css" href="{{ asset('DataTables/DataTables/js/jquery.dataTables.min.js') }}" />

<link rel="icon" href="{{asset('images/univbobo.png')}}" type="image/png">


<body class="crm_body_bg">
    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a href=""><img src="{{asset('images/univbobo.png')}}" alt="">
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
            <li class="">
                <a class="has-arrow" href="{{route('etudiants.index')}}" aria-expanded="false">
                    <i class="icofont-headphone-alt-2"></i>
                    <span>Secrétaire</span>
                </a>
            </li>
            </li>
            <li class="">
                <a class="has-arrow" href="{{route('etudiants.create')}}" aria-expanded="false">
                    <i class="icofont-user-alt-7"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i class="icofont-gear"></i>
                    <span>Paramètre</span>
                </a>
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
                                        <p class="text-3xl font-bold underline">@Kriskid</p>
                                        <p>Directeur</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">

                            </div>
                            <div class="profile_info">
                                <div><img src="{{asset('images/client_img.png')}}" alt="status"> Connecté <br> <br></div>
                                <div>

                                    <a href="{{ route('etudiants.create')}}">
                                        <button type="button" class="bg-[#1C683F] hover:bg-yellow-500 btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                            Ajouter etudiant
                                        </button>
                                    </a>
                                    <a href="{{ route('register')}}">
                                        <button type="button" class="bg-[#1C683F] hover:bg-yellow-500 btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                            Ajouter secretaire
                                        </button>
                                    </a>
                                    <a href="{{ route('etudiants.index')}}">
                                        <button type="button" class="bg-[#1C683F] hover:bg-yellow-500 btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                            Liste <i class="icofont-rounded-right"></i>
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