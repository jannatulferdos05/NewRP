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
    @include('home.header')
    <!-- end header section -->



    <!-- project contact section -->

    <!-- start blog -->

    <div class="main-panel">

        <div class="content-wrapper" style="margin-left: 280px;margin-right: 280px;">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
            @endif
            <div class="div_center">

                <div>

                    <h1 style="font-size: 30px; font-weight: bolder; box-shadow: #0c5460; color: teal; padding-bottom: 40px;">Upload a tutorial</h1>
                    <form action="{{url('/save_tutorial')}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="div_design">
                            <label>Project Title</label>
                            <input class="text_color" type="text" name="title" placeholder="Write a title" required="">
                        </div>




                        <div class="div_design">
                            <label>Processes</label>
                            <textarea class="text_color" type="text" name="description" placeholder="Write the processes.." required=""></textarea>
                        </div>


                        <!--  <div class="div_design">
                              <label>Blog Category</label>
                              <select class="text_color" name="category" >

                                  <option value="" selected="">Add a category</option>
                                  <option>ML</option>
                                  <option>DL</option>
                                  <option>AI</option>
                                  <option>Career</option>
                              </select>
                          </div> -->

                        <div class="div_design">
                            <label>Choose Image</label>
                            <input type="file" name="image" >
                        </div>



                        <div class="div_design">
                            <input type="submit" value="Post" class="btn btn-primary">
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>


    <!-- End blog -->

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
