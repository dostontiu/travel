@extends('layouts.main')
@section('content')

<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('frontend/img/home_bg_1.jpg')}}" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>Paris tours</h1>
            <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
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
    <!-- Position -->

    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div>
    <!-- End Map -->

    <div class="container margin_60">
        <div class="row">
            <aside class="col-lg-3 col-md-3">
                <p>
                    <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                </p>

                <div class="box_style_cat">
                    <ul id="cat_nav">
                        <li><a href="#" id="active"><i class="icon_set_1_icon-51"></i>All tours <span>(141)</span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-3"></i>City sightseeing <span>(20)</span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-4"></i>Museum tours <span>(16)</span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-44"></i>Historic Buildings <span>(12)</span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-37"></i>Walking tours <span>(11)</span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-14"></i>Eat & Drink <span>(20)</span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-43"></i>Churces <span>(08)</span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-28"></i>Skyline tours <span>(11)</span></a>
                        </li>
                    </ul>
                </div>

                <div id="filters_col">
                    <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Filters <i class="icon-plus-1 pull-right"></i></a>
                    <div class="collapse" id="collapseFilters">
                        <div class="filter_type">
                            <h6>Price</h6>
                            <input type="text" id="range" name="range" value="">
                        </div>
                        <div class="filter_type">
                            <h6>Rating</h6>
                            <ul>
                                <li>
                                    <label>
                                        <input type="checkbox"><span class="rating">
                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                    </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox"><span class="rating">
                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                    </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox"><span class="rating">
                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                    </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox"><span class="rating">
                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                    </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox"><span class="rating">
                    <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                    </span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="filter_type">
                            <h6>Facility</h6>
                            <ul>
                                <li>
                                    <label>
                                        <input type="checkbox">Pet allowed</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">Groups allowed</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">Tour guides</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox">Access for disabled</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End collapse -->
                </div>
                <!--End filters col-->
                <div class="box_style_2">
                    <i class="icon_set_1_icon-57"></i>
                    <h4>Need <span>Help?</span></h4>
                    <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                    <small>Monday to Friday 9.00am - 7.30pm</small>
                </div>
            </aside>
            <!--End aside -->

            <div class="col-lg-9 col-md-8">

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
                        <div class="col-md-6 col-sm-6 hidden-xs text-right">
                            <a href="#" class="bt_filters"><i class="icon-th"></i></a> <a href="all_tours_list.html" class="bt_filters"><i class=" icon-list"></i></a>
                        </div>
                    </div>
                </div>
                <!--End tools -->

                <div class="row">
                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="tour_container">
                            <div class="ribbon_3 popular"><span>Popular</span>
                            </div>
                            <div class="img_container">
                                <a href="single_tour.html">
                                    <img src="{{asset('frontend/img/tour_box_1.jpg')}}" width="800" height="533" class="img-responsive" alt="Image">
                                    <div class="short_info">
                                        <i class="icon_set_1_icon-44"></i>Historic Buildings<span class="price"><sup>$</sup>45</span>
                                    </div>
                                </a>
                            </div>
                            <div class="tour_title">
                                <h3><strong>Arc Triomphe</strong> tour</h3>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                                </div>
                                <!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                </div>
                                <!-- End wish list-->
                            </div>
                        </div>
                        <!-- End box tour -->
                    </div>
                    <!-- End col-md-6 -->

                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <div class="tour_container">
                            <div class="ribbon_3 popular"><span>Popular</span>
                            </div>
                            <div class="img_container">
                                <a href="single_tour.html">
                                    <img src="{{asset('frontend/img/tour_box_2.jpg')}}" width="800" height="533" class="img-responsive" alt="Image">
                                    <div class="short_info">
                                        <i class="icon_set_1_icon-43"></i>Churches<span class="price"><sup>$</sup>45</span>
                                    </div>
                                </a>
                            </div>
                            <div class="tour_title">
                                <h3><strong>Notredame</strong> tour</h3>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                                </div>
                                <!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                </div>
                                <!-- End wish list-->
                            </div>
                        </div>
                        <!-- End box tour -->
                    </div>
                    <!-- End col-md-6 -->
                </div>
                <!-- End row -->

                <div class="row">
                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="tour_container">
                            <div class="ribbon_3 popular"><span>Popular</span>
                            </div>
                            <div class="img_container">
                                <a href="single_tour.html">
                                    <img src="{{asset('frontend/img/tour_box_3.jpg')}}" width="800" height="533" class="img-responsive" alt="Image">
                                    <div class="short_info">
                                        <i class="icon_set_1_icon-44"></i>Historic Buildings<span class="price"><sup>$</sup>45</span>
                                    </div>
                                </a>
                            </div>
                            <div class="tour_title">
                                <h3><strong>Versailles</strong> tour</h3>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                                </div>
                                <!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                </div>
                                <!-- End wish list-->
                            </div>
                        </div>
                        <!-- End box tour -->
                    </div>
                    <!-- End col-md-6 -->

                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <div class="tour_container">
                            <div class="ribbon_3 popular"><span>Popular</span>
                            </div>
                            <div class="img_container">
                                <a href="single_tour.html">
                                    <img src="{{asset('frontend/img/tour_box_4.jpg')}}" width="800" height="533" class="img-responsive" alt="Image">
                                    <div class="short_info">
                                        <i class="icon_set_1_icon-30"></i>Walking tour<span class="price"><sup>$</sup>45</span>
                                    </div>
                                </a>
                            </div>
                            <div class="tour_title">
                                <h3><strong>Pompidue</strong> tour</h3>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                                </div>
                                <!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                </div>
                                <!-- End wish list-->
                            </div>
                        </div>
                        <!-- End box tour -->
                    </div>
                    <!-- End col-md-6 -->
                </div>
                <!-- End row -->

                <div class="row">
                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.5s">
                        <div class="tour_container">
                            <div class="ribbon_3 popular"><span>Popular</span>
                            </div>
                            <div class="img_container">
                                <a href="single_tour.html">
                                    <img src="{{asset('frontend/img/tour_box_14.jpg')}}" width="800" height="533" class="img-responsive" alt="Image">
                                    <div class="short_info">
                                        <i class="icon_set_1_icon-28"></i>Skyline tours<span class="price"><sup>$</sup>45</span>
                                    </div>
                                </a>
                            </div>
                            <div class="tour_title">
                                <h3><strong>Tour Eiffel</strong> tour</h3>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                                </div>
                                <!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                </div>
                                <!-- End wish list-->
                            </div>
                        </div>
                        <!-- End box tour -->
                    </div>
                    <!-- End col-md-6 -->

                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="tour_container">
                            <div class="ribbon_3"><span>Top rated</span>
                            </div>
                            <div class="img_container">
                                <a href="single_tour.html">
                                    <img src="{{asset('frontend/img/tour_box_5.jpg')}}" width="800" height="533" class="img-responsive" alt="Image">
                                    <div class="short_info">
                                        <i class="icon_set_1_icon-44"></i>Historic Buildings<span class="price"><sup>$</sup>45</span>
                                    </div>
                                </a>
                            </div>
                            <div class="tour_title">
                                <h3><strong>Pantheon</strong> tour</h3>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                                </div>
                                <!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                </div>
                                <!-- End wish list-->
                            </div>
                        </div>
                        <!-- End box tour -->
                    </div>
                    <!-- End col-md-6 -->
                </div>
                <!-- End row -->

                <div class="row">
                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.7s">
                        <div class="tour_container">
                            <div class="ribbon_3"><span>Top rated</span>
                            </div>
                            <div class="img_container">
                                <a href="single_tour.html">
                                    <img src="{{asset('frontend/img/tour_box_8.jpg')}}" width="800" height="533" class="img-responsive" alt="Image">
                                    <div class="short_info">
                                        <i class="icon_set_1_icon-3"></i>City sightseeing<span class="price"><sup>$</sup>45</span>
                                    </div>
                                </a>
                            </div>
                            <div class="tour_title">
                                <h3><strong>Open Bus</strong> tour</h3>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                                </div>
                                <!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                </div>
                                <!-- End wish list-->
                            </div>
                        </div>
                        <!-- End box tour -->
                    </div>
                    <!-- End col-md-6 -->

                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.8s">
                        <div class="tour_container">
                            <div class="ribbon_3"><span>Top rated</span>
                            </div>
                            <div class="img_container">
                                <a href="single_tour.html">
                                    <img src="{{asset('frontend/img/tour_box_9.jpg')}}" width="800" height="533" class="img-responsive" alt="Image">
                                    <div class="short_info">
                                        <i class="icon_set_1_icon-4"></i>Museums<span class="price"><sup>$</sup>45</span>
                                    </div>
                                </a>
                            </div>
                            <div class="tour_title">
                                <h3><strong>Louvre museum</strong> tour</h3>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                                </div>
                                <!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                </div>
                                <!-- End wish list-->
                            </div>
                        </div>
                        <!-- End box tour -->
                    </div>
                    <!-- End col-md-6 -->
                </div>
                <!-- End row -->

                <hr>

                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">Prev</a>
                        </li>
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li><a href="#">Next</a>
                        </li>
                    </ul>
                </div>
                <!-- end pagination-->

            </div>
            <!-- End col lg 9 -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</main>
<!-- End main -->

@endsection