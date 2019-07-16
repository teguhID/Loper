@extends('layouts.pekerja.layout')
@section('content')
<div class="contact-clean">
        <form action="{{ url('pekerja/updateCV/' . $data->id) }}" class="border rounded border-dark shadow-lg" method="post" style="max-width: 100%;padding-top: 40px;margin-top: 61px;background-color: rgb(248,248,248);">
            {{ method_field('PUT') }} 
            {{ csrf_field() }}
            <h2 class="text-center">Update CV</h2>
            <div class="col-md-6 col-lg-4 item">
                <div class="box"></div>
                <div class="author" style="width: 300px;"><img class="rounded-circle" src="{{ asset('') }}img/profile/{{ $data->foto }}" style="width: 300px;max-width: 70%;max-height: 80%;">
                    <br><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Ganti Foto</small>
                    <input type="file" style="margin-top: 10px;margin-bottom: 10px;">
                </div>
            </div>
            <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Nama</small><input class="border rounded-0 form-control" type="text" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" name="nama" value="{{ $data->nama }}"></div>
            <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Alamat</small><textarea class="border rounded-0 form-control" style="margin-bottom: 10px;min-width: 100%;max-width: 100%;" name="alamat">{{ $data->alamat }}</textarea></div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Kota</small>
            <div class="dropdown">
                <select class="form-control form-control-lg" name="kota">
                    <?php
                        $kota = array('', 'Ambon','Aceh','Lampung','Bandung','Banjarmasin','Denpasar','Jakarta','Jayapura','Gorontalo','Serang ','Makassar','Manado','Medan','Padang','Palembang','Pekanbaru','Pontianak','Samarinda','Semarang','Surabaya','Yogyakarta', '', 'Kota Lain');
                    ?>
                    @foreach ($kota as $kotas)
                        <option value="{{ $kotas }}" 
                            <?php 
                                if ($data->kota == $kotas) {
                                    echo('selected');
                                }else{
                                    echo('');
                                }
                            ?> 
                         >{{ $kotas }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Negara</small>
            <div class="dropdown">
                <select class="form-control form-control-lg" name="negara">
                    <?php
                        $negara = array('', 'Indonesia','Malaysia','Singapore','Philipines','Vietnam','Thailand');
                    ?>
                    @foreach ($negara as $negaras)
                        <option value="{{ $negaras }}"
                            <?php 
                                if ($data->negara == $negaras) {
                                    echo('selected');
                                }else{
                                    echo('');
                                }
                            ?>
                        >{{ $negaras }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Tanggal Lahir</small><input class="border rounded-0 form-control" type="date" style="color: rgb(149,142,150);font-family: Barlow, sans-serif;margin-bottom: 10px;font-size: 14px;padding-left: 43px;width:907px;" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}"></div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Kota Tempat Anda di Lahirkan</small><input class="border rounded-0 form-control" type="text" name="tempat_lahir" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->tempat_lahir }}"></div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Email</small><input class="border rounded-0 form-control" type="email" name="email" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->email }}"></div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Phone</small><input class="border rounded-0 form-control" type="number" name="phone" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->phone }}"></div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Blog</small><input class="border rounded-0 form-control" type="text" name="blog" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->blog }}"></div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Web</small><input class="border rounded-0 form-control" type="text" name="web" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->web }}"></div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Status</small>
            <div class="dropdown">
                <select class="form-control form-control-lg" name="status_perkawinan">
                    <?php
                        $status_perkawinan = array('','Lajang','Menikah','Janda','Duda','Lainnya');
                    ?>
                    @foreach ($status_perkawinan as $status_perkawinans)
                        <option value="{{ $status_perkawinans }}"
                            <?php 
                                if ($data->status_perkawinan == $status_perkawinans) {
                                    echo('selected');
                                }else{
                                    echo('');
                                }
                            ?>
                        >{{ $status_perkawinans }}</option>
                    @endforeach
                </select>
            </div>
        </div>   
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Agama</small>
            <div class="dropdown">
                <select class="form-control form-control-lg" name="agama">
                    <?php
                        $agama = array('', 'Islam','Kristen','Hindu','Budha','Lainnya');
                    ?>
                    @foreach ($agama as $agamas)
                        <option value="{{ $agamas }}"
                            <?php 
                                if ($data->agama == $agamas) {
                                    echo('selected');
                                }else{
                                    echo('');
                                }
                            ?>
                        >{{ $agamas }}</option>
                    @endforeach
                </select>
            </div>
        </div>      
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Jenis Kelamin</small>
            <div class="dropdown">
                <select class="form-control form-control-lg" name="jenis_kelamin">
                    <?php
                        $jenis_kelamin = array('', 'Pria', 'Wanita');
                    ?>
                    @foreach ($jenis_kelamin as $jenis_kelamins)
                        <option value="{{ $jenis_kelamins }}"
                            <?php 
                                if ($data->jenis_kelamin == $jenis_kelamins) {
                                    echo('selected');
                                }else{
                                    echo('');
                                }
                            ?>
                        >{{ $jenis_kelamins }}</option>
                    @endforeach
                </select>
            </div>
        </div>      
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Berat Badan</small><input class="border rounded-0 form-control" type="number" name="berat_badan" style="max-width: 20%;min-width: 0%;margin-bottom: 10px;" value="{{ $data->berat_badan }}"></div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Tinggi Badan</small><input class="border rounded-0 form-control" type="number" name="tinggi_badan" style="max-width: 20%;min-width: 0%;margin-bottom: 10px;" value="{{ $data->tinggi_badan }}"></div>
        <hr style="margin-top: 30px;margin-bottom: 30px;font-weight: bold;background-color: #000000;">
                    <div class="form-group">
                        <h5>Pilih Keahlian Anda</h5><br>
                        <?php
                            $keahlian = array('','Announcer','Back End Developer','Cameramen','Design Grafis','Dokter Gigi','Dokter Umum','Front End Developer','Full Stack Developer','Guru Bahasa Indonesia','Guru Matematika','MC','Mekanik Mobil','Mekanik Motor','Network Engineer','Penulis Berita','Penulis Buku','Penulis Naskah','Photo Editor','Photographer','Programmer','Teknisi Jaringan','Teknisi Komputer','Tukang Sulap','Video Editor','Videographer');
                        ?>
                        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Keahlian 1</small>
                            <div class="dropdown">
                                <select class="form-control form-control-lg" name="keahlian1">
                                    @foreach ($keahlian as $keahlians)
                                        <option value="{{ $keahlians }}"
                                            <?php 
                                                if ($data->keahlian1 == $keahlians) {
                                                    echo('selected');
                                                }else{
                                                    echo('');
                                                }
                                            ?>
                                        >{{ $keahlians }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Keahlian 2</small>
                            <div class="dropdown">
                                <select class="form-control form-control-lg" name="keahlian2">
                                    @foreach ($keahlian as $keahlians)
                                        <option value="{{ $keahlians }}"
                                            <?php 
                                                if ($data->keahlian2 == $keahlians) {
                                                    echo('selected');
                                                }else{
                                                    echo('');
                                                }
                                            ?>
                                        >{{ $keahlians }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Keahlian 3</small>
                            <div class="dropdown">
                                <select class="form-control form-control-lg" name="keahlian3">
                                    @foreach ($keahlian as $keahlians)
                                        <option value="{{ $keahlians }}"
                                            <?php 
                                                if ($data->keahlian3 == $keahlians) {
                                                    echo('selected');
                                                }else{
                                                    echo('');
                                                }
                                            ?>
                                        >{{ $keahlians }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Keahlian 4</small>
                            <div class="dropdown">
                                <select class="form-control form-control-lg" name="keahlian4">
                                    @foreach ($keahlian as $keahlians)
                                        <option value="{{ $keahlians }}"
                                            <?php 
                                                if ($data->keahlian4 == $keahlians) {
                                                    echo('selected');
                                                }else{
                                                    echo('');
                                                }
                                            ?>
                                        >{{ $keahlians }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr style="margin-top: 30px;margin-bottom: 30px;font-weight: bold;background-color: #000000;">
                    <div class="form-group"><small class="form-text text-muted d-lg-flex justify-content-lg-start" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;padding-bottom: 7px;"><i class="fa fa-facebook-square" style="padding-right: 7px;font-size: 24px;"></i>Facebook</small>
                        <input class="border rounded-0 form-control" type="text" name="facebook" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->facebook }}">
                    </div>
                    <div class="form-group"><small class="form-text text-muted d-lg-flex justify-content-lg-start" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;padding-bottom: 7px;"><i class="fa fa-twitter" style="padding-right: 7px;font-size: 24px;"></i>Twitter</small>
                        <input class="border rounded-0 form-control" type="text" name="twitter" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->twitter }}">
                    </div>
                    <div class="form-group"><small class="form-text text-muted d-lg-flex justify-content-lg-start" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;padding-bottom: 7px;"><i class="fa fa-instagram" style="padding-right: 7px;font-size: 24px;"></i>Instagram</small>
                        <input class="border rounded-0 form-control" type="text" name="instagram" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->instagram }}">
                    </div>
                    <div class="form-group"><small class="form-text text-muted d-lg-flex justify-content-lg-start" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;padding-bottom: 7px;"><i class="fa fa-linkedin-square" style="padding-right: 7px;font-size: 24px;"></i>Linkedin</small>
                        <input class="border rounded-0 form-control" type="text" name="linkedin" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->linkedin }}">
                    </div>
                    <div class="form-group"><small class="form-text text-muted d-lg-flex justify-content-lg-start" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;padding-bottom: 7px;"><i class="fa fa-github" style="padding-right: 7px;font-size: 24px;"></i>Github</small>
                        <input class="border rounded-0 form-control" type="text" name="github" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->github }}">
                    </div>
                    <hr style="margin-top: 30px;margin-bottom: 30px;font-weight: bold;background-color: #000000;">
                    <h5>Riwayat Pendidikan</h5><br>
                    <div class="form-row">
                        <div class="col-sm-6" style="max-width: 40%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Nama SD</small><input class="border rounded-0 form-control" type="text" name="nama_sd" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->nama_sd }}">
                            </div>
                        </div>
                        <div class="col-sm-6" style="max-width: 40%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Jurusan</small><input class="border rounded-0 form-control" type="text" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;background-color: rgb(232,230,230);" disabled="" readonly="">
                            </div>
                        </div>
                        <div class="col-sm-6" style="max-width: 20%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Tahun Lulus</small><input class="border rounded-0 form-control" type="text" name="tahun_lulus_sd" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->tahun_lulus_sd }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6" style="max-width: 40%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Nama SMP</small><input class="border rounded-0 form-control" type="text" name="nama_smp" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->nama_smp }}">
                            </div>
                        </div>
                        <div class="col-sm-6" style="max-width: 40%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Jurusan</small><input class="border rounded-0 form-control" type="text" name="" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;background-color: rgb(232,230,230);" disabled="" readonly="">
                            </div>
                        </div>
                        <div class="col-sm-6" style="max-width: 20%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Tahun Lulus</small><input class="border rounded-0 form-control" type="text" name="tahun_lulus_smp" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->tahun_lulus_smp }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6" style="max-width: 40%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Nama SMA/SMK</small><input class="border rounded-0 form-control" type="text" name="nama_sma" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->nama_sma }}">
                            </div>
                        </div>
                        <div class="col-sm-6" style="max-width: 40%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Jurusan</small><input class="border rounded-0 form-control" type="text" name="jurusan_sma" style="max-width: 100%;min-width: 100%;  margin-bottom: 10px;" value="{{ $data->jurusan_sma }}">
                            </div>
                        </div>
                        <div class="col-sm-6" style="max-width: 20%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Tahun Lulus</small><input class="border rounded-0 form-control" type="text" name="tahun_lulus_sma" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->tahun_lulus_sma }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6" style="max-width: 40%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Nama Perguruan Tinggi S1</small><input class="border rounded-0 form-control" type="text" name="nama_s1" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->nama_s1 }}">
                            </div>
                        </div>
                        <div class="col-sm-6" style="max-width: 40%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Jurusan</small><input class="border rounded-0 form-control" type="text" name="jurusan_s1" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;background-color: rgb(255,255,255);" value="{{ $data->jurusan_s1 }}">
                            </div>
                        </div>
                        <div class="col-sm-6" style="max-width: 20%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Tahun Lulus</small><input class="border rounded-0 form-control" type="text" name="tahun_lulus_s1" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->tahun_lulus_s1 }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6" style="max-width: 40%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Nama Perguruan Tinggi S2</small><input class="border rounded-0 form-control" type="text" name="nama_s2" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->nama_s2 }}">
                            </div>
                        </div>
                        <div class="col-sm-6" style="max-width: 40%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Jurusan</small><input class="border rounded-0 form-control" type="text" name="jurusan_s2" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;background-color: rgb(255,255,255);" value="{{ $data->jurusan_s2 }}">
                            </div>
                        </div>
                        <div class="col-sm-6" style="max-width: 20%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Tahun Lulus</small><input class="border rounded-0 form-control" type="text" name="tahun_lulus_s2" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->tahun_lulus_s2 }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6" style="max-width: 40%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Nama Perguruan Tinggi S3</small><input class="border rounded-0 form-control" type="text" name="nama_s3" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value={{ $data->nama_s3 }}>
                            </div>
                        </div>
                        <div class="col-sm-6" style="max-width: 40%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Jurusan</small><input class="border rounded-0 form-control" type="text" name="jurusan_s3" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;background-color: rgb(255,255,255);" value={{ $data->jurusan_s3 }}>
                            </div>
                        </div>
                        <div class="col-sm-6" style="max-width: 20%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Tahun Lulus</small><input class="border rounded-0 form-control" type="text" name="tahun_lulus_s3" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value={{ $data->tahun_lulus_s3 }}>
                            </div>
                        </div>
                    </div>
                    <hr style="margin-top: 30px;margin-bottom: 30px;font-weight: bold;background-color: #000000;">
                    <h5>Riwayat Pekerjaan</h5><br>
                    <div class="form-row">
                        <div class="col-sm-6" style="max-width: 40%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Nama Perusahaan</small><input class="border rounded-0 form-control" type="text" name="pengalaman_perusahaan1" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->pengalaman_perusahaan1 }}">
                            </div>
                        </div>
                        <div class="col-sm-6" style="max-width: 40%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Posisi/Jabatan</small><input class="border rounded-0 form-control" type="text" name="pengalaman_jabatan1" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;background-color: rgb(255,255,255);" value="{{ $data->pengalaman_jabatan1 }}">
                            </div>
                        </div>
                        <div class="col-sm-6" style="max-width: 20%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Lama Kerja</small><input class="border rounded-0 form-control" type="text" name="pengalaman_lama_kerja1" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->pengalaman_lama_kerja1 }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6" style="max-width: 40%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Nama Perusahaan</small><input class="border rounded-0 form-control" type="text" name="pengalaman_perusahaan2" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->pengalaman_perusahaan2 }}">
                            </div>
                        </div>
                        <div class="col-sm-6" style="max-width: 40%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Posisi/Jabatan</small><input class="border rounded-0 form-control" type="text" name="pengalaman_jabatan2" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;background-color: rgb(255,255,255);" value="{{ $data->pengalaman_jabatan2 }}">
                            </div>
                        </div>
                        <div class="col-sm-6" style="max-width: 20%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Lama Kerja</small><input class="border rounded-0 form-control" type="text" name="pengalaman_lama_kerja2" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->pengalaman_lama_kerja2 }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6" style="max-width: 40%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Nama Perusahaan</small><input class="border rounded-0 form-control" type="text" name="pengalaman_perusahaan3" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->pengalaman_perusahaan3 }}">
                            </div>
                        </div>
                        <div class="col-sm-6" style="max-width: 40%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Posisi/Jabatan</small><input class="border rounded-0 form-control" type="text" name="pengalaman_jabatan3" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;background-color: rgb(255,255,255);" value="{{ $data->pengalaman_jabatan3 }}">
                            </div>
                        </div>
                        <div class="col-sm-6" style="max-width: 20%;">
                            <div class="form-group">
                                <small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Lama Kerja</small><input class="border rounded-0 form-control" type="text" name="pengalaman_lama_kerja3" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" value="{{ $data->pengalaman_lama_kerja3 }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group"><button class="btn btn-primary" type="submit" style="min-width: 100%;height: 74px;font-size: 20px;font-family: Barlow, sans-serif;margin-top: 44px;">SIMPAN</button></div>
            </form>
</div>
@endsection
@section('jquery')
@endsection