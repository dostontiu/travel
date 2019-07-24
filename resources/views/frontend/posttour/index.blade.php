@extends('layouts.main')
@section('content')

    @push('styles')
        <!-- Range slider -->
        <link href="{{asset('frontend/css/ion.rangeSlider.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
    @endpush

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
            @include('system.success')
            <div class="row">
                @include('frontend.posttour.aside')
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
                <!-- End col lg-9 -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </main>
    <!-- End main -->

    @push('scripts')
        <!-- Cat nav mobile -->
        <script src="{{asset('frontend/js/cat_nav_mobile.js')}}"></script>
        <script>
            $('#cat_nav').mobileMenu();
        </script>
        <!-- Check and radio inputs -->
        <script src="{{asset('frontend/js/icheck.js')}}"></script>
        <script>
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-grey',
                radioClass: 'iradio_square-grey'
            });
        </script>
        <!-- Map -->
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script src="{{asset('frontend/js/map.js')}}"></script>
        <script src="{{asset('frontend/js/infobox.js')}}"></script>

        <script type="text/javascript">
            $(window).on('hashchange', function() {
                if (window.location.hash) {
                    var page = window.location.hash.replace('#', '');
                    if (page == Number.NaN || page <= 0) {
                        return false;
                    }else{
                        getData(page);
                    }
                }
            });
            $(document).ready(function()
            {
                $(document).on('click', '.pagination a',function(event)
                {
                    event.preventDefault();

                    $('li').removeClass('active');
                    $(this).parent('li').addClass('active');

                    var myurl = $(this).attr('href');
                    var page=$(this).attr('href').split('page=')[1];

                    getData(page);
                });

            });

            function getData(page){
                $.ajax(
                    {
                        url: '?page=' + page,
                        type: "get",
                        datatype: "html"
                    }).done(function(data){
                    $("#tag_container").empty().html(data);
                    location.hash = page;
                }).fail(function(jqXHR, ajaxOptions, thrownError){
                    alert('No response from server');
                });
            }
        </script>
    @endpush

@endsection
