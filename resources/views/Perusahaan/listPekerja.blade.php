@extends('layouts.perusahaan.layout')
@section('content')
<div class="team-boxed" style="padding-top: 63px;background-color: white;">
        <div class="container" style="padding-bottom: 6vw">
            <div class="intro">
                <h2 class="text-center" style="padding-top: 80px;">Pekerja</h2>
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
                            <div class="card flex-row flex-wrap" style="margin-bottom: 45px; margin-top: 25px; border-radius: 25px; background-color: whitesmoke">
                                <div class="card-header border-0" style="background-color: whitesmoke; border-radius: 25px;">
                                    <img class="rounded-circle" src="{{ asset('') }}img/profile/{{ $datas->foto }}" height="140" width="140">
                                </div>
                                <div class="card-block px-2" style="padding-top: 2vw;">
                                    <h3 class="card-title">{{ $datas->nama }}</h3>
                                        <div class="row">
                                            <p style="margin-left: 15px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian1 }}</p>
                                            <p style="margin-left: 15px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian2 }}</p>  
                                            <p style="margin-left: 15px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian3 }}</p>
                                            <p style="margin-left: 15px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->keahlian4 }}</p>      
                                        </div>
                                    
                                </div>
                                <div class="w-100" style="padding: 20px; margin-top: -30px">
                                    <a href="{{ url('perusahaan/pekerja/' . $datas->id) }}" class="btn btn-primary float-right" style="padding-left: 19px; padding-right: 19px">Detail</a>
                                </div>
                            </div>
                        </div>
                        </td>
                    </tr>  
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('jquery')
    <script>
        $(document).ready(function () {
            $("#pekerja").css("background-color", "#6c6b6b");
            $("#home","#lowongan","#profile").css("background-color", "#343a40");
            $('#myTable').DataTable({
                "ordering": false,
                "pagingType": "simple",
                language: {
                    paginate: {
                        previous: '<h6 style="color:grey; text-decoration: none"><<&nbsp;previous&nbsp;&nbsp;</h6>',
                        next:     '<h6 style="color:grey; text-decoration: none">&nbsp;&nbsp;next&nbsp;>></h6>',
                    },
                } 
            });
        });
    </script>
@endsection
