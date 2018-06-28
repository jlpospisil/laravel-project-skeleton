@extends('layouts.app')

@section('content')
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="card-inverse rounded" style="background-color:rgba(0,0,0,.5)">
                    <div class="card-header">
                        <h3 class="mb-0 text-center text-white">{{ config('app.name', 'Login') }}</h3>
                    </div>
                    <div class="card-block px-3">
                        <form method="POST" action="{{ route('login') }}" class="form pb-3 pt-3">
                            @csrf

                            <fieldset>
                                <div class="form-group">
                                    <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" placeholder="Username" value="{{ old('username') }}" required autofocus>
                                    @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input  type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" value="" required>
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group row justify-content-between">
                                    <div class="col">
                                        <label class="text-white">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <div class="col text-right">
                                        <input class="btn btn-lg btn-primary btn-sm" type="submit" value="Login">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>

                <div class="text-center mt-1">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
