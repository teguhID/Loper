<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Loper</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/material-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome5-overrides.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="{{ asset('css/Article-Dual-Column.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Article-List.css') }}">
    <link rel="stylesheet" href="{{ asset('css/best-carousel-slide.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Contact-Form-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Contact-form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Data-Table-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Data-Table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Dynamic-Table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Features-Boxed.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Features-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Header-Blue.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Highlight-Phone.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="{{ asset('css/Login-Form-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('css/MUSA_panel-table-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/MUSA_panel-table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Pretty-Table-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Pretty-Table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Profile-Card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Registration-Form-with-Photo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Table-With-Search-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Table-With-Search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Team-Boxed.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Testimonials.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Tricky-Grid---2-Column-on-Desktop--Tablet-Flip-Order-of-12-Column-rows-on-Mobile.css') }}">
</head>
<body>
    <div id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="{{ url('/') }}">Logo</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
                <a class="btn btn-primary" role="button" style="margin-right: 6px;" href="{{ route('register') }}">Daftar</a>
                <a class="btn btn-primary" role="button" style="margin-left: 6px;margin-right: 6px;" href="{{ route('login') }}">Login</a>
                <a class="btn" role="button" style="margin-left: 6px;background-color: #e0c223;color: rgb(255,255,255);" href="{{ url('/perusahaan') }}">Perusahaan</a></div>
        </div>
    </nav>
        <main>
            @yield('content')
        </main>
    </div>
    <footer style="flex-shrink: none; bottom: 0; position: fixed; width: 100%" class="py-1 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright <a href="{{ url('admin/login') }}" style="color: darkgrey; text-decoration: none">&copy;</a> Loper Indonesia</small> 
        </div>
    </footer>
    <script src="{{ asset('') }}js/jquery.min.js"></script>
    <script src="{{ asset('') }}bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('') }}js/smart-forms.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{ asset('') }}js/agency.js"></script>
    <script src="{{ asset('') }}js/bs-animation.js"></script>
    <script src="{{ asset('') }}js/Dynamic-Table-1.js"></script>
    <script src="{{ asset('') }}js/Dynamic-Table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="{{ asset('') }}js/Table-With-Search.js"></script>
</body>
</html>
