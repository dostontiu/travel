@extends('layouts.main')
@section('content')
<main>
        <section id="hero" class="login">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div id="login">
                            <div class="text-center"><img src="{{asset('frontend/img/logo_sticky.png')}}" alt="Image" data-retina="true" ></div>
                            <hr>
                            <form  method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 login_social">
                                        <a href="#" class="btn btn-primary btn-block"><i class="icon-facebook"></i> Facebook</a>
                                    </div>
                                    <div class="col-md-6 col-sm-6 login_social">
                                        <a href="#" class="btn btn-info btn-block "><i class="icon-twitter"></i>Twitter</a>
                                    </div>
                                </div> <!-- end row -->
                                <div class="login-or"><hr class="hr-or"><span class="span-or">or</span></div>

                                <div class="form-group">
                                    <label>{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
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
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <button type="submit" class="btn_full">
                                    {{ __('Login') }}
                                </button>
                                <a href="register.html " class="btn_full_outline">Register</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End main -->

@endsection