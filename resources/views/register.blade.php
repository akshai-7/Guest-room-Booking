@extends('layouts.app')
@section('content')
    <style>
        body {
            background-image: url(images/pxfuel.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <div class=" main1 card">
        <div class="card-header">
            <h4>{{ __('Register') }}</h4>
        </div>
        <div class="">
            <form method="POST" action="/create">
                @csrf
                <div class="row mb-3 mt-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror input"
                            name="name" value="{{ old('name') }}" autocomplete="name" autofocus required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror input"
                            name="email" value="{{ old('email') }}" autocomplete="email" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control input" name="password"
                            autocomplete="new-password" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end">{{ __('Mobile') }}</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control input" name="mobile" required>
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-md-8 offset-md-5">
                        <button type="submit" class="btn btn-success btn-sm">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
