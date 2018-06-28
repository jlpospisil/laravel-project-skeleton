@extends('layouts.app')

@section('content')
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="card rounded">
                    <div class="card-header">
                        <h3 class="mb-0 text-center">{{ config('app.name', 'Reset Password') }}</h3>
                    </div>
                    <div class="card-block px-3">
                        <form method="POST" action="{{ route('password.request') }}" class="form pb-3 pt-3">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <fieldset>
                                <div class="form-group">
                                    <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="E-Mail Address" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
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
                                    <input  type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="Confirm Password" value="" required>
                                    @if ($errors->has('password_confirmation'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="row mt-4">
                                    <div class="col">
                                        <a class="btn btn-lg btn-secondary btn-block nounderline" href="{{ route('login') }}">
                                            Cancel
                                        </a>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                                            Reset Password
                                        </button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
