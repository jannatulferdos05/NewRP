<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <base href="/public" >
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
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
        <div class="slider_bg_box">
            <img src="images/pointing.jpg" alt="">
        </div>
    </section>

    <!-- end slider section -->
</div>


<!-- product section -->
@include('home.product')
<!-- end product section -->

<!-- project show section -->

<div style="margin-left: 80px; padding-top: 0px;">

    <a href="{{url('/showcase')}}" class="btn btn-success">Add Project</a>

</div>


<h1 style="font-weight: bold;color: #0c5460; margin-left: 540px;margin-top: 10px; font-size: 30px;" >Project ShowCASE</h1>

<div style="margin-left: 80px; padding-top: 10px; display: flex; flex-wrap: wrap;">

    @foreach($showcase as $showcase)

        <div style="margin-bottom: 20px; width: 31%; margin: 5px;min-height: 400px;">
            <div class="img-box" style="width: 100%;" >
                <img src="product/{{$showcase->image}}" alt="" style="width: 100%;">
            </div>
            <div class="detail-box">
                <h5>
                    Title : <span style="color:crimson;">{{$showcase->title}}</span>
                </h5>

                <h6>
                    Required Tools : {{$showcase->tools}}
                </h6>
                <h6>
                    Description : {{$showcase->description}}
                </h6>
                <h6>
                    Posted By : <span style="color:green">{{$showcase->author}}</span>
                </h6>
                <div class="btn btn-primary" style="color:"><a href="">Tutorial</a></div>

            </div>

        </div>


    @endforeach



</div>


<!-- end project show section -->
<!-- client section -->

<!-- end client section -->
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
