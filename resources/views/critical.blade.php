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
        Critical Cases (ICU)
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

<article class="p-5">
    <p>
    <div data-toggle="collapse" href="#collapseNewsSA" role="button" aria-expanded="false"
         aria-controls="collapseExample" class="row my-2"  style="color: black!important;">
        <i class="fas fa-caret-down p-2"></i>
        <img class="rounded-lg shadow" style="width: 50px!important;
        " src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.3/flags/4x3/sa.svg">
        <h6 class="px-1 ">Saudi Arabia  </h6>
    </div>
    <div class="row">
        <p class="small px-1" style="font-weight: 600">( Recovered= {{$sa['recovered']}} )</p>
        <p class="small px-1" style="font-weight: 600">( Infected= {{$sa['infected']}} )</p>
        <p class="small px-1" style="font-weight: 600">( Deceased= {{$sa['deceased']}} )</p>
        <p class="small px-1" style="font-weight: 600">( Active= {{$sa['active']}} )</p>
    </div>
    </p>
    <div class="collapse" id="collapseNewsSA">
        <div>
            <table class="table table-striped table-sm table-responsive-sm">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">State/City</th>
                    <th scope="col">Infected</th>
                    <th scope="col">Deceased</th>
                    <th scope="col">Active</th>
                    <th scope="col">Recovered</th>
                </tr>
                </thead>
                <tbody class="table-sm">
                @include('saudi_cities')
                </tbody>
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">State/City</th>
                    <th scope="col">Infected</th>
                    <th scope="col">Deceased</th>
                    <th scope="col">Active</th>
                    <th scope="col">Recovered</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
    <div>
        <hr>
        <a href="https://covid19.moh.gov.sa/" target="_blank">
             رابط احصائيات موقع وزارة الصحة
             <i class="fa fa-link"></i>
        </a>
    </div>
</article>


<script src="{{asset('assets/javascript/jquery.js')}}"></script>
<script src="{{asset('assets/javascript/bootstrap.js')}}"></script>
<script src="{{asset('assets/javascript/custom.js')}}"></script>

</body>
</html>
