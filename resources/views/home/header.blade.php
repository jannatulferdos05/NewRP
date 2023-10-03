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
                            <li><a href="http://127.0.0.1:8000/home">About</a></li>
                            <li><a href="http://127.0.0.1:8000/home">Tutorials</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="donateWindow()">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/robotics">Robotics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog_list.html">Blog</a>
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
        <input type="submit" value="Donate Now"> <button type="button" onclick="document.getElementById('donate').style.display='none'" class="btn btn-primary" style="position: absolute; left: 40%; margin-top: 4px;">Close</button>
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
