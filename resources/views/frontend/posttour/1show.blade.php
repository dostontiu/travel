@extends('layouts.main')
@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('frontend/img/single_tour_bg_1.jpg')}}" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h1>Arc de Triomphe</h1>
                        <span>Champ de Mars, 5 Avenue Anatole, 75007 Paris.</span>
                        <span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small></span>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div id="price_single_main">
                            from/per person <span><sup>$</sup>52</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End section -->

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

        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div>
        <!-- End Map -->

        <div class="container margin_60">
            <div class="row">
                <div class="col-md-8" id="single_tour_desc">
                    <div class="row">
                        <h1 class="text-center">{{$postTour->name}}</h1>
                        <h4>GALERY</h4>
                        {{--<div id="Img_carousel" class="slider-pro">--}}
                            {{--<div class="sp-slides">--}}
                                {{--<div class="sp-slide">--}}
                                    {{--<img alt="Image" class="sp-image" src="{{asset('frontend/css/images/blank.gif')}}" data-src="{{asset('frontend/img/slider_single_tour/1_medium.jpg')}}" data-small="{{asset('frontend/img/slider_single_tour/1_small.jpg')}}" data-medium="{{asset('frontend/img/slider_single_tour/1_medium.jpg')}}" data-large="{{asset('frontend/img/slider_single_tour/1_large.jpg')}}" data-retina="{{asset('frontend/img/slider_single_tour/1_large.jpg')}}">--}}
                                {{--</div>--}}
                                {{--<div class="sp-slide">--}}
                                    {{--<img alt="Image" class="sp-image" src="{{asset('frontend/css/images/blank.gif')}}" data-src="{{asset('frontend/img/slider_single_tour/2_medium.jpg')}}" data-small="{{asset('frontend/img/slider_single_tour/2_small.jpg')}}" data-medium="{{asset('frontend/img/slider_single_tour/2_medium.jpg')}}" data-large="{{asset('frontend/img/slider_single_tour/2_large.jpg')}}" data-retina="{{asset('frontend/img/slider_single_tour/2_large.jpg')}}">--}}
                                    {{--<h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="40" data-show-transition="left">--}}
                                        {{--Lorem ipsum dolor sit amet </h3>--}}
                                    {{--<p class="sp-layer sp-white sp-padding" data-horizontal="40" data-vertical="100" data-show-transition="left" data-show-delay="200">--}}
                                        {{--consectetur adipisicing elit--}}
                                    {{--</p>--}}
                                    {{--<p class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="160" data-width="350" data-show-transition="left" data-show-delay="400">--}}
                                        {{--sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.--}}
                                    {{--</p>--}}
                                {{--</div>--}}

                                {{--<div class="sp-slide">--}}
                                    {{--<img alt="Image" class="sp-image" src="{{asset('frontend/css/images/blank.gif')}}" data-src="{{asset('frontend/img/slider_single_tour/3_medium.jpg')}}" data-small="{{asset('frontend/img/slider_single_tour/3_small.jpg')}}" data-medium="{{asset('frontend/img/slider_single_tour/3_medium.jpg')}}" data-large="{{asset('frontend/img/slider_single_tour/3_large.jpg')}}" data-retina="{{asset('frontend/img/slider_single_tour/3_large.jpg')}}">--}}
                                    {{--<p class="sp-layer sp-white sp-padding" data-position="centerCenter" data-vertical="-50" data-show-transition="right" data-show-delay="500">--}}
                                        {{--Lorem ipsum dolor sit amet--}}
                                    {{--</p>--}}
                                    {{--<p class="sp-layer sp-black sp-padding" data-position="centerCenter" data-vertical="50" data-show-transition="left" data-show-delay="700">--}}
                                        {{--consectetur adipisicing elit--}}
                                    {{--</p>--}}
                                {{--</div>--}}

                                {{--<div class="sp-slide">--}}
                                    {{--<img alt="Image" class="sp-image" src="{{asset('frontend/css/images/blank.gif')}}" data-src="{{asset('frontend/img/slider_single_tour/4_medium.jpg')}}" data-small="{{asset('frontend/img/slider_single_tour/4_small.jpg')}}" data-medium="{{asset('frontend/img/slider_single_tour/4_medium.jpg')}}" data-large="{{asset('frontend/img/slider_single_tour/4_large.jpg')}}" data-retina="{{asset('frontend/img/slider_single_tour/4_large.jpg')}}">--}}
                                    {{--<p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-vertical="0" data-width="100%" data-show-transition="up">--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.--}}
                                    {{--</p>--}}
                                {{--</div>--}}

                                {{--<div class="sp-slide">--}}
                                    {{--<img alt="Image" class="sp-image" src="{{asset('frontend/css/images/blank.gif')}}" data-src="{{asset('frontend/img/slider_single_tour/5_medium.jpg')}}" data-small="{{asset('frontend/img/slider_single_tour/5_small.jpg')}}" data-medium="{{asset('frontend/img/slider_single_tour/5_medium.jpg')}}" data-large="{{asset('frontend/img/slider_single_tour/5_large.jpg')}}" data-retina="{{asset('frontend/img/slider_single_tour/5_large.jpg')}}">--}}
                                    {{--<p class="sp-layer sp-white sp-padding" data-vertical="5%" data-horizontal="5%" data-width="90%" data-show-transition="down" data-show-delay="400">--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.--}}
                                    {{--</p>--}}
                                {{--</div>--}}

                                {{--<div class="sp-slide">--}}
                                    {{--<img alt="Image" class="sp-image" src="{{asset('frontend/css/images/blank.gif')}}" data-src="{{asset('frontend/img/slider_single_tour/6_medium.jpg')}}" data-small="{{asset('frontend/img/slider_single_tour/6_small.jpg')}}" data-medium="{{asset('frontend/img/slider_single_tour/6_medium.jpg')}}" data-large="{{asset('frontend/img/slider_single_tour/6_large.jpg')}}" data-retina="{{asset('frontend/img/slider_single_tour/6_large.jpg')}}">--}}
                                    {{--<p class="sp-layer sp-white sp-padding" data-horizontal="10" data-vertical="10" data-width="300">--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.--}}
                                    {{--</p>--}}
                                {{--</div>--}}

                                {{--<div class="sp-slide">--}}
                                    {{--<img alt="Image" class="sp-image" src="{{asset('frontend/css/images/blank.gif')}}" data-src="{{asset('frontend/img/slider_single_tour/7_medium.jpg')}}" data-small="{{asset('frontend/img/slider_single_tour/7_small.jpg')}}" data-medium="{{asset('frontend/img/slider_single_tour/7_medium.jpg')}}" data-large="{{asset('frontend/img/slider_single_tour/7_large.jpg')}}" data-retina="{{asset('frontend/img/slider_single_tour/7_large.jpg')}}">--}}
                                    {{--<p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" data-show-transition="up" data-show-delay="400">--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.--}}
                                    {{--</p>--}}
                                {{--</div>--}}

                                {{--<div class="sp-slide">--}}
                                    {{--<img alt="Image" class="sp-image" src="{{asset('frontend/css/images/blank.gif')}}" data-src="{{asset('frontend/img/slider_single_tour/8_medium.jpg')}}" data-small="{{asset('frontend/img/slider_single_tour/8_small.jpg')}}" data-medium="{{asset('frontend/img/slider_single_tour/8_medium.jpg')}}" data-large="{{asset('frontend/img/slider_single_tour/8_large.jpg')}}" data-retina="{{asset('frontend/img/slider_single_tour/8_large.jpg')}}">--}}
                                    {{--<p class="sp-layer sp-black sp-padding" data-horizontal="50" data-vertical="50" data-show-transition="down" data-show-delay="500">--}}
                                        {{--Lorem ipsum dolor sit amet--}}
                                    {{--</p>--}}
                                    {{--<p class="sp-layer sp-white sp-padding" data-horizontal="50" data-vertical="100" data-show-transition="up" data-show-delay="500">--}}
                                        {{--consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
                                    {{--</p>--}}
                                {{--</div>--}}

                                {{--<div class="sp-slide">--}}
                                    {{--<img alt="Image" class="sp-image" src="{{asset('frontend/css/images/blank.gif')}}" data-src="{{asset('frontend/img/slider_single_tour/9_medium.jpg')}}" data-small="{{asset('frontend/img/slider_single_tour/9_small.jpg')}}" data-medium="{{asset('frontend/img/slider_single_tour/9_medium.jpg')}}" data-large="{{asset('frontend/img/slider_single_tour/9_large.jpg')}}" data-retina="{{asset('frontend/img/slider_single_tour/9_large.jpg')}}">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="sp-thumbnails">--}}
                                {{--<img alt="Image" class="sp-thumbnail" src="{{asset('frontend/img/slider_single_tour/1_medium.jpg')}}">--}}
                                {{--<img alt="Image" class="sp-thumbnail" src="{{asset('frontend/img/slider_single_tour/2_medium.jpg')}}">--}}
                                {{--<img alt="Image" class="sp-thumbnail" src="{{asset('frontend/img/slider_single_tour/3_medium.jpg')}}">--}}
                                {{--<img alt="Image" class="sp-thumbnail" src="{{asset('frontend/img/slider_single_tour/4_medium.jpg')}}">--}}
                                {{--<img alt="Image" class="sp-thumbnail" src="{{asset('frontend/img/slider_single_tour/5_medium.jpg')}}">--}}
                                {{--<img alt="Image" class="sp-thumbnail" src="{{asset('frontend/img/slider_single_tour/6_medium.jpg')}}">--}}
                                {{--<img alt="Image" class="sp-thumbnail" src="{{asset('frontend/img/slider_single_tour/7_medium.jpg')}}">--}}
                                {{--<img alt="Image" class="sp-thumbnail" src="{{asset('frontend/img/slider_single_tour/8_medium.jpg')}}">--}}
                                {{--<img alt="Image" class="sp-thumbnail" src="{{asset('frontend/img/slider_single_tour/9_medium.jpg')}}">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <p>{{$postTour->title}}</p>
                        <div id="single_tour_feat">
                            <ul>
                                <li><i class="icon_set_1_icon-4"></i>Museum</li>
                                <li><i class="icon_set_1_icon-83"></i>3 Hours</li>
                                <li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                                <li><i class="icon_set_1_icon-82"></i>144 Likes</li>
                                <li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                                <li><i class="icon_set_1_icon-97"></i>Audio guide</li>
                                <li><i class="icon_set_1_icon-29"></i>Tour guide</li>
                            </ul>
                        </div>
                        <p>{!!$postTour->facility!!}</p>
                        <p>{!! $postTour->description !!}</p>
                        <p>{!!$postTour->insurance!!}</p>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Term</h3>
                        </div>
                        <div class="col-md-9">
                            <p>{!!$postTour->term!!}</p>
                        </div>
                    </div>

                    <hr>
                </div>
                <!--End  single_tour_desc-->

                <aside class="col-md-4">
                    <p class="hidden-sm hidden-xs">
                        <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                    </p>
                    <div class="box_style_1 expose">
                        <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a></p>
                        <!-- Map button for tablets/mobiles -->
                        <h3 class="inner">- Booking -</h3>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label><i class="icon-calendar-7"></i> Select a date</label>
                                    <input class="date-pick form-control" data-date-format="M d, D" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label><i class=" icon-clock"></i> Time</label>
                                    <input class="time-pick form-control" value="12:00 AM" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Adults</label>
                                    <div class="numbers-row">
                                        <input type="text" value="1" id="adults" class="qty2 form-control" name="quantity">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Children</label>
                                    <div class="numbers-row">
                                        <input type="text" value="0" id="children" class="qty2 form-control" name="quantity">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
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
                                    Total amount
                                </td>
                                <td class="text-right">
                                    3x $52
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
                        <a class="btn_full" href="cart.html">Book now</a>
                        <a class="btn_full_outline" href="#"><i class=" icon-heart"></i> Add to whislist</a>
                    </div>
                    <!--/box_style_1 -->

                    <div class="box_style_4">
                        <i class="icon_set_1_icon-90"></i>
                        <h4><span>Book</span> by phone</h4>
                        <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                        <small>Monday to Friday 9.00am - 7.30pm</small>
                    </div>

                </aside>
            </div>
            <!--End row -->
        </div>
        <!--End container -->

        <div id="overlay"></div>
        <!-- Mask on input focus -->

    </main>
    <!-- End main -->

    {{--<script src="{{asset('frontend/js/icheck.js')}}"></script>--}}
    <script src="{{asset('frontend/js/jquery.sliderPro.min.js')}}"></script>
    <script >
        $(document).ready(function ($) {
            $('#Img_carousel').sliderPro({
                width: 960,
                height: 500,
                fade: true,
                arrows: true,
                buttons: false,
                fullScreen: false,
                smallSize: 500,
                startSlide: 0,
                mediumSize: 1000,
                largeSize: 3000,
                thumbnailArrows: true,
                autoplay: false
            });
        });
    </script>

@endsection