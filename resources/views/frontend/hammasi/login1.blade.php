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
                        <form>
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
                                <label>Username</label>
                                <input type="text" class=" form-control " placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class=" form-control" placeholder="Password">
                            </div>
                            <p class="small">
                                <a href="#">Forgot Password?</a>
                            </p>
                            <a href="#" class="btn_full">Sign in</a>
                            <a href="register.html " class="btn_full_outline">Register</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End main -->

@endsection