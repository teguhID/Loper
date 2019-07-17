<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Loper</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 170px">
            <div class="col-5">
                <h3 class="text-center" style="margin-bottom: 40px"><strong>Admin Loper</strong></h3>
                <form method="post" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" style="background-color: rgba(247,249,252,0);" value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" style="background-color: rgba(247,249,252,0);" autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Masuk</button>
                    </div>
                </form>    
            </div>
        </div>
    </div>
</body>
    <script src="{{ asset('') }}js/jquery.min.js"></script>
</html>
