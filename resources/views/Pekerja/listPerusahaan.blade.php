@extends('layouts.pekerja.layout')
@section('content')
<div class="team-boxed" style="padding-top: 63px;background-color: #d7d7d7;">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="padding-top: 80px;">PERUSAHAAN</h2>
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
                                <img class="rounded-circle" src="{{ asset('') }}img/perusahaan/{{ $datas->logo }}" height="140" width="140">
                            </div>
                            <div class="card-block px-2" style="padding-top: 2vw">
                                <h3 class="card-title">{{ $datas->nama_perusahaan }}</h3>
                                    <div class="row">
                                        <p style="padding: 5px; margin-left: 10px;" class="card-text"><i class="fa fa-circle"></i> {{ $datas->jenis_usaha }}</p>      
                                    </div>
                                
                            </div>
                            <div class="w-100" style="padding: 20px; margin-top: -40px">
                                <a href="{{ url('pekerja/detailPerusahaan/' . $datas->id) }}" class="btn btn-primary float-right" style="padding-left: 19px; padding-right: 19px">Detail</a>
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
            $("#perusahaan").css("background-color", "#6c6b6b");
            $("#lamaran","#home","#lowongan").css("background-color", "#343a40");
            $('#myTable').DataTable({
                "bLengthChange": false,
                "bFilter": true,
                "bInfo": false,
                "bAutoWidth": false,
                "pagingType": "simple",
                language: {
                    paginate: {
                        previous: '<h6 style="color:#F9B32F; text-decoration: none"><<&nbsp;previous&nbsp;&nbsp;</h6>',
                        next:     '<h6 style="color:#F9B32F; text-decoration: none">&nbsp;&nbsp;next&nbsp;>></h6>',
                    },
                } 
            });
        });
    </script>
@endsection