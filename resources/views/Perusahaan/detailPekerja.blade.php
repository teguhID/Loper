@extends('layouts.perusahaan.layout')
@section('content')
<div class="border-white shadow-sm profile-card" style="padding-top: 57px;margin-bottom: 20px;">
    <div class="profile-back" style="background-color: rgb(52,58,64);"></div><img class="rounded-circle img-fluid shadow-lg profile-pic" src="{{ asset('') }}img/profile/{{ $data->foto }}" style="width: 300px;height: 300px;">
    <p class="text-muted" style="color: rgb(79,102,126);padding-bottom: 0px;margin-bottom: -1px;">Rating : 4.7/5</p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
    <h2 class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-top: 0px;font-size: 37px;padding-bottom: 20px;">{{ $data->nama }}</h2>
</div>
<div class="features-clean">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center" style="padding-top: 0px;font-size: 28px;padding-bottom: 20px;">Data Pribadi</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Alamat :</span></div>
            <div class="col-sm-6" style="max-width: 70%;"><span>{{ $data->alamat }}</span></div>
        </div>
        <div class="row">
            <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Kota :</span></div>
            <div class="col-sm-6" style="max-width: 70%;"><span>{{ $data->kota }}</span></div>
        </div>
        <div class="row">
            <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Negara :</span></div>
            <div class="col-sm-6" style="max-width: 70%;"><span>{{ $data->negara }}</span></div>
        </div>
        <div class="row">
            <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Lahir :</span></div>
            <div class="col-sm-6" style="max-width: 70%;"><span>{{ $data->tempat_lahir }}, {{ $data->tanggal_lahir }}</span></div>
        </div>
        <div class="row">
            <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Email :</span></div>
            <div class="col-sm-6" style="max-width: 70%;"><span>{{ $data->email }}</span></div>
        </div>
        <div class="row">
            <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Phone :</span></div>
            <div class="col-sm-6" style="max-width: 70%;"><span>{{ $data->phone }}</span></div>
        </div>
        <div class="row">
            <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Blog :</span></div>
            <div class="col-sm-6" style="max-width: 70%;"><span>{{ $data->blog }}</span></div>
        </div>
        <div class="row">
            <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Web :</span></div>
            <div class="col-sm-6" style="max-width: 70%;"><span>{{ $data->web }}</span></div>
        </div>
        <div class="row">
            <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Status :</span></div>
            <div class="col-sm-6" style="max-width: 70%;"><span>{{ $data->status }}</span></div>
        </div>
        <div class="row">
            <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Agama :</span></div>
            <div class="col-sm-6" style="max-width: 70%;"><span>{{ $data->agama }}</span></div>
        </div>
        <div class="row">
            <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Jenis Kelamin :</span></div>
            <div class="col-sm-6" style="max-width: 70%;"><span>{{ $data->jenis_kelamin }}</span></div>
        </div>
        <div class="row">
            <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Berat badan :</span></div>
            <div class="col-sm-6" style="max-width: 70%;"><span>{{ $data->berat_badan }}</span>	&nbsp; kg</div>
        </div>
        <div class="row">
            <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Tinggi badan :</span></div>
            <div class="col-sm-6" style="max-width: 70%;"><span>{{ $data->tinggi_badan }}</span>&nbsp; cm</div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center" style="padding-top: 0px;font-size: 28px;padding-bottom: 20px;">Keahlian</h2>
            </div>
        </div>
        <div class="row d-xl-flex justify-content-xl-center" style="margin-bottom: 40px;">
            <div class="col-md-3 text-center d-xl-flex justify-content-xl-center align-items-xl-center" data-bs-hover-animate="pulse" style="background-color: #ebe9e9;padding-top: 18px;max-width: 20%;margin-right: 10px;margin-left: 10px;">
                <h2 class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-top: 0px;font-size: 19px;">{{ $data->keahlian1 }}</h2>
            </div>
            <div class="col-md-3 text-center d-xl-flex justify-content-xl-center align-items-xl-center" data-bs-hover-animate="pulse" style="background-color: #ebe9e9;padding-top: 18px;max-width: 20%;margin-right: 10px;margin-left: 10px;">
                <h2 class="text-center d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center" style="padding-top: 0px;font-size: 19px;">{{ $data->keahlian2 }}</h2>
            </div>
            <div class="col-md-3 text-center d-xl-flex justify-content-xl-center align-items-xl-center" data-bs-hover-animate="pulse" style="background-color: #ebe9e9;padding-top: 18px;max-width: 20%;margin-right: 10px;margin-left: 10px;">
                <h2 class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-top: 0px;font-size: 19px;">{{ $data->keahlian3 }}</h2>
            </div>
            <div class="col-md-3 text-center d-xl-flex justify-content-xl-center align-items-xl-center" data-bs-hover-animate="pulse" style="background-color: #ebe9e9;padding-top: 18px;max-width: 20%;margin-right: 10px;margin-left: 10px;">
                <h2 class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-top: 0px;font-size: 19px;">{{ $data->keahlian4 }}</h2>
            </div>
        </div>
    </div>
    <hr>
    <div class="container" style="background-color: #f2f2f2;">
        <div class="intro">
            <h2 class="text-center">Social Media</h2>
        </div>
        <div class="row features">
            <div class="col-sm-6 col-lg-4 d-flex justify-content-center item" style="margin-bottom: 0px;"><i class="fa fa-facebook-square icon"></i>
                <h3 class="d-flex align-items-center name" style="margin-bottom: 35px;padding-left: 15px;">{{ $data->facebook }}</h3>
            </div>
            <div class="col-sm-6 col-lg-4 d-flex justify-content-center item" style="margin-bottom: 0px;"><i class="fa fa-twitter icon"></i>
                <h3 class="d-flex align-items-center name" style="margin-bottom: 35px;padding-left: 15px;">{{ $data->twitter }}</h3>
            </div>
            <div class="col-sm-6 col-lg-4 d-flex justify-content-center item" style="margin-bottom: 0px;"><i class="fa fa-instagram icon"></i>
                <h3 class="d-flex align-items-center name" style="margin-bottom: 35px;padding-left: 15px;">{{ $data->instagram }}</h3>
            </div>
            <div class="col-sm-6 col-lg-4 d-flex justify-content-center item" style="margin-bottom: 0px;"><i class="fa fa-linkedin-square icon"></i>
                <h3 class="d-flex align-items-center name" style="margin-bottom: 35px;padding-left: 15px;">{{ $data->linkedin }}</h3>
            </div>
            <div class="col-sm-6 col-lg-4 d-flex justify-content-center item" style="margin-bottom: 0px;"><i class="fa fa-github icon"></i>
                <h3 class="d-flex align-items-center name" style="margin-bottom: 35px;padding-left: 15px;">{{ $data->github }}</h3>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Pendidikan</h2>
        </div>
        <div class="table-responsive" style="letter-spacing: 0px;">
            <table class="table table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th>Jenjang</th>
                        <th>Nama Sekolah</th>
                        <th>Jurusan</th>
                        <th>Tahun Lulus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>SD</td>
                        <td>{{ $data->nama_sd }}</td>
                        <td>-</td>
                        <td>{{ $data->tahun_lulus_sd }}</td>
                    </tr>
                    <tr>
                        <td>SMP</td>
                        <td>{{ $data->nama_smp }}</td>
                        <td>-</td>
                        <td>{{ $data->tahun_lulus_smp }}</td>
                    </tr>
                    <tr>
                        <td>SMA</td>
                        <td>{{ $data->nama_sma }}</td>
                        <td>{{ $data->jurusan_sma }}</td>
                        <td>{{ $data->tahun_lulus_sma }}</td>
                    </tr>
                    <tr>
                        <td>S1</td>
                        <td>{{ $data->nama_s1 }}</td>
                        <td>{{ $data->jurusan_s1 }}</td>
                        <td>{{ $data->tahun_lulus_s1 }}</td>
                    </tr>
                    <tr>
                        <td>S2</td>
                        <td>{{ $data->nama_s2 }}</td>
                        <td>{{ $data->jurusan_s2 }}</td>
                        <td>{{ $data->tahun_lulus_s2 }}</td>
                    </tr>
                    <tr>
                        <td>S3</td>
                        <td>{{ $data->nama_s3 }}</td>
                        <td>{{ $data->jurusan_s3 }}</td>
                        <td>{{ $data->tahun_lulus_s3 }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Pengalaman Bekerja</h2>
        </div>
        <div class="table-responsive" style="letter-spacing: 0px;">
            <table class="table table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Perusahaan</th>
                        <th>Posisi/Jabatan</th>
                        <th>Lama Bekerja</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{ $data->pengalaman_perusahaan1 }}</td>
                        <td>{{ $data->pengalaman_jabatan1 }}</td>
                        <td>{{ $data->pengalaman_lama_kerja1 }}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>{{ $data->pengalaman_perusahaan2 }}</td>
                        <td>{{ $data->pengalaman_jabatan2 }}</td>
                        <td>{{ $data->pengalaman_lama_kerja2 }}</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>{{ $data->pengalaman_perusahaan3 }}</td>
                        <td>{{ $data->pengalaman_jabatan3 }}</td>
                        <td>{{ $data->pengalaman_lama_kerja3 }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
</div>
@endsection
@section('jquery')
    <script>
        $(document).ready(function () {
            $("#pekerja").css("background-color", "#6c6b6b");
            $("#home","#lowongan","#profile").css("background-color", "#343a40");
        });
    </script>
@endsection
