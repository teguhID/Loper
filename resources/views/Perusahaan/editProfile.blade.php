@extends('layouts.perusahaan.layout')
@section('content')
<div class="contact-clean">
    <form action="{{ url('perusahaan/updateProfile/' . $data->id) }}" class="border rounded border-dark shadow-lg" method="post" style="max-width: 100%;padding-top: 40px;margin-top: 61px;background-color: rgb(248,248,248);">
        {{ method_field('PUT') }} 
        {{ csrf_field() }}
        <h2 class="text-center">Update Profile Perusahaan</h2>
        <div class="col-md-6 col-lg-4 item">
            <div class="box"></div>
            <div class="author" style="width: 300px;"><img class="rounded-circle" src="{{ asset('') }}img/perusahaan/{{ $data->logo }}" style="width: 300px;max-width: 70%;max-height: 80%;">
                <br><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Ganti Logo</small>
                <input type="file" style="margin-top: 10px;margin-bottom: 10px;">
            </div>
        </div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Nama Perusahaan</small><input class="border rounded-0 form-control" type="text" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" name="nama_perusahaan" value="{{ $data->nama_perusahaan }}"></div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Jenis Usaha</small>
            <div class="dropdown">
                <select class="form-control form-control-lg" name="jenis_usaha">
                    <?php
                        $jenis_usaha = array('-', 'Kuliner', 'IT', 'Kontratkor', 'Garmen', 'Konsultan IT', 'Pendidikan', 'Ritel', 'Gudang', 'Pabrik', 'Bengkel', 'Service Center');
                    ?>
                    @foreach ($jenis_usaha as $jenis_usahas)
                        <option value="{{ $jenis_usahas }}" 
                            <?php 
                                if ($data->jenis_usaha == $jenis_usahas) {
                                    echo('selected');
                                }else{
                                    echo('');
                                }
                            ?> 
                        >{{ $jenis_usahas }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Alamat</small><textarea class="border rounded-0 form-control" style="margin-bottom: 10px;min-width: 100%;max-width: 100%;" name="alamat">{{ $data->alamat }}</textarea></div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Deskripsi</small><textarea class="border rounded-0 form-control" style="margin-bottom: 10px;min-width: 100%;max-width: 100%;" name="deskripsi">{{ $data->deskripsi }}</textarea></div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Karyawan</small>
            <div class="dropdown">
                <select class="form-control form-control-lg" name="karyawan">
                    <?php
                        $karyawan = array('-', '1 - 20', '1 - 50', '25 - 100', '100 - 250', '250 - 1000', '1000 - 5000', '> 5000');
                    ?>
                    @foreach ($karyawan as $karyawans)
                        <option value="{{ $karyawans }}" 
                            <?php 
                                if ($data->karyawan == $karyawans) {
                                    echo('selected');
                                }else{
                                    echo('');
                                }
                            ?> 
                        >{{ $karyawans }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Jam Kerja</small>
            <div class="dropdown">
                <select class="form-control form-control-lg" name="jam_kerja">
                    <?php
                        $jam_kerja = array('-', '7am - 4pm', '8am - 4pm', '8am - 5pm', '9am - 5pm', 'shift', 'remote', 'tidak disebutkan');
                    ?>
                    @foreach ($jam_kerja as $jam_kerjas)
                        <option value="{{ $jam_kerjas }}" 
                            <?php 
                                if ($data->jam_kerja == $jam_kerjas) {
                                    echo('selected');
                                }else{
                                    echo('');
                                }
                            ?> 
                        >{{ $jam_kerjas }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Karir</small>
            <div class="dropdown">
                <select class="form-control form-control-lg" name="karir">
                    <?php
                        $karir = array('-', 'jenjang karir terbuka', 'jejang karir dipertimbangkan', 'tidak ada jenjang karir', 'tidak disebutkan');
                    ?>
                    @foreach ($karir as $karirs)
                        <option value="{{ $karirs }}" 
                            <?php 
                                if ($data->karir == $karirs) {
                                    echo('selected');
                                }else{
                                    echo('');
                                }
                            ?> 
                        >{{ $karirs }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Phone</small><input class="border rounded-0 form-control" type="number" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" name="phone" value="{{ $data->phone }}"></div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Web</small><input class="border rounded-0 form-control" type="text" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" name="web" value="{{ $data->web }}"></div>
        
        <div class="form-group"><button class="btn btn-primary" type="submit" style="min-width: 100%;height: 74px;font-size: 20px;font-family: Barlow, sans-serif;margin-top: 44px;">SIMPAN</button></div>
    </form>
</div>

@endsection
@section('jquery')
    <script>
        $(document).ready(function () {
            $("#profile").css("background-color", "#6c6b6b");
            $("#home","#lowongan","#pekerja").css("background-color", "#343a40");
        });
    </script>
@endsection
    