@extends('layouts.pekerja.layout')
@section('content')
<div class="article-dual-column" style="padding-top: 90px;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="intro">
                    <h1 class="text-center" style="margin-bottom: 0px;"><strong>{{ $lowongan->judul }}</strong></h1>
                </div>
                <div class="intro">
                    <h1 class="text-center" style="font-size: 21px;margin-top: -52px;"><i class="material-icons">place</i>&nbsp;{{ $lowongan->tempat }}</h1>
                </div>
                <div class="intro">
                    <h1 class="text-center" style="font-size: 21px;margin-top: -52px;">&nbsp;Deadline : {{ date("d-m-Y", strtotime($lowongan->deadline)) }}</h1>
                    <br>
                </div>
                @if ($dataLamaran == true)
                    <h1 class="text-center" style="font-size: 16px;margin-top: -52px;color: lightseagreen">Status Cv :&nbsp;{{ $dataLamaran->status }}</h1>
                @else
                    <h1 class="text-center" style="font-size: 16px;margin-top: -52px;color: red">Status CV :&nbsp;-</h1>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-lg-3 offset-md-1"><img class="img-fluid" src="{{ asset('') }}img/perusahaan/{{ $perusahaan->logo }}" style="width: 273px;"></div>
            <div class="col-md-10 col-lg-7 offset-md-1 offset-lg-0">
                <div class="text">
                    <p><br><?php echo(nl2br($lowongan->deskripsi)); ?><br><br></p>
                    <!-- Button Trigger Confirm -->
                    @if ($dataLamaran == true)
                        @if ($dataLamaran->status == "Cv Terkirim")
                            <a href="{{ url('pekerja/detailPerusahaan/tarikCv/' . $dataLamaran->id) }}" class="btn btn-danger" style="margin-bottom: 50px;padding-top: 12px;padding-right: 40px;padding-bottom: 12px;padding-left: 40px;margin-top: 50px;">
                                Tarik CV
                            </a>
                        @else
                            <div class="alert alert-warning" role="alert">
                                Cv anda sudah di Proses oleh perusahaan, Tunggu sampai pihak perusahaaan menghubungi anda untuk proses recruitment selanjutnya
                            </div>
                            <a class="btn btn-danger disabled" style="margin-bottom: 50px;padding-top: 12px;padding-right: 40px;padding-bottom: 12px;padding-left: 40px;">
                                Tarik CV
                            </a>
                            {{-- Cv anda sudah di Proses oleh perusahaan --}}
                        @endif
                    @else
                        <a href="#" class="btn btn-primary" style="margin-bottom: 50px;padding-top: 12px;padding-right: 40px;padding-bottom: 12px;padding-left: 40px;margin-top: 50px;" data-toggle="modal" data-target="#exampleModalCenter">
                            Kirim CV
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Confirm -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
               Kirim CV anda untuk pekerjaan <strong>{{ $lowongan->judul }}</strong> ?<br><br><br>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                <a href="{{ url('pekerja/detailPerusahaan/kirimCv/' . $lowongan->id) }}" class="btn btn-primary">Kirim</a>
            </div>
          </div>
        </div>
      </div>

@endsection
@section('jquery')
    <script>
        $(document).ready(function () {
            $("#lowongan").css("background-color", "#6c6b6b");
            $("#lamaran","#home","#perusahaan").css("background-color", "#343a40");
        });
    </script>
@endsection