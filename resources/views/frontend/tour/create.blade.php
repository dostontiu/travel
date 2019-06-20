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
                    {{--{{ HTML::ul($errors->all()) }}--}}
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="billing-details">
                            <div class="shop-form">
                                <form action="/tour" method="post" >
                                    {{ csrf_field() }}
                                    <div class="default-title">
                                        <h2>Create Tour Post</h2>
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
                                        <div class="form-group col-md-8 col-sm-12 col-xs-12">
                                            <label>Name <sup>*</sup>
                                            </label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="form-group col-md-2 col-sm-6 col-xs-6">
                                            <label>Cost <sup>*</sup>
                                            </label>
                                            <input type="text" name="cost" value="" placeholder="" class="form-control">
                                        </div>
                                        <div class="form-group col-md-2 col-sm-6 col-xs-6">
                                            <label>Discount <sup>*</sup>
                                            </label>
                                            <input type="text" name="discount" value="" placeholder="" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <label>Title</label>
                                            <input type="text" name="title" value="" placeholder="" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <label>Describe <sup>*</sup></label>
                                            <textarea rows="5" name="describe" placeholder="Describe your tour package" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group col-md-8 col-sm-8 col-xs-12">
                                            <label>Service <sup>*</sup>
                                            </label>
                                            <textarea rows="5" name="service" placeholder="Write your services" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                            <label>Rooms <sup>*</sup>
                                            </label>
                                            <input type="text" name="rooms" value="" placeholder="" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <label>Terms <sup>*</sup>
                                            </label>
                                            <textarea rows="5" name="term" placeholder="Write your services" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                            <div class="field-group btn-field">
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

@endsection