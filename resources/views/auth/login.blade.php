<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> COVVID-19 NEWS</title>
    <link href="{{asset('assets/img/shortcut.png')}}" rel="shortcut icon" >
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>
<body>
<header class="welcome">
    <img src="{{asset('assets/img/virus.png')}}">
    <h2>Welcome to</h2>
    <h1>COVID -19 NEWS</h1>
</header>
<form method="POST" action="{{ route('login') }}" class="welcome">
    @csrf
    <div class="form-group margin-top">

        <div class="input-group ">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="far fa-user"></i></div>
            </div>
            <input type="text" class="form-control is-invalid @error('name') is-invalid @enderror"
                   placeholder="Username" name="name" value="{{ old('name') }}" >
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group">

        <div class="input-group ">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-unlock"></i></div>
            </div>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                   id="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;" autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div class="form-check input-group-prepend m-1">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label text-white" for="remember">
                <b>Remember Me</b>
            </label>
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Sign in</button>
    </div>
    <div class="form-group">
        <button class="btn btn-primary"><a href="{{route('register')}}" style="text-decoration: none;">register</a></button>
    </div>
</form>
<div class="back-content">
    <img src="{{asset('assets/img/back1.png')}}">
</div>



<script src="{{asset('assets/javascript/jquery.js')}}"></script>
<script src="{{asset('assets/javascript/bootstrap.js')}}"></script>
<script src="{{asset('assets/javascript/custom.js')}}"></script>

</body>
</html>

