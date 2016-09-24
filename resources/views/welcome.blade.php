@extends('layouts.splash')

@section('content')

<div class="title m-b-md">
    <span class="landing">Mshandee Payroll</span>
</div>
@if (Route::has('login'))
	<div class="links">
	{{{ $message or 'An elegant payroll application' }}}
	</div>

    <div class="first-action">
        <a href="{{ url('/login')}}" class="start-text">Login</a>
    </div>
@else
	<div class="links">
	You need to setup a new account
	</div>

    <div class="first-action">
        <a href="{{ url('/register') }}" class="start-text">Create Account</a>
    </div>
@endif

@endsection