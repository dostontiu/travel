@extends('layouts.main')
@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('frontend/img/header_bg.jpg')}}" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>Shopping cart</h1>
                <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
            </div>
        </div>
    </section>
    <!-- End Section -->

    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Category</a>
                    </li>
                    <li>Page active</li>
                </ul>
            </div>
        </div>
        <!-- End Position -->

        <div class="container margin_60">
            <div class="checkout-page">

                <ul class="default-links">
                    <li>Exisitng Customer? <a href="#">Click here to login</a>
                    </li>
                </ul>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="billing-details">
                            <div class="shop-form">
                                <form action="{{ route('account.store') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="default-title">
                                        <h2>Create Account Post</h2>
                                    </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <label>Company name <sup>*</sup>
                                            </label>
                                            <input type="text" name="company_name" value="" placeholder="Write your company name" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <label>Address <sup>*</sup>
                                            </label>
                                            <input type="text" name="address" value="" placeholder="Write your addresses" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <label>Description <sup>*</sup></label>
                                            <textarea rows="10" name="description" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                            <label>Telephone <sup>*</sup>
                                            </label>
                                            <input type="text" name="telephone" value="" placeholder="Telephone" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                            <label>Emails <sup>*</sup>
                                            </label>
                                            <input type="text" name="emails" value="" placeholder="Emails" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                            <label>Messengers <sup>*</sup>
                                            </label>
                                            <input type="text" name="messenger" value="" placeholder="messenger" class="form-control">
                                        </div>
                                        <div class="form-group col-md-2 col-sm-12 col-xs-12">
                                            <label>Logo <sup>*</sup>
                                            </label>
                                            <input type="file" name="logo" accept="image/jpeg,image/jpg,image/png" class="form-control">
                                        </div>
                                        <div class="form-group col-md-2 col-sm-12 col-xs-12">
                                            <label>Banner <sup>*</sup>
                                            </label>
                                            <input type="file" name="banner" accept="image/jpeg,image/jpg,image/png" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3 col-sm-12 col-xs-12">
                                            <label>work_time_start <sup>*</sup>
                                            </label>
                                            <input type="datetime-local" name="work_time_start" value="" placeholder="work_time_start" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3 col-sm-12 col-xs-12">
                                            <label>work_time_end <sup>*</sup>
                                            </label>
                                            <input type="datetime-local" name="work_time_end" value="" placeholder="work_time_end" class="form-control">
                                        </div>

                                        <div class="form-group col-md-2 col-sm-6 col-xs-6">
                                            <div class="field-group btn-field"><br>
                                                <button type="submit" class="btn btn_cart_outine">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--End Billing Details-->
                    </div>
                    <!--End Col-->
                </div>
            </div>
        </div>
        <!-- End Container -->
    </main>
    <!-- End main -->


    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'description',{
            // language: 'en',
        } );
    </script>
@endsection

