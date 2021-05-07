@extends('layouts.app')

@section('title', 'Login')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Login to see the dashboard') }}</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container container-login animated fadeIn">
    <h3 class="text-center">Log In</h3>
    <div class="login-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group form-floating-label">
                <input id="email" name="email" type="email" class="form-control input-border-bottom @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <label for="email" class="placeholder">Email</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group form-floating-label">
                <input id="password" name="password" type="password" class="form-control input-border-bottom @error('password') is-invalid @enderror" required autocomplete="current-password">
                <label for="password" class="placeholder">Password</label>
                {{-- <div class="show-password">
                    <i class="flaticon-interface"></i>
                </div> --}}
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="row form-sub m-0">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember">Remember Me</label>
                </div>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="link float-right">Forget Password ?</a>
                @endif
            </div>
            <div class="form-action mb-3">
                <button class="btn btn-primary btn-rounded btn-login" type="submit">Sign In</button>
            </div>
        </form>
        <div class="login-account">
            <span class="msg">Don't have an account yet ?</span>
            <a href="{{ route('register') }}" class="link">Sign Up</a>
        </div>
    </div>
</div>
@endsection
