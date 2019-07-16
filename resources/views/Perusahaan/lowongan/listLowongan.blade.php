@extends('layouts.perusahaan.layout')
@section('content')
<div style="margin-top: 180px;">
    <div class="container">
        <div class="row d-xl-flex" style="margin-bottom: 16px;">
            <div class="col-md-12 d-xl-flex justify-content-xl-start" style="max-width: 50%;height: 59px;"><img src="{{ asset('') }}img/perusahaan/{{ $perusahaan->logo }}" style="width: 90px;height: 90px;margin-top: -75px;"></div>
            <div class="col-md-12 d-xl-flex justify-content-xl-end" style="max-width: 50%;">
                <a class="btn btn-dark d-xl-flex justify-content-xl-center align-items-xl-center" role="button" style="padding: 15px;padding-top: 10px;padding-bottom: 10px;padding-right: 15px;padding-left: 15px;font-size: 13px;margin-right: 15px;" href="{{ url('perusahaan/lowongan/public') }}"><i class="fa fa-eye" style="font-size: 21px;padding-right: 11px;"></i>Lihat Semua Lowongan</a>
                <a class="btn btn-primary d-xl-flex justify-content-xl-center align-items-xl-center" role="button" style="padding: 15px;padding-top: 10px;padding-bottom: 10px;padding-right: 15px;padding-left: 15px;font-size: 13px;" href="{{ url('perusahaan/lowongan/dashboard/create') }}"><i class="fa fa-newspaper-o" style="font-size: 21px;padding-right: 11px;"></i>Buat Lowongan</a>
            </div>
        </div>
        <div class="row" style="margin-bottom: 40px;">
            <div class="col-md-12"> 
                    <table class="table table-sm" id="myTable">
                        <thead>
                            <tr class="text-center">
                                <th width="50">No</th>
                                <th width="700">Judul</th>
                                <th width="900">Deskripsi</th>
                                {{-- <th width="200">Cv Masuk</th> --}}
                                <th class="d-xl-flex justify-content-xl-center" width="160">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($lowongan as $lowongans)
                            <tr class="text-center">
                                <td class="text-center">{{ $no++ }}</td>
                                <td><a href="{{ url('perusahaan/lowongan/dashboard/' . $lowongans->id) }}" style="color: black">{{ $lowongans->judul }}</a></td>
                                <td>{{substr($lowongans->deskripsi, 0, 100)}} ....<br></td>
                                {{-- <td>1 Orang</td> --}}
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-info btn-xs float-right" href="{{ url('perusahaan/lowongan/dashboard/' . $lowongans->id . '/edit') }}" style="font-size: 12px">Edit</a>
                                        <a class="btn btn-success btn-xs float-right" href="{{ url('perusahaan/lowongan/cvMasuk/' . $lowongans->id ) }}" style="font-size: 12px">Cv Masuk</a>
                                        <a class="btn btn-danger btn-xs float-right" href="{{ url('perusahaan/lowongan/delete/' . $lowongans->id) }}"  onclick="return confirm('Yakin Ingin Hapus Data {{ $lowongans->judul }} ?')" style="font-size: 12px">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jquery')
    <script>
        $(document).ready(function () {
            $("#lowongan").css("background-color", "#6c6b6b");
            $("#home","#pekerja").css("background-color", "#343a40");
            $('#myTable').DataTable({
                "bInfo": false,
                "pagingType": "simple",
                language: {
                    paginate: {
                        previous: '<h6 style="color:orange; text-decoration: none"><<&nbsp;previous&nbsp;&nbsp;</h6>',
                        next:     '<h6 style="color:orange; text-decoration: none">&nbsp;&nbsp;next&nbsp;>></h6>',
                    },
                }
            });
        });
    </script>
@endsection
    