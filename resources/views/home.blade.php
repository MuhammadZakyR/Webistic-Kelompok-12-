<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="styleSuperAdmin.css">
    <script src="https://kit.fontawesome.com/9d394b7022.js" crossorigin="anonymous"></script>

    <title>voTCio</title>
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light font-weight-bold bg-transparent fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="/home">voTCio</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/home">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                DASHBOARD
                    </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Data akun terdaftar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Data E-voting terdaftar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Data E-voting berlangsung</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('createvote')}}">CREATE VOTE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('joinvote')}}">JOIN VOTE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#joinvote">VOTE RESULT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contactus')}}">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#joinvote">FAQ</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!--<div class="jumbotron">
    <div class="container">
        <h1 class="display-4">MAKE YOUR CHOICE</h1>
        <p class="lead">“Every choice you make has an end result.” — Zig Ziglar</p>
        <hr class="my-4">
        <p class="font-weight-bold"> Website E-voting gratis untuk semua jenis pemilihan</p>
        <br>
        <a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button">BERGABUNG</a>
    </div>
    </div> -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">MAKE YOUR CHOICE</h1>
                    <p class="lead">“Every choice you make has an end result.” — Zig Ziglar</p>
                    <hr class="my-4">
                    <p> Website E-voting gratis untuk semua jenis pemilihan umum</p>
                    <br>
                    <a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button">BERGABUNG</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slider2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">MAKE YOUR CHOICE</h1>
                    <p class="lead">“Look for your choices, pick the best one, and then go with it.” — Pat Riley</p>
                    <hr class="my-4">
                    <p> Website E-voting gratis untuk semua jenis pemilihan umum</p>
                    <br>
                    <a class="btn btn-primary btn-lg font-weight-bold " href="# " role="button ">BERGABUNG</a>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="img/slider3.jpg " class="d-block w-100 " alt="... ">
                <div class="carousel-caption d-none d-md-block ">
                    <h1 class="display-4">MAKE YOUR CHOICE</h1>
                    <p class="lead">“There are three constants in life… change, choice and principles.” — Stephen Covey</p>
                    <hr class="my-4 ">
                    <p> Website E-voting gratis untuk semua jenis pemilihan umum</p>
                    <br>
                    <a class="btn btn-primary btn-lg font-weight-bold " href="# " role="button ">BERGABUNG</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev " href="#carouselExampleIndicators " role="button " data-slide="prev ">
            <span class="carousel-control-prev-icon " aria-hidden="true "></span>
            <span class="sr-only ">Previous</span>
        </a>
        <a class="carousel-control-next " href="#carouselExampleIndicators " role="button " data-slide="next ">
            <span class="carousel-control-next-icon " aria-hidden="true "></span>
            <span class="sr-only ">Next</span>
        </a>
    </div>
    </a>

<div class="" aria-labelledby="">
    <a class="" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js " integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js " integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k " crossorigin="anonymous "></script>
</body>

</html>

</html>