@extends('layouts.login')
@section('title', 'Login')
@section('content')
<div class="content">
    <div class="brand">
        <a class="link" href="{{ route('login') }}"></a><br>
    </div>
    <form id="login-form" action="{{ route('login') }}" method="POST">
        @csrf
        <div>
            @if($all_view['setting']->logo)
            <img src="{{ asset($all_view['setting']->logo) }}" width="145px" style="margin-left:30%;" />
            @else
            <img src="{{ asset('assets/cms/img/admin-avatar.png')}}" width="45px" />
            @endif
        </div>
        <hr>
        <h2 class="login-title">{{ $all_view['setting']->site_name }}</h2>
        <div class="form-group">
            <div class="input-group-icon right">
                <div class="input-icon"><i class="fa fa-envelope"></i></div>
                <input class="form-control" type="email" value="{{ old('email') }}" name="email" placeholder="email" autocomplete="off">
                @if($errors->has('email'))
                <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('email') }}</span></p>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="input-group-icon right">
                <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                <input class="form-control" type="password" name="password" placeholder="password">
                @if($errors->has('password'))
                <p id="name-error" class="help-block " for="name"><span>{{ $errors->first('password') }}</span></p>
                @endif
            </div>
        </div>
        <div class="form-group d-flex justify-content-between">
            <label class="ui-checkbox ui-checkbox-info">
                <input type="checkbox" name="remember" class="custom-control-input" id="customCheck" {{ old('remember') ? 'checked' : '' }}>
                <span class="input-span" for="customCheck"></span>Remember Me ?</label>
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">Forget Password</a>
            @endif
        </div>
        <div class="form-group">
            <button class="btn btn-info btn-block" type="submit" style="cursor: pointer;">Sign In</button>
        </div>
        <div class="social-auth-hr">
            <span>Prabidhi Enterprises Content Management System (PECMS).</span>
        </div>


    </form>
</div>
@endsection