@extends('layouts.splash')

@section('content')

<div class="title m-b-md">
    <span class="landing">Mshandee Payroll</span>
</div>

<div class="links">
    your down-to-earth payroll system
</div>

@if (Route::has('login'))
    <div class="first-action">
        <a href="{{ url('/login') }}">Login</a>
    </div>
@else
    <div class="first-action"> <!-- For picking what to do when the app opens -->
        <a href="{{ url('/login') }}" class="start-text">Start</a>
    </div>
@endif

@endsection