<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/lumino/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/lumino/css/datepicker3.css" rel="stylesheet">
    <link href="/css/lumino/css/bootstrap-table.css" rel="stylesheet">
    <link href="/css/lumino/css/styles.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/bootstrap-3.3.7/docs/examples/carousel/carousel.css" rel="stylesheet">

     <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >-->

    <!--Icons-->
    <script src="/css/lumino/js/lumino.glyphs.js"></script>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
        <div id="app">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}"><span>
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <ul class="nav navbar-nav">
                        @if (Auth::guest())
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <!--<li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                          </ul>
                        </li>-->
                        @endif
                      </ul>
                    <ul class="user-menu navbar-nav">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li>&nbsp;&nbsp;&nbsp;</li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/userprofile" onclick="">
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
                                
            </div><!-- /.container-fluid -->
        </nav>

        @yield('content')
    </div>




    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/transaction.js"></script>

    <script src="/css/lumino/js/jquery-1.11.1.min.js"></script>
    <!--<script src="/css/lumino/js/bootstrap.min.js"></script>-->
    <script src="/css/lumino/js/chart.min.js"></script>
    <script src="/css/lumino/js/chart-data.js"></script>
    <script src="/css/lumino/js/easypiechart.js"></script>
    <script src="/css/lumino/js/easypiechart-data.js"></script>
    <script src="/css/lumino/js/bootstrap-datepicker.js"></script>
    <script src="/css/lumino/js/bootstrap-table.js"></script>
    <script>
        $('#calendar').datepicker({
        });

        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
                $(this).find('em:first').toggleClass("glyphicon-minus");      
            }); 
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>   
</body>
</html>
