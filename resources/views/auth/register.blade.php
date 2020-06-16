<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COVVID-19 NEWS</title>
    <link href="{{asset('assets/img/shortcut.png')}}" rel="shortcut icon" >
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>
<body>


<header class="account">
    <img src="{{asset('assets/img/virus.png')}}">

</header>

<div class="form-content account">
    <div class="avatar">
        <img src="{{asset('assets/img/back2.png')}}">
        <h1>create account</h1>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group ">

            <div class="input-group ">

                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                       placeholder="Your username" value="{{ old('name') }}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group ">

            <div class="input-group ">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                       value="{{ old('email') }}" placeholder="Your e-mail">
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group ">

            <div class="input-group ">

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                       placeholder="Your password ">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <div class="input-group-prepend">
                    <div class="input-group-text">{{--<img src="{{asset('assets/img/correct.png')}}">--}}</div>
                </div>
            </div>
        </div>

        <div class="form-group ">

            <div class="input-group ">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password">
                <div class="input-group-prepend">
                    <div class="input-group-text">{{--<img src="{{asset('assets/img/correct.png')}}">--}}</div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit"><img src="{{asset('assets/img/go.png')}}"></button>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" style="background-color: white;border: #fff;width: 100%;color: #007aa3;font-family: 'Myriad';
            font-size: 20px;text-transform: uppercase;border-radius: 20px;padding: 10px;">
                <a href="{{route('login')}}" style="text-decoration: none;">Sing in</a>
            </button>
        </div>
    </form>
</div>


<script src="{{asset('assets/javascript/jquery.js')}}"></script>
<script src="{{asset('assets/javascript/bootstrap.js')}}"></script>
<script src="{{asset('assets/javascript/custom.js')}}"></script>

</body>
</html>


