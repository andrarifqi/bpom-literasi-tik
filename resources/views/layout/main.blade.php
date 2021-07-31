<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Meta Responsive tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }} ">
    <!--Custom style.css-->
    <link rel="stylesheet" href="{{ asset('style/assets/css/quicksand.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/style.css') }}">
    <!--Font Awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Website Icon -->
    <link rel="shortcut icon" href="{{ asset('style/assets/img/bpom-logo.png') }}" />

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>@yield('title') BPOM Literasi TIK</title>
</head>

<body>

    <!--Page Wrapper-->

    <div class="container-fluid">

        <!--Header-->
        <div class="row header shadow-sm">

            <!--Logo-->
            <div class="col-sm-3 pl-0 text-center header-logo">
                <div class="mr-3 pt-3 pb-2 mb-0">
                    <h3 class="logo"><a href="{{ route('dashboardLiterasi') }}" class="text-secondary logo"><img
                                src="{{ asset('style/assets/img/bpom-logo.png') }}" width="30px" height="30px">
                            BPOM Literasi TIK</a></h3>
                </div>
            </div>
            <!--Logo-->

            <!--Header Menu-->
            <div class="col-sm-9 header-menu pt-3 pb-0">
                <div class="row">

                    <!--Menu Icons-->
                    <div class="col-sm-4 col-4">
                        <!--Toggle sidebar-->
                        <span class="menu-icon" onclick="toggle_sidebar()">
                            <span id="sidebar-toggle-btn"></span>
                        </span>
                        <!--Toggle sidebar-->
                    </div>
                    <!--Menu Icons-->

                    <!--Profile-->
                    <div class="col-sm-8 col-8 text-right flex-header-menu justify-content-end">
                        <div class="profilemenu mr-4 px-0">
                            <a class="profileIcon" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                {{-- <i class="fa fa-user-circle-o fa-2x user-icon"></i> --}}
                                <span class="badge badge-profile text-theme mr-3">{{ Auth::user()->nama }}</span>
                                <img src="{{ url('gambar/', Auth::user()->photo) }}" class="rounded-circle"
                                    width="40px" height="40px">
                                {{-- {{ url('gambar/', Auth::user()->photo) }} --}}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mt-13" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('profile') }}"><i class="fa fa-user pr-2"></i>
                                    Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"><i
                                        class="fa fa-power-off pr-2"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                    <!--Profile-->
                </div>
            </div>
            <!--Header Menu-->
        </div>
        <!--Header-->

        <!--Main Content-->

        <div class="row main-content">
            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">

                    <!--Image Avatar-->
                    <div class="avatar text-center">
                        <a href="{{ route('profile') }}">
                            <img src="{{ url('gambar/', Auth::user()->photo) }}" alt="" class="rounded-circle" />
                            <p class="username mb-3">{{ Auth::user()->nama }}</p>
                        </a>
                    </div>
                    <!--Image Avatar-->

                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu mb-4">
                            <li class="parent">
<<<<<<< HEAD

                                @if (Auth::user()->status == 'admin')

                                    <a href="#" onclick="toggle_menu('dashboard'); return false" class=""><i
                                            class="fa fa-dashboard mr-3"></i>
                                        <span class="none"> Dashboard<i
                                                class="fa fa-angle-down pull-right align-bottom"></i></span>
                                    </a>
                                    <ul class="children" id="dashboard">
                                        <li class="child"><a href="{{ route('dashboardLiterasi') }}"
                                                class="kuesioner-tab ml-4"><i class="fa fa-angle-right mr-2"></i>
                                                Literasi TIK</a></li>
                                        <li class="child"><a href="{{ route('dashboardKepuasan') }}"
                                                class="kuesioner-tab ml-4"><i class="fa fa-angle-right mr-2"></i>
                                                Kepuasan TIK</a></li>
                                    </ul>
=======
                                {{-- hak askses buat admin --}}
                                @if (Auth::user()->status == 'admin')

                                    {{-- <li class="parent"> --}}
                                    <a href="#" onclick="toggle_menu('kuesioner'); return false" class=""><i
                                            class="fa fa-file mr-3"></i>
                                        <span class="none"> Chart Diagram<i
                                                class="fa fa-angle-down pull-right align-bottom"></i></span>
                                    </a>
                                    <ul class="children" id="kuesioner">
                                        <li class="child"><a href="{{ route('dashboard') }}" class="">
                                                <i class="fa fa-dashboard mr-3"> </i>
                                                <span class="none">Dashboard </span>
                                            </a></li>
                                        <li class="child"><a href="{{ route('dashboard2') }}" class="">
                                                <i class="fa fa-dashboard mr-3"> </i>
                                                <span class="none">Dashboard 2 </span>
                                            </a></li>
                                    </ul>
                                    {{-- </li> --}}
>>>>>>> 9679192e82569b6d98b6bafe3a6050c208595f37

                                    {{-- <a href="{{ route('dashboard') }}" class="">
                                        <i class="fa fa-dashboard mr-3"> </i>
                                        <span class="none">Dashboard </span>
                                    </a> --}}

                                    <a href="{{ route('kelola_akun') }}" class="">
                                        <i class="fa fa-user-plus mr-3" aria-hidden="true"></i>
                                        <span class="none">Kelola Akun </span>
                                    </a>
<<<<<<< HEAD
                            </li>

                            <li class="parent">
