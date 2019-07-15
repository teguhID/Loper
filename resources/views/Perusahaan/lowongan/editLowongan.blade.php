@extends('layouts.perusahaan.layout')
@section('content')
<div class="contact-clean">
    <form action="{{ url('perusahaan/lowongan/dashboard/' . $lowongan->id) }}" class="border rounded border-dark shadow-lg" method="post" style="max-width: 100%;padding-top: 40px;margin-top: 61px;background-color: rgb(248,248,248);">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <img class="rounded-circle" src="{{ asset('') }}img/perusahaan/{{ $perusahaan->logo }}" style="width: 50px; height: 50px">
        <h2 class="text-center" style="margin-bottom: 5vw">Edit Lowongan</h2>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Judul Lowongan</small><input class="border rounded-0 form-control" type="text" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" name="judul" value="{{ $lowongan->judul }}"></div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Deskripsi</small><textarea class="border rounded-0 form-control" style="margin-bottom: 10px;max-height: 100%;min-width: 100%;" name="deskripsi">{{ $lowongan->deskripsi }}</textarea></div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Tempat</small>
            <div class="dropdown">
                <select class="form-control form-control-lg" name="tempat">
                    <?php
                        $kota = array('', 'Ambon','Aceh','Lampung','Bandung','Banjarmasin','Denpasar','Jakarta','Jayapura','Gorontalo','Serang ','Makassar','Manado','Medan','Padang','Palembang','Pekanbaru','Pontianak','Samarinda','Semarang','Surabaya','Yogyakarta', '', 'Kota Lain');
                    ?>
                    @foreach ($kota as $kotas)
                        <option value="{{ $kotas }}"
                        <?php 
                            if ($lowongan->tempat == $kotas) {
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
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Deadline</small><input class="border rounded-0 form-control" type="date" style="max-width: 100%;min-width: 80%;margin-bottom: 10px;" name="deadline" value="{{ $lowongan->deadline }}"></div>
        
        <input type="hidden" name="id_perusahaan" value="{{ $lowongan->id_perusahaan }}">
        <input type="hidden" name="perusahaan" value="{{ $lowongan->perusahaan }}">
        <input type="hidden" name="email" value="{{ $lowongan->email }}">
        <input type="hidden" name="web" value="{{ $lowongan->web }}">
        <input type="hidden" name="phone" value="{{ $lowongan->phone }}">

        <div class="form-group"><button class="btn btn-primary" type="submit" style="min-width: 100%;height: 74px;font-size: 20px;font-family: Barlow, sans-serif;margin-top: 44px;">Edit Lowongan</button></div>
    </form>
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
    