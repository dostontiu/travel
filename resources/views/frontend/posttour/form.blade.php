<div class="col-md-3">
    <div class="form-group col-md-12 col-sm-12">
        <label>Category<sup>*</sup></label>
        <select name="category_id" class="form-control{{ $errors->has('category_id') ? ' has-error' : '' }}" >
            <option value="">-- Select --</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}"  {{( ($category->id==old('category_id')) || ($category->id==$posttour->category_id) )? 'selected' : '' }}>{{$category->titleName}}</option>
            @endforeach
        </select>
        <small class="text-danger">{{ $errors->first('category_id') }}</small>
    </div>
    <div class="form-group col-md-12 col-sm-12">
        <label>Region <sup>*</sup></label>
        <select name="region_id" class="form-control{{ $errors->has('region_id') ? ' has-error' : '' }}" >
            <option value="">-- Select --</option>
            @foreach($regions as $region)
                <option value="{{$region->id}}"  {{( ($region->id==old('region_id')) || ($region->id==$posttour->region_id) )? 'selected' : '' }}>{{$region->titleName}}</option>
            @endforeach
        </select>
        <small class="text-danger">{{ $errors->first('region_id') }}</small>
    </div>
    <div class="form-group col-md-8 col-sm-6 col-xs-8">
        <label>Price <sup>*</sup></label>
        <input type="number" name="price" value="{{ old('price') ?? $posttour->price }}" placeholder="" class="form-control">
        <small class="text-danger">{{ $errors->first('price') }}</small>
    </div>
    <div class="form-group col-md-4 col-sm-6 col-xs-4">
        <label>Type<sup>*</sup></label>
        <select name="price_type_id" style="margin-left: -31px; width: 86px; border-left: none;" class="form-control{{ $errors->has('price_type_id') ? ' has-error' : '' }}" >
            <option value="">-- Select --</option>
            @foreach($price_types as $price_type)
                <option value="{{$price_type->id}}"  {{( ($price_type->id==old('price_type_id')) || ($price_type->id==$posttour->price_type_id) )? 'selected' : '' }}>{{$price_type->titleName}}</option>
            @endforeach
        </select>
        <small class="text-danger">{{ $errors->first('price_type_id') }}</small>
    </div>
    <div class="form-group col-md-8 col-sm-6">
        <label>Sale <sup>*</sup></label>
        <input type="number" name="sale" value="{{ old('sale') ?? $posttour->sale}}" placeholder="" class="form-control">
        <small class="text-danger">{{ $errors->first('sale') }}</small>
    </div>
    <div class="form-group col-md-4 col-sm-6">
        <label>Rooms <sup>*</sup></label>
        <input type="number" name="rooms" value="{{ old('rooms') ?? $posttour->rooms}}" placeholder="Rooms" class="form-control">
        <small class="text-danger">{{ $errors->first('rooms') }}</small>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <ul class="nav nav-tabs nav-justified">
            @foreach($languages as $language)
                @php
                    $active = ($language->locale==$locale) ? 'active ' : '';
                    $lang_id = $posttourcontent->lang_id;
                    $disable = '';
                    if ($lang_id==null){
                        $disable = in_array($language->id, $has_lang)?'disabled ':'';
                        $route = (!empty($disable)) ? "javascript:void(0);" : route('posttour.create', [$language->locale, $posttour->id]);
                        $title = (!empty($disable)) ? "There is a post in this language" : "You can create a post in this language";
                        if ($language->locale==$locale){
                            $lang_id = $language->id;
                        }
                    } else {
                        if (!empty($active)){
                            $route = "javascript:void(0);";
                            $title = "This language";
                        } else{
                            $route = route('posttour.edit', [$posttour->id, $language->locale]);
                            $title = "You can edit in ". $language->name ." language";
                        }
                        if (!in_array($language->id, $has_lang)){
                            $route = route('posttour.create', [$language->locale, $posttour->id]);
                            $title = "You can create ". $language->name ." language";
                        }
                    }
                @endphp
                <li title="{{ $title }}" class="{{ $disable. $active }}">
                    <a href="{{ $route }}">{{ $language->name }}</a>
                </li>
            @endforeach
        </ul>
        <input type="hidden" name="lang_id" value="{{ $lang_id }}">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-12 col-sm-12">
        <label>Title</label>
        <input type="text" name="title" value="{{ old('title') ?? $posttourcontent->title }}" placeholder="" class="form-control">
        <small class="text-danger">{{ $errors->first('title') }}</small>
        <small class="text-danger">{{ $errors->first('lang_id') }}</small>
    </div>
    <div class="form-group col-md-12 col-sm-12">
        <label>Description <sup>*</sup></label>
        <input type="text" name="description" value="{{ old('description') ?? $posttourcontent->description }}" placeholder="" class="form-control">
        <small class="text-danger">{{ $errors->first('description') }}</small>
    </div>
    <div class="form-group col-md-12 col-sm-12">
        <label>Content <sup>*</sup></label>
        <textarea rows="10" name="content" placeholder="ck-editor" class="form-control">{{ old('content') ?? $posttourcontent->content}}</textarea>
        <small class="text-danger">{{ $errors->first('content') }}</small>
    </div>
    <div class="form-group col-md-12 col-sm-12">
        <label>Service <sup>*</sup></label>
        <textarea rows="5" name="service" placeholder="Write your services" class="form-control">{{ old('service') ?? $posttourcontent->service}}</textarea>
        <small class="text-danger">{{ $errors->first('service') }}</small>
    </div>
    <div class="form-group col-md-12 col-sm-12">
        <label>Activity <sup>*</sup></label>
        <textarea rows="5" name="activity" placeholder="Activity" class="form-control">{{ old('activity') ?? $posttourcontent->activity}}</textarea>
        <small class="text-danger">{{ $errors->first('activity') }}</small>
    </div>
    <div class="form-group col-md-12 col-sm-12">
        <label>Terms <sup>*</sup></label>
        <textarea rows="5" name="term"  placeholder="Write your services" class="form-control">{{ old('term') ?? $posttourcontent->term}}</textarea>
        <small class="text-danger">{{ $errors->first('term') }}</small>
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label>Facility <sup>*</sup></label>
        <input type="text" name="facility" value="{{ old('facility') ?? $posttourcontent->facility}}" placeholder="Facilities" class="form-control">
        <small class="text-danger">{{ $errors->first('facility') }}</small>
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label>Insurance <sup>*</sup></label>
        <input type="text" name="insurance" value="{{ old('insurance') ?? $posttourcontent->insurance}}" placeholder="Insurance" class="form-control">
        <small class="text-danger">{{ $errors->first('insurance') }}</small>
    </div>
    <input type="hidden" name="post_id" value="{{ $posttour->id }}">
</div>
{{--    <input type="hidden" name="lang_id" value="{{ $posttourcontent->lang_id }}">--}}
{{--</div>--}}

@push('scripts')
    <script src="{{asset('frontend/js/dropzone.js')}}"></script>
    <script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'content',{
            language: 'en',
        } );
        CKEDITOR.replace( 'service',{
            language: 'en',
        } );
        CKEDITOR.replace( 'activity',{
            language: 'en',
        } );
        CKEDITOR.replace( 'term',{
            language: 'en',
        } );

        Dropzone.options.imageUpload = {
            maxFilesize         :       1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
        };
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.delete-button').on('click', function (e) {
                e.preventDefault();
                var url = $(this).attr('data-url');
                var image_id = $(this).parent().parent().attr('data-image');
                var post_id = $(this).parent().parent().parent().attr('data-post');
                var image_container = $(this).parent().parent();
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        image_id: image_id,
                        post_id: post_id
                    },
                    success: function (data) {
                        $(image_container).remove();
                    }
                })

            })
        })
    </script>
@endpush
