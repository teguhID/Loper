@extends('layouts.app')
@section('content')
<header class="masthead" style="background-image:url('{{ asset('') }}img/bg.png');">
    <div class="container" style="filter: grayscale(0%);">
        <div class="intro-text">
            <div class="intro-lead-in"><span>Welcome To&nbsp;</span></div>
            <div class="intro-heading text-uppercase"><span>Loper indonesia</span></div>
            <div class="intro-lead-in"><span style="font-size: 20px;color: rgb(224,221,221);">"Situs Untuk Kamu Yang Mencari Pekarjaan Freelance dan Full Time"</span></div>
        </div>
    </div>
</header>
<div class="team-boxed">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="padding-top: 80px;">Lowongan</h2>
        </div>
        <div class="row people" style="padding-top: 0px;">
            <div class="col-md-6 col-lg-4 item" style="height: 480px;">
                <div class="box" style="height: 480px;">
                    <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 80px;">
                        <h3 class="d-lg-flex justify-content-lg-center align-items-lg-start name" style="margin-top: 5px;">Guru Tajwid</h3>
                    </div>
                    <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 165px;"><img class="img-fluid" src="{{ asset('') }}img/Daaruttauhiid.png"></div>
                    <h3 class="text-left d-lg-flex align-items-lg-start name" style="font-size: 16px;">Jenjang : S1<br>Status : Freelance<br>Di Butuhkan : 3 Orang<br>Range Fee : 2jt - 3jt<br><br>Update : 30-6-2019<br>Berlaku Sampai : 31-7-2019</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item" style="height: 480px;">
                <div class="box" style="height: 480px;">
                    <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 80px;">
                        <h3 class="d-lg-flex justify-content-lg-center align-items-lg-start name" style="margin-top: 5px;">Admin Media Sosial</h3>
                    </div>
                    <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 165px;"><img class="img-fluid" src="{{ asset('') }}img/Daaruttauhiid.png"></div>
                    <h3 class="text-left d-lg-flex align-items-lg-start name" style="font-size: 16px;">Jenjang : SMA<br>Status : Freelance<br>Di Butuhkan : 1 Orang<br>Range Fee : 2jt<br><br>Update : 29-6-2019<br>Berlaku Sampai : 31-7-2019</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item" style="height: 480px;">
                <div class="box" style="height: 480px;">
                    <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 80px;">
                        <h3 class="d-lg-flex justify-content-lg-center align-items-lg-start name" style="margin-top: 5px;">Staff Produksi</h3>
                    </div>
                    <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 165px;"><img class="img-fluid" src="{{ asset('') }}img/kahatex.png"></div>
                    <h3 class="text-left d-lg-flex align-items-lg-start name" style="font-size: 16px;">Jenjang : SMA<br>Status : Full Time<br>Di Butuhkan : 16 Orang<br>Range Fee : 4jt - 5jt<br><br>Update : 29-6-2019<br>Berlaku Sampai : 10-8-2019</h3>
                </div>
            </div>
        </div>
        <h2 class="text-center" style="padding-top: 0px;padding-bottom: 30px;"><a href="{{ url('/listLowongan') }}" style="color: rgb(0,0,0);font-family: Montserrat, sans-serif;font-weight: bold;font-size: 16px;">Lihat Lebih Banyak</a></h2>
    </div>
</div>
<div class="team-boxed">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="padding-top: 80px;">PERUSAHAAN</h2>
        </div>
        <div class="row people" style="padding-top: 0px;">
            <div class="col-md-6 col-lg-4 item">
                <div class="box" style="height: 328px;">
                    <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 165px;"><img class="img-fluid" src="{{ asset('') }}img/microsoft.png"></div>
                    <h3 class="d-lg-flex justify-content-lg-center align-items-lg-start name">Microsoft</h3>
                    <p class="d-lg-flex justify-content-lg-center title">It</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <div class="box" style="height: 328px;">
                    <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 165px;"><img class="img-fluid" src="{{ asset('') }}img/bukalapak.png"></div>
                    <h3 class="d-lg-flex justify-content-lg-center align-items-lg-start name">Bukalapak</h3>
                    <p class="d-lg-flex justify-content-lg-center title">E-commerce</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <div class="box" style="height: 328px;">
                    <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 165px;"><img class="img-fluid" src="{{ asset('') }}img/kahatex.png"></div>
                    <h3 class="d-lg-flex justify-content-lg-center align-items-lg-start name">Kahatex</h3>
                    <p class="d-lg-flex justify-content-lg-center title">Textile</p>
                </div>
            </div>
        </div>
        <h2 class="text-center" style="padding-top: 0px;padding-bottom: 30px;"><a href="{{ url('/listPerusahaan') }}" style="color: rgb(0,0,0);font-family: Montserrat, sans-serif;font-weight: bold;font-size: 16px;">Lihat Lebih Banyak</a></h2>
    </div>
</div>
<div class="team-boxed">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="padding-top: 80px;">PEKERJA</h2>
        </div>
        <div class="row people" style="padding-top: 0px;">
            <div class="col-sm-4">
                <div class="team-member" style="margin-bottom: 0px;"><img class="rounded-circle mx-auto" src="{{ asset('') }}img/team/1.jpg">
                    <h4>Tinah</h4>
                    <p class="text-muted">Tukang Aduk Semen</p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <p class="text-muted" style="color: rgb(79,102,126);">Rating : 4.7/5</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member" style="margin-bottom: 0px;"><img class="rounded-circle mx-auto" src="{{ asset('') }}img/team/2.jpg">
                    <h4>Supri</h4>
                    <p class="text-muted">Supir Mobil Jenazah</p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <p class="text-muted" style="color: rgb(79,102,126);">Rating : 3.0/5</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member" style="margin-bottom: 0px;"><img class="rounded-circle mx-auto" src="{{ asset('') }}img/team/3.jpg">
                    <h4>Ijah</h4>
                    <p class="text-muted">Pemetik Buah Kersen</p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <p class="text-muted" style="color: rgb(79,102,126);">Rating : 4.2/5</p>
                </div>
            </div>
        </div>
        <h2 class="text-center" style="padding-top: 0px;padding-bottom: 30px;"><a href="{{ url('/listPekerja') }}" style="color: rgb(0,0,0);font-family: Montserrat, sans-serif;font-weight: bold;font-size: 16px;">Lihat Lebih Banyak</a></h2>
    </div>
</div>
@endsection