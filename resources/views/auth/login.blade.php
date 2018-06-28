@extends('layouts.app')

@section('content')
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="card rounded">
                    <div class="card-header">
                        <h3 class="mb-0 text-center">{{ config('app.name', 'Login') }}</h3>
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

                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>

                                <button class="btn btn-lg btn-primary btn-block" type="submit">
                                    Login
                                </button>
                            </fieldset>
                        </form>
                    </div>
                </div>

                <div class="mt-1 row justify-content-between">
                    <div class="col">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot password?
                        </a>
                    </div>
                    <div class="col text-right">
                        <a class="btn btn-link" href="{{ route('register') }}">
                            Register
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
