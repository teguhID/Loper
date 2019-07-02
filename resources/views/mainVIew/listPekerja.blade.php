@extends('layouts.app')
@section('content')
    <div class="team-boxed" style="padding-top: 63px;background-color: #d7d7d7;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="padding-top: 80px;">PEKERJA</h2>
            </div>
            <div class="row people" style="padding-top: 0px;font-weight: bold;">
                <div class="col-sm-4">
                    <div class="team-member" style="background-color: #ffffff;height: 480px;"><img class="rounded-circle mx-auto" src="{{ asset('') }}img/team/1.jpg" style="margin-top: 10px;">
                        <h4>Tinah</h4>
                        <p class="text-muted">Tukang Aduk Semen</p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        <p class="text-muted" style="color: rgb(79,102,126);">Rating : 4.7/5</p>
                        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 67px;margin-top: 13px;"><button class="btn btn-primary shadow-lg" type="button" style="font-size: 20px;padding-right: 22px;padding-left: 22px;padding-bottom: 11px;padding-top: 11px;height: 51px;">Detail</button></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member" style="background-color: #ffffff;height: 480px;"><img class="rounded-circle mx-auto" src="{{ asset('') }}img/team/2.jpg" style="margin-top: 10px;">
                        <h4>Marno</h4>
                        <p class="text-muted">Programmer PHP</p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        <p class="text-muted" style="color: rgb(79,102,126);">Rating : 4.0/5</p>
                        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 67px;margin-top: 13px;"><button class="btn btn-primary shadow-lg" type="button" style="font-size: 20px;padding-right: 22px;padding-left: 22px;padding-bottom: 11px;padding-top: 11px;height: 51px;">Detail</button></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member" style="background-color: #ffffff;height: 480px;"><img class="rounded-circle mx-auto" src="{{ asset('') }}img/1.jpg" style="margin-top: 10px;">
                        <h4>Boim</h4>
                        <p class="text-muted">Guru Matematika</p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        <p class="text-muted" style="color: rgb(79,102,126);">Rating : 4.5/5</p>
                        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 67px;margin-top: 13px;"><button class="btn btn-primary shadow-lg" type="button" style="font-size: 20px;padding-right: 22px;padding-left: 22px;padding-bottom: 11px;padding-top: 11px;height: 51px;">Detail</button></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member" style="background-color: #ffffff;height: 480px;"><img class="rounded-circle mx-auto" src="{{ asset('') }}img/2.jpg" style="margin-top: 10px;">
                        <h4>Jessica</h4>
                        <p class="text-muted">Design 3D</p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        <p class="text-muted" style="color: rgb(79,102,126);">Rating : 4.7/5</p>
                        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 67px;margin-top: 13px;"><button class="btn btn-primary shadow-lg" type="button" style="font-size: 20px;padding-right: 22px;padding-left: 22px;padding-bottom: 11px;padding-top: 11px;height: 51px;">Detail</button></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member" style="background-color: #ffffff;height: 480px;"><img class="rounded-circle mx-auto" src="{{ asset('') }}img/team/3.jpg" style="margin-top: 10px;">
                        <h4>Aura</h4>
                        <p class="text-muted">Makeup Artist</p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        <p class="text-muted" style="color: rgb(79,102,126);">Rating : 0/5</p>
                        <div class="col d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 67px;margin-top: 13px;"><a class="btn btn-primary shadow-lg" role="button" style="font-size: 20px;padding-right: 22px;padding-left: 22px;padding-bottom: 11px;padding-top: 11px;height: 51px;" href="{{ url('/detailPekerja') }}">Detail</a></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member" style="background-color: #ffffff;height: 480px;"><img class="rounded-circle mx-auto" src="{{ asset('') }}img/3.jpg" style="margin-top: 10px;">
                        <h4>John</h4>
                        <p class="text-muted">Electrical Engineer</p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        <p class="text-muted" style="color: rgb(79,102,126);">Rating : 3.5/5</p>
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