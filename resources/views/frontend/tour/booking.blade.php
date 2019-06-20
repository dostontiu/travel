@extends('layouts.main')
@section('content')

<section id="hero_2">
    <div class="intro_title animated fadeInDown">
        <h1>Place your order</h1>
        <div class="bs-wizard">

            <div class="col-xs-4 bs-wizard-step complete">
                <div class="text-center bs-wizard-stepnum">Your cart</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="cart.html" class="bs-wizard-dot"></a>
            </div>

            <div class="col-xs-4 bs-wizard-step active">
                <div class="text-center bs-wizard-stepnum">Your details</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#" class="bs-wizard-dot"></a>
            </div>

            <div class="col-xs-4 bs-wizard-step disabled">
                <div class="text-center bs-wizard-stepnum">Finish!</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="confirmation.html" class="bs-wizard-dot"></a>
            </div>

        </div>
        <!-- End bs-wizard -->
    </div>
    <!-- End intro-title -->
</section>
<!-- End Section hero_2 -->

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
    <!-- End position -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8 add_bottom_15">
                <div class="form_title">
                    <h3><strong>1</strong>Your Details</h3>
                    <p>
                        Mussum ipsum cacilds, vidis litro abertis.
                    </p>
                </div>
                <div class="step">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>First name</label>
                                <input type="text" class="form-control" id="firstname_booking" name="firstname_booking">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control" id="lastname_booking" name="lastname_booking">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" id="email_booking" name="email_booking" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Confirm email</label>
                                <input type="email" id="email_booking_2" name="email_booking_2" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="text" id="telephone_booking" name="telephone_booking" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <!--End step -->

                <div class="form_title">
                    <h3><strong>2</strong>Payment Information</h3>
                    <p>
                        Mussum ipsum cacilds, vidis litro abertis.
                    </p>
                </div>
                <div class="step">
                    <div class="form-group">
                        <label>Name on card</label>
                        <input type="text" class="form-control" id="name_card_bookign" name="name_card_bookign">
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Card number</label>
                                <input type="text" id="card_number" name="card_number" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <img src="{{asset('frontend/img/cards.png')}}" width="207" height="43" alt="Cards" class="cards">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Expiration date</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="MM">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="Year">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Security code</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <img src="{{asset('frontend/img/icon_ccv.gif')}}" width="50" height="29" alt="ccv"><small>Last 3 digits</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End row -->

                    <hr>

                    <h4>Or checkout with Paypal</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent ornatus molestie, reque fierent dissentiunt mel ea.
                    </p>
                    <p>
                        <img src="{{asset('frontend/img/paypal_bt.png')}}" alt="Image">
                    </p>
                </div>
                <!--End step -->

                <div class="form_title">
                    <h3><strong>3</strong>Billing Address</h3>
                    <p>
                        Mussum ipsum cacilds, vidis litro abertis.
                    </p>
                </div>
                <div class="step">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-control" name="country" id="country">
                                    <option value="" selected>Select your country</option>
                                    <option value="Europe">Europe</option>
                                    <option value="United states">United states</option>
                                    <option value="Asia">Asia</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Street line 1</label>
                                <input type="text" id="street_1" name="street_1" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Street line 2</label>
                                <input type="text" id="street_2" name="street_2" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" id="city_booking" name="city_booking" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" id="state_booking" name="state_booking" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Postal code</label>
                                <input type="text" id="postal_code" name="postal_code" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!--End row -->
                </div>
                <!--End step -->

                <div id="policy">
                    <h4>Cancellation policy</h4>
                    <div class="form-group">
                        <label>
                            <input type="checkbox" name="policy_terms" id="policy_terms">I accept terms and conditions and general policy.</label>
                    </div>
                    <a href="confirmation.html" class="btn_1 green medium">Book now</a>
                </div>
            </div>

            <aside class="col-md-4">
                <div class="box_style_1">
                    <h3 class="inner">- Summary -</h3>
                    <table class="table table_summary">
                        <tbody>
                        <tr>
                            <td>
                                Adults
                            </td>
                            <td class="text-right">
                                2
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Children
                            </td>
                            <td class="text-right">
                                0
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Dedicated tour guide
                            </td>
                            <td class="text-right">
                                $34
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Insurance
                            </td>
                            <td class="text-right">
                                $34
                            </td>
                        </tr>
                        <tr class="total">
                            <td>
                                Total cost
                            </td>
                            <td class="text-right">
                                $154
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <a class="btn_full" href="confirmation.html">Book now</a>
                    <a class="btn_full_outline" href="#"><i class="icon-right"></i> Continue shopping</a>
                </div>
                <div class="box_style_4">
                    <i class="icon_set_1_icon-57"></i>
                    <h4>Need <span>Help?</span></h4>
                    <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                    <small>Monday to Friday 9.00am - 7.30pm</small>
                </div>
            </aside>

        </div>
        <!--End row -->
    </div>
    <!--End container -->
</main>
<!-- End main -->

@endsection