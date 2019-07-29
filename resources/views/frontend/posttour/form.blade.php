<div class="row">
    <div class="form-group col-md-4 col-sm-12 col-xs-12">
        <label>Language<sup>*</sup></label>
        <select {{ (in_array('disabled', $has_lang))?'disabled':'' }} name="lang_id" class="form-control{{ $errors->has('lang_id') ? ' has-error' : '' }}" >
            <option value="">-- Select --</option>
            @foreach($languages as $language)
                <option value="{{$language->id}}"
                        {{( ($language->id==old('lang_id')) || ($language->id==$posttourcontent->lang_id) )? 'selected' : ' '}}
                        {{ in_array($language->id, $has_lang)?'disabled':'' }}>
                    {{$language->name}}
                </option>
            @endforeach
        </select>
        <small class="text-danger">
            {{ $errors->first('lang_id') }}
            @if (session()->has('error'))
                {{ session()->get('error') }}
            @endif
        </small>
    </div>
    <div class="form-group col-md-4 col-sm-12 col-xs-12">
        <label>Category<sup>*</sup></label>
        <select name="category_id" class="form-control{{ $errors->has('category_id') ? ' has-error' : '' }}" >
            <option value="">-- Select --</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}"  {{( ($category->id==old('category_id')) || ($category->id==$posttour->category_id) )? 'selected' : '' }}>{{$category->titleName}}</option>
            @endforeach
        </select>
        <small class="text-danger">{{ $errors->first('category_id') }}</small>
    </div>
    <div class="form-group col-md-4 col-sm-12 col-xs-12">
        <label>Region <sup>*</sup></label>
        <select name="region_id" class="form-control{{ $errors->has('region_id') ? ' has-error' : '' }}" >
            <option value="">-- Select --</option>
            @foreach($regions as $region)
                <option value="{{$region->id}}"  {{( ($region->id==old('region_id')) || ($region->id==$posttour->region_id) )? 'selected' : '' }}>{{$region->titleName}}</option>
            @endforeach
        </select>
        <small class="text-danger">{{ $errors->first('region_id') }}</small>
    </div>
    <div class="form-group col-md-3 col-s4m-6 col-xs-6">
        <label>Price <sup>*</sup></label>
        <input type="number" name="price" value="{{ old('price') ?? $posttour->price }}" placeholder="" class="form-control">
        <small class="text-danger">{{ $errors->first('price') }}</small>
    </div>
    <div class="form-group col-md-2 col-sm-12 col-xs-12">
        <label>price_type_id <sup>*</sup></label>
        <select name="price_type_id" class="form-control{{ $errors->has('price_type_id') ? ' has-error' : '' }}" >
            <option value="">-- Select --</option>
            @foreach($price_types as $price_type)
                <option value="{{$price_type->id}}"  {{( ($price_type->id==old('price_type_id')) || ($price_type->id==$posttour->price_type_id) )? 'selected' : '' }}>{{$price_type->titleName}}</option>
            @endforeach
        </select>
        <small class="text-danger">{{ $errors->first('price_type_id') }}</small>
    </div>
    <div class="form-group col-md-3 col-sm-6 col-xs-6">
        <label>Sale <sup>*</sup></label>
        <input type="number" name="sale" value="{{ old('sale') ?? $posttour->sale}}" placeholder="" class="form-control">
        <small class="text-danger">{{ $errors->first('sale') }}</small>
    </div>
    <div class="form-group col-md-3 col-sm-12 col-xs-12">
        <label>Rooms <sup>*</sup></label>
        <input type="number" name="rooms" value="{{ old('rooms') ?? $posttour->rooms}}" placeholder="Rooms" class="form-control">
        <small class="text-danger">{{ $errors->first('rooms') }}</small>
    </div>


    <div class="form-group col-md-10 col-sm-12 col-xs-12">
        <label>Title</label>
        <input type="text" name="title" value="{{ old('title') ?? $posttourcontent->title }}" placeholder="" class="form-control">
        <small class="text-danger">{{ $errors->first('title') }}</small>
    </div>
    <div class="form-group col-md-12 col-sm-12 col-xs-12">
        <label>Description <sup>*</sup></label>
        <textarea rows="10" name="description" placeholder="ck-editor" class="form-control">{{ old('description') ?? $posttourcontent->description}}</textarea>
        <small class="text-danger">{{ $errors->first('description') }}</small>
    </div>
    <div class="form-group col-md-12 col-sm-12 col-xs-12">
        <label>Content <sup>*</sup></label>
        <textarea rows="10" name="content" placeholder="ck-editor" class="form-control">{{ old('content') ?? $posttourcontent->content}}</textarea>
        <small class="text-danger">{{ $errors->first('content') }}</small>
    </div>
    <div class="form-group col-md-12 col-sm-12 col-xs-12">
        <label>Service <sup>*</sup></label>
        <textarea rows="5" name="service" placeholder="Write your services" class="form-control">{{ old('service') ?? $posttourcontent->service}}</textarea>
        <small class="text-danger">{{ $errors->first('service') }}</small>
    </div>
    <div class="form-group col-md-12 col-sm-12 col-xs-12">
        <label>Activity <sup>*</sup></label>
        <textarea rows="5" name="activity" placeholder="Activity" class="form-control">{{ old('activity') ?? $posttourcontent->activity}}</textarea>
        <small class="text-danger">{{ $errors->first('activity') }}</small>
    </div>
    <div class="form-group col-md-12 col-sm-12 col-xs-12">
        <label>Terms <sup>*</sup></label>
        <textarea rows="5" name="term"  placeholder="Write your services" class="form-control">{{ old('term') ?? $posttourcontent->term}}</textarea>
        <small class="text-danger">{{ $errors->first('term') }}</small>
    </div>
    <div class="form-group col-md-5 col-sm-12 col-xs-12">
        <label>Facility <sup>*</sup></label>
        <input type="text" name="facility" value="{{ old('facility') ?? $posttourcontent->facility}}" placeholder="Facilities" class="form-control">
        <small class="text-danger">{{ $errors->first('facility') }}</small>
    </div>
    <div class="form-group col-md-5 col-sm-12 col-xs-12">
        <label>Insurance <sup>*</sup></label>
        <input type="text" name="insurance" value="{{ old('insurance') ?? $posttourcontent->insurance}}" placeholder="Insurance" class="form-control">
        <small class="text-danger">{{ $errors->first('insurance') }}</small>
    </div>
    <input type="hidden" name="post_id" value="{{ $posttour->id }}">
    <input type="hidden" name="lang_id" value="{{ $posttourcontent->lang_id }}">
</div>