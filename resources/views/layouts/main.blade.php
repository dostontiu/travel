<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'city tour') }}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('frontend/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('frontend/img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('frontend/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('frontend/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('frontend/img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- CSS -->
    <link href="{{asset('frontend/css/base.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/skins/square/grey.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/date_time_picker.css')}}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    @stack('styles')


    <!--[if lt IE 9]>
    <script src="{{ asset('frontend/js/html5shiv.min.js')  }}"></script>
    <script src="{{ asset('frontend/js/respond.min.js') }}"></script>
    <![endif]-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Google web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i" rel="stylesheet">

</head>
<body>
<!--[if lte IE 8]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

<div id="preloader1">
    <div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
</div>
<!-- End Preload -->

<div class="layer"></div>
<!-- Mobile menu overlay mask -->
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}

        </div>
    @endif
        {{--{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}--}}
    {{--You are logged in!--}}
</div>
<!-- Header================================================== -->
<header>
    <div id="top_line">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6"><i class="icon-phone"></i><strong>0045 043204434</strong></div>

                <div class="col-md-6 col-sm-6 col-xs-6">
                    <ul id="top_links">
                        <!-- Authentication Links -->
                        @guest
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="access_link">Sign in</a>
                                    <div class="dropdown-menu">
                                        <form  method="POST" action="{{ route('login') }}">
                                            @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <a href="#" class="bt_facebook">
                                                    <i class="icon-facebook"></i>Facebook </a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <a href="#" class="bt_paypal">
                                                    <i class="icon-paypal"></i>Paypal </a>
                                            </div>
                                        </div>
                                        <div class="login-or">
                                            <hr class="hr-or">
                                            <span class="span-or">or</span>
                                        </div>
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback alert-danger" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password" placeholder="Password">
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="btn btn-link" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                            @if (Route::has('password.request'))
                                                <a id="forgot_pw" class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        <input type="submit" name="Sign_in" value="Sign in" id="Sign_up" class="button_drop outline">
                                            <a class="button_drop outline" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </form>
                                    </div>
                                </div><!-- End Dropdown access -->
                            </li>
                        @else
                            <li>
                                <a role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endguest

                        <li><a href="wishlist.html" id="wishlist_link">Wishlist</a></li>
                    </ul>
                </div>
            </div><!-- End row -->
        </div><!-- End container-->
    </div><!-- End top line-->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <div id="logo_home">
                    <h1><a href="{{ route('frontend.index') }}" title="City tours travel template">City Tours travel template</a></h1>
                </div>
            </div>
            <nav class="col-md-9 col-sm-9 col-xs-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="{{asset('frontend/img/logo_sticky.png')}}" width="160" height="34" alt="City tours" data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <ul>
                        @foreach($menus as $item)
                            <li>
                                <a href="{{ $item->link }}">{{ $item->title }} <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    @foreach($item->children as $menu)
                                        @foreach($menu->menuContent as $m)
                                            <li class="submenu">
                                                <a href="javascript:void(0);">{{ $m->title }}</a>
                                            </li>
                                        @endforeach
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Home <i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="javascript:void(0);">Revolution slider</a>
                                    <ul>
                                        <li><a href="{{ route('frontend.index') }}">Default slider</a></li>
                                        <li><a href="index_20.html">Advanced slider</a></li>
                                        <li><a href="index_14.html">Youtube Hero</a></li>
                                        <li><a href="index_15.html">Vimeo Hero</a></li>
                                        <li><a href="index_17.html">Youtube 4K</a></li>
                                        <li><a href="index_16.html">Carousel</a></li>
                                        <li><a href="index_19.html">Mailchimp Newsletter</a></li>
                                        <li><a href="index_18.html">Fixed Caption</a></li>
                                    </ul>
                                </li>
                                <li><a href="index_12.html">Layer slider</a></li>
                                <li><a href="index_2.html">With Only tours</a></li>
                                <li><a href="index_3.html">Single image</a></li>
                                <li><a href="index_4.html">Header video</a></li>
                                <li><a href="index_7.html">With search panel</a></li>
                                <li><a href="index_13.html">With tabs</a></li>
                                <li><a href="index_5.html">With map</a></li>
                                <li><a href="index_6.html">With search bar</a></li>
                                <li><a href="index_8.html">Search bar + Video</a></li>
                                <li><a href="index_9.html">With Text Rotator</a></li>
                                <li><a href="index_10.html">With Cookie Bar (EU law)</a></li>
                                <li><a href="index_11.html">Popup Advertising</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Tours <i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="{{route('posttour.index')}}">All tours list</a></li>
                                <li><a href="{{route('posttour.create')}}">Post tour create</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Accounts <i class="icon-down-open-mini"></i></a><ul>
                                <li><a href="{{route('account.index')}}">All accounts</a></li>
                                <li><a href="{{route('account.create')}}">Create account</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Transfers <i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="all_transfer_list.html">All transfers list</a></li>
                                <li><a href="all_transfer_grid.html">All transfers grid</a></li>
                                <li><a href="single_transfer.html">Single transfer page</a></li>
                                <li><a href="cart_transfer.html">Cart transfers</a></li>
                                <li><a href="payment_transfer.html">Booking transfers</a></li>
                                <li><a href="confirmation_transfer.html">Confirmation transfers</a></li>
                            </ul>
                        </li>
                        <li class="megamenu submenu">
                            <a href="javascript:void(0);" class="show-submenu-mega">Bonus<i class="icon-down-open-mini"></i></a>
                            <div class="menu-wrapper">
                                <div class="col-md-4">
                                    <h3>Header styles</h3>
                                    <ul>
                                        <li><a href="index.html">Default transparent</a></li>
                                        <li><a href="header_2.html">Plain color</a></li>
                                        <li><a href="header_3.html">Plain color on scroll</a></li>
                                        <li><a href="header_4.html">With socials on top</a></li>
                                        <li><a href="header_5.html">With language selection</a></li>
                                        <li><a href="header_6.html">With lang and conversion</a></li>
                                        <li><a href="header_7.html">With full horizontal menu</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h3>Footer styles</h3>
                                    <ul>
                                        <li><a href="index.html">Footer default</a></li>
                                        <li><a href="footer_2.html">Footer style 2</a></li>
                                        <li><a href="footer_3.html">Footer style 3</a></li>
                                        <li><a href="footer_4.html">Footer style 4</a></li>
                                        <li><a href="footer_5.html">Footer style 5</a></li>
                                        <li><a href="footer_6.html">Footer style 6</a></li>
                                        <li><a href="footer_7.html">Footer style 7</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h3>Shop</h3>
                                    <ul>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-single.html">Shop single</a></li>
                                        <li><a href="shopping-cart.html">Shop cart</a></li>
                                        <li><a href="checkout.html">Shop Checkout</a></li>
                                    </ul>
                                </div>
                            </div><!-- End menu-wrapper -->
                        </li>
                        <li class="megamenu submenu">
                            <a href="javascript:void(0);" class="show-submenu-mega">Pages<i class="icon-down-open-mini"></i></a>
                            <div class="menu-wrapper">
                                <div class="col-md-4">
                                    <h3>Pages</h3>
                                    <ul>
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="general_page.html">General page</a></li>
                                        <li><a href="tourist_guide.html">Tourist guide</a></li>
                                        <li><a href="wishlist.html">Wishlist page</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="faq_2.html">Faq smooth scroll</a></li>
                                        <li><a href="pricing_tables.html">Pricing tables</a></li>
                                        <li><a href="gallery_3_columns.html">Gallery 3 columns</a></li>
                                        <li><a href="gallery_4_columns.html">Gallery 4 columns</a></li>
                                        <li><a href="grid_gallery_1.html">Grid gallery</a></li>
                                        <li><a href="grid_gallery_2.html">Grid gallery with filters</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h3>Pages</h3>
                                    <ul>
                                        <li><a href="contact_us_1.html">Contact us 1</a></li>
                                        <li><a href="contact_us_2.html">Contact us 2</a></li>
                                        <li><a href="blog_right_sidebar.html">Blog</a></li>
                                        <li><a href="blog.html">Blog left sidebar</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="invoice.html" target="_blank">Invoice</a></li>
                                        <li><a href="404.html">404 Error page</a></li>
                                        <li><a href="site_launch/index.html">Site launch / Coming soon</a></li>
                                        <li><a href="timeline.html">Tour timeline</a></li>
                                        <li><a href="page_with_map.html"><i class="icon-map"></i>  Full screen map</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h3>Elements</h3>
                                    <ul>
                                        <li><a href="footer_2.html"><i class="icon-columns"></i> Footer with working newsletter</a></li>
                                        <li><a href="footer_5.html"><i class="icon-columns"></i> Footer with Twitter feed</a></li>
                                        <li><a href="icon_pack_1.html"><i class="icon-inbox-alt"></i> Icon pack 1 (1900)</a></li>
                                        <li><a href="icon_pack_2.html"><i class="icon-inbox-alt"></i> Icon pack 2 (100)</a></li>
                                        <li><a href="icon_pack_3.html"><i class="icon-inbox-alt"></i> Icon pack 3 (30)</a></li>
                                        <li><a href="icon_pack_4.html"><i class="icon-inbox-alt"></i> Icon pack 4 (200)</a></li>
                                        <li><a href="icon_pack_5.html"><i class="icon-inbox-alt"></i> Icon pack 5 (360)</a></li>
                                        <li><a href="shortcodes.html"><i class="icon-tools"></i> Shortcodes</a></li>
                                        <li><a href="newsletter_template/newsletter.html" target="blank"><i class=" icon-mail"></i> Responsive email template</a></li>
                                        <li><a href="admin.html"><i class="icon-cog-1"></i>  Admin area</a></li>
                                        <li><a href="general_page.html"><i class="icon-light-up"></i>  Weather Forecast</a></li>
                                    </ul>
                                </div>
                            </div><!-- End menu-wrapper -->
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">{{App::getLocale()}}<i class="icon-down-open-mini"></i></a>
                            <ul>
                                @foreach(\App\TourLang::all() as $lang)
                                    <li><a href="{{route('frontend.lang', $lang->locale)}}">{{$lang->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div><!-- End main-menu -->
                <ul id="top_tools">
                    <li>
                        <div class="dropdown dropdown-search">
                            <a href="#" class="search-overlay-menu-btn" data-toggle="dropdown"><i class="icon-search"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown dropdown-cart">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=" icon-basket-1"></i>Cart (0) </a>
                            <ul class="dropdown-menu" id="cart_items">
                                <li>
                                    <div class="image"><img src="{{asset('frontend/img/thumb_cart_1.jpg')}}" alt="image"></div>
                                    <strong>
                                        <a href="#">Louvre museum</a>1x $36.00 </strong>
                                    <a href="#" class="action"><i class="icon-trash"></i></a>
                                </li>
                                <li>
                                    <div class="image"><img src="{{asset('frontend/img/thumb_cart_2.jpg')}}" alt="image"></div>
                                    <strong>
                                        <a href="#">Versailles tour</a>2x $36.00 </strong>
                                    <a href="#" class="action"><i class="icon-trash"></i></a>
                                </li>
                                <li>
                                    <div class="image"><img src="{{asset('frontend/img/thumb_cart_3.jpg')}}" alt="image"></div>
                                    <strong>
                                        <a href="#">Versailles tour</a>1x $36.00 </strong>
                                    <a href="#" class="action"><i class="icon-trash"></i></a>
                                </li>
                                <li>
                                    <div>Total: <span>$120.00</span></div>
                                    <a href="cart.html" class="button_drop">Go to cart</a>
                                    <a href="payment.html" class="button_drop outline">Check out</a>
                                </li>
                            </ul>
                        </div><!-- End dropdown-cart-->
                    </li>
                </ul>
            </nav>
        </div>
    </div><!-- container -->
</header><!-- End Header -->
@yield('content')

<footer class="revealed">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3">
                <h3>Need help?</h3>
                <a href="tel://004542344599" id="phone">+45 423 445 99</a>
                <a href="mailto:help@citytours.com" id="email_footer">help@citytours.com</a>
            </div>
            <div class="col-md-3 col-sm-3">
                <h3>About</h3>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Terms and condition</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3">
                <h3>Discover</h3>
                <ul>
                    <li><a href="#">Community blog</a></li>
                    <li><a href="#">Tour guide</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Gallery</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-3">
                <h3>Settings</h3>
                <div class="styled-select">
                    <select class="form-control" name="lang" id="lang">
                        <option value="English" selected>English</option>
                        <option value="French">French</option>
                        <option value="Spanish">Spanish</option>
                        <option value="Russian">Russian</option>
                    </select>
                </div>
                <div class="styled-select">
                    <select class="form-control" name="currency" id="currency">
                        <option value="USD" selected>USD</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                        <option value="RUB">RUB</option>
                    </select>
                </div>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-google"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon-vimeo"></i></a></li>
                        <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    </ul>
                    <p>© Citytours 2015</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->
<div id="toTop"></div><!-- Back to top button -->

<!-- Search Menu -->
<div class="search-overlay-menu">
    <span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
    <form role="search" id="searchform" method="get">
        <input value="" name="q" type="search" placeholder="Search...." />
        <button type="submit"><i class="icon_set_1_icon-78"></i>
        </button>
    </form>
</div><!-- End Search Menu -->

<!-- Common scripts -->
<script src="{{asset('frontend/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('frontend/js/common_scripts_min.js')}}"></script>
<script src="{{asset('frontend/js/functions.js')}}"></script>

<!-- Specific scripts -->
    @stack('scripts')
</body>
</html>

{{--<script src="{{asset('frontend/js/icheck.js')}}"></script>--}}
{{--<script>--}}
{{--    $('input').iCheck({--}}
{{--        checkboxClass: 'icheckbox_square-grey',--}}
{{--        radioClass: 'iradio_square-grey'--}}
{{--    });--}}
{{--</script>--}}

{{--<script src="{{asset('frontend/js/jquery.ddslick.js')}}"></script>--}}
{{--<script>--}}
{{--    $("select.ddslick").each(function(){--}}
{{--        $(this).ddslick({--}}
{{--            showSelectedHTML: true--}}
{{--        });--}}
{{--    });--}}

{{--</script>--}}