=======

                                    <a href="{{ route('kuisioner') }}" class="">
                                        <i class="fa fa-user-plus mr-3" aria-hidden="true"></i>
                                        <span class="none">Kuisioner </span>
                                    </a>

                                    <a href="{{ route('index_response') }}" class="">
                                        <i class="fa fa-user-plus mr-3" aria-hidden="true"></i>
                                        <span class="none">Responden </span>
                                    </a>

                                @endif
                                {{-- !hak askses buat admin --}}

                                {{-- hak akses buat responden --}}

                                @if (Auth::user()->status == 'responden')

                                    <a href="{{ route('dashboard') }}" class="">
                                        <i class="fa fa-dashboard mr-3"> </i>
                                        <span class="none">Dashboard </span>
                                    </a>

                                    <a href="{{ route('index_response') }}" class="">
                                        <i class="fa fa-user-plus mr-3" aria-hidden="true"></i>
                                        <span class="none">Responden </span>
                                    </a>
                                @endif

                                {{-- hak akses buat responden --}}
                            </li>
                            {{-- <li class="parent">
>>>>>>> 9679192e82569b6d98b6bafe3a6050c208595f37
                                <a href="#" onclick="toggle_menu('kuesioner'); return false" class=""><i
                                        class="fa fa-th-list mr-3"></i>
                                    <span class="none"> Kuesioner<i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="kuesioner">
                                    <li class="child"><a href="{{ route('kuisioner') }}"
                                            class="kuesioner-tab ml-4"><i class="fa fa-angle-right mr-2"></i>
                                            Literasi TIK</a></li>
                                    <li class="child"><a href="{{ route('kuisioner_kepuasan') }}"
                                            class="kuesioner-tab ml-4"><i class="fa fa-angle-right mr-2"></i>
                                            Kepuasan TIK</a></li>
                                </ul>
<<<<<<< HEAD
                            </li>
                            @endif

                            @if (Auth::user()->status == 'responden')

                                <a href="#" onclick="toggle_menu('dashboard'); return false" class=""><i
                                        class="fa fa-dashboard mr-3"></i>
                                    <span class="none"> Dashboard<i
                                            class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="dashboard">
                                    <li class="child"><a href="{{ route('dashboardLiterasi') }}"
                                            class="kuesioner-tab ml-4"><i class="fa fa-angle-right mr-2"></i>
                                            Literasi TIK</a></li>
                                    <li class="child"><a href="{{ route('dashboardKepuasan') }}"
                                            class="kuesioner-tab ml-4"><i class="fa fa-angle-right mr-2"></i>
                                            Kepuasan TIK</a></li>
                                </ul>

                                <li class="parent">
                                    <a href="#" onclick="toggle_menu('kuesioner'); return false" class=""><i
                                            class="fa fa-file mr-3"></i>
                                        <span class="none"> Kuesioner<i
                                                class="fa fa-angle-down pull-right align-bottom"></i></span>
                                    </a>
                                    <ul class="children" id="kuesioner">
                                        <li class="child"><a href="{{ route('index_response') }}"
                                                class="kuesioner-tab ml-4"><i class="fa fa-angle-right mr-2"></i>
                                                Literasi TIK</a></li>
                                        <li class="child"><a href="{{ route('index_respon_kepuasan') }}"
                                                class="kuesioner-tab ml-4"><i class="fa fa-angle-right mr-2"></i>
                                                Kepuasan TIK</a></li>
                                    </ul>
                                </li>

                                {{-- <a href="{{ route('index_response') }}" class="">
                                    <i class="fa fa-user-plus mr-3" aria-hidden="true"></i>
                                    <span class="none">Kuesioner </span>
                                </a> --}}
                            @endif
=======
                            </li> --}}
>>>>>>> 9679192e82569b6d98b6bafe3a6050c208595f37
                        </ul>
                    </div>
                    <!--Sidebar Navigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->


            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                @yield('content')

                <!--Footer-->
                <footer class="row mt-5 mb-4 footer">
                    <div class="col-sm-8">
<<<<<<< HEAD
                        <span>&copy;designed by <a class="text-theme" href="#">Muhammad Rifqiandra</a></span>
=======
                        <span>&copy;designed by <a class="text-info" href="#">Rise.Dev</a></span>
>>>>>>> 9679192e82569b6d98b6bafe3a6050c208595f37
                    </div>
                    {{-- <div class="col-sm-4 text-right">
                        <a href="#" class="ml-2">Contact Us</a>
                        <a href="#" class="ml-2">Support</a>
                    </div> --}}
                </footer>
                <!--Footer-->

            </div>
        </div>

        <!--Main Content-->

    </div>

    <!--Page Wrapper-->

    <!-- Page JavaScript Files-->
    <script src="{{ asset('style/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/jquery-1.12.4.min.js') }}"></script>
    <!--Popper JS-->
    <script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
    <!--Bootstrap-->
    <script src="{{ asset('style/assets/js/bootstrap.min.js') }}"></script>
    <!--Custom Js Script-->
    <script src="{{ asset('style/assets/js/custom.js') }}"></script>
    <!--Custom Js Script-->
<<<<<<< HEAD
    <script type="text/javascript">

    </script>
=======
>>>>>>> 9679192e82569b6d98b6bafe3a6050c208595f37
    @yield('footer')
</body>

</html>
