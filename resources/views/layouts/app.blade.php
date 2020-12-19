<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('images/icons/jctech.png')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/linearicons-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/MagnificPopup/magnific-popup.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.css')}}">
    <!--===============================================================================================-->
    {{--For Testimonial Review--}}
    <link rel="stylesheet" href="{{asset('css/review.css')}}">
</head>

<body class="animsition">
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v5.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="{{env('OWNER_MESSENGER_ID')}}"
     theme_color="#0084ff">
</div>

<!-- Header -->
<header class="mb-5">
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    <a href="">
                        <i class="fa fa-phone fa-lg"></i>&nbsp;{{env('OWNER_PHONE')}}
                    </a>
                    <a href="">
                        <i class="fa fa-envelope fa-lg"></i>&nbsp;{{env('OWNER_EMAIL')}}
                    </a>
                    <a href="{{env('FBPAGE')}}">
                        <i class="fa fa-facebook-official fa-lg"></i>&nbsp;{{env('OWNER_FB_NAME')}}
                    </a>
                    <a href="{{env('MESSENGER')}}">
                        <i class="fab fa-facebook-messenger fa-lg"></i>&nbsp;{{env('OWNER_MESSENGER_NAME')}}
                    </a>
                </div>

                <div class="right-top-bar flex-w h-full">
                    <a href="{{route('faq')}}" class="flex-c-m trans-04 p-lr-25">
                        Help & FAQs
                    </a>

                    @if (Route::has('login'))
                        @auth
                            <a href="{{route('profile.index')}}" class="flex-c-m trans-04 p-lr-25">
                                {{ Auth::user()->name }}
                            </a>
                            @if (Route::has('logout'))
                                <a class="flex-c-m trans-04 p-lr-25" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            @endif
                        @else
                            <a href="{{ route('login') }}" class="flex-c-m trans-04 p-lr-25">
                                Login
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="flex-c-m trans-04 p-lr-25">
                                    Register
                                </a>
                            @endif
                        @endauth
                    @endif


                    @if(Auth::check())
                        @if(Auth::user()->admin)
                            <a href="{{route('admin.index')}}" class="flex-c-m trans-04 p-lr-25">
                                Admin Home
                            </a>
                        @endif
                    @endif
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="{{route('welcome')}}" class="logo">
                    <img src="{{asset('images/icons/LOGO.png')}}" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="active-menu">
                            <a>
                                Categories <i class="fa fa-arrow-circle-down"></i>
                            </a>
                            <ul class="sub-menu">
                                @foreach(\App\Category::all() as $category)
                                    <li><a href="{{route('product_category.show',['id'=>$category->id])}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('welcome')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('about')}}">About</a>
                        </li>

                        <li>
                            <a href="{{route('contact')}}">Contact</a>
                        </li>
                        <li>
                            <a href="{{route('blog.index')}}">Blog</a>
                        </li>
                        <li>
                            <a href="{{route('proof.send')}}">Send Proof</a>
                        </li>
                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>

                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                         data-notify="{{\Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}">
                        <a href="{{route('cart')}}"> <i class="zmdi zmdi-shopping-cart"></i></a>
                    </div>

                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile fixed-top">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="{{route('welcome')}}"><img src="{{asset('images/icons/LOGO.png')}}" class="img-fluid"  alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
                 data-notify="{{\Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}">
                <a href="{{route('cart')}}"><i class="zmdi zmdi-shopping-cart"></i></a>
            </div>

        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
					<span class="hamburger-inner"></span>
                </span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile fixed-top">
        <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                    <a href="">
                        <i class="fa fa-phone fa-lg"></i>&nbsp;{{env('OWNER_PHONE')}}
                    </a>
                    <a href="">
                        <i class="fa fa-envelope fa-lg"></i>&nbsp;{{env('OWNER_EMAIL')}}
                    </a>
                    <a href="{{env('FBPAGE')}}">
                        <i class="fa fa-facebook-official fa-lg"></i>&nbsp;{{env('OWNER_FB_NAME')}}
                    </a>
                    <a href="{{env('MESSENGER')}}">
                        <i class="fab fa-facebook-messenger fa-lg"></i>&nbsp;{{env('OWNER_MESSENGER_NAME')}}
                    </a>
                </div>
            </li>

            <li>
                <div class="right-top-bar flex-w h-full">
                    <a href="{{route('faq')}}" class="flex-c-m p-lr-10 trans-04">
                        Help & FAQs
                    </a>

                    @if (Route::has('login'))
                        @auth
                            <a href="{{route('profile.index')}}" class="flex-c-m p-lr-10 trans-04">
                                {{ Auth::user()->name }}
                            </a>
                            @if (Route::has('logout'))
                                <a class="flex-c-m p-lr-10 trans-04" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            @endif
                        @else
                            <a href="{{ route('login') }}" class="flex-c-m p-lr-10 trans-04">
                                Login
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="flex-c-m p-lr-10 trans-04">
                                    Register
                                </a>
                            @endif
                        @endauth
                    @endif
                    @if(Auth::check())
                        @if(Auth::user()->admin)
                            <a href="{{route('admin.index')}}" class="flex-c-m p-lr-10 trans-04">
                                Admin Home
                            </a>
                        @endif
                    @endif
                </div>
            </li>
        </ul>

        <ul class="main-menu-m">
            <li>
                <a>Categories
                    <ul class="sub-menu-m">
                        @foreach(\App\Category::all() as $category)
                            <li><a href="{{route('product_category.show',['id'=>$category->id])}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                    <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>
					</span>
                </a>
            </li>

            <li>
                <a href="{{route('welcome')}}">Home</a>
            </li>
            <li>
                <a href="{{route('about')}}">About</a>
            </li>

            <li>
                <a href="{{route('contact')}}">Contact</a>
            </li>
            <li>
                <a href="{{route('blog.index')}}">Blog</a>
            </li>
            <li>
                <a href="{{route('proof.send')}}">Send Proof</a>
            </li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="{{asset('images/icons/icon-close2.png')}}" alt="CLOSE">
            </button>

            <form action="{{route('search')}}" method="post" class="wrap-search-header flex-w p-l-15">
                {{csrf_field()}}
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Type Product Name">
            </form>
        </div>
    </div>
