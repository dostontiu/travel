@extends('layouts.main')
@section('content')
@push('styles')
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--<link rel="stylesheet" href="{{asset('css/app.css')}}">--}}
<link rel="stylesheet" href="{{asset('frontend/css/dropzone.css')}}">
@endpush
    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('frontend/img/header_bg.jpg')}}" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>Shopping cart</h1>
                <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
            </div>
        </div>
    </section>
    <!-- End Section -->

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

        <div class="container margin_60">
            <div class="default-title">
                <h2>Update Post for Tour {{$posttour->id}}</h2>
            </div>
            <div class="row">
                <form action="/posttour/{{$posttour->id}}" method="POST" >

                    @method('PATCH')
                    @csrf
                    @include('frontend.posttour.form')
                    <div class="form-group col-md-2 col-sm-6 col-xs-6">
                        <div class="field-group btn-field">
                            <button type="submit" class="btn btn_cart_outine">Update</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row" >
                <label>Upload images for galery <sup>*</sup></label>
                <form action="{{asset('upload-images')}}"
                      class="dropzone"
                      id="my-awesome-dropzone">
                    {{ csrf_field() }}
                </form>
            </div>
            <div class="row">
                @foreach($images as $image)
                <div class="col-md-2 col-sm-3">
                    <div class="pricing-table black ">
                        <div class="pricing-table-header"></div>
{{--                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>--}}
                        <img src="{{asset('images/'.$image->name)}}" width="155px" alt="" style="padding: 5px 0">
                        <button type="submit" class="btn_1 green">Delete</button>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        <!-- End Container -->
    </main>
    <!-- End main -->

@push('scripts')
    <script src="{{asset('frontend/js/dropzone.js')}}"></script>
    <script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'description',{
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
    </script>
@endpush

@endsection