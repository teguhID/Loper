@extends('layouts.pekerja.layout')
@section('content')
<div style="margin-top: 50px">
    <div class="container hero">
        <div class="row" style="margin-left: 0px;padding-top: 91px;">
            <div class="col-12 col-lg-6 col-xl-5 offset-xl-1" style="padding-right: 0px;padding-left: 0px;">
                <h1 style="margin-top: 0px;color: rgb(0,0,0);font-family: Montserrat, sans-serif;font-weight: bold;">{{ $data->nama_perusahaan }}</h1>
                <p style="background-color: rgba(255,255,255,0);color: #000000;font-weight: normal;"><br>{{ $data->deskripsi }}<br><br></p>
            </div>
            <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block d-xl-flex justify-content-xl-center align-items-xl-center phone-holder">
                <img class="device" src="{{ asset('') }}img/perusahaan/{{ $data->logo }}" height="300" width="300">
            </div>
        </div>
    </div>
<div class="container" style="background-color: #f2f2f2; margin-top: 80px; margin-bottom: 120px">
    <div class="intro"></div>
    <div class="row no-gutters d-xl-flex justify-content-xl-center align-items-xl-center features" style="padding: 15px;background-color: rgba(255,255,255,0);margin-bottom: 20px;">
        <div class="col-sm-6 col-lg-4 d-flex justify-content-center justify-content-xl-start align-items-xl-center item" style="margin: 15px;margin-bottom: 15px;width: 250px;height: 89px;margin-right: 15px;margin-left: 15px;max-width: 100%;"><i class="fa fa-map-marker icon" style="font-size: 40px;width: 40px;min-width: 60px;"></i><small class="form-text text-muted" style="margin-top: 0px;padding-left: 0px;font-size: 16px;padding-bottom: 0px;min-width: 70px;">{{ $data->alamat }}</small></div>
        <div class="col-sm-6 col-lg-4 d-flex justify-content-xl-start align-items-xl-center item" style="margin: 15px;margin-bottom: 15px;width: 250px;height: 89px;margin-right: 15px;margin-left: 15px;max-width: 100%;"><i class="fa fa-columns icon" style="font-size: 40px;min-width: 60px;"></i><small class="form-text text-muted" style="margin-top: 0px;padding-left: 0px;font-size: 16px;">Jenis Usaha : {{ $data->jenis_usaha }}</small></div>
        <div class="col-sm-6 col-lg-4 d-flex justify-content-xl-start align-items-xl-center item" style="margin: 15px;margin-bottom: 15px;width: 250px;height: 89px;margin-right: 15px;margin-left: 15px;max-width: 100%;"><i class="fa fa-user icon" style="font-size: 40px;min-width: 60px;"></i><small class="form-text text-muted" style="margin-top: 0px;padding-left: 0px;font-size: 16px;">{{ $data->karyawan }} Karyawan</small></div>
        <div class="col-sm-6 col-lg-4 d-flex justify-content-xl-start align-items-xl-center item" style="margin: 15px;margin-bottom: 15px;width: 250px;height: 89px;margin-right: 15px;margin-left: 15px;max-width: 100%;"><i class="fa fa-clock-o icon" style="font-size: 40px;min-width: 60px;"></i><small class="form-text text-muted" style="margin-top: 0px;padding-left: 0px;font-size: 16px;">Jam Kerja {{ $data->jam_kerja }}</small></div>
        <div class="col-sm-6 col-lg-4 d-flex justify-content-xl-start align-items-xl-center item" style="margin: 15px;margin-bottom: 15px;width: 250px;height: 89px;margin-right: 15px;margin-left: 15px;max-width: 100%;"><i class="fa fa-group icon" style="font-size: 40px;min-width: 60px;"></i><small class="form-text text-muted" style="margin-top: 0px;padding-left: 0px;font-size: 16px;">{{ $data->karir }}</small></div>
        <div class="col-sm-6 col-lg-4 d-flex justify-content-xl-start align-items-xl-center item" style="margin: 15px;margin-bottom: 15px;width: 250px;height: 89px;margin-right: 15px;margin-left: 15px;max-width: 100%;"><i class="fa fa-globe icon" style="font-size: 40px;min-width: 60px;"></i><small class="form-text text-muted" style="margin-top: 0px;padding-left: 0px;font-size: 16px;">{{ $data->web }}</small></div>
        <div class="col-sm-6 col-lg-4 d-flex justify-content-xl-start align-items-xl-center item" style="margin: 15px;margin-bottom: 15px;width: 250px;height: 89px;margin-right: 15px;margin-left: 15px;max-width: 100%;"><i class="fa fa-phone icon" style="font-size: 40px;min-width: 60px;"></i><small class="form-text text-muted" style="margin-top: 0px;padding-left: 0px;font-size: 16px;">{{ $data->phone }}</small></div>
    </div>
</div>
</div>
@endsection
@section('jquery')
    <script>
        $(document).ready(function () {
            $("#perusahaan").css("background-color", "#6c6b6b");
            $("#lamaran","#home","#lowongan").css("background-color", "#343a40");
        });
    </script>
@endsection