@extends('layouts.main')
@section('content')

    <div class="container-fluid full-height">
        <div class="row row-height">
            <div class="col-md-7 content-left">

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="tour_container">
                            <div class="ribbon_3 popular"><span>Popular</span></div>
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
                                </div><!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                </div><!-- End wish list-->
                                <div onclick="onHtmlClick('Historic', 0)" class="view_on_map">View on map</div>
                            </div>
                        </div><!-- End box tour -->
                    </div><!-- End col-md-6 -->

                    <div class="col-md-6 col-sm-6">
                        <div class="tour_container">
                            <div class="ribbon_3 popular"><span>Popular</span></div>
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
                                </div><!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                </div><!-- End wish list-->
                                <div onclick="onHtmlClick('Churches', 0)" class="view_on_map">View on map</div>
                            </div>
                        </div><!-- End box tour -->
                    </div><!-- End col-md-6 -->
                </div><!-- End row -->

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="tour_container">
                            <div class="ribbon_3 popular"><span>Popular</span></div>
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
                                </div><!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                </div><!-- End wish list-->
                                <div onclick="onHtmlClick('Historic', 1)" class="view_on_map">View on map</div>
                            </div>
                        </div><!-- End box tour -->
                    </div><!-- End col-md-6 -->

                    <div class="col-md-6 col-sm-6">
                        <div class="tour_container">
                            <div class="ribbon_3 popular"><span>Popular</span></div>
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
                                </div><!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                </div><!-- End wish list-->
                                <div onclick="onHtmlClick('Walking', 0)" class="view_on_map">View on map</div>
                            </div>
                        </div><!-- End box tour -->
                    </div><!-- End col-md-6 -->
                </div><!-- End row -->

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="tour_container">
                            <div class="ribbon_3"><span>Top rated</span></div>
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
                                </div><!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                </div><!-- End wish list-->
                                <div onclick="onHtmlClick('Skyline', 0)" class="view_on_map">View on map</div>
                            </div>
                        </div><!-- End box tour -->
                    </div><!-- End col-md-6 -->

                    <div class="col-md-6 col-sm-6">
                        <div class="tour_container">
                            <div class="ribbon_3"><span>Top rated</span></div>
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
                                </div><!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                </div><!-- End wish list-->
                                <div onclick="onHtmlClick('Historic', 2)" class="view_on_map">View on map</div>
                            </div>
                        </div><!-- End box tour -->
                    </div><!-- End col-md-6 -->
                </div><!-- End row -->

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="tour_container">
                            <div class="ribbon_3"><span>Top rated</span></div>
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
                                </div><!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                </div><!-- End wish list-->
                                <div onclick="onHtmlClick('Sightseeing', 0)" class="view_on_map">View on map</div>
                            </div>
                        </div><!-- End box tour -->
                    </div><!-- End col-md-6 -->

                    <div class="col-md-6 col-sm-6">
                        <div class="tour_container">
                            <div class="ribbon_3"><span>Top rated</span></div>
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
                                </div><!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                </div><!-- End wish list-->
                                <div onclick="onHtmlClick('Museums', 0)" class="view_on_map">View on map</div>
                            </div>
                        </div><!-- End box tour -->
                    </div><!-- End col-md-6 -->
                </div><!-- End row -->

                <hr>

                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div><!-- end pagination-->
            </div>

            <div class="col-md-5 map-right">
                <div class="map" id="map"></div>
            </div>

        </div><!-- End row-->
    </div><!-- End container-fluid -->

@endsection