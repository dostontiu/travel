@extends('layouts.main')
@section('content')
    @push('styles')
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
            @include('system.error')
            <h2 class="default-title">Create Post Tour</h2>

            @if($images != null)
            <div class="row" data-post="{{ $posttour->id }}">
                @foreach($images as $image)
                    <div class="col-md-2 col-sm-3 image-container" data-image="{{ $image->id }}">
                        <div class="pricing-table black ">
                            <div class="pricing-table-header"></div>
                            <a href="#" class="close delete-button" data-url="{{ route('remove-image') }}">&times;</a>
                            <img src="{{asset('images/'.$image->name)}}" width="155px" alt="" style="padding: 5px 0">
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
            <div class="col-md-9">
                <label>Upload images for galery <sup>*</sup></label>
                <form action="{{asset('upload-images')}}"
                      class="dropzone"
                      id="my-awesome-dropzone">
                    {{ csrf_field() }}
                </form>
            </div>

            <form action="/posttour" method="post"  enctype="multipart/form-data">
                {{ csrf_field() }}

                @include('frontend.posttour.form')

                <div class="form-group">
                    <div class="field-group btn-field">
                        <button type="submit" class="btn btn-primary btn_cart_outine">Apply</button>
                    </div>
                </div>
            </form>

        </div>
        <!-- End Container -->
    </main>
    <!-- End main -->

@endsection
