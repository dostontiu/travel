@extends('layouts.main')
@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('images/'.$account->banner.'')}}" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 text-center">
                        <h1>{{$account->accountContent['company_name']}}</h1>
                        <span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small></span>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="img_container">
                                <img src="{{asset('images/'.$account->logo.'')}}" alt="Image">
                                <div class="short_info"><i class="icon_set_1_icon-4"></i>{{$account->company_name}}</div>
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
            @include('frontend.posttour.aside')
            <div class="col-lg-9 col-md-9">
                <div class="main_title">
                    <h2>{{$account->accountContent['description']}}</h2>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h2><span>Address</span></h2>
                        <h3>{{$account->accountContent['address']}}</h3>
                        <h2><span>Address</span></h2>
                        <h3>{{$account->accountContent['address']}}</h3>
                        <h2><span>Emails</span></h2>
                        <h3>{{$account->emails}}</h3>
                        <h2><span>Messenger</span></h2>
                        <h3>{{$account->messenger}}</h3>
                        <h2><span>Telephone</span></h2>
                        <h3>{{$account->telephone}}</h3>
                        <hr>
                        <div class="general_icons">
                            <ul>
                                <li><i class="icon_set_1_icon-34"></i>Camera</li>
                                <li><i class="icon_set_1_icon-31"></i>Video camera</li>
                                <li><i class="icon_set_1_icon-35"></i>Credit cards</li>
                                <li><i class="icon_set_1_icon-63"></i>Mobile</li>
                                <li><i class="icon_set_1_icon-33"></i>Travel bag</li>
                                <li><i class="icon_set_1_icon-9"></i>Snack</li>
                                <li><i class="icon_set_1_icon-37"></i>Map</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <hr>
            </div>
            <div class="col-lg-9 col-md-9">
                <br>
                <div id="tools">

                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="styled-select-filters">
                                <select name="sort_price" id="sort_price">
                                    <option value="" selected>Sort by price</option>
                                    <option value="lower">Lowest price</option>
                                    <option value="higher">Highest price</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="styled-select-filters">
                                <select name="sort_rating" id="sort_rating">
                                    <option value="" selected>Sort by ranking</option>
                                    <option value="lower">Lowest ranking</option>
                                    <option value="higher">Highest ranking</option>
                                </select>
                            </div>
                        </div>

                        <div id="viewcontrols" class="col-md-6 col-sm-6 hidden-xs text-right">
                            <a href="{{route('viewswitch', 'list')}}" class="listview active bt_filters"><i class="icon-list"></i></a>
                            <a href="{{route('viewswitch', 'grid')}}" class="gridview bt_filters"><i class="icon-th"></i></a>
                        </div>

                    </div>
                </div>
                <!--/tools -->
                <div id="tag_container">
                    @include('frontend.posttour.presult')
                </div>
            </div>
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
