<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,600" type="text/css"> -->
        <link rel="stylesheet" href="{{ asset('css/custom.css')}}" type="text/css" charset="utf-8" />
        <!-- Styles -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    <span class="landing">Mshandee Payroll</span>
                </div>

                <div class="links">
                    your down-to-earth payroll system
                </div>

                @if (Route::has('login'))
                    <div class="first-action">
                        <a href="{{ url('/login') }}">Login</a> | <a href="{{ url('/register') }}">Register</a>
                    </div>
                @else
                    <div class="first-action"> <!-- For picking what to do when the app opens -->
                        <a href="{{ url('/login') }}" class="start-text">Start</a>
                    </div>
                @endif

            </div>
        </div>
    </body>
</html>
