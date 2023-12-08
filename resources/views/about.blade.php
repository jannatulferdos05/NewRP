<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="frontend/images/favicon.png" type="">
    <title>Robotics and Programming Club</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="frontend/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="frontend/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="frontend/css/responsive.css" rel="stylesheet" />
</head>
<body>
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="{{url('/')}}"><img width="109" height="60" src="logo1.jpeg" alt="#" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>
                <div class="navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://127.0.0.1:8000/about">About</a></li>
                                <li><a href="http://127.0.0.1:8000/tutorial">Tutorials</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="donateWindow()">Subvention</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/robotics">Robotics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/blog')}}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/contact">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('show_cart')}}">WishList</a>
                        </li>

                        <form class="form-inline">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                        @if(Route::has('login'))
                            @auth
                                <li>
                                    <x-app-layout>

                                    </x-app-layout>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="btn btn-primary" style="margin-left: 20px;"  href="{{ route('login') }}">Login</a>
                                </li>

                                <li class="nav-item">
                                    <a class="btn btn-success" style="margin-left: 20px;" href="{{ route('register') }}">Register</a>
                                </li>
                            @endauth
                        @endif


                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div id="donate" style="display:none;width: 300px; height: 200px; position: fixed; top: 30%; left: 40%; background: wheat; box-shadow: 0 0 5px black; z-index: 100;">
        <form action="{{route('donate-now')}}" method="post">
            @csrf
            <h2 align="center" style="font-size: 1.4em">Enter your token</h2>
            <input type="text" name="token">
            <input type="submit" value="Provide Subvention"> <button type="button" onclick="document.getElementById('donate').style.display='none'" class="btn btn-primary" style="position: absolute; left: 40%; margin-top: 4px;">Close</button>
        </form>
    </div>

    <script>
        function donateWindow(){
            document.getElementById('donate').style.display='block';

        }

        @if(session()->has('message'))
            window.onload=()=>{alert("{{session()->get('message')}}")}
        @endif
    </script>

    <!-- end header section -->

    <div style="margin-left: 80px;" >
        <h1 style="color: teal; font-weight: bolder; font-size: 35px;">About The CSE Department</h1>
        <p>This is web application is for the our Departmental purpose.</p>
    </div>


</div>


<!-- footer start -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="full">
                    <div class="logo_footer">
                        <a href="#"><img width="120" height="60" src="logo2.png" alt="#" /></a>
                    </div>
                    <div class="information_f">
                        <p><strong>ADDRESS:</strong>Pabna University of Science and Technology, Pabna</p>
                        <p><strong>TELEPHONE:</strong> +91 987 654 3210</p>
                        <p><strong>EMAIL:</strong> yourname@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget_menu">
                                    <h3>Menu</h3>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Testimonial</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget_menu">
                                    <h3>Account</h3>
                                    <ul>
                                        <li><a href="#">Account</a></li>
                                        <li><a href="#">Checkout</a></li>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">Register</a></li>
                                        <li><a href="#">Shopping</a></li>
                                        <li><a href="#">Widget</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="widget_menu">
                            <h3>Newsletter</h3>
                            <div class="information_f">
                                <p>Subscribe by our newsletter and get update protidin.</p>
                            </div>
                            <div class="form_sub">
                                <form>
                                    <fieldset>
                                        <div class="field">
                                            <input type="email" placeholder="Enter Your Mail" name="email" />
                                            <input type="submit" value="Subscribe" />
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
<div class="cpy_">

</div>
<!-- jQery -->
<script src="frontend/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="frontend/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="frontend/js/bootstrap.js"></script>
<!-- custom js -->
<script src="frontend/js/custom.js"></script>
</body>
</html>
