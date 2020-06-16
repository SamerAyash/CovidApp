<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> COVVID-19 NEWS </title>
    <link href="{{asset('assets/img/shortcut.png')}}" rel="shortcut icon" >
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <style>
        .logoutBtn{
            width: 100px !important;
            color: white !important;
            font-weight: 500;
            margin-bottom: -50px !important;
            background-color: #dc3545!important;
        }
    </style>
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
                <i class="fas fa-bars"></i>
            </div>COVID-19 NEWS</h1>
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="btn btn-danger logoutBtn">Log out</button>
        </form>
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
                <a href="#"><img src="{{asset('assets/img/go.png')}}"></a>
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
                <a href="#"><img src="{{asset('assets/img/go.png')}}"></a>
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
                <a href="#"><img src="{{asset('assets/img/go.png')}}"></a>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('assets/javascript/jquery.js')}}"></script>
<script src="{{asset('assets/javascript/bootstrap.js')}}"></script>
<script src="{{asset('assets/javascript/custom.js')}}"></script>

</body>
</html>


