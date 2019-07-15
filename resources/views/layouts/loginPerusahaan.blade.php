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
        <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark d-lg-flex" id="mainNav">
            <div class="container"><a class="navbar-brand" href="{{ url('/') }}">Logo</a>
                <div class="collapse navbar-collapse d-xl-flex justify-content-xl-end" id="navbarResponsive">
                    <form action="{{ route('login') }}" method="post">
                        {{ csrf_field() }}
                        <ul class="nav navbar-nav ml-auto text-uppercase">
                                <li class="nav-item" role="presentation">
                                    <input class="bg-white border rounded border-white shadow @error('email') is-invalid @enderror" type="email" data-bs-hover-animate="pulse" name="email" placeholder="Email" style="width: 199px;padding-bottom: 6px;margin-bottom: 10px;color: rgb(0,0,0);background-color: #ffffff;padding-left: 16px;margin-right: 10px;margin-left: 0px;" value="{{ old('email') }}" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </li>
                                <li class="nav-item" role="presentation">
                                    <input class="bg-white border rounded border-white shadow @error('password') is-invalid @enderror" type="password" data-bs-hover-animate="pulse" name="password" placeholder="Password" style="width: 199px;padding-bottom: 6px;margin-bottom: 10px;color: rgb(0,0,0);background-color: #ffffff;padding-left: 16px;margin-right: 10px;margin-left: 0px;" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </li>
                                <li class="nav-item" role="presentation">
                                    {{-- <a class="btn btn-lg" role="button" data-bs-hover-animate="pulse" href="dashboardPerusahaan.html" style="background-color: rgb(28,110,148);font-size: 12px;color: rgb(255,255,255);height: 33px;width: 87px;">Masuk</a> --}}
                                    <button class="btn btn-info" type="submit" style="font-size: 12px;color: rgb(255,255,255);height: 33px;width: 87px;">Masuk</button>
                                </li>
                        </ul>
                    </form>
                </div>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>
    <footer style="background-color: #343a40;color: rgb(255,255,255);">
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Loper Indonesia 2019</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"></li>
                        <li class="list-inline-item"><a href="#">About Us</a></li>
                    </ul>
                </div>
            </div>
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
