@if(count($posts)>0)
        <?php $delaycount=0?>
        @foreach($posts as $post)
            @foreach($post->postTourContent as $content)
                @if($content->lang_id==session('locale_id'))
                    @if(session('viewswitch')=='grid')
                        <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="{{$delaycount+=0.1}}s">
                            <div class="tour_container">
                                <div class="ribbon_3 popular"><span>Popular</span>
                                </div>
                                <div class="img_container">
                                    <a href="{{ route('posttour.show',$post->id) }}">
                                            <img src="{{ isset($post->imgPostTour->first()->name) ? asset('images') .'/'. $post->imgPostTour->first()->name : asset('images') .'/'. 'noimage.jpg'}}"class="img-responsive" alt="Image">
                                        <div class="short_info">
                                            <i class="icon_set_1_icon-44"></i>{{$post->category->titleName}}<span class="price">{{$post->price}} <sup>{{$post->priceType->titleName}}</sup></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="tour_title">
                                    <h3><strong>{{$content->title}}</strong></h3>
                                    <div class="rating">
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                                        <div style="float: right">
                                            <a href="{{$post->category->id}}">
                                                <i class="icon_set_1_icon-41"></i>
                                                {{$post->region->titleName}}
                                            </a>
                                        </div>
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
                    @else
                        <div class="strip_all_tour_list wow fadeIn" data-wow-delay="{{$delaycount+=0.1}}s">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="ribbon_3 popular"><span>Popular</span>
                                    </div>
                                    <div class="wishlist">
                                        <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                    </div>
                                    <div class="img_list">
                                        <a href="{{ route('posttour.show',$post->id) }}">
                                            <img src="{{ isset($post->imgPostTour->first()->name) ? asset('images') .'/'. $post->imgPostTour->first()->name : asset('images') .'/'. 'noimage.jpg'}}" alt="Image">
                                            <div class="short_info"><i class="icon_set_1_icon-4"></i> {{$post->category->titleName}} </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix visible-xs-block"></div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="tour_list_desc">
                                        <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile"></i><small>(75)</small>
                                        </div>

                                        <h3>
                                            <strong>
                                                {{ $content->title }}
                                            </strong>
                                        </h3>
                                        <p class="tour_title">{{ str_limit($content->description, 200)}}</p>
                                        <ul class="add_info">
                                            <li>
                                                <div class="tooltip_styled tooltip-effect-4">
                                                    <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                                                    <div class="tooltip-content">
                                                        <h4>Rooms</h4>
                                                        <strong>{{$post->rooms}}</strong> Rooms<br>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tooltip_styled tooltip-effect-4">
                                                    <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>
                                                    <div class="tooltip-content">
                                                        <h4>Address</h4> Musée du Louvre, 75058 Paris - France
                                                        <br>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tooltip_styled tooltip-effect-4">
                                                    <span class="tooltip-item"><i class="icon_set_1_icon-97"></i></span>
                                                    <div class="tooltip-content">
                                                        <h4>Languages</h4> English - French - Chinese - Russian - Italian
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tooltip_styled tooltip-effect-4">
                                                    <span class="tooltip-item"><i class="icon_set_1_icon-27"></i></span>
                                                    <div class="tooltip-content">
                                                        <h4>Parking</h4> 1-3 Rue Elisée Reclus
                                                        <br> 76 Rue du Général Leclerc
                                                        <br> 8 Rue Caillaux 94923
                                                        <br>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tooltip_styled tooltip-effect-4">
                                                    <span class="tooltip-item"><i class="icon_set_1_icon-25"></i></span>
                                                    <div class="tooltip-content">
                                                        <h4>Transport</h4>
                                                        <strong>Metro: </strong>Musée du Louvre station (line 1)
                                                        <br>
                                                        <strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95
                                                        <br>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="region">
                                            <a href="{{$post->region->id}}">{{$post->region->titleName}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <div class="price_list">
                                        <div class="cost">
                                            {{ ($post->sale==null) ? $post->price : $post->sale}} {{$post->priceType->titleName}}
                                            <span class="normal_price_list">{{ ($post->sale==null) ? '' : $post->price.' '.$post->priceType->titleName}}</span>
                                        </div>
                                    </div>
                                    <p><a href="{{route('posttour.show', $post->id)}}" class="btn_1">Details</a></p>

                                </div>
                            </div>
                        </div>
                        <!--End strip -->
                    @endif
                @endif
            @endforeach
        @endforeach
        <div class="col-md-12 text-center">
            <hr>
            {!! $posts->render() !!}
        </div>
@endif