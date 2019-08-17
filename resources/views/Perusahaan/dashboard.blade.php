@extends('layouts.perusahaan.layout')
@section('content')
<div class="highlight-phone" style="padding-top: 240px;padding-bottom: 250px;">
    <div class="container" style="margin-top: -30px;">
        <div class="row d-sm-flex justify-content-sm-center align-items-sm-center">
            <div class="col-md-8" style="margin-top: -40px;">
                <div class="intro" style="margin-top: 0px;">
                    <h2>Selamat Datang {{ $data->nama_perusahaan }}</h2>
                    <p>Selamat Datang di halaman utama LOPER INDONESIA untuk perusahaan, di halaman ini anda bisa melihat calon karyawan, membuat lowongan, dan update profile perusahaan anda</p>
                </div>
            </div>
            <div class="col-sm-4 d-flex justify-content-center align-items-center"><img src="{{ asset('') }}img/perusahaan/{{ $data->logo }}" height="300" width="300"></div>
        </div>
    </div>
    <div class="row d-flex justify-content-center align-items-center" style="margin-right: 23px;margin-left: 23px;margin-top: 70px;">
        <div class="col-sm-6 d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center" style="max-width: 15%;"><i class="fa fa-edit" style="font-size: 140px;"></i></div>
        <div class="col-sm-6 d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center" style="max-width: 90%;">
            <div style="max-width: 300px;">
                <p style="font-size: 21px;">Update Profile Perusahaan Anda</p><a href="{{ url('perusahaan/editProfile') }}" class="btn btn-primary">Update</a></div>
        </div>
    </div>
    <div class="row d-flex justify-content-center align-items-center" style="margin-right: 23px;margin-left: 23px;margin-top: 90px;">
        <div class="col-sm-6 d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center" style="max-width: 15%;"><i class="fa fa-users" style="font-size: 140px;"></i></div>
        <div class="col-sm-6 d-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center" style="max-width: 90%;">
            <div style="margin-bottom: 20px;max-width: 300px;">
                <p style="font-size: 21px;">Temukan Calon Karyawan Anda</p><a href="{{ url('perusahaan/pekerja') }}" class="btn btn-primary">Cari Karyawan</a></div>
        </div>
    </div>
    <div class="row d-flex justify-content-center align-items-center" style="margin-right: 23px;margin-left: 23px;margin-top: 90px;">
        <div class="col-sm-6 d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center" style="max-width: 15%;"><i class="fa fa-suitcase" style="font-size: 140px;"></i></div>
        <div class="col-sm-6 d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center" style="max-width: 90%;">
            <div style="margin-bottom: 20px;max-width: 300px;">
                <p style="font-size: 21px;">Buat Lowongan Yang Anda Butuhkan</p><a href="{{ url('perusahaan/lowongan/dashboard/create') }}" class="btn btn-primary">Lowongan</a></div>
        </div>
    </div>
</div>
@endsection
@section('jquery')
    <script>
        $(document).ready(function () {
            $("#home").css("background-color", "#6c6b6b");
            $("#pekerja","#lowongan","#profile").css("background-color", "#343a40");
        });
    </script>
@endsection