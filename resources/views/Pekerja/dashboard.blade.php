@extends('layouts.pekerja.layout')
@section('content')
<div class="border-white shadow-sm profile-card" style="padding-top: 57px;margin-bottom: 20px;">
    <div class="profile-back" style="background-color: rgb(52,58,64);"></div><img class="rounded-circle img-fluid shadow-lg profile-pic" src="{{ asset('') }}img/profile/{{ $pekerja->foto }}" style="width: 300px;height: 300px;">
    <p class="text-muted" style="color: rgb(79,102,126);padding-bottom: 0px;margin-bottom: -1px;">Rating : 4.7/5</p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
    <h2 class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-top: 0px;font-size: 37px;padding-bottom: 20px;">{{ $pekerja->nama }}</h2>
</div>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
<div class="features-clean">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="padding-top: 80px;">PEKERJAAN TERSEDIA</h2>
        </div>
        <div class="row people" style="padding-top: 0px;">
            <table class="table table-sm" id="myTable">
                <thead>
                    <tr class="text-center">
                        <th width="50">No</th>
                        <th width="700">Judul</th>
                        <th width="900">Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($lowongan as $lowongans)
                    <tr class="text-center">
                        <td class="text-center">{{ $no++ }}</td>
                        <td><a href="{{ url('pekerja/detailLowongan/' . $lowongans->id) }}" style="color: black">{{ $lowongans->judul }}</a></td>
                        <td>{{substr($lowongans->deskripsi, 0, 100)}} ....<br></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <h2 class="text-center" style="padding-top: 0px;padding-bottom: 30px;"><a href="listPekerjaan.html" style="color: rgb(0,0,0);font-family: Montserrat, sans-serif;font-weight: bold;font-size: 16px;">Lihat Lebih Banyak</a></h2>
    </div>
    <hr>
    <div class="container" style="background-color: #adadad;">
        <div class="intro">
            <h2 class="text-center">UPDATE AKTIVITAS</h2>
        </div>
        <div class="row justify-content-center features" style="background-color: #adadad;padding: 37px;padding-bottom: 20px;">
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-send icon"></i>
                    <h3 class="name">Lamaran Terkirim</h3>
                    <p class="description" style="color: rgb(255,255,255);min-height: 90px;font-size: 17px;">Kamu punya <strong>6 lamaran</strong> yang telah terkirim</p><a class="learn-more" href="#" style="color: rgb(0,0,0);font-weight: bold;">Lihat Semua »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name">Update CV</h3>
                    <p class="description" style="color: rgb(255,255,255);min-height: 90px;font-size: 15px;">Terakhir kamu update CV tanggal 12 Januari 2019, Ayo update cv kamu agar perusahaan tertarik</p><a class="learn-more" href="cvPekerja.html" style="color: rgb(0,0,0);font-weight: bold;">Update CV »</a></div>
            </div>
        </div>
    </div>
</div>
    @endsection
    @section('jquery')
        <script>
            $(document).ready(function () {
                $("#home").css("background-color", "#6c6b6b");
                $("#lamaran","#lowongan","#perusahaan").css("background-color", "#343a40");
            });
        </script>
    @endsection