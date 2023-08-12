<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>about</title>

    <style>

        *{
            margin: 0px;
            padding: 0px;
        }
        body{
            margin: 0px;
            /* background-image: url("home.jpg");*/
            background-color: wheat;
            background-repeat: no-repeat;
            background-size: cover;
            width:100%;
            height: 100vh;
        }

        .navbar{
            width: 1300px;
            box-shadow: 0 0 3px gray;
            height: 56px;
            padding-bottom: 8px;
        }
        .icon{
            width: 270px;
            float: left;
            height: 70px;
        }

        .logo{
            color: teal;
            font-size: 45px;
            font-family: "Apple Color Emoji";
            padding-left: 40px;
            float: left;
            padding-top: 10px;
        }

        .menue{
            width: 640px;
            padding-left: 20px;
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
            margin-left: 40px;
            margin-top: 27px;
            font-size: 14px;
            cursor: pointer;
        }
        ul li a{
            text-decoration: none;
            color: black;
            font-family: Arial;
            font-weight: bold;
            transition: 0.4s ease-in-out;
            cursor: pointer;
        }
        ul li a:hover{
            color: crimson;
            cursor: pointer;
        }
        .search{
            margin-left: 20px;
            width: 290px;
            float: left;

        }
        .srch{
            font-family: "Times New Roman";
            height: 35px;
            width: 190px;
            background: transparent;
            border: 2px solid;
            border-radius: 5px;
            margin-top: 20px;
            color: black;
            font-size: 16px;
            float: left;
            padding: 10px;
        }
        .btn{
            width: 100px;
            height: 35px;
            background: teal;
            font-size: 15px;
            border: 2px solid teal;
            color: #fff;
            margin-top: 20px;
            border-radius: 4px;
            border-bottom-right-radius: 5px;
        }
        .btn:focus{
            outline: none;
        }
        .srch:focus{
            outline: none;
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
            <li><a href="http://127.0.0.1:8000/home">HOME</a> </li>
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
</div>
</body>
</html>
