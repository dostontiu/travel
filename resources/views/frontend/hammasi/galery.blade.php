@extends('layouts.main')
@section('content')

<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('frontend/img/header_bg.jpg')}}" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>Gallery page</h1>
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
        <div class="main_title">
            <h2>Some <span>images</span> from travellers</h2>
            <p>
                Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
            </p>
        </div>
        <hr>
        <div class="row magnific-gallery add_bottom_60 ">
            <div class="col-md-4 col-sm-4">
                <div class="img_wrapper_gallery">
                    <div class="img_container_gallery">
                        <a href="img/notredame.jpg')}}" title="Photo title"><img src="{{asset('frontend/img/notredame.jpg')}}" alt="Image" class="img-responsive">
                            <i class="icon-resize-full-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="img_wrapper_gallery">
                    <div class="img_container_gallery">
                        <a href="img/notredame.jpg')}}" title="Photo title"><img src="{{asset('frontend/img/notredame.jpg')}}" alt="Image" class="img-responsive">
                            <i class="icon-resize-full-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="img_wrapper_gallery">
                    <div class="img_container_gallery">
                        <a href="img/notredame.jpg')}}" title="Photo title"><img src="{{asset('frontend/img/notredame.jpg')}}" alt="Image" class="img-responsive">
                            <i class="icon-resize-full-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="img_wrapper_gallery">
                    <div class="img_container_gallery">
                        <a href="img/notredame.jpg')}}" title="Photo title"><img src="{{asset('frontend/img/notredame.jpg')}}" alt="Image" class="img-responsive">
                            <i class="icon-resize-full-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="img_wrapper_gallery">
                    <div class="img_container_gallery">
                        <a href="img/notredame.jpg')}}" title="Photo title"><img src="{{asset('frontend/img/notredame.jpg')}}" alt="Image" class="img-responsive">
                            <i class="icon-resize-full-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="img_wrapper_gallery">
                    <div class="img_container_gallery">
                        <a href="img/notredame.jpg')}}" title="Photo title"><img src="{{asset('frontend/img/notredame.jpg')}}" alt="Image" class="img-responsive">
                            <i class="icon-resize-full-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End row -->
        <div class="main_title">
            <h2>Some <span>videos</span> from travellers</h2>
            <p>
                Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
            </p>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="img_wrapper_gallery">
                    <div class="img_container_gallery">
                        <a href="https://vimeo.com/45830194" class="video" title="Video Vimeo"><img src="{{asset('frontend/img/notredame.jpg')}}" alt="Image" class="img-responsive"><i class="icon-resize-full-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="img_wrapper_gallery">
                    <div class="img_container_gallery">
                        <a href="https://www.youtube.com/watch?v=Zz5cu72Gv5Y" class="video" title="Video Youtube"><img src="{{asset('frontend/img/senna.jpg')}}" alt="Image" class="img-responsive"><i class="icon-resize-full-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="img_wrapper_gallery">
                    <div class="img_container_gallery">
                        <a href="https://vimeo.com/45830194" class="video" title="Video Vimeo"><img src="{{asset('frontend/img/notredame.jpg')}}" alt="Image" class="img-responsive"><i class="icon-resize-full-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End row -->

    </div>
    <!-- End container -->
</main>
<!-- End main -->

@endsection