</header>


<section class="py-5">
    @yield('content')
</section>


<!-- Footer -->
<footer class="bg3 p-t-75 p-b-32">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Support
                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="" class="stext-107 cl7 hov-cl1 trans-04">
                            <i class="fa fa-phone fa-lg"></i>&nbsp;{{env('OWNER_PHONE')}}
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="" class="stext-107 cl7 hov-cl1 trans-04">
                            <i class="fa fa-envelope fa-lg"></i>&nbsp;{{env('OWNER_EMAIL')}}
                        </a>
                    </li>
                    <li class="p-b-10">
                        <a href="{{env('FBPAGE')}}" class="stext-107 cl7 hov-cl1 trans-04">
                            <i class="fa fa-facebook-official fa-lg text-primary"></i>&nbsp;{{env('OWNER_FB_NAME')}}
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="{{env('MESSENGER')}}" class="stext-107 cl7 hov-cl1 trans-04">
                            <i class="fab fa-facebook-messenger fa-lg text-primary"></i>&nbsp;{{env('OWNER_MESSENGER_NAME')}}
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Help
                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="{{route('faq')}}" class="stext-107 cl7 hov-cl1 trans-04">
                            FAQs
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="{{route('track.order')}}" class="stext-107 cl7 hov-cl1 trans-04">
                            Track Order
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="{{route('search.code')}}" class="stext-107 cl7 hov-cl1 trans-04">
                            Find Product Code
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="{{route('return_policy')}}" class="stext-107 cl7 hov-cl1 trans-04">
                            Returns Policy
                        </a>
                    </li>

                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    GET IN TOUCH
                </h4>

                <p class="stext-107 cl7 size-201">
                    Any questions? Let us know us at
                    {{env('OWNER_ADDRESS')}}&nbsp;!
                    {{env('OWNER_PHONE')}}
                </p>

                <div class="p-t-27">
                    <a href="{{env('FBPAGE')}}" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a href="" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-pinterest-p"></i>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Newsletter
                </h4>

                <form>
                    <div class="wrap-input1 w-full p-b-4">
                        <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email"
                               placeholder="email@example.com">
                        <div class="focus-input1 trans-04"></div>
                    </div>

                    <div class="p-t-18">
                        <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="p-t-40">
            <div class="flex-c-m flex-w p-b-18">
                <a href="" class="m-all-1">
                    <img class="img-fluid" src="{{asset('images/icons/agd.png')}}" width="50" height="50" alt="ICON-PAY">
                </a>
                <a href="" class="m-all-1">
                    <img class="img-fluid" src="{{asset('images/icons/ayabank.png')}}" width="50" height="50" alt="ICON-PAY">
                </a>
                <a href="" class="m-all-1">
                    <img class="img-fluid" src="{{asset('images/icons/cb.png')}}" width="50" height="50" alt="ICON-PAY">
                </a>
                <a href="" class="m-all-1">
                    <img class="img-fluid" src="{{asset('images/icons/kbz.png')}}" width="50" height="50" alt="ICON-PAY">
                </a>
                <a href="" class="m-all-1">
                    <img class="img-fluid" src="{{asset('images/icons/mab.png')}}" width="50" height="50" alt="ICON-PAY">
                </a>
                <a href="" class="m-all-1">
                    <img class="img-fluid" src="{{asset('images/icons/yoma.png')}}" width="50" height="50" alt="ICON-PAY">
                </a>
                <a href="" class="m-all-1">
                    <img class="img-fluid" src="{{asset('images/icons/ok.png')}}" width="35" height="15" alt="ICON-PAY">
                </a>
                <a href="" class="m-all-1">
                    <img class="img-fluid" src="{{asset('images/icons/wave.png')}}" width="35" height="15" alt="ICON-PAY">
                </a>
            </div>

            <p class="stext-107 cl6 txt-center">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                All rights reserved | Made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a
                        href="https://facebook.com/jaspercool.rwd" target="_blank">JasperCool</a> &amp; Manage by <a
                        href="https://facebook.com/mmdigitalpage" target="_blank">JCTech</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

            </p>
        </div>
    </div>
