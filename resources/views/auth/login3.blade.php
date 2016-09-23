@extends('layouts.app')

@section('content')
<!-- <h1>Flat Login </h1> -->

<!-- Login Container -->
<section class="login">
    <form action="" method="post" role="form" action="{{ url('/login') }}">
    	{{ csrf_field() }}

        <!-- The E-mail Field -->
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">E-mail
            <input type="text" name="email" id="email" name="email" value="{{ old('email') }}" required autofocus/>
        	</label>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <!-- The Password Field -->
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password">Password
            <input type="password" name="password" id="password" required />
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            </label>
        </div>
        
        <!-- The Remember Me Checkbox -->
        <input type="checkbox" name="remember" id="remember" />
        <label class="check" for="remember"><span></span>Remember Me</label>
        <!-- Clearn both sides -->
        <div class="clear"></div>
        
        <!-- Recover Button -->
        <!-- <input type="button" value="Recover" /> -->
        
        <!-- The Login Button -->
        <input type="submit" value="Login" />
        
        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
    </form>
    </section>

@endsection
