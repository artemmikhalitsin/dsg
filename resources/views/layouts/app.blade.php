<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dream Schedule Generator</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('/css/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/google-font.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" >
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>

		.panel-heading{background-color:#3893aa!important}
		.panel{color:grey;
		margin:20px;}

        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        div.footer {
            position : relative;
            bottom : 0;
            height : 120px;
            margin-top: 200px;
            text-align:center;
            width:100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url("{{{ asset('footer.png') }}}");
            overflow:hidden;
            color: white;
        }
		div.img img {
			width: 100%;
			height: auto;
		}
		div.img {

			margin: 10px;
			float: left;
			width: 120px;
			height:180px;
		}

		div.img:hover{

			background-color: lightblue;
			 border-radius: 15px;
		}
		div.desc {
			padding: 10px;
			text-align: center;
			bottom:60px;;
			font-size:12px;
			text-decoration:none;
			color:grey;
		}

		div.desc:hover {

			color: white;
			text-decoration: none;
		}

		a:hover {
		text-decoration: none;
		}

    </style>

    @yield('extraCSS')

</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <img class="img-responsive" src="{{{ asset('header.png') }}}">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                @if (!Auth::guest())
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <img class="img-responsive" src="{{{ asset('DSG_logo.jpg') }}}" style="width: 20px;height: 20px;">
                </a>
                @else
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="img-responsive" src="{{{ asset('DSG_logo.jpg') }}}" style="width: 20px;height: 20px;">
                </a>
                @endif


            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    @if (!Auth::guest())
                        <li><a href="{{ url('/addCompletedCourses') }}"><span class="glyphicon glyphicon-plus"></span> Add Completed Courses</a></li>
                        <li><a href="{{ url('/profile') }}"> <span class="glyphicon glyphicon-cog"></span> Add Preferences</a></li>
                        <li><a href="{{ url('/sequence') }}"> <span class="glyphicon glyphicon-tasks"></span> Generate Sequence</a></li>
                        <li><a href="{{ url('/schedule/generate') }}"> <span class="glyphicon glyphicon-calendar"></span> Generate Schedule</a></li>
                    @endif
                    <li><a href="{{ url('/browseCourses') }}"> <span class="glyphicon glyphicon-list"></span> Browse Courses</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ ucwords(strtolower(Auth::user()->name)) }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/profile') }}"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                                <li><a href="{{ url('/schedule') }}"><span class="glyphicon glyphicon-calendar"></span> View Schedule</a></li>
                                <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <div class="footer">
        <br><br><br><br>
        <p id="foot">RTEAM. All rights reserved. <br> Donations welcome!</p><br>

    </div>

    <!-- JavaScripts -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>
          $.ajaxSetup({
               headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
          });
    </script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    @yield('extraJS')
</body>
</html>
