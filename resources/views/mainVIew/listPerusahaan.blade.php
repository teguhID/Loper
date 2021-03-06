@extends('layouts.app')
@section('content')
<div class="team-boxed" style="padding-top: 63px;background-color: #d7d7d7;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="padding-top: 80px;">PERUSAHAAN</h2>
            </div>
            <div class="row people" style="padding-top: 0px;font-weight: bold;">
                <div class="col-md-6 col-lg-4 item" style="height: 400px;margin-bottom: 30px;">
                    <div class="box" style="height: 400px;">
                        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 165px;"><img class="img-fluid" src="{{ asset('') }}img/microsoft.png"></div>
                        <h3 class="d-lg-flex justify-content-lg-center align-items-lg-start name">Microsoft</h3>
                        <p class="d-lg-flex justify-content-lg-center title">It</p>
                        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 67px;margin-top: 13px;"><button class="btn btn-primary shadow-lg" type="button" style="font-size: 20px;padding-right: 22px;padding-left: 22px;padding-bottom: 11px;padding-top: 11px;height: 51px;">Detail</button></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item" style="height: 400px;margin-bottom: 30px;">
                    <div class="box" style="height: 400px;">
                        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 165px;"><img class="img-fluid" src="{{ asset('') }}img/bukalapak.png"></div>
                        <h3 class="d-lg-flex justify-content-lg-center align-items-lg-start name">Bukalapak</h3>
                        <p class="d-lg-flex justify-content-lg-center title">E-commerce</p>
                        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 67px;margin-top: 13px;"><button class="btn btn-primary shadow-lg" type="button" style="font-size: 20px;padding-right: 22px;padding-left: 22px;padding-bottom: 11px;padding-top: 11px;height: 51px;">Detail</button></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item" style="height: 400px;margin-bottom: 30px;">
                    <div class="box" style="height: 400px;">
                        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 165px;"><img class="img-fluid" src="{{ asset('') }}img/Daaruttauhiid.png"></div>
                        <h3 class="d-lg-flex justify-content-lg-center align-items-lg-start name">Daarut Tauhid</h3>
                        <p class="d-lg-flex justify-content-lg-center title">pendidikan</p>
                        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 67px;margin-top: 13px;"><button class="btn btn-primary shadow-lg" type="button" style="font-size: 20px;padding-right: 22px;padding-left: 22px;padding-bottom: 11px;padding-top: 11px;height: 51px;">Detail</button></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item" style="height: 400px;margin-bottom: 30px;">
                    <div class="box" style="height: 400px;">
                        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 165px;"><img class="img-fluid" src="{{ asset('') }}img/kahatex.png"></div>
                        <h3 class="d-lg-flex justify-content-lg-center align-items-lg-start name">Kahatex</h3>
                        <p class="d-lg-flex justify-content-lg-center title">Textile</p>
                        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 67px;margin-top: 13px;"><button class="btn btn-primary shadow-lg" type="button" style="font-size: 20px;padding-right: 22px;padding-left: 22px;padding-bottom: 11px;padding-top: 11px;height: 51px;">Detail</button></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item" style="height: 400px;margin-bottom: 30px;">
                    <div class="box" style="height: 400px;">
                        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 165px;"><img class="img-fluid" src="{{ asset('') }}img/inovindodigitalmedia.jpg"></div>
                        <h3 class="d-lg-flex justify-content-lg-center align-items-lg-start name">Inovindo</h3>
                        <p class="d-lg-flex justify-content-lg-center title">it consultant</p>
                        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 67px;margin-top: 13px;"><a class="btn btn-primary shadow-lg" role="button" style="font-size: 20px;padding-right: 22px;padding-left: 22px;padding-bottom: 11px;padding-top: 11px;height: 51px;" href="{{ url('/detailPerusahaan') }}">Detail</a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item" style="height: 400px;margin-bottom: 30px;">
                    <div class="box" style="height: 400px;">
                        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 165px;"><img class="img-fluid" src="{{ asset('') }}img/rekind.png" style="width: 103px;"></div>
                        <h3 class="d-lg-flex justify-content-lg-center align-items-lg-start name">Rekind</h3>
                        <p class="d-lg-flex justify-content-lg-center title">Kontraktor</p>
                        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 67px;margin-top: 13px;"><button class="btn btn-primary shadow-lg" type="button" style="font-size: 20px;padding-right: 22px;padding-left: 22px;padding-bottom: 11px;padding-top: 11px;height: 51px;">Detail</button></div>
                    </div>
                </div>
            </div>
            <nav class="text-success border-dark d-lg-flex justify-content-lg-center">
                <ul class="pagination">
                    <li class="page-item shadow-lg" style="color: rgb(0,0,0);"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="page-item shadow-lg" style="color: rgb(0,0,0);"><a class="page-link" href="#">1</a></li>
                    <li class="page-item shadow-lg" style="filter: blur(0px);"><a class="page-link" href="#">2</a></li>
                    <li class="page-item shadow-lg"><a class="page-link" href="#">3</a></li>
                    <li class="page-item shadow-lg"><a class="page-link" href="#">4</a></li>
                    <li class="page-item shadow-lg"><a class="page-link" href="#">5</a></li>
                    <li class="page-item border rounded shadow-lg"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection