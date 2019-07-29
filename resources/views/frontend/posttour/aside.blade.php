<aside class="col-lg-3 col-md-3">
    <p>
        <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
    </p>

    <div class="box_style_cat">
        <h3 class="text-center">Categories</h3>
        <ul id="cat_nav">
            @foreach($categories as $category)
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#collapse-category-{{$category->id}}"  class="active"><i class="{{$category->icon}}"></i>{{$category->titleName}}<span>({{$category->postTour->count()}})</span></a>
                <ul class="collapse" id="collapse-category-{{$category->id}}">
                    <li>
                        <a href="" ><i class="{{$category->icon}}"></i>{{$category->titleName}}<span>({{$category->postTour->count()}})</span></a>
                    </li>
                    @foreach($category->children as $subcategory)
                        @foreach($subcategory->tourCategoryContent as $content)
                            <li class="">
                                <a href="" class=""><i class="{{$subcategory->icon}}"></i>{{$content->name}}<span>({{$subcategory->postTour->count()}})</span></a>
                            </li>
                        @endforeach
                    @endforeach
                </ul>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="box_style_cat">
        <h3 class="text-center">Places</h3>
        <ul id="cat_nav">
            @foreach($regions as $region)
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#collapse-region-{{$region->id}}"  class="active"><i class=""></i>{{$region->titleName}}<span>({{$region->postTour->count()}})</span></a>
                    <ul class="collapse" id="collapse-region-{{$region->id}}">
                        <li>
                            <a href="" ><i class=""></i>{{$region->titleName}}<span>({{$region->postTour->count()}})</span></a>
                        </li>
                        @foreach($region->children as $subregion)
                            @foreach($subregion->tourCategoryContent as $content)
                                <li class="">
                                    <a href="" class=""><i class=""></i>{{$content->name}}<span>({{$subregion->postTour->count()}})</span></a>
                                </li>
                            @endforeach
                        @endforeach
                    </ul>
                </li>
            @endforeach
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
                            <input type="checkbox" class="five-smile-icon"><span class="rating">
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