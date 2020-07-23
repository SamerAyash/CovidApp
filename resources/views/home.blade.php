<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> COVID-19 NEWS </title>
    <link href="{{asset('assets/img/shortcut.png')}}" rel="shortcut icon" >
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>
<body>


<header class="account">
    <img src="{{asset('assets/img/virus.png')}}">

</header>

<div class="form-content update">
    <div class="avatar">
        <img src="{{asset('assets/img/back3.png')}}">
        <h1>
            <div class="bar-cont">


                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('home')}}">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('about')}}">About</a>
                            </li>
                            <li class="nav-item">
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button id="logout" type="submit" class="nav-link" style="color: #007bff;background-color:
                                        transparent; -webkit-text-decoration-skip: objects;">
                                            Log out</button>
                                    </form>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>COVID-19 NEWS</h1>
    </div>




    <div class="external-link">
        <div class="external-link-items">
            <div class="thumb">
                <img src="{{asset('assets/img/Last News.png')}}">
            </div>
            <div class="title">
                last news
            </div>
            <div class="go">
                <a href="{{route('lastNews')}}"><img src="{{asset('assets/img/go.png')}}"></a>
            </div>
        </div>

        <div class="external-link-items">
            <div class="thumb">
                <img src="{{asset('assets/img/Countries & Cities.png')}}">
            </div>
            <div class="title">
                Countries & Cities
            </div>
            <div class="go">
                <a href="{{route('countries')}}"><img src="{{asset('assets/img/go.png')}}"></a>
            </div>
        </div>

        <div class="external-link-items">
            <div class="thumb">
                <img src="{{asset('assets/img/Total Cases.png')}}">
            </div>
            <div class="title">
                Critical Cases (ICU)
            </div>
            <div class="go">
                <a href="{{route('critical')}}"><img src="{{asset('assets/img/go.png')}}"></a>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('assets/javascript/jquery.js')}}"></script>
<script src="{{asset('assets/javascript/bootstrap.js')}}"></script>
<script src="{{asset('assets/javascript/custom.js')}}"></script>

</body>
</html>


