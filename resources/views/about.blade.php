<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{asset('assets/img/shortcut.png')}}" rel="shortcut icon" >
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<style>
    #button{

        width: 60px;
        height: 60px;
        background-color: #1e99b2;
        color: #fff;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
    }
</style>
</head>
<body>

<header class="account">
    <img src="{{asset('assets/img/virus.png')}}">

</header>

<div class="form-content aboutus ">
    <div class="avatar">
        <img src="{{asset('assets/img/back3.png')}}">

    </div>
    <div class="user-logo">
        <img src="{{asset('assets/img/group.png')}}">
        <h1>
            <button class="btn btn-primary" id="button"
                    type="button" data-toggle="collapse" data-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample" >
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
                                <button id="logout" type="submit" class="nav-link border-0 " style="color: #007bff;background-color:
                                        transparent; -webkit-text-decoration-skip: objects;">
                                    Log out</button>
                            </form>
                        </li>

                    </ul>
                </div>
            </div>
            about us</h1>
    </div>
    <div class="p-4">
        <p class="text-white font-weight-bold" style="font-size: 18px">
            Covid-19 updates website is a website delivers the last news and updates from different official resources that helps the user to get updated and limit misinformation about corona virus pandemic.
        </p>
    </div>


</div>


<script src="{{asset('assets/javascript/jquery.js')}}"></script>
<script src="{{asset('assets/javascript/bootstrap.js')}}"></script>
<script src="{{asset('assets/javascript/custom.js')}}"></script>

</body>
</html>


