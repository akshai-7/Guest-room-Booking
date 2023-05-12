@extends('layouts.app')
@section('content')
    <style>
        body {
            background-image: url(images/pxfuel.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <div class="background">
        <div class="main card">
            <div class="card-header">
                <h4>{{ __('Login ') }}</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/login">
                    @csrf
                    <div class="row mb-3 login__field">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                        <div class="col-md-6 input">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror input" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror  input" name="password" required
                                autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-0 mt-3">
                        <div class="col-md-8 offset-md-5 ">
                            <button type="submit" class="btn btn-success btn-sm">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="col-md-7 offset-md-3 mt-2 ">
                            <span> Don't have an account? </span><a href="/register">Create Account</a>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
