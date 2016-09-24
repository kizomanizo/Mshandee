<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Mshandee | {{ Auth::user()->name }}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('/css/light-bootstrap-dashboard.css') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('/css/demo.css') }}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'> -->  <link href="{{ asset('/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/custom_dash.css') }}">

    <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="mshandee" data-image="{{ asset('/img/sidebar-5.jpg') }}">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{asset('/home')}}" class="simple-text">
                    {{ config('app.name', 'Mshandee Payroll') }}
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{ url('/') }}">
                        <i class="pe-7s-graph"></i>
                        <p>Titles</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}">
                        <i class="pe-7s-user"></i>
                        <p>Departments</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}">
                        <i class="pe-7s-note2"></i>
                        <p>Statutories</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}">
                        <i class="pe-7s-news-paper"></i>
                        <p>Employees</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}">
                        <i class="pe-7s-science"></i>
                        <p>Salaries</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}">
                        <i class="pe-7s-map-marker"></i>
                        <p>Settings</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="{{ url('/') }}">
                        <i class="pe-7s-rocket"></i>
                        <p>{{ Auth::user()->name }}</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">Account</a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    {{ Auth::user()->name }}
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                <li class="divider"></li>
                                <li><a href="{{ url('/') }}">Settings</a></li>
                              </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<div class="content">
<div class container-fluid>

@yield('content')

</div>
</div>
    <footer class="footer">
        
    </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{ asset('/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="{{ asset('/js/bootstrap-checkbox-radio-switch.js') }}"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="{{ asset('/js/light-bootstrap-dashboard.js') }}"></script>

</html>
