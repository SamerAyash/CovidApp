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
        Countries & cities
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

<article class=" p-5">
    <div>
        <form method="POST" action="{{route('search')}}" class="form-inline">
            @csrf
            <div class="form-group row">
            <input type="text" name="country" class="form-control m-2" placeholder="Search, Country name" value="{{isset($name)? $name:''}}"/>
            <button type="submit" class="btn btn-info m-2">Search</button>
                <a href="{{route('countries')}}" class="btn btn-info m-2">Clear</a>
            </div>
        </form>
        @error('country')
        <div>
            <h6 class="small" style="color: red;font-weight: 600">
                {{$message}}
            </h6>
        </div>
        @enderror
            @for($j=0;$j < count($all)/10;$j++)
                @for($i=0;$i < count($all[$j]);$i++)
                    <hr>
                <div class="row my-2"  style="color: black!important;">
                    <img class="rounded-lg shadow" style="width: 50px!important;"
                         src="{{$all[0][$i]['countryInfo']['flag']}}">
                    <h6 class="px-1 ">{{$all[0][$i]['country']}}</h6>
                </div>
                <div class="row">
                    <p class="small px-1" style="font-weight: 600">( Total Cases={{$all[0][$i]['cases']}} )</p>
                    <p class="small px-1" style="font-weight: 600">( Today Cases={{$all[0][$i]['todayCases']}} )</p>
                    <p class="small px-1" style="font-weight: 600">( Total Deaths={{$all[0][$i]['deaths']}} )</p>
                    <p class="small px-1" style="font-weight: 600">( Today Deaths={{$all[0][$i]['todayDeaths']}} )</p>
                    <p class="small px-1" style="font-weight: 600">( Recovered={{$all[0][$i]['recovered']}} )</p>
                    <p class="small px-1" style="font-weight: 600">( TodayRecovered={{$all[0][$i]['todayRecovered']}} )</p>
                    <p class="small px-1" style="font-weight: 600">( Active={{$all[0][$i]['active']}} )</p>
                    <p class="small px-1" style="font-weight: 600">( Critical Cases={{$all[0][$i]['critical']}} )</p>
                    <p class="small px-1" style="font-weight: 600">( Population={{$all[0][$i]['population']}} )</p>
                    <p class="small px-1" style="font-weight: 600">( Continent={{$all[0][$i]['continent']}} )</p>
                </div>
                @endfor
            @endfor
    </div>

</article>


<script src="{{asset('assets/javascript/jquery.js')}}"></script>
<script src="{{asset('assets/javascript/bootstrap.js')}}"></script>
<script src="{{asset('assets/javascript/custom.js')}}"></script>

</body>
</html>


