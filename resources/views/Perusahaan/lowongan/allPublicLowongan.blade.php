@extends('layouts.perusahaan.layout')
@section('content')
<div class="team-boxed" style="padding-top: 63px;background-color: #d7d7d7;">
    <div class="container" style="padding-bottom: 6vw">
        <div class="intro">
            <h2 class="text-center" style="padding-top: 80px;">Lowongan</h2>
        </div>
        <table id="myTable" style="margin-right: 5vw; margin-left: 5vw;">
            <thead>
                <tr class="text-center">
                        <th width="2200"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $datas)
                <tr class="text-center">
                    <td> 
                        <div class="photo-card" style="margin-top: 1vw; margin-bottom: 3vw;">
                            <div class="photo-background" style=" margin:40px; background-image:url('{{ asset('') }}img/perusahaan/{{ $datas->logo }}');"></div>
                            <div class="photo-details">
                                <h3><strong>{{ $datas->judul }}</strong></h3>
                                <h5 style="color: dodgerblue"><strong>{{ $datas->perusahaan }}</strong></h5>
                                <span style="width: 300px; height: 140px;">{{ substr($datas->deskripsi, 0, 200) }}<br>.....</span>
                                <div class="photo-tags">
                                    <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 67px;margin-top: 13px;"><a href="{{ url('perusahaan/lowongan/dashboard/' . $datas->id) }}" class="btn">Detail</a></div>
                                </div>
                            </div>
                            @if (Auth::user()->name == $datas->perusahaan)
                                <div style=" width: 10px; background-color: green">
                                </div>
                            @else
                                <div style=" width: 10px; background-color: darkgray">
                                </div>
                            @endif
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
            $("#home","#pekerja").css("background-color", "#343a40");
            $('#myTable').DataTable({
                "ordering": false,
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
    