</footer>




<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
</div>


{{--Modal--}}

<!--===============================================================================================-->
<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<script>
    $(".js-select2").each(function () {
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
</script>
<!--===============================================================================================-->
<script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/slick/slick.min.js')}}"></script>
<script src="{{asset('js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/parallax100/parallax100.js')}}"></script>
<script>
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="{{asset('vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
<script>
    $('.gallery-lb').each(function () { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled: true
            },
            mainClass: 'mfp-fade'
        });
    });
</script>
<!--===============================================================================================-->
<script src="{{asset('vendor/isotope/isotope.pkgd.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
<script>
    $('.js-addwish-b2').on('click', function (e) {
        e.preventDefault();
    });

    $('.js-addwish-b2').each(function () {
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
        $(this).on('click', function () {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-b2');
            $(this).off('click');
        });
    });

    $('.js-addwish-detail').each(function () {
        var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function () {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-detail');
            $(this).off('click');
        });
    });

    /*---------------------------------------------*/

    $('.js-addcart-detail').each(function () {
        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
        $(this).on('click', function () {
            swal(nameProduct, "is added to cart !", "success");
        });
    });
</script>
<!--===============================================================================================-->
<script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script>
    $('.js-pscroll').each(function () {
        $(this).css('position', 'relative');
        $(this).css('overflow', 'hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function () {
            ps.update();
        })
    });
</script>
<!--===============================================================================================-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<script src="{{asset('js/map-custom.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('js/main.js')}}"></script>


</body>

</html>