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