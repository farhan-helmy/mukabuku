@extends('auth.app')

@section('content')
<div class="container">
    <!--Container-->
    <div class="login-container is-centered">
        <div class="columns is-vcentered">
            <div class="column">

                <h2 class="form-title has-text-centered">Hey there!</h2>
                <h3 class="form-subtitle has-text-centered">Lets create your account.</h3>

                <!--Form-->
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="login-form">
                        <div class="form-panel">
                            <div class="columns is-multiline">
                                <div class="column is-6">
                                    <div class="field">
                                        <label>First Name</label>
                                        <div class="control">
                                            <input id="first_name" type="text" class="input @error('first_name')  is-danger @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus placeholder="Enter your first name">
                                        </div>
                                    </div>
                                </div>

                                <div class="column is-6">
                                    <div class="field">
                                        <label>Last Name</label>
                                        <div class="control">
                                            <input id="last_name" type="text" class="input @error('last_name')  is-danger @enderror" name="last_name" value="{{ old('first_name') }}" required autocomplete="last_name" autofocus placeholder="Enter your last name">
                                        </div>
                                    </div>
                                </div>

                                <div class="column is-12">
                                    <div class="field">
                                        <label>Email</label>
                                        <div class="control">
                                            <input id="email" type="text" class="input @error('email')  is-danger @enderror" name="email" value="{{ old('first_name') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>

                                <div class="column is-12">
                                    <div class="field">
                                        <label>Phone Number</label>
                                        <div class="control">
                                            <input id="phone_number" type="text" class="input @error('phone_number')  is-danger @enderror" name="phone_number" value="{{ old('first_name') }}" required autocomplete="phone_number" autofocus placeholder="Enter your phone number">
                                        </div>
                                    </div>
                                </div>

                                <div class="column is-12">
                                    <div class="field">
                                        <label>Password</label>
                                        <div class="control">
                                            <input id="password" type="password" class="input @error('password') is-danger @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password">
                                        </div>
                                    </div>
                                </div>

                                <div class="column is-12">
                                    <div class="field">
                                        <label>Confirm Password</label>
                                        <div class="control">
                                            <input id="password_confirmation" type="password" class="input @error('password_confirmation') is-danger @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Re-enter Password">
                                        </div>
                                    </div>
                                </div>

                                <div class="column is-12">
                                    <div class="field is-flex">
                                        <div class="switch-block">
                                            <label class="f-switch">
                                                <input type="checkbox" class="is-switch">
                                                <i></i>
                                            </label>
                                            <div class="meta">
                                                <p>Subscribe to Newsletter?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="buttons">
                            <button type="submit" class="button is-solid primary-button is-fullwidth raised">Create Account</button>
                        </div>

                        <div class="account-link has-text-centered">
                            <a href="{{ route('login') }}">Have an account? Sign In</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>


                                @error('first_name')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="phone_number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">

                                @error('phone_number')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection


