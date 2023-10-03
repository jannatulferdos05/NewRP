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

    <style type="text/css">
        .center{
            margin:auto;
            width: 50%;
            text-align: center;
            padding: 30px;
        }
        table,th,td{
            border: 2px solid gray;
        }
        th{
            font-size: 25px;
            padding: 5px;
            background:lightseagreen;
        }
        .img_des{
            height: 200px;
            width: 200px;
        }

    </style>

</head>
<body>
<div class="hero_area">
    <!-- header section strats -->
    @include('home.header')


<div>
    <table class="center">
        <tr>
            <th>Item Title</th>
            <th>Item Quantity</th>
            <th>Price</th>
            <th>Image</th>
            <th>Details</th>
            <th>Action</th>
            <th>Apply Now</th>
        </tr>

        <?php $totalprice=0; ?>

        @foreach($cart as $cart)
            <tr>
                <td>{{$cart->product_title}}</td>
                <td>{{$cart->quantity}}</td>
                <td>Tk {{$cart->price}}</td>
                <td><img class="img_des" src="/product/{{$cart->image}}"></td>
                <td><a href="{{url('product_details',$cart->Product_id)}}" style="color: #0c5460">Check</a></td>
                <td><a class="btn btn-danger" onclick="return confirm('Are you confirm to remove?')" href="{{url('remove_cart',$cart->id)}}">Remove</a>  </td>
                <td><a class="btn btn-success" onclick="return confirm('Are you confirm to apply?')" href="{{url('apply',$cart->id)}}">Apply</a>  </td>
            </tr>
                <?php $totalprice=$totalprice+$cart->price; ?>
        @endforeach

    </table>
</div>





<div class="cpy_">
    <div class="full">

        <div class="information_f">
            <a href="{{url('/')}}" style=" color: #0c5460"> Explore more....</a>
        </div>
    </div>
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
