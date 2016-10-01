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
                        <p>Dashboard</p>
                    </a>
                </li>

                @if($sidebar['company'] > 0)
                <li>
                    <a href="{{ url('/companies') }}">
                        <i class="pe-7s-user"></i>
                        <p>Companies</p>
                    </a>
                </li>
                @endif
                @if($sidebar['department'] > 0)
                <li>
                    <a href="{{ url('/') }}">
                        <i class="pe-7s-note2"></i>
                        <p>Departments</p>
                    </a>
                </li>
                @endif
                @if($sidebar['title'] > 0)
                <li>
                    <a href="{{ url('/') }}">
                        <i class="pe-7s-news-paper"></i>
                        <p>Titles</p>
                    </a>
                </li>
                @endif
                @if($sidebar['employee'] > 0)
                <li>
                    <a href="{{ url('/') }}">
                        <i class="pe-7s-science"></i>
                        <p>Employees</p>
                    </a>
                </li>
                @endif
                @if($sidebar['deduction'] > 0)
                <li>
                    <a href="{{ url('/') }}">
                        <i class="pe-7s-map-marker"></i>
                        <p>Deductions</p>
                    </a>
                </li>
                @endif
                @if($sidebar['tax'] > 0)
                <li>
                    <a href="{{ url('/') }}">
                        <i class="pe-7s-bell"></i>
                        <p>Taxes</p>
                    </a>
                </li>
                @endif

                <!-- This link always stays on the botom end of the sidebar -->
                <li class="active-pro">
                    <a href="{{ url('/') }}">
                        <i class="pe-7s-rocket"></i>
                        <p>{{ Auth::user()->name }}</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>