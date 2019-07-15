@extends('layouts.perusahaan.layout')
@section('content')
<div class="contact-clean">
    <form action="{{ url('perusahaan/lowongan/dashboard') }}" class="border rounded border-dark shadow-lg" method="post" style="max-width: 100%;padding-top: 40px;margin-top: 61px;background-color: rgb(248,248,248);">
        {{ csrf_field() }}
        <img class="rounded-circle" src="{{ asset('') }}img/perusahaan/{{ $data->logo }}" style="width: 50px; height: 50px">
        <h2 class="text-center" style="margin-bottom: 5vw">Buat Lowongan</h2>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Judul Lowongan</small><input class="border rounded-0 form-control" type="text" style="max-width: 100%;min-width: 100%;margin-bottom: 10px;" name="judul"></div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Deskripsi</small><textarea class="border rounded-0 form-control" style="margin-bottom: 10px;min-width: 100%;max-width: 100%;" name="deskripsi"></textarea></div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Tempat</small>
            <div class="dropdown">
                <select class="form-control form-control-lg" name="tempat">
                    <?php
                        $kota = array('', 'Ambon','Aceh','Lampung','Bandung','Banjarmasin','Denpasar','Jakarta','Jayapura','Gorontalo','Serang ','Makassar','Manado','Medan','Padang','Palembang','Pekanbaru','Pontianak','Samarinda','Semarang','Surabaya','Yogyakarta', '', 'Kota Lain');
                    ?>
                    @foreach ($kota as $kotas)
                        <option value="{{ $kotas }}">{{ $kotas }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group"><small class="form-text text-muted" style="color: rgb(134,142,150);font-family: Barlow, sans-serif;font-weight: normal;font-size: 17px;padding-left: 12px;">Deadline</small><input class="border rounded-0 form-control" type="date" style="max-width: 100%;min-width: 80%;margin-bottom: 10px;" name="deadline"></div>
        
        <input type="hidden" name="id_perusahaan" value="{{ $data->id_perusahaan }}">
        <input type="hidden" name="perusahaan" value="{{ $data->nama_perusahaan }}">
        <input type="hidden" name="email" value="{{ $data->email }}">
        <input type="hidden" name="web" value="{{ $data->web }}">
        <input type="hidden" name="phone" value="{{ $data->phone }}">

        <div class="form-group"><button class="btn btn-primary" type="submit" style="min-width: 100%;height: 74px;font-size: 20px;font-family: Barlow, sans-serif;margin-top: 44px;">Buat Lowongan</button></div>
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
    