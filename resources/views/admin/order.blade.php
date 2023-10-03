<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />

    <style type="text/css">
        .center{

            width: 100%;
            border: 2px solid green;
            text-align: center;
            margin-top: 30px;
        }
        .th_des{
            padding: 10px;
        }
    </style>

</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.header')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
            @endif


            <h2 style="text-align: center;font-size: 30px;padding-top: 15px;">All Requests</h2>
            <table class="center">
                <tr style="background:green">
                    <th class="th_des">Name</th>
                    <th class="th_des">Email</th>
                    <th class="th_des">Roll</th>
                    <th class="th_des">Session</th>

                    <th class="th_des">Item Title</th>
                    <th class="th_des">Quantity</th>
                    <th class="th_des">Price</th>
                    <th class="th_des">Image</th>

                    <th class="th_des">Issue Date</th>
                    <th class="th_des">Cancel</th>
                    <th class="th_des">Approve</th>
                </tr>

                @foreach($order as $order)
                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->roll}}</td>
                        <td>{{$order->session}}</td>

                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>


                        <td>
                            <img style="width: 100px; height: 100px;" src="/product/{{$order->image}}"></img>
                        </td>

                        <td>Not Issued</td>


                        <td><a class="btn btn-danger" onclick=" return confirm('Are you sure to delete?')"
                               href="#">Cancel</a></td>
                        <td><button class="btn btn-success" onclick="disable(this)" >Approve</button></td>

                    </tr>
                @endforeach

            </table>
        </div>
    </div>



    <!-- container-scroller -->
    <!-- plugins:js -->
    <script>
        function disable(x){
            x.disabled = true;
        }
    </script>

    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>
</html>
