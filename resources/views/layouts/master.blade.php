<!DOCTYPE html>
<html>
<head>
	

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bizcon</title>
    <link rel="icon" href="{{asset('img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css1/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('css1/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('css1/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('css1/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('css1/flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css1/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css1/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('css1/style.css')}}">


</head>
<body>


 <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-xl-8">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="master.blade.php"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('accueil')}}">Home </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="blog.html">Blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Page
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="project.html">Project</a>
                                        <a class="dropdown-item" href="project_details.html">Project Details</a>
                                        <a class="dropdown-item" href="{{ url('service')}}">Service</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li>

                                 <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        S'inscrire
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                       


                                         @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="dropdown-item" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="dropdown-item" href="{{ route('login') }}">deja avais un compte </a>

                        @if (Route::has('register'))
                            <a class="dropdown-item" href="{{ route('register') }}"><b>compte condidat</b><br>déposer un CV</a>
                        @endif
                    @endauth
                </div>
            @endif

                                        <a class="dropdown-item" href="single-blog.html"><b>compte recruteur</b><br>déposer un offre </a>
                                    </div>
                                </li>



                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('contact')}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>


@yield('content')





 <script src="{{ asset('js1/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{ asset('js1/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js1/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{ asset('js1/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{ asset('js1/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{ asset('js1/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{ asset('js1/owl.carousel.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{ asset('js1/slick.min.js')}}"></script>
    <!-- custom js -->
    <script src="{{ asset('js1/custom.js')}}"></script>


</body>
</html>