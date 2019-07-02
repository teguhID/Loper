@extends('layouts.app')
@section('content')
    <div class="border-white shadow-sm profile-card" style="padding-top: 57px;margin-bottom: 20px;">
        <div class="profile-back" style="background-color: rgb(52,58,64);"></div><img class="rounded-circle img-fluid shadow-lg profile-pic" src="{{ asset('') }}img/team/3.jpg" style="width: 300px;height: 300px;">
        <p class="text-muted" style="color: rgb(79,102,126);padding-bottom: 0px;margin-bottom: -1px;">Rating : 4.7/5</p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
        <h2 class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-top: 0px;font-size: 37px;padding-bottom: 20px;">Aura Lidya</h2>
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
                <div class="col-sm-6" style="max-width: 70%;"><span>Komp Panghegar Blok G no 23, Gede Bage, Bandung</span></div>
            </div>
            <div class="row">
                <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Kota :</span></div>
                <div class="col-sm-6" style="max-width: 70%;"><span>Bandung</span></div>
            </div>
            <div class="row">
                <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Negara :</span></div>
                <div class="col-sm-6" style="max-width: 70%;"><span>Indonesia</span></div>
            </div>
            <div class="row">
                <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Tempat Tanggal Lahir :</span></div>
                <div class="col-sm-6" style="max-width: 70%;"><span>Jakarta, 15 April 1997</span></div>
            </div>
            <div class="row">
                <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Email :</span></div>
                <div class="col-sm-6" style="max-width: 70%;"><span>auralidya@gmail.com</span></div>
            </div>
            <div class="row">
                <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Phone :</span></div>
                <div class="col-sm-6" style="max-width: 70%;"><span>088687912782</span></div>
            </div>
            <div class="row">
                <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Blog :</span></div>
                <div class="col-sm-6" style="max-width: 70%;"><span>-</span></div>
            </div>
            <div class="row">
                <div class="col-sm-6 d-xl-flex justify-content-xl-end" style="max-width: 30%;padding-right: 0px;padding-left: 10px;height: 30px;"><span>Web :</span></div>
                <div class="col-sm-6" style="max-width: 70%;"><span>www.aurashop.com</span></div>
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
                    <h2 class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-top: 0px;font-size: 19px;padding-bottom: 20px;">Make Up Artist</h2>
                </div>
                <div class="col-md-3 text-center d-xl-flex justify-content-xl-center align-items-xl-center" data-bs-hover-animate="pulse" style="background-color: #ebe9e9;padding-top: 18px;max-width: 20%;margin-right: 10px;margin-left: 10px;">
                    <h2 class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-top: 0px;font-size: 19px;padding-bottom: 20px;">Fashion Design</h2>
                </div>
                <div class="col-md-3 text-center d-xl-flex justify-content-xl-center align-items-xl-center" data-bs-hover-animate="pulse" style="background-color: #ebe9e9;padding-top: 18px;max-width: 20%;margin-right: 10px;margin-left: 10px;">
                    <h2 class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-top: 0px;font-size: 19px;padding-bottom: 20px;">-</h2>
                </div>
                <div class="col-md-3 text-center d-xl-flex justify-content-xl-center align-items-xl-center" data-bs-hover-animate="pulse" style="background-color: #ebe9e9;padding-top: 18px;max-width: 20%;margin-right: 10px;margin-left: 10px;">
                    <h2 class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-top: 0px;font-size: 19px;padding-bottom: 20px;">-</h2>
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
                    <h3 class="d-flex align-items-center name" style="margin-bottom: 35px;padding-left: 15px;">Aura Lidya</h3>
                </div>
                <div class="col-sm-6 col-lg-4 d-flex justify-content-center item" style="margin-bottom: 0px;"><i class="fa fa-twitter icon"></i>
                    <h3 class="d-flex align-items-center name" style="margin-bottom: 35px;padding-left: 15px;">@AuraLidya</h3>
                </div>
                <div class="col-sm-6 col-lg-4 d-flex justify-content-center item" style="margin-bottom: 0px;"><i class="fa fa-instagram icon"></i>
                    <h3 class="d-flex align-items-center name" style="margin-bottom: 35px;padding-left: 15px;">@AuraLidya</h3>
                </div>
                <div class="col-sm-6 col-lg-4 d-flex justify-content-center item" style="margin-bottom: 0px;"><i class="fa fa-linkedin-square icon"></i>
                    <h3 class="d-flex align-items-center name" style="margin-bottom: 35px;padding-left: 15px;">Aura Lidya</h3>
                </div>
                <div class="col-sm-6 col-lg-4 d-flex justify-content-center item" style="margin-bottom: 0px;"><i class="fa fa-github icon"></i>
                    <h3 class="d-flex align-items-center name" style="margin-bottom: 35px;padding-left: 15px;">AuraLidya</h3>
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
                            <th>Nama Sekolah</th>
                            <th>Jurusan</th>
                            <th>Tahun Lulus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SD Pagi Cerah Mulia</td>
                            <td>-</td>
                            <td>2006</td>
                        </tr>
                        <tr>
                            <td>SMPN 6 Bandung</td>
                            <td>-</td>
                            <td>2009</td>
                        </tr>
                        <tr>
                            <td>SMKN 9 Bandung</td>
                            <td>Kecantikan</td>
                            <td>2012</td>
                        </tr>
                        <tr>
                            <td>ISBI</td>
                            <td>Tata Rias</td>
                            <td>2017</td>
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
                            <th>Perusahaan</th>
                            <th>Posisi/Jabatan</th>
                            <th>Lama Bekerja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Net Media (NET TV)</td>
                            <td>Make Up Artisi</td>
                            <td>Masih Bekerja</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection