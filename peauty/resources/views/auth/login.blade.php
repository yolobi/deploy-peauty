@extends('layouts.app')

@section('content')
<div class="container h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-8">
            <div class="card rounded-4">

                <div class="card-body p-5">
                    <div class="row p-2">
                        <div class="col-md-6">
                            <img src="{{ asset('images/logo.png') }}" alt="Peauty">
                        </div>
                        <div class="col-md-6">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row text-center">
                                    <h1>{{ __('LOGIN') }}</h1>
                                </div>
        
                                <div class="row">
                                    <label for="email" class="col-md-6 col-form-label">{{ __('Email/Username') }}</label>
        
                                    {{-- <div class="col-md-6"> --}}
                                        <input id="email" type="email" class="form-control rounded-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    {{-- </div> --}}
                                </div>
        
                                <div class="row">
                                    <label for="password" class="col-md-6 col-form-label">{{ __('Password') }}</label>
        
                                    {{-- <div class="col-md-6"> --}}
                                        <input id="password" type="password" class="form-control rounded-4 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    {{-- </div> --}}
                                </div>
        
                                <div class="row mt-2">
                                    {{-- <div class="col-md-8 offset-md-4"> --}}
                                        <button type="submit" class="btn btn-danger rounded-5">
                                            {{ __('Login') }}
                                        </button>
                                    {{-- </div> --}}
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-link">{{ __('Register') }}</a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
