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
<div class="team-boxed" style="margin-bottom: 70px; margin-top: 70px">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="padding-top: 80px;">PEKERJA</h2>
        </div>
        
            <div class="row people" style="padding-top: 10px;">
                @foreach ($data as $datas)
                <div class="col-sm-4">
                    <div class="team-member" style="margin-bottom: 0px;"><img class="rounded-circle mx-auto" src="{{ asset('') }}img/profile/{{ $datas->foto }}">
                        <h4>{{ $datas->nama }}</h4>
                        <p class="text-muted" style="margin-top: 5px">{{ $datas->keahlian1 }}</p>
                        <p class="text-muted" style="margin-top: -20px">{{ $datas->keahlian2 }}</p>
                        <p class="text-muted" style="margin-top: -20px">{{ $datas->keahlian3 }}</p>
                        <p class="text-muted" style="margin-top: -20px">{{ $datas->keahlian4 }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        
        <h2 class="text-center" style="padding-top: 0px;padding-bottom: 30px;"><a href="{{ url('/listPekerja') }}" style="color: rgb(0,0,0);font-family: Montserrat, sans-serif;font-weight: bold;font-size: 16px;">Lihat Lebih Banyak</a></h2>
    </div>
</div>
@endsection