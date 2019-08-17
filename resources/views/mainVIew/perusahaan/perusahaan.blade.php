@extends('layouts.perusahaan')
@section('content')
<div style="padding-top: 90px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1" style="height: 522px;">
                    <h1 style="margin-top: 90px; padding-right: 30px; color: black">Anda Mencari Karyawan ??</h1>
                    <p style="padding-right: 30px; color: black">Daftarkan segera perusahaan anda untuk mendapatkan karyawan terbaik di sini</p>
                </div>
                <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-flex justify-content-lg-center align-items-lg-center phone-holder">
                    <form method="post" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="status" value="perusahaan">
                        <h2 class="text-center" style="padding-top: 60px;color: black;padding-bottom: 30px;font-size: 20px;">Bergabunglah Bersama<br>Kami</h2>
                        <div class="form-group">
                            <input class="bg-white shadow form-control @error('name') is-invalid @enderror" type="text" data-bs-hover-animate="pulse" name="name" placeholder="Name" style="width: 400px;padding-bottom: 6px;margin-bottom: 10px;" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input class="bg-white shadow form-control @error('email') is-invalid @enderror" type="email" data-bs-hover-animate="pulse" name="email" placeholder="Email" style="width: 400px;padding-bottom: 6px;margin-bottom: 10px;" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input class="bg-white shadow form-control @error('password') is-invalid @enderror" type="password" data-bs-hover-animate="pulse" name="password" placeholder="Password" style="width: 400px;padding-bottom: 6px;margin-bottom: 10px;" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input class="bg-white shadow form-control" type="password" data-bs-hover-animate="pulse" name="password_confirmation" placeholder="Confirm Password" style="width: 400px;padding-bottom: 6px;margin-bottom: 10px;" required></div>
                            <div class="form-group d-lg-flex justify-content-lg-center">
                                {{-- <a class="btn btn-lg" role="button" data-bs-hover-animate="pulse" href="#" style="background-color: rgb(78,72,72);font-size: 19px;color: rgb(255,255,255);margin-top: 20px;">DAFTAR</a> --}}
                                <button class="btn btn-lg" type="submit" style="background-color: rgb(78,72,72);font-size: 19px;color: rgb(255,255,255);margin-top: 20px;">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection