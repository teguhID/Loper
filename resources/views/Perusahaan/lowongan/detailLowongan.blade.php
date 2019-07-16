@extends('layouts.perusahaan.layout')
@section('content')
<div class="article-dual-column" style="padding-top: 90px;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="intro">
                    <h1 class="text-center" style="margin-bottom: 0px;"><strong>{{ $lowongan->judul }}</strong></h1>
                </div>
                <div class="intro">
                    <h1 class="text-center" style="font-size: 21px;margin-top: -52px;"><i class="material-icons">place</i>&nbsp;{{ $lowongan->tempat }}</h1>
                </div>
                <div class="intro">
                    <h1 class="text-center" style="font-size: 21px;margin-top: -52px;">&nbsp;Deadline : {{ date("d-m-Y", strtotime($lowongan->deadline)) }}</h1>
                </div>
                <div class="intro">
                    <h1 class="text-center" style="font-size: 21px;margin-top: -52px;"><i class="fas fa-users"></i><a href="pelamarLowonganPerusahaan.html" style="margin-left: 16px;color: rgb(255,107,0);">{{ $dataCvMasuk }} Orang Pelamar</a>&nbsp;</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-lg-3 offset-md-1"><img class="img-fluid" src="{{ asset('') }}img/perusahaan/{{ $perusahaan->logo }}" style="width: 273px;"></div>
            <div class="col-md-10 col-lg-7 offset-md-1 offset-lg-0">
                <div class="text">
                    <p><br><?php echo(nl2br($lowongan->deskripsi)); ?><br><br></p>
                    <figure class="figure"></figure><a href="{{ url('perusahaan/lowongan/dashboard/' . $lowongan->id . '/edit') }}" class="btn btn-primary" style="margin-bottom: 50px;padding-top: 12px;padding-right: 40px;padding-bottom: 12px;padding-left: 40px;margin-top: 50px;">Edit Lowongan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jquery')
    <script>
        $(document).ready(function () {
            $("#lowongan").css("background-color", "#6c6b6b");
            $("#home","#pekerja").css("background-color", "#343a40");
        });
    </script>
@endsection
    