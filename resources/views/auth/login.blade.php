@extends('auth.app')

@section('content')

<div class="login-container">
    <div class="columns is-vcentered">
        <div class="column is-6 image-column">
            <!--Illustration-->
            <img class="light-image login-image" src="assets/img/illustrations/login/login.svg" alt="">
            <img class="dark-image login-image" src="assets/img/illustrations/login/login-dark.svg" alt="">
        </div>
        <div class="column is-6">

            <h2 class="form-title">Welcome Back</h2>
            <h3 class="form-subtitle">Enter your credentials to sign in.</h3>

            <!--Form-->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login-form">
                    <div class="form-panel">
                        <div class="field">
                            <label>Email</label>
                            <div class="control">
                                <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                            
                            @error('email')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="field">
                            <label>Password</label>
                            <div class="control">
                                <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                            @error('password')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="field is-flex">
                            <div class="switch-block">
                                <label class="f-switch">
                                    <input class="is-switch" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <i></i>
                                </label>
                                <div class="meta">
                                    <p>Remember me?</p>
                                </div>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            @endif
                        </div>
                    </div>

                    <div class="buttons">
                        <button type="submit" class="button is-solid primary-button is-fullwidth raised">Login</button>
                    </div>

                    <div class="account-link has-text-centered">
                        <a href="{{ route('register') }}">Don't have an account? Sign Up</a>
                    </div>
                </div>
            </form> 
        </div>
    </div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

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
@endsection


