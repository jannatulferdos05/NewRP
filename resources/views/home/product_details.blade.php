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


<div class="col-sm-6 col-md-4 col-lg-4"  style="margin:auto;width:50%; padding: 10px;">

        <div class="option_container">
            <div class="options">
                @if($product->holder_id!=0)
                    <a class="btn btn-success" href="{{url('holder',[$product->holder_id,$product->id])}}" class="option1" style="color:white;">
                        Current User
                    </a>
                @endif

            </div>
        </div>
        <div class="img-box" style="padding-bottom: 20px;padding-top: 20px;">
            <img src="product/{{$product->image}}" alt="" style="border-radius: 8px; box-shadow: 0 0 5px #eee;">
        </div>
        <div class="detail-box">
            <h5 style="color:Green;">
                {{$product->title}}
            </h5>

            <h6>
                Product Price: Tk <span style="color:red;">{{$product->price}}</span>
            </h6>

            <h6>
                Product Category: {{$product->category}}
            </h6>
            <h6>
                Product Description: {{$product->description}}
            </h6>
            <h6 style="padding-bottom: 20px;">
                Product Quantity: {{$product->quantity}}
            </h6>

            <form action="{{url('add_cart',$product->id)}}" method="post" >
                @csrf
                <input type="submit" value="Add to Wish" class="option1" style="width: 160px; height: 45px; margin-left: 0px; border-radius: 10px; ">
                <input type="number" name="quantity" value="1" min="1" style="width: 80px;height: 30px; margin-top: 6px; margin-left: 38px; ">
            </form>

        </div>
    </div>
</div>
<!-- why section -->

<!-- end why section -->

<!-- arrival section -->

<!-- end arrival section -->

<!-- product section -->

<!-- end product section -->

<!-- subscribe section -->
@include('home.subscribe')
<!-- end subscribe section -->
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
