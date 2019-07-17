@extends('layouts.pekerja.layout')
@section('content')
<div class="team-boxed" style="padding-top: 83px ;background-color: white; padding-bottom: 100px;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="padding-top: 40px;">Cv Terkirim</h2>
            </div>
            <table class="table table-striped" id="myTable" style="">
                <thead>
                    <tr class="text-center">
                        <th width="50">No</th>
                        <th width="700">Lowngan</th>
                        <th width="1000">Deskripsi</th>
                        <th width="200">Status</th>
                        <th class="d-xl-flex justify-content-xl-center" width="60">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($data as $datass)
                    <tr class="text-center">
                        <td class="text-center">{{ $no++ }}</td>
                        <td>{{ $datass->judul }}</td>
                        <td>{{substr($datass->deskripsi, 0, 100)}} ....<br></td>
                        <td>{{ $datass->status }}</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-info btn-xs float-right" href="{{ url('/pekerja/detailLowongan/' . $datass->id) }}" ><i class="fa fa-eye"></i></a>
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
            $("#lowongan").css("background-color", "#6c6b6b");
            $("#lamaran","#home","#perusahaan").css("background-color", "#343a40");
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