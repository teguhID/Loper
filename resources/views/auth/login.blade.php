@extends('layouts.app')

@section('content')
<div class="login-clean" style="padding-top: 187px; padding-bottom: 150px;">
    <form method="post" action="{{ route('login') }}" style="width: 450px;height: 400px;max-width: 450px;">
        {{ csrf_field() }}
        <div class="d-lg-flex illustration">
            <p class="form-control-plaintext d-lg-flex" style="font-size: 30px;font-family: Montserrat, sans-serif;font-weight: bold;font-style: normal;">Log In</p>
        </div>
        <div class="form-group">
            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" style="background-color: rgba(247,249,252,0);width: 370px;" value="{{ old('email') }}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" style="background-color: rgba(247,249,252,0);width: 370px;" autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" data-bs-hover-animate="tada" class="btn btn-primary btn-block" style="background-color: rgb(254,209,54);">Masuk</button>
        </div>
    </form>
</div>

@endsection
