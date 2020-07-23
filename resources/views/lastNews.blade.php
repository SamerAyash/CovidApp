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

<header class="green-back">
    <h1>
        covid-19 Last News
    </h1>






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
                        <button id="logout" type="submit" class="nav-link border-0" style=";background-color:
                                        transparent; -webkit-text-decoration-skip: objects;">
                            Log out</button>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</header>

<article>
    <div>
        <h3 class="m-4">آخر الأخبار لوزارة الصحة - أخبار الوزارة</h3>
    </div>

    @foreach($flux[0]->channel->item as $news)
        <div class="article-item ">
            <h3 class="title">{{$news->title}}</h3>
            <div class="row">
                <div class="col-8">
                        <a href="{{$news->link}}" target="_blank" style="word-wrap: break-word">
                            {{$news->link}}"
                        </a>
                </div>
                <div class="col-4">
                    <img src="{{asset('assets/img/ey-webcast-stay-operational-resilient-during-covid-19.jpg')}}">
                </div>
            </div>
        </div>
    @endforeach
</article>


<script src="{{asset('assets/javascript/jquery.js')}}"></script>
<script src="{{asset('assets/javascript/bootstrap.js')}}"></script>
<script src="{{asset('assets/javascript/custom.js')}}"></script>

</body>
</html>


