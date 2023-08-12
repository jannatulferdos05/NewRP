<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RP Club</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

    <style>

        *{
            margin: 0px;
            padding: 0px;
        }
        body{
            font-family:sans;
            margin: 0px;
            /* background-image: url("home.jpg");*/
            background-repeat: no-repeat;
            background-color: white;
            background-size: cover;
            width:100%;
            height: 100vh;
        }

        .navbar{
            box-shadow: 0 0 3px gray;
            width: 1300px;
            height: 56px;
            padding-bottom: 8px;
            margin-right: 0px;
        }
        .icon{
            width: 270px;
            float: left;
            height: 70px;
        }

        .logo{
            color: #451952;
            font-size: 45px;
            font-family: "Apple Color Emoji";
            padding-left: 40px;
            float: left;
            padding-top: 10px;
        }

        .menue{

            width: 580px;
            padding-left: 0px;
            float: left;
            height: 70px;
        }
        ul{
            float: left;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        ul li{
            list-style: none;
            margin-left: 15px;
            margin-top: 27px;
            font-size: 14px;
            cursor: pointer;
        }
        ul li a{
            text-decoration: none;
            color: black;
            font-family: sans;
            font-weight: bold;
            transition: 0.4s ease-in-out;
            cursor: pointer;
        }
        ul li a:hover{
            color: crimson;
            cursor: pointer;
        }
        .search{
            margin-left: 0px;
            width: 270px;
            float: left;

        }
        .srch{
            font-family: "Times New Roman";
            height: 35px;
            width: 190px;
            background: transparent;
            border: 2px solid;
            border-radius: 5px solid pink;
            margin-top: 20px;
            color: black;
            font-size: 16px;
            float: left;
            padding: 10px;
        }
        .btn{
            width: 80px;
            height: 35px;
            background: #072E33;
            font-size: 15px;
            border: 2px solid #072E33;
            color: #fff;
            margin-top: 20px;
        }
        .btn:focus{
            outline: none;
        }
        .srch:focus{
            outline: none;
        }
        .sm{
            width: 150px;
            height: 60px;
            margin-left: 1150px;
        }

        .content{
            width: 1100px;
            height: auto;
            padding-top: 20px;
            margin-top: 10px;
            color: black;
            position: relative;
            margin-left: 40px;
        }
        .content.par{
            padding-left: 20px;
            padding-bottom: 25px;
            font-family: Arial;
            letter-spacing: 1.2px;
            line-height: 30px;
        }
        .content h1{
            font-family: "Times New Roman";
            font-size: 40px;
            letter-spacing: 2px;
        }
        .form{
            width: 250px;
            height: 380px;
            background: #072E33;
            position: absolute;
            top: 100px;
            left: 870px;

            border-radius: 10px;
            padding: 25px;

        }

        .form input{
            width: 240px;
            height: 35px;
            background: transparent;
            border-bottom: 1px solid #ffffff;
            border-top: none;
            border-left: none;
            border-right: none;
            color: #fff;
            font-size: 15px;
            letter-spacing: 1px;
            margin-top: 30px;
            font-family: sans-serif;

        }
        .form input-focus{
            outline: none;
        }
        ::placeholder{
            color: whitesmoke;
            font-family: Arial;
        }
        .btnn{
            width: 240px;
            height: 40px;
            background: white;
            border: none;
            margin-top: 30px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            color: black;

        }
        .btnn:hover{
            background: cornsilk;
            color: greenyellow;
        }
        .btnn a{
            text-decoration: none;
            color: black;
            font-weight: bold;
        }


        .form.link{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 17px;
            padding-top: 20px;
            text-align: center;
        }
        .form.link a{
            text-decoration: none;
            color: white;
            text-align: center;
        }
        .liw{
            color: white;
            padding-top: 15px;
            padding-bottom: 10px;
            text-align: center;
        }
        .latest{
            margin-top: 5px;
            padding-top: 0px;
            padding-left: 40px;
            width: 635px;
        }

        .latest-list{
            display: grid;
            grid-template-columns: repeat(auto-fit,minmax(200px,1fr));
            width: 700px;
            grid-gap: 20px;
            margin-top: 0px;
        }
        .latest-list div{
            background: whitesmoke;
            padding: 40px;
            font-size: 13px;
            font-weight: bolder;
            border-right: 10px;
            box-shadow: 0 0 10px gray;
            transition: 0.3s;
            width: 70px;
            height: 70px;
            margin-top: 30px;
        }
        .latest-list div:hover{
            box-shadow: 0 0 15px gray;
        }
        .latest-list div h4{
            color: white;
            font-size: 15px;
            font-weight: bolder;
            margin-bottom: 0px;
        }
        .latest-list div a{
            text-decoration: none;
            color: teal;
            font-size: 12px;
            margin-top: 5px;
            display: inline-block;
        }
        .latest-list div a:hover{
            color: orangered;
        }
        .icons{
            margin-top: 5px;
        }
        .icons a{
            text-decoration: none;
            font-size: 30px;
            color: #ababab;
            display: inline-block;
            padding-left: 15px;

        }
    </style>

</head>

<body>

<div class="navbar">
    <div class="icon">
        <h1 class="logo">RoboPrO</h1>
    </div>
    <div class="menue">
        <ul>
            <li><a href="http://127.0.0.1:8000/dashboard">HOME</a> </li>
            <li><a href="http://127.0.0.1:8000/about">ABOUT</a> </li>
            <li><a href="http://127.0.0.1:8000/robotics">ROBOTICS</a> </li>
            <li><a href="http://127.0.0.1:8000/programming">PROGRAMMING</a> </li>
            <li><a href="#">NOTIFICATIONS</a></li>
        </ul>
    </div>
    <div class="search">
        <input class="srch" type="search" name="" placeholder="Type to text">
        <a href="#"><button class="btn">Search</button> </a>

    </div>


        @if (Route::has('login'))
            <div class="sm">
                @auth
                    <a href="{{ url('/redirect') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

</div>

<div class="content">
    <h3>Robotics & Competitive <span>Programming</span><br>improvement</h3>
    <p class="par">To learn robotics and competitive programming also managing those club as well,
        it will help you.
    </p>
    <div class="form">
        <h2 style="color: white; padding-left: 50px;">Login Here</h2>
        <input type="email" name="email" placeholder="Enter e-mail here">
        <input type="password" name="" placeholder="Enter password here">
        <button class="btnn"><a href="#" >Login</a></button>
        <p class="link" style="color: white;"><br>Don't have an account?<br>
            <a href="http://127.0.0.1:8000/register"  style="color: crimson; font-size: 15px;">Sign up here</a></p>
        <p class="liw" >Login with</p>
        <div class="icons">
            <a href="https://www.facebook.com/login.php"><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-google"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-skype"></i></a>
        </div>
    </div>
</div>

<div class="latest" style="color: #2d3748;">
    <h4 style="margin-top: 20px; font-size: 1.5em;">Latest technologies</h4>
    <hr>
    <div class="latest-list" style="height: 400px; width: 700px; ">
        <div style="background-image: url(ml.jpg); ">
            <h4>Machine Learning</h4>
            <a href="https://www.ibm.com/topics/machine-learning">Learn more</a>
        </div>
        <div style="background-image: url(dl.jpg);">
            <h4>Deep Learning</h4>
            <a href="https://www.ibm.com/topics/deep-learning">Learn more</a>
        </div>
        <div style="background-image: url(blockchain1.jpeg);">
            <h4>Block Chain</h4>
            <a href="https://www.ibm.com/topics/blockchain">Learn more</a>
        </div>
        <div style="background-image: url('ai.jpg'); background-size: cover;">
            <h4>Artifial Intelligence</h4>
            <a href="https://www.ibm.com/topics/artificial-intelligence">Learn more</a>
        </div>
        <div style="background-image: url(nj.jpg); background-size: cover;">
            <h4>Node <br>JS</h4>
            <a href="https://nodejs.org/en/about">Learn more</a>
        </div>
        <div style="background-image: url(nn.jpg);">
            <h4>Neural Networking</h4>
            <a href="https://www.ibm.com/topics/neural-networks">Learn more</a>
        </div>

    </div>
</div>

<script src="https://kit.fontawesome.com/4aeccc6928.js" crossorigin="anonymous"></script>

</body>




</html>
