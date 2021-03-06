@extends('layouts.perusahaan.layout')
@section('content')
<div class="team-boxed" style="padding-top: 63px;background-color: white;">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="padding-top: 80px;">Cv Masuk</h2>
        </div>
        <table id="myTable" style="margin-right: 5vw; margin-left: 5vw;">
            <thead>
                <tr class="text-center">
                        <th width="1900"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $datas)
                <tr class="text-center">
                    <td> 
                    <div class="container">
                        <div class="card flex-row flex-wrap" style="margin-bottom: 45px; margin-top: 25px; border-radius: 25px;">
                            <div class="card-header border-0" style="background-color: white">
                                <img class="rounded-circle" src="{{ asset('') }}img/profile/{{ $datas->foto }}" height="140" width="140">
                            </div>
                            <div class="card-block px-2" style="padding-top: 2vw">
                                <h3 class="card-title">{{ $datas->nama }}</h3>
                                    <div class="row">
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian1 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian2 }}</p>  
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian3 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian4 }}</p>      
                                    </div>
                            </div>
                            <div class="w-100" style="padding: 20px; margin-top: -40px">
                                <a href="{{ url('perusahaan/pekerja/' . $datas->id) }}" class="btn btn-primary float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Detail</a>
                                <a href="{{ url('perusahaan/lowongan/prosesCv/' . $datas->id_lowongan . '/' . $datas->id_pekerja) }}" class="btn btn-warning float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Terima Lamaran</a>
                            </div>
                        </div>
                    </div>
                    </td>
                </tr>  
                {{-- <tr class="text-center">
                    <td> 
                    <div class="container">
                        <div class="card flex-row flex-wrap" style="margin-bottom: 45px; margin-top: 25px; border-radius: 25px;">
                            <div class="card-header border-0" style="background-color: white">
                                <img class="rounded-circle" src="{{ asset('') }}img/profile/{{ $datas->foto }}" height="140" width="140">
                            </div>
                            <div class="card-block px-2" style="padding-top: 2vw">
                                <h3 class="card-title">{{ $datas->nama }}</h3>
                                    <div class="row">
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian1 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian2 }}</p>  
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian3 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian4 }}</p>      
                                    </div>
                            </div>
                            <div class="w-100" style="padding: 20px; margin-top: -40px">
                                <a href="{{ url('perusahaan/pekerja/' . $datas->id) }}" class="btn btn-primary float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Detail</a>
                                <a href="{{ url('perusahaan/lowongan/prosesCv/' . $datas->id_lowongan . '/' . $datas->id_pekerja) }}" class="btn btn-warning float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Terima Lamaran</a>
                            </div>
                        </div>
                    </div>
                    </td>
                </tr>  
                <tr class="text-center">
                    <td> 
                    <div class="container">
                        <div class="card flex-row flex-wrap" style="margin-bottom: 45px; margin-top: 25px; border-radius: 25px;">
                            <div class="card-header border-0" style="background-color: white">
                                <img class="rounded-circle" src="{{ asset('') }}img/profile/{{ $datas->foto }}" height="140" width="140">
                            </div>
                            <div class="card-block px-2" style="padding-top: 2vw">
                                <h3 class="card-title">{{ $datas->nama }}</h3>
                                    <div class="row">
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian1 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian2 }}</p>  
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian3 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian4 }}</p>      
                                    </div>
                            </div>
                            <div class="w-100" style="padding: 20px; margin-top: -40px">
                                <a href="{{ url('perusahaan/pekerja/' . $datas->id) }}" class="btn btn-primary float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Detail</a>
                                <a href="{{ url('perusahaan/lowongan/prosesCv/' . $datas->id_lowongan . '/' . $datas->id_pekerja) }}" class="btn btn-warning float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Terima Lamaran</a>
                            </div>
                        </div>
                    </div>
                    </td>
                </tr>  
                <tr class="text-center">
                    <td> 
                    <div class="container">
                        <div class="card flex-row flex-wrap" style="margin-bottom: 45px; margin-top: 25px; border-radius: 25px;">
                            <div class="card-header border-0" style="background-color: white">
                                <img class="rounded-circle" src="{{ asset('') }}img/profile/{{ $datas->foto }}" height="140" width="140">
                            </div>
                            <div class="card-block px-2" style="padding-top: 2vw">
                                <h3 class="card-title">{{ $datas->nama }}</h3>
                                    <div class="row">
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian1 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian2 }}</p>  
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian3 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian4 }}</p>      
                                    </div>
                            </div>
                            <div class="w-100" style="padding: 20px; margin-top: -40px">
                                <a href="{{ url('perusahaan/pekerja/' . $datas->id) }}" class="btn btn-primary float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Detail</a>
                                <a href="{{ url('perusahaan/lowongan/prosesCv/' . $datas->id_lowongan . '/' . $datas->id_pekerja) }}" class="btn btn-warning float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Terima Lamaran</a>
                            </div>
                        </div>
                    </div>
                    </td>
                </tr>  
                <tr class="text-center">
                    <td> 
                    <div class="container">
                        <div class="card flex-row flex-wrap" style="margin-bottom: 45px; margin-top: 25px; border-radius: 25px;">
                            <div class="card-header border-0" style="background-color: white">
                                <img class="rounded-circle" src="{{ asset('') }}img/profile/{{ $datas->foto }}" height="140" width="140">
                            </div>
                            <div class="card-block px-2" style="padding-top: 2vw">
                                <h3 class="card-title">{{ $datas->nama }}</h3>
                                    <div class="row">
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian1 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian2 }}</p>  
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian3 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian4 }}</p>      
                                    </div>
                            </div>
                            <div class="w-100" style="padding: 20px; margin-top: -40px">
                                <a href="{{ url('perusahaan/pekerja/' . $datas->id) }}" class="btn btn-primary float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Detail</a>
                                <a href="{{ url('perusahaan/lowongan/prosesCv/' . $datas->id_lowongan . '/' . $datas->id_pekerja) }}" class="btn btn-warning float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Terima Lamaran</a>
                            </div>
                        </div>
                    </div>
                    </td>
                </tr>  
                <tr class="text-center">
                    <td> 
                    <div class="container">
                        <div class="card flex-row flex-wrap" style="margin-bottom: 45px; margin-top: 25px; border-radius: 25px;">
                            <div class="card-header border-0" style="background-color: white">
                                <img class="rounded-circle" src="{{ asset('') }}img/profile/{{ $datas->foto }}" height="140" width="140">
                            </div>
                            <div class="card-block px-2" style="padding-top: 2vw">
                                <h3 class="card-title">{{ $datas->nama }}</h3>
                                    <div class="row">
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian1 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian2 }}</p>  
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian3 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian4 }}</p>      
                                    </div>
                            </div>
                            <div class="w-100" style="padding: 20px; margin-top: -40px">
                                <a href="{{ url('perusahaan/pekerja/' . $datas->id) }}" class="btn btn-primary float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Detail</a>
                                <a href="{{ url('perusahaan/lowongan/prosesCv/' . $datas->id_lowongan . '/' . $datas->id_pekerja) }}" class="btn btn-warning float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Terima Lamaran</a>
                            </div>
                        </div>
                    </div>
                    </td>
                </tr>  
                <tr class="text-center">
                    <td> 
                    <div class="container">
                        <div class="card flex-row flex-wrap" style="margin-bottom: 45px; margin-top: 25px; border-radius: 25px;">
                            <div class="card-header border-0" style="background-color: white">
                                <img class="rounded-circle" src="{{ asset('') }}img/profile/{{ $datas->foto }}" height="140" width="140">
                            </div>
                            <div class="card-block px-2" style="padding-top: 2vw">
                                <h3 class="card-title">{{ $datas->nama }}</h3>
                                    <div class="row">
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian1 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian2 }}</p>  
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian3 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian4 }}</p>      
                                    </div>
                            </div>
                            <div class="w-100" style="padding: 20px; margin-top: -40px">
                                <a href="{{ url('perusahaan/pekerja/' . $datas->id) }}" class="btn btn-primary float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Detail</a>
                                <a href="{{ url('perusahaan/lowongan/prosesCv/' . $datas->id_lowongan . '/' . $datas->id_pekerja) }}" class="btn btn-warning float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Terima Lamaran</a>
                            </div>
                        </div>
                    </div>
                    </td>
                </tr>  
                <tr class="text-center">
                    <td> 
                    <div class="container">
                        <div class="card flex-row flex-wrap" style="margin-bottom: 45px; margin-top: 25px; border-radius: 25px;">
                            <div class="card-header border-0" style="background-color: white">
                                <img class="rounded-circle" src="{{ asset('') }}img/profile/{{ $datas->foto }}" height="140" width="140">
                            </div>
                            <div class="card-block px-2" style="padding-top: 2vw">
                                <h3 class="card-title">{{ $datas->nama }}</h3>
                                    <div class="row">
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian1 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian2 }}</p>  
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian3 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian4 }}</p>      
                                    </div>
                            </div>
                            <div class="w-100" style="padding: 20px; margin-top: -40px">
                                <a href="{{ url('perusahaan/pekerja/' . $datas->id) }}" class="btn btn-primary float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Detail</a>
                                <a href="{{ url('perusahaan/lowongan/prosesCv/' . $datas->id_lowongan . '/' . $datas->id_pekerja) }}" class="btn btn-warning float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Terima Lamaran</a>
                            </div>
                        </div>
                    </div>
                    </td>
                </tr>  
                <tr class="text-center">
                    <td> 
                    <div class="container">
                        <div class="card flex-row flex-wrap" style="margin-bottom: 45px; margin-top: 25px; border-radius: 25px;">
                            <div class="card-header border-0" style="background-color: white">
                                <img class="rounded-circle" src="{{ asset('') }}img/profile/{{ $datas->foto }}" height="140" width="140">
                            </div>
                            <div class="card-block px-2" style="padding-top: 2vw">
                                <h3 class="card-title">{{ $datas->nama }}</h3>
                                    <div class="row">
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian1 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian2 }}</p>  
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian3 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian4 }}</p>      
                                    </div>
                            </div>
                            <div class="w-100" style="padding: 20px; margin-top: -40px">
                                <a href="{{ url('perusahaan/pekerja/' . $datas->id) }}" class="btn btn-primary float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Detail</a>
                                <a href="{{ url('perusahaan/lowongan/prosesCv/' . $datas->id_lowongan . '/' . $datas->id_pekerja) }}" class="btn btn-warning float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Terima Lamaran</a>
                            </div>
                        </div>
                    </div>
                    </td>
                </tr>  
                <tr class="text-center">
                    <td> 
                    <div class="container">
                        <div class="card flex-row flex-wrap" style="margin-bottom: 45px; margin-top: 25px; border-radius: 25px;">
                            <div class="card-header border-0" style="background-color: white">
                                <img class="rounded-circle" src="{{ asset('') }}img/profile/{{ $datas->foto }}" height="140" width="140">
                            </div>
                            <div class="card-block px-2" style="padding-top: 2vw">
                                <h3 class="card-title">{{ $datas->nama }}</h3>
                                    <div class="row">
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian1 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian2 }}</p>  
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian3 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian4 }}</p>      
                                    </div>
                            </div>
                            <div class="w-100" style="padding: 20px; margin-top: -40px">
                                <a href="{{ url('perusahaan/pekerja/' . $datas->id) }}" class="btn btn-primary float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Detail</a>
                                <a href="{{ url('perusahaan/lowongan/prosesCv/' . $datas->id_lowongan . '/' . $datas->id_pekerja) }}" class="btn btn-warning float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Terima Lamaran</a>
                            </div>
                        </div>
                    </div>
                    </td>
                </tr>  
                <tr class="text-center">
                    <td> 
                    <div class="container">
                        <div class="card flex-row flex-wrap" style="margin-bottom: 45px; margin-top: 25px; border-radius: 25px;">
                            <div class="card-header border-0" style="background-color: white">
                                <img class="rounded-circle" src="{{ asset('') }}img/profile/{{ $datas->foto }}" height="140" width="140">
                            </div>
                            <div class="card-block px-2" style="padding-top: 2vw">
                                <h3 class="card-title">{{ $datas->nama }}</h3>
                                    <div class="row">
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian1 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian2 }}</p>  
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian3 }}</p>
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian4 }}</p>      
                                    </div>
                            </div>
                            <div class="w-100" style="padding: 20px; margin-top: -40px">
                                <a href="{{ url('perusahaan/pekerja/' . $datas->id) }}" class="btn btn-primary float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Detail</a>
                                <a href="{{ url('perusahaan/lowongan/prosesCv/' . $datas->id_lowongan . '/' . $datas->id_pekerja) }}" class="btn btn-warning float-right" style="margin-left: 5px; margin-right: 5px; padding-left: 19px; padding-right: 19px;">Terima Lamaran</a>
                            </div>
                        </div>
                    </div>
                    </td>
                </tr>   --}}
                @endforeach
            </tbody>
        </table>
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
    