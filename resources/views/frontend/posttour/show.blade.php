@extends('layouts.main')
@section('content')

    @push('styles')
        <link href="{{ asset('frontend/css/slider-pro.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/css/date_time_picker.css') }}" rel="stylesheet">
    @endpush

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('frontend/img/single_tour_bg_1.jpg')}}" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h1>{{ $posttour->postTourContent['title'] }}</h1>
                        <span>account address</span>
                        <span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small></span>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div id="price_single_main">
                            <div class="price_list">
                                <div class="cost">
                                    <span>{{ ($posttour->sale==null) ? $posttour->price : $posttour->sale}}  {{$posttour->priceType->titleName}}</span>
                                    <h2 class="normal_price_list">{{ ($posttour->sale==null) ? '' : $posttour->price.' '.$posttour->priceType->titleName}}</h2>
                                </div>
                            </div>
{{--                            from/per person <span><sup>$</sup>{{$posttour->price}}</span>--}}
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
            @include('system.success')
            <div class="row">
                <div class="col-md-8" id="single_tour_desc">
                    <div class="row">
                        <h1>{{ $posttour->postTourContent['title'] }}</h1>
                        <h3  class="text-right text-primary">{{$posttour->rooms}} rooms</h3>
                        @if($posttour->imgPostTour->count() > 0)
                            <div id="Img_carousel" class="slider-pro">
                                <div class="sp-slides">

                                    @foreach($posttour->imgPostTour as $image)
                                    <div class="sp-slide">
                                        <img alt="Image" class="sp-image" src="{{asset('images/'.$image->name)}}" data-src="{{asset('images/'.$image->name)}}" data-small="{{asset('images/'.$image->name)}}" data-medium="{{asset('images/'.$image->name)}}" data-large="{{asset('images/'.$image->name)}}" data-retina="{{asset('images/'.$image->name)}}">
                                        <p class="sp-layer sp-black sp-padding" data-horizontal="50" data-vertical="50" data-show-transition="down" data-show-delay="500">
                                            Lorem ipsum dolor sit amet
                                        </p>
                                        <p class="sp-layer sp-white sp-padding" data-horizontal="50" data-vertical="100" data-show-transition="up" data-show-delay="500">
                                            consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                    @endforeach

                                </div>
                                <div class="sp-thumbnails">
                                    @foreach($posttour->imgPostTour as $image)
                                        <img alt="Image" class="sp-thumbnail" src="{{asset('images/'.$image->name)}}">
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-3">
                            <h3>Description</h3>
                        </div>
                        <div class="col-md-9">
                            <p>{!! $posttour->postTourContent['description'] !!}</p>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-3">
                            <h3>Service</h3>
                        </div>
                        <div class="col-md-9">
                            <p>{!! $posttour->postTourContent['service'] !!}</p>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-3">
                            <h3>Facility</h3>
                        </div>
                        <div class="col-md-9">
                            <p>{!! $posttour->postTourContent['facility'] !!}</p>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-3">
                            <h3>Activity</h3>
                        </div>
                        <div class="col-md-9">
                            <p>{!! $posttour->postTourContent['activity'] !!}</p>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-3">
                            <h3>Insurance</h3>
                        </div>
                        <div class="col-md-9">
                            <p>{!! $posttour->postTourContent['insurance'] !!}</p>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-3">
                            <h3>Term</h3>
                        </div>
                        <div class="col-md-9">
                            <p>{!! $posttour->postTourContent['term'] !!}</p>
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


    @push('scripts')
    <!-- Specific scripts -->
    <script src="{{asset('frontend/js/icheck.js')}}"></script>
    <script>
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-grey',
            radioClass: 'iradio_square-grey'
        });
    </script>
    <!-- Date and time pickers -->
    <script src="{{asset('frontend/js/jquery.sliderPro.min.js')}}"></script>
    <script type="text/javascript">
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
    @endpush
@endsection
