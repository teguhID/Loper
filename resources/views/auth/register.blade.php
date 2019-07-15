@extends('layouts.app')

@section('content')
<div class="contact-clean" style="padding-top: 130px;">
    <form method="post" action="{{ route('register') }}">
        {{ csrf_field() }}
        <h2 class="text-center">Daftar</h2>
        <input type="hidden" name="status" value="pekerja">
        <div class="form-group">
            <input class="form-control @error('name') is-invalid @enderror" type="text" data-bs-hover-animate="pulse" name="name" placeholder="Name" style="width: 400px;padding-bottom: 6px;margin-bottom: 10px;" value="{{ old('name') }}" required>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input class="form-control @error('email') is-invalid @enderror" type="email" data-bs-hover-animate="pulse" name="email" placeholder="Email" style="width: 400px;padding-bottom: 6px;margin-bottom: 10px;" value="{{ old('email') }}" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input class="form-control @error('password') is-invalid @enderror" type="password" data-bs-hover-animate="pulse" name="password" placeholder="Password" style="width: 400px;padding-bottom: 6px;margin-bottom: 10px;" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input class="form-control" type="password" data-bs-hover-animate="pulse" name="password_confirmation" placeholder="Confirm Password" style="width: 400px;padding-bottom: 6px;margin-bottom: 10px;" required>
        </div>
        <div class="form-group d-lg-flex justify-content-lg-center">
            <button class="btn btn-primary" type="submit">SUBMIT</button>
        </div>
    </form>
</div>
@endsection


