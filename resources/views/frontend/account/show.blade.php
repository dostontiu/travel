@extends('layouts.main')
@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('frontend/img/single_tour_bg_1.jpg')}}" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h1>{{$account->company_name}}</h1>
                        <span>{{$account->address}}</span>
                        <span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small></span>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h3 class="text-right text-primary"><b>{{$account->telephone}}</b></h3>
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
                        @php
                            //dd($account->postTour()) haha
                        @endphp
{{--                        @foreach($account->postTour as $post)--}}
{{--                            {{ $post }}--}}
{{--                        @endforeach--}}
                        <h1 class="text-center">{{$account->company_name}}</h1>
                        <p>{{$account->title}}</p>
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
                        <p>{!! $account->description !!}</p>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Term</h3>
                        </div>
                        <div class="col-md-9">
                            <p>{!!$account->term!!}</p>
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