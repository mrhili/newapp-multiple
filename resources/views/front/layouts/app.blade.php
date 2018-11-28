<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ GetSetting::getConfig('site-name') }} - @yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('images/icons/'.GetSetting::getConfig('favicon') )}}"/>


<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('fashe/vendor/bootstrap/css/bootstrap.min.css') !!}">
    <!--<link rel="stylesheet" type="text/css" href="{!! asset('fashe/vendor/rtl/rtl.css') !!}">-->

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="" href="{!! asset('fashe/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('fashe/fonts/themify/themify-icons.css') !!}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('fashe/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') !!}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('fashe/fonts/elegant-font/html-css/style.css') !!}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('fashe/vendor/animate/animate.css') !!}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('fashe/vendor/css-hamburgers/hamburgers.min.css') !!}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('fashe/vendor/animsition/css/animsition.min.css') !!}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('fashe/vendor/select2/select2.min.css') !!}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('fashe/vendor/slick/slick.css') !!}">


    @yield('addStylecheets')


<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('fashe/css/util.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('fashe/css/main.css') !!}">

    <link rel="stylesheet" type="text/css" href="{!! asset('fashe/css/arabic.css') !!}">
<!--===============================================================================================-->
    @yield('stylecheets')
</head>





<body class="animsition">











    <!-- header fixed -->
    <div class="wrap_header fixed-header2 trans-0-4">
        <!-- Logo -->
        <a href="index.html" class="logo">
            {!! Html::image( 'images/config/'. GetSetting::getConfig('logo') ,'IMG-LOGO', [] ) !!}
        </a>

        @include('front.partials.menu')

        @include('front.partials.headerIcon')
    </div>

    @include('front.partials.topNotification')

    <!-- Header -->
    <header class="header2">
        <!-- Header desktop -->
        <div class="container-menu-header-v2 p-t-26">
            <div class="topbar2">


                <!-- Logo2 -->
                <a href="index.html" class="logo2">
                    {!! Html::image( 'images/config/'. GetSetting::getConfig('logo') ,'IMG-LOGO', [] ) !!}
                </a>

                <div class="topbar-child2">
                    <span class="topbar-email">
                        {{ GetSetting::getConfig('email') }}
                    </span>

                    <div class="topbar-language rs1-select2">
                        <select class="selection-1" name="time">
                            <option>Arabic</option>
                            <option>Frensh</option>
                            <option>English</option>

                        </select>
                    </div>

                    <span class="linedivide1"></span>

                    <!--  
                    <a href="#" class="header-wrapicon1 dis-block m-l-30">
                        {!! Html::image( 'images/fashe/icons/icon-header-01.png','ICON', ['class' => 'header-icon1'] ) !!}

                    </a>

                    <span class="linedivide1"></span>

                    -->

                    <div class="header-wrapicon2 m-r-13">
                        {!! Html::image( 'images/fashe/icons/icon-header-01.png','ICON', ['class' => 'header-icon1 js-show-header-dropdown'] ) !!}
                        <span class="header-icons-noti">0</span>

                        <!-- Header cart noti -->
                        <div class="header-cart header-dropdown">
                            <ul class="header-cart-wrapitem">
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="images/item-cart-01.jpg" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            White Shirt With Pleat Detail Back
                                        </a>

                                        <span class="header-cart-item-info">
                                            1 x $19.00
                                        </span>
                                    </div>
                                </li>

                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="images/item-cart-02.jpg" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            Converse All Star Hi Black Canvas
                                        </a>

                                        <span class="header-cart-item-info">
                                            1 x $39.00
                                        </span>
                                    </div>
                                </li>

                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="images/item-cart-03.jpg" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            Nixon Porter Leather Watch In Tan
                                        </a>

                                        <span class="header-cart-item-info">
                                            1 x $17.00
                                        </span>
                                    </div>
                                </li>
                            </ul>

                            <div class="header-cart-total">
                                Total: $75.00
                            </div>

                            <div class="header-cart-buttons">
                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        View Cart
                                    </a>
                                </div>

                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        Check Out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrap_header">
                @include('front.partials.menu')

                <!-- Header Icon -->
                <div class="header-icons">

                </div>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap_header_mobile">
            <!-- Logo moblie -->
            <a href="index.html" class="logo-mobile">
                {!! Html::image( 'images/fashe/icons/'. GetSetting::getConfig('logo') ,'IMG-LOGO', [] ) !!}
            </a>

            <!-- Button show menu -->
            <div class="btn-show-menu">
                <!-- Header Icon mobile -->
                <div class="header-icons-mobile">
                    <!--<a href="#" class="header-wrapicon1 dis-block">
                        <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                    </a>

                    <span class="linedivide2"></span>
                    -->

                    <div class="header-wrapicon2">
                        {!! Html::image( 'images/fashe/icons/icon-header-01.png','ICON', ['class' => 'header-icon1 js-show-header-dropdown'] ) !!}
                        <span class="header-icons-noti">0</span>

                        <!-- Header cart noti -->
                        <div class="header-cart header-dropdown">
                            <ul class="header-cart-wrapitem">
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="images/item-cart-01.jpg" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            White Shirt With Pleat Detail Back
                                        </a>

                                        <span class="header-cart-item-info">
                                            1 x $19.00
                                        </span>
                                    </div>
                                </li>

                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="images/item-cart-02.jpg" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            Converse All Star Hi Black Canvas
                                        </a>

                                        <span class="header-cart-item-info">
                                            1 x $39.00
                                        </span>
                                    </div>
                                </li>

                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="images/item-cart-03.jpg" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            Nixon Porter Leather Watch In Tan
                                        </a>

                                        <span class="header-cart-item-info">
                                            1 x $17.00
                                        </span>
                                    </div>
                                </li>
                            </ul>

                            <div class="header-cart-total">
                                Total: $75.00
                            </div>

                            <div class="header-cart-buttons">
                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        View Cart
                                    </a>
                                </div>

                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        Check Out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="wrap-side-menu" >
            <nav class="side-menu">
                <ul class="main-menu">
                    <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                        @include('front.partials.topBarChild1')
                    </li>

                    <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                        <div class="topbar-child2-mobile">
                            <span class="topbar-email">
                                {{ GetSetting::getConfig('email') }}
                            </span>

                            <div class="topbar-language rs1-select2">
                                <select class="selection-1" name="time">
                                    <option>Arabic</option>
                                    <option>Frensh</option>
                                    <option>English</option>
                                </select>
                            </div>
                        </div>
                    </li>

                    <li class="item-topbar-mobile p-l-10">
                        <div class="topbar-social-mobile">
                            @include('front.partials.social')
                        </div>
                    </li>

                    @include('front.partials.menuMobile')
                </ul>
            </nav>
        </div>
    </header>




@yield('content')

@include('front.partials.footer')



    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>

    <!-- Container Selection -->
    <div id="dropDownSelect1"></div>
    <div id="dropDownSelect2"></div>



<!--===============================================================================================-->
    <script type="text/javascript" src="{!! asset('fashe/vendor/jquery/jquery-3.2.1.min.js') !!}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{!! asset('fashe/vendor/animsition/js/animsition.min.js') !!}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{!! asset('fashe/vendor/bootstrap/js/popper.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('fashe/vendor/bootstrap/js/bootstrap.min.js') !!}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{!! asset('fashe/vendor/select2/select2.min.js') !!}"></script>
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });

        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect2')
        });
    </script>
<!--I ADDED TO INDEX-->

<!--===============================================================================================-->
    <script type="text/javascript" src="{!! asset('fashe/vendor/slick/slick.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('fashe/js/slick-custom.js') !!}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{!! asset('fashe/vendor/countdowntime/countdowntime.js') !!}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{!! asset('fashe/vendor/lightbox2/js/lightbox.min.js') !!}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{!! asset('fashe/vendor/sweetalert/sweetalert.min.js') !!}"></script>

<!---------------------------->

@yield('addScripts')

<!--===============================================================================================-->
    <script src="{!! asset('fashe/js/main.js') !!}"></script>

    <script type="text/javascript" src="{!! asset('axios/axios.min.js') !!}"></script>







<!-------------------------->
@yield('scripts')

<!---------------------------->






</body>













</html>
