@extends('layouts.main')
@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('frontend/img/home_bg_1.jpg')}}" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>Tashkent tours</h1>
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
                <div class="col-lg-9 col-md-9">

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
                                <a href="all_tours_grid.html" class="bt_filters"><i class="icon-th"></i></a> <a href="#" class="bt_filters"><i class=" icon-list"></i></a>
                            </div>

                        </div>
                    </div>
                    <!--/tools -->

                    @if(count($accounts)>0)
                        <?php $delaycount=0?>
                        @foreach($accounts as $account)
                            <div class="strip_all_tour_list wow fadeIn" data-wow-delay="{{$delaycount+=0.1}}s">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="ribbon_3 popular"><span>Popular</span>
                                        </div>
                                        <div class="wishlist">
                                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                        </div>
                                        <div class="img_list">
                                            <a href="{{ route('frontend.index') }}/account/{{$account->company_name}}"><img src="{{asset('frontend/img/tour_box_1.jpg')}}" alt="Image"></a>
                                        </div>
                                    </div>
                                    <div class="clearfix visible-xs-block"></div>
                                    <div class="col-lg-5 col-md-5 col-sm-5">
                                        <div class="tour_list_desc">
                                            <br>
                                            <h4><b><i class="icon-user-6"></i> {{$account->company_name}}</b></h4>
                                            <br>
                                            <h5>{!!$account->address!!}</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <br>
                                        <p class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile"></i><small>(75)</small></p>
                                        <p>
                                            <a href="{{ route('frontend.index') }}/account/{{$account->company_name}}" class="btn btn-primary">Details</a>
{{--                                            <a href="{{route('account.edit', $account->id)}}" class="btn btn-link"><i class="icon-edit"></i></a>--}}
                                        </p>
                                        <p><a href="#" class="btn btn-primary">Follow</a></p>
                                        <ul class="add_info">
                                            <li>
                                                <div class="tooltip_styled tooltip-effect-4">
                                                    <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                                                    <div class="tooltip-content">
                                                        <h4>Schedule</h4>
                                                        <strong>Every day</strong>
                                                        <br>
                                                        {{$account->work_time_start}}
                                                        <br>
                                                        {{$account->work_time_end}}
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tooltip_styled tooltip-effect-4">
                                                    <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>
                                                    <div class="tooltip-content">
                                                        <h4>Telephone : </h4> {{$account->telephone}}
                                                        <br>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tooltip_styled tooltip-effect-4">
                                                    <span class="tooltip-item"><i class="icon_set_1_icon-97"></i></span>
                                                    <div class="tooltip-content">
                                                        <h4>Contacts</h4> {{$account->emails}}
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tooltip_styled tooltip-effect-4">
                                                    <span class="tooltip-item"><i class="icon_set_1_icon-27"></i></span>
                                                    <div class="tooltip-content">
                                                        <h4>Messengers : </h4>
                                                        <br>{{$account->messenger}}
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--End strip -->
                        @endforeach
                    @endif

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
                <!-- End col lg-9 -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </main>
    <!-- End main -->

@endsection
