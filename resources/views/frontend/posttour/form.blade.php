<div class="row">
    <div class="form-group col-md-6 col-sm-12 col-xs-12">
        <label>Category<sup>*</sup></label>
        <input type="text" name="category_id" value="{{ old('category_id') ?? $posttour->category_id }}" class="form-control{{ $errors->has('category_id') ? ' has-error' : '' }}">
        <select name="category_id" class="form-control{{ $errors->has('category_id') ? ' has-error' : '' }}" >
            <option>-- Select --</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}"  {{( ($category->id==old('category_id')) || ($category->id==$posttour->category_id) )? 'selected' : '' }}>{{$category->name}}</option>
            @endforeach
        </select>oonm5199
        <small class="text-danger">{{ $errors->first('name') }}</small>
    </div>
    <div class="form-group col-md-6 col-sm-12 col-xs-12">
        <label>Region <sup>*</sup></label>
        <input type="text" name="region_id" value="{{ old('region_id') ?? $posttour->region_id }}" class="form-control{{ $errors->has('region_id') ? ' has-error' : '' }}">
        <small class="text-danger">{{ $errors->first('name') }}</small>
    </div>

    <div class="form-group col-md-10 col-sm-12 col-xs-12">
        <label>Name <sup>*</sup></label>
        <input type="text" name="name" value="{{ old('name') ?? $posttour->name }}" class="form-control{{ $errors->has('name') ? ' has-error' : '' }}">
        <small class="text-danger">{{ $errors->first('name') }}</small>
    </div>
    <div class="form-group col-md-2 col-sm-6 col-xs-6">
        <label>Cost <sup>*</sup></label>
        <input type="number" name="cost" value="{{ old('cost') ?? $posttour->cost }}" placeholder="" class="form-control">
        <small class="text-danger">{{ $errors->first('cost') }}</small>
    </div>
    <div class="form-group col-md-10 col-sm-12 col-xs-12">
        <label>Title</label>
        <input type="text" name="title" value="{{ old('title') ?? $posttour->title }}" placeholder="" class="form-control">
        <small class="text-danger">{{ $errors->first('title') }}</small>
    </div>
    <div class="form-group col-md-2 col-sm-6 col-xs-6">
        <label>Discount <sup>*</sup></label>
        <input type="number" name="discount" value="{{ old('discount') ?? $posttour->discount}}" placeholder="" class="form-control">
        <small class="text-danger">{{ $errors->first('discount') }}</small>
    </div>
    <div class="form-group col-md-12 col-sm-12 col-xs-12">
        <label>Description <sup>*</sup></label>
        <textarea rows="10" name="description" placeholder="ck-editor" class="form-control">{{ old('description') ?? $posttour->description}}</textarea>
        <small class="text-danger">{{ $errors->first('description') }}</small>
    </div>
    <div class="form-group col-md-12 col-sm-12 col-xs-12">
        <label>Service <sup>*</sup></label>
        <textarea rows="5" name="service" placeholder="Write your services" class="form-control">{{ old('service') ?? $posttour->service}}</textarea>
        <small class="text-danger">{{ $errors->first('service') }}</small>
    </div>
    <div class="form-group col-md-12 col-sm-12 col-xs-12">
        <label>Activity <sup>*</sup></label>
        <textarea rows="5" name="activity" placeholder="Activity" class="form-control">{{ old('activity') ?? $posttour->activity}}</textarea>
        <small class="text-danger">{{ $errors->first('activity') }}</small>
    </div>
    <div class="form-group col-md-12 col-sm-12 col-xs-12">
        <label>Terms <sup>*</sup></label>
        <textarea rows="5" name="term"  placeholder="Write your services" class="form-control">{{ old('term') ?? $posttour->term}}</textarea>
        <small class="text-danger">{{ $errors->first('term') }}</small>
    </div>
    <div class="form-group col-md-2 col-sm-12 col-xs-12">
        <label>Rooms <sup>*</sup></label>
        <input type="number" name="rooms" value="{{ old('rooms') ?? $posttour->rooms}}" placeholder="Rooms" class="form-control">
        <small class="text-danger">{{ $errors->first('rooms') }}</small>
    </div>
    <div class="form-group col-md-5 col-sm-12 col-xs-12">
        <label>Facility <sup>*</sup></label>
        <input type="text" name="facility" value="{{ old('facility') ?? $posttour->facility}}" placeholder="Facilities" class="form-control">
        <small class="text-danger">{{ $errors->first('facility') }}</small>
    </div>
    <div class="form-group col-md-5 col-sm-12 col-xs-12">
        <label>Insurance <sup>*</sup></label>
        <input type="text" name="insurance" value="{{ old('insurance') ?? $posttour->insurance}}" placeholder="Insurance" class="form-control">
        <small class="text-danger">{{ $errors->first('insurance') }}</small>
    </div>
</div>