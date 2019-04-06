<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="user-uid" content="null">
    <meta name="user-id" content="null">
    <meta name="user-roles" content="null">
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description"
          content=" On-Demand Services - Professional Mechanics, Technician, Towing, Carwash, Automotive Mobile Services and more."/>
    <meta name="keywords"
          content="towing,service,mobile service,maintenance,car,auto,moto,repair,wash,cleaning,transport,workshop"/>
    <meta name="twitter:site" content="@availby"/>
    <meta name="twitter:description"
          content="availby  On-Demand Services - Professional Mechanics, Technician, Towing, Carwash, Automotive Mobile Services and more.."/>
    <meta name="twitter:app:country" content="USA"/>
    <meta name="twitter:app:name:iphone" content="availby"/>
    <meta name="twitter:app:id:iphone" content="availby"/>
    <meta name="twitter:app:url:iphone" content="availby://"/>
    <meta name="twitter:app:name:ipad" content="availby"/>
    <meta name="twitter:app:id:ipad" content="availby"/>
    <meta name="twitter:app:url:ipad" content="availby://"/>
    <meta name="twitter:app:name:googleplay" content="AVAILBY"/>
    <meta name="twitter:app:id:googleplay" content="com.availby.app"/>
    <meta name="twitter:app:url:googleplay" content="https://play.google.com/store/apps/details?id=com.availby.app"/>
    <meta property="fb:app_id" content="enter fb id here"/>
    <meta property="og:type" content="availby-app:main_website"/>
    <meta property="og:title"
          content="AVAILBY -  On-Demand Services - Professional Mechanics, Technician, Towing, Carwash, Automotive Mobile Services and more."/>

    <!-- Page Title -->
    <title>Availby | Mobile Automotive Service Networ</title>
    <!-- Favicon and Touch Icons -->
    <link href="{{asset('font-end/images/favicon.png" rel="shortcut icon" type="image/png')}}">
    <link href="{{asset('font-end/images/apple-touch-icon.png" rel="apple-touch-icon')}}">
    <link href="{{asset('font-end/images/apple-touch-icon-72x72.png" rel="apple-touch-icon')}}" sizes="72x72">
    <link href="{{asset('font-end/images/apple-touch-icon-114x114.png" rel="apple-touch-icon')}}" sizes="114x114">
    <link href="{{asset('font-end/images/apple-touch-icon-144x144.png" rel="apple-touch-icon')}}" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{asset('font-end/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('font-end/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('font-end/css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('font-end/css/css-plugin-collections.css')}}" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link href="{{asset('css/app.css')}}"  rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{asset('font-end/css/menuzord-skins/menuzord-rounded-boxed.css')}}"
          rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="{{asset('font-end/css/style-main.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{asset('font-end/css/preloader.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{asset('font-end/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{asset('font-end/css/responsive.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="{{asset('font-end/css/style.css')}}" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="{{asset('font-end/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('font-end/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('font-end/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

    <!-- CSS | Theme Color -->
    <link href="{{asset('font-end/css/colors/theme-skin-color-set-6.css')}}" rel="stylesheet" type="text/css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdSks7O6JWUkj2C0lIAM_vQt6mYj51PSo&libraries=places"></script>
    <!-- external javascripts -->
    <script src="{{asset('font-end/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('font-end/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('font-end/js/bootstrap.min.js')}}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{asset('font-end/js/jquery-plugin-collection.js')}}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{asset('font-end/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('font-end/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body class="boxed-layout bg-img-fixed bg-img-cover pt-40 pb-40 pt-sm-0" data-bg-img="http://placehold.it/1920x1280">
<div id="app">

        <div id="wrapper" class="clearfix">
            <!-- preloader -->
            <div id="preloader">
                <div id="spinner">
                    <img alt="" src="{{asset('font-end/images/preloaders/10.gif')}}">
                </div>
                <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
            </div>

            <!-- Header -->
            <header id="header" class="header">
                <div class="header-top bg-theme-color-2 sm-text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="widget no-border m-0">
                                    <ul class="list-inline font-13 sm-text-center mt-5">
                                        <li>
                                            <a class="text-white" href="site_faq.html">FAQ</a>
                                        </li>
                                        <li class="text-white">|</li>
                                        <li>
                                            <a class="text-white" href="help_desk.html">Help Desk</a>
                                        </li>
                                        <li class="text-white">|</li>
                                        <li>
                                            <a class="text-white" href="login.html">Login</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="widget m-0 pull-right sm-pull-none sm-text-center">
                                    <ul class="list-inline pull-right">
                                        <li class="mb-0 pb-0">
                                            <div class="top-dropdown-outer pt-5 pb-10">
                                                <a class="top-cart-link has-dropdown text-white text-hover-theme-colored"><i
                                                            class="fa fa-shopping-cart font-13"></i> (12)</a>
                                                <ul class="dropdown">
                                                    <li>
                                                        <!-- dropdown cart -->
                                                        <div class="dropdown-cart">
                                                            <table class="table cart-table-list table-responsive">
                                                                <tbody>
                                                                <tr>
                                                                    <td><a href="#"><img alt=""
                                                                                         src="http://placehold.it/85x85"></a>
                                                                    </td>
                                                                    <td><a href="#"> Product Title</a></td>
                                                                    <td>X3</td>
                                                                    <td>$ 100.00</td>
                                                                    <td><a class="close" href="#"><i
                                                                                    class="fa fa-close font-13"></i></a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#"><img alt=""
                                                                                         src="http://placehold.it/85x85"></a>
                                                                    </td>
                                                                    <td><a href="#"> Product Title</a></td>
                                                                    <td>X2</td>
                                                                    <td>$ 70.00</td>
                                                                    <td><a class="close" href="#"><i
                                                                                    class="fa fa-close font-13"></i></a>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="total-cart text-right">
                                                                <table class="table table-responsive">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>Cart Subtotal</td>
                                                                        <td>$170.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Shipping and Handling</td>
                                                                        <td>$20.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Order Total</td>
                                                                        <td>$190.00</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="cart-btn text-right">
                                                                <a class="btn btn-theme-colored btn-xs"
                                                                   href="shop-cart.html">
                                                                    View cart</a>
                                                                <a class="btn btn-dark btn-xs"
                                                                   href="shop-checkout.html">
                                                                    Checkout</a>
                                                            </div>
                                                        </div>
                                                        <!-- dropdown cart ends -->
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="mb-0 pb-0">
                                            <div class="top-dropdown-outer pt-5 pb-10">
                                                <a class="top-search-box has-dropdown text-white text-hover-theme-colored"><i
                                                            class="fa fa-search font-13"></i> &nbsp;</a>
                                                <ul class="dropdown">
                                                    <li>
                                                        <div class="search-form-wrapper">
                                                            <form method="get" class="mt-10">
                                                                <input type="text"
                                                                       onfocus="if(this.value =='Enter your search') { this.value = ''; }"
                                                                       onblur="if(this.value == '') { this.value ='Enter your search'; }"
                                                                       value="Enter your search" id="searchinput"
                                                                       name="s"
                                                                       class="">
                                                                <label><input type="submit" name="submit"
                                                                              value=""></label>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">
                                    <ul class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                                        <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-nav">
                    <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">
                        <div class="container">
                            <nav id="menuzord" class="menuzord bg-theme-colored pull-right flip menuzord-responsive">
                                <ul class="menuzord-menu">
                                    <li class="active"><a href="index-boxed-mp-layout5.html">Home</a>
                                        <ul class="dropdown">
                                            <li><a href="business_partners.html">Business Partners</a>
                                            </li>
                                            <li><a href="facts_n_stats.html">Facts and Stats</a></li>
                                            <li><a href="community_index.html">Community<span
                                                            class="label label-info">New</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="fleet_service_request.html">Fleet <span
                                                    class="label label-info">New</span></a>
                                    </li>
                                    <li><a href="request_estimate.html"> Get Instant Estimate</a>
                                        <ul class="dropdown">
                                            <li><a href="request_estimate.html">Inspection & Services</a></li>
                                            <li><a href="request_estimate.html">Towing</a>
                                            </li>
                                            <li><a href="insurance_quote_check.html">Insurance Quote</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="all_services.html">Services</a></li>
                                    <li><a href="{{route('login')}}">Join Us <span
                                                    class="label label-info">Become Crew Today!</span></a>
                                    </li>
                                    <li><a href="instant_loan_check">Instant Loan<span
                                                    class="label label-info">New</span></a>
                                    </li>
                                </ul>
                                <ul class="pull-right flip ">
                                    <li>

                                        <!-- Modal: Book Now Starts -->
                                        {{--<a class="btn btn-colored btn-flat bg-theme-color-2 text-white font-14 bs-modal-ajax-load mt-0 p-25 pr-15 pl-15"--}}
                                        {{--data-toggle="modal"  data-target="#BSParentModal"--}}
                                        {{--href="#reaef">Book Now</a>--}}

                                        <button type="button"
                                                class="btn btn-colored btn-flat bg-theme-color-2 text-white font-14 mt-0 p-25 pr-15 pl-15"
                                                data-toggle="modal" data-target="#serviceBookingModel">Book Now
                                        </button>
                                        <resarvation-form></resarvation-form>
                                        <!-- Modal: Book Now End -->
                                    </li>
                                </ul>
                                <div id="top-search-bar" class="collapse">
                                    <div class="container">
                                        <form role="search" action="#" class="search_form_top" method="get">
                                            <input type="text" placeholder="Type text and press Enter..." name="s"
                                                   class="form-control" autocomplete="off">
                                            <span class="search-close"><i class="fa fa-search"></i></span>
                                        </form>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Start main-content -->
            <div class="main-content">
                <!-- Section: home -->
                <section id="home">
                    <!-- Slider Revolution Start -->
                    <div class="rev_slider_wrapper">
                        <div class="rev_slider" data-version="5.0">
                            <ul>
                                <!-- SLIDE 1 -->
                                <li data-index="rs-1" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default"
                                    data-easein="default" data-easeout="default" data-masterspeed="default"
                                    data-thumb="font-end/images/bg-img.png" data-rotate="0" data-saveperformance="off"
                                    data-title="Slide 1" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{asset('font-end/images/bg-img.png')}}" alt=""
                                         data-bgposition="center center"
                                         data-bgfit="cover"
                                         data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10"
                                         data-no-retina>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                                         id="rs-1-layer-1"

                                         data-x="['left']"
                                         data-hoffset="['30']"
                                         data-y="['middle']"
                                         data-voffset="['-110']"
                                         data-fontsize="['100']"
                                         data-lineheight="['110']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;s:500"
                                         data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                         data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 7; white-space: nowrap; font-weight:700;">MOTORMEN
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                                         id="rs-1-layer-2"

                                         data-x="['left']"
                                         data-hoffset="['35']"
                                         data-y="['middle']"
                                         data-voffset="['-25']"
                                         data-fontsize="['35']"
                                         data-lineheight="['54']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;s:500"
                                         data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                         data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 7; white-space: nowrap; font-weight:600;">Mobile Automotive
                                        Services
                                        Network
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-white"
                                         id="rs-1-layer-3"

                                         data-x="['left']"
                                         data-hoffset="['35']"
                                         data-y="['middle']"
                                         data-voffset="['35']"
                                         data-fontsize="['16']"
                                         data-lineheight="['28']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;s:500"
                                         data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                         data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1400"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                                        Towing |
                                        Fix and Repair | Service & Maintenance | Many More..<br> Get your vehicle back
                                        on
                                        the
                                        Road.
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption tp-resizeme"
                                         id="rs-1-layer-4"

                                         data-x="['left']"
                                         data-hoffset="['35']"
                                         data-y="['middle']"
                                         data-voffset="['100']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1400"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                                class="btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20"
                                                href="#">View Details</a>
                                    </div>
                                </li>

                                <!-- SLIDE 2 -->
                                <li data-index="rs-2" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default"
                                    data-easein="default" data-easeout="default" data-masterspeed="default"
                                    data-thumb="font-end/images/bg-img.png" data-rotate="0" data-saveperformance="off"
                                    data-title="Slide 2" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{asset('font-end/images/bg-img.png')}}" alt=""
                                         data-bgposition="center 40%"
                                         data-bgfit="cover"
                                         data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10"
                                         data-no-retina>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-resizeme text-uppercase  bg-theme-colored-transparent text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                                         id="rs-2-layer-1"

                                         data-x="['center']"
                                         data-hoffset="['0']"
                                         data-y="['middle']"
                                         data-voffset="['-90']"
                                         data-fontsize="['28']"
                                         data-lineheight="['54']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;s:500"
                                         data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                         data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">
                                        Experts
                                        | Professional | Freelancers
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                                         id="rs-2-layer-2"

                                         data-x="['center']"
                                         data-hoffset="['0']"
                                         data-y="['middle']"
                                         data-voffset="['-20']"
                                         data-fontsize="['35']"
                                         data-lineheight="['70']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;s:500"
                                         data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                         data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">
                                        Automotive Service | Mobile Equipment | Small Engine
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-white text-center"
                                         id="rs-2-layer-3"

                                         data-x="['center']"
                                         data-hoffset="['0']"
                                         data-y="['middle']"
                                         data-voffset="['50']"
                                         data-fontsize="['16']"
                                         data-lineheight="['28']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;s:500"
                                         data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                         data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1400"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                                        Hire
                                        from
                                        the leading, top‑quality professioannal and freelancers from the largest and
                                        most
                                        trusted on demand automotive services platform.<br>
                                        See how you can get back your vehicle on the road and find out why most of our
                                        customers
                                        rehire.
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption tp-resizeme"
                                         id="rs-2-layer-4"

                                         data-x="['center']"
                                         data-hoffset="['0']"
                                         data-y="['middle']"
                                         data-voffset="['115']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1400"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                                class="btn btn-default btn-circled btn-transparent pl-20 pr-20"
                                                href="#">Learn
                                            More</a>
                                    </div>
                                </li>

                                <!-- SLIDE 3 -->
                                <li data-index="rs-3" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default"
                                    data-easein="default" data-easeout="default" data-masterspeed="default"
                                    data-thumb="font-end/images/bg-img.png" data-rotate="0" data-saveperformance="off"
                                    data-title="Slide 3" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{asset('font-end/images/bg-img.png')}}" alt=""
                                         data-bgposition="center top"
                                         data-bgfit="cover"
                                         data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10"
                                         data-no-retina>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20"
                                         id="rs-3-layer-1"

                                         data-x="['right']"
                                         data-hoffset="['30']"
                                         data-y="['middle']"
                                         data-voffset="['-90']"
                                         data-fontsize="['64']"
                                         data-lineheight="['72']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;s:500"
                                         data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                         data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 7; white-space: nowrap; font-weight:600;">Instant Loans
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                                         id="rs-3-layer-2"

                                         data-x="['right']"
                                         data-hoffset="['35']"
                                         data-y="['middle']"
                                         data-voffset="['-25']"
                                         data-fontsize="['32']"
                                         data-lineheight="['54']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;s:500"
                                         data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                         data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 7; white-space: nowrap; font-weight:600;">Easy loan to get your
                                        vehicle
                                        on the road.
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-white text-right"
                                         id="rs-3-layer-3"

                                         data-x="['right']"
                                         data-hoffset="['35']"
                                         data-y="['middle']"
                                         data-voffset="['30']"
                                         data-fontsize="['16']"
                                         data-lineheight="['28']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;s:500"
                                         data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                         data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1400"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                                        We
                                        provides always our best services for our clients and always<br> try to achieve
                                        our
                                        client's trust and satisfaction.
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption tp-resizeme"
                                         id="rs-3-layer-4"

                                         data-x="['right']"
                                         data-hoffset="['35']"
                                         data-y="['middle']"
                                         data-voffset="['95']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1400"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                                class="btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20"
                                                href="#">Order Now</a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- end .rev_slider -->
                    </div>


                </section>

                <section>
                    <div class="container-fluid pt-0 pb-0 p-sm-15">
                        <div class="section-content">
                            <div class="row equal-height-inner home-boxes">
                                <div class="col-sm-12 col-md-3 pr-0 pl-0 pr-sm-15 pl-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
                                    <div class="sm-height-auto bg-theme-colored">
                                        <div class="p-9">
                                            <h3 align="center" class="text-centre text-white mt-0 mb-2">Shop Owners<br>
                                                <a href="{{route('login')}}"
                                                   class="btn btn-border btn-circled btn-transparent btn-xs mt-1">Join
                                                    us
                                                    Now</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
                                    <div class="sm-height-auto bg-theme-colored-darker2">
                                        <div class="p-9">
                                            <h3 align="center" class="text-centre text-white mt-0 mb-2">Mach & Tech<br>
                                                <a href="#"
                                                   class="btn btn-border btn-circled btn-transparent btn-xs mt-1">Sign
                                                    Up</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 pl-0 pr-0 pl-sm-15 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
                                    <div class="sm-height-auto bg-theme-colored-darker3">
                                        <div class="p-9">
                                            <h3 align="center" class="text-centre text-white mt-0 mb-2">Parts
                                                Suppliers<br>
                                                <a href="page-donate.html"
                                                   class="btn btn-border btn-circled btn-transparent btn-xs mt-1">Submit
                                                    Application</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 pl-0 pr-0 pl-sm-15 pr-sm-15  sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
                                    <div class="sm-height-auto bg-theme-colored-darker4">
                                        <div class="p-9">
                                            <h3 align="center" class="text-centre text-white mt-0 mb-2">Towing
                                                Partners<br>
                                                <a href="page-contact1.html"
                                                   class="btn btn-border btn-circled btn-transparent btn-xs mt-1">Register</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Section: About -->
                <section id="about">
                    <div class="container pb-80">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 wow fadeInRight" data-wow-duration="1s"
                                     data-wow-delay="0.3s">
                                    <h3 class="text-uppercase mt-0">MOTORMEN<span class="text-theme-color-2"> <br>[Mobile Automotive Service & Workstation Network] </span>
                                    </h3>
                                    <p class="lead">Better opportunities and services in the community for Automotive
                                        enthusiasts.</p>
                                    <div class="col-sm-12 col-md-12 mt-10 pl-0">
                                        <div class="owl-carousel-3col">
                                            <div class="item">
                                                <div class="box-hover-effect effect1 mb-sm-30">
                                                    <div class="thumb"><a href="#"><img class="img-fullwidth mb-20"
                                                                                        src="http://placehold.it/270x230"
                                                                                        alt="..."></a></div>
                                                    <div class="caption">
                                                        <h4 class="text-uppercase letter-space-1 mt-0">TOWING<span
                                                                    class="text-theme-color-2"> Services</span></h4>
                                                        <p>Check how our process make it fast and easy.</p>
                                                        <p><a href="#"
                                                              class="btn btn-theme-colored btn-flat mt-10 btn-sm"
                                                              role="button">Read More</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="box-hover-effect effect1 mb-sm-30">
                                                    <div class="thumb"><a href="#"><img class="img-fullwidth mb-20"
                                                                                        src="http://placehold.it/270x230"
                                                                                        alt="..."></a></div>
                                                    <div class="caption">
                                                        <h4 class="text-uppercase letter-space-1 mt-0">REPAIR<span
                                                                    class="text-theme-color-2"> Services</span></h4>
                                                        <p>Check how our process make it fast and easy</p>
                                                        <p><a href="#"
                                                              class="btn btn-theme-colored btn-flat mt-10 btn-sm"
                                                              role="button">Read More</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="box-hover-effect effect1 mb-sm-30">
                                                    <div class="thumb"><a href="#"><img class="img-fullwidth mb-20"
                                                                                        src="http://placehold.it/270x230"
                                                                                        alt="..."></a></div>
                                                    <div class="caption">
                                                        <h4 class="text-uppercase letter-space-1 mt-0">Partners<span
                                                                    class="text-theme-color-2"> Services</span></h4>
                                                        <p>Check how our process make it fast and easy.</p>
                                                        <p><a href="#"
                                                              class="btn btn-theme-colored btn-flat mt-10 btn-sm"
                                                              role="button">Read More</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 wow fadeInLeft" data-wow-duration="1s"
                                     data-wow-delay="0.3s">
                                    <div class="p-5 bg-theme-colored mt-10">
                                        <!-- Appilication Form Start-->
                                        <form id="home_appointment_form" name="home_appointment_form"
                                              class="booking-form form-home bg-white p-30" method="post"
                                              action="includes/appointment.php">
                                            <h3 class="mt-0 mb-20">Book Service</h3>
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs mt-30" role="tablist">
                                                <li role="presentation" class="active"><a href="#style-one" role="tab"
                                                                                          data-toggle="tab">Towing</a>
                                                </li>
                                                <li role="presentation"><a href="#style-two" role="tab"
                                                                           data-toggle="tab">Services</a>
                                                </li>
                                            </ul>

                                            <!-- Tab panels -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="style-one">

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group mb-10">
                                                                <input name="form_name" class="form-control" type="text"
                                                                       required="" placeholder="Enter Name"
                                                                       aria-required="true">
                                                                <i class="fa fa-user form-control-feedback mt-15 mr-20 font-14 text-gray-lightgray"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group mb-10">
                                                                <input name="form_email"
                                                                       class="form-control required email"
                                                                       type="email" placeholder="Enter Email"
                                                                       aria-required="true">
                                                                <i class="fa fa-envelope-o form-control-feedback mt-15 mr-20 font-14 text-gray-lightgray"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group mb-10">
                                                                <input name="form_phone" class="form-control required"
                                                                       type="text" placeholder="Enter Phone"
                                                                       aria-required="true">
                                                                <i class="fa fa-mobile-phone form-control-feedback mt-15 mr-20 font-20 text-gray-lightgray"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 pr-5">
                                                            <div class="form-group mb-10">
                                                                <input name="form_appontment_date"
                                                                       class="form-control required date-picker"
                                                                       type="text"
                                                                       placeholder="Select Date" aria-required="true">
                                                                <i class="fa fa-calendar form-control-feedback mt-15 mr-10 font-15 text-gray-lightgray"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 pl-5">
                                                            <div class="form-group mb-10">
                                                                <input name="form_appontment_time"
                                                                       class="form-control required time-picker"
                                                                       type="text"
                                                                       placeholder="Select Time" aria-required="true">
                                                                <i class="fa fa-clock-o form-control-feedback mt-15 mr-20 font-18 text-gray-lightgray"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-10">
                                                <textarea name="form_message" class="form-control required"
                                                          placeholder="Enter Message" rows="5"
                                                          aria-required="true"></textarea>
                                                    </div>
                                                    <div class="form-group mb-0 mt-20">
                                                        <input name="form_botcheck" class="form-control" type="hidden"
                                                               value="">
                                                        <button type="submit" class="btn btn-dark btn-theme-colored"
                                                                data-loading-text="Please wait...">Send Request
                                                        </button>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="style-two">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group mb-10">
                                                                <input name="form_name" class="form-control" type="text"
                                                                       required="" placeholder="Enter Name"
                                                                       aria-required="true">
                                                                <i class="fa fa-user form-control-feedback mt-15 mr-20 font-14 text-gray-lightgray"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group mb-10">
                                                                <input name="form_email"
                                                                       class="form-control required email"
                                                                       type="email" placeholder="Enter Email"
                                                                       aria-required="true">
                                                                <i class="fa fa-envelope-o form-control-feedback mt-15 mr-20 font-14 text-gray-lightgray"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group mb-10">
                                                                <input name="form_phone" class="form-control required"
                                                                       type="text" placeholder="Enter Phone"
                                                                       aria-required="true">
                                                                <i class="fa fa-mobile-phone form-control-feedback mt-15 mr-20 font-20 text-gray-lightgray"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 pr-5">
                                                            <div class="form-group mb-10">
                                                                <input name="form_appontment_date"
                                                                       class="form-control required date-picker"
                                                                       type="text"
                                                                       placeholder="Select Date" aria-required="true">
                                                                <i class="fa fa-calendar form-control-feedback mt-15 mr-10 font-15 text-gray-lightgray"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 pl-5">
                                                            <div class="form-group mb-10">
                                                                <input name="form_appontment_time"
                                                                       class="form-control required time-picker"
                                                                       type="text"
                                                                       placeholder="Select Time" aria-required="true">
                                                                <i class="fa fa-clock-o form-control-feedback mt-15 mr-20 font-18 text-gray-lightgray"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-10">
                                                <textarea name="form_message" class="form-control required"
                                                          placeholder="Enter Message" rows="5"
                                                          aria-required="true"></textarea>
                                                    </div>
                                                    <div class="form-group mb-0 mt-20">
                                                        <input name="form_botcheck" class="form-control" type="hidden"
                                                               value="">
                                                        <button type="submit" class="btn btn-dark btn-theme-colored"
                                                                data-loading-text="Please wait...">Send Mail
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section:
               -->
                <section id="mission">
                    <div class="container-fluid pt-0 pb-0">
                        <div class="row equal-height">
                            <div class="col-sm-6 col-md-6 pull-right xs-pull-none bg-black-222 wow fadeInUp"
                                 data-wow-duration="1s" data-wow-delay="0.3s">
                                <div class="pt-80 pb-50 pl-10 pr-0 p-md-30">
                                    <h3 class="title text-white text-uppercase line-bottom mt-0 mb-40">Beyond<span
                                                class="text-theme-color-2">Mission</span></h3>
                                    <div class="icon-box clearfix m-0 p-10">
                                        <a href="#"
                                           class="icon icon-circled bg-theme-colored icon-lg pull-left flip sm-pull-none">
                                            <i class="flaticon-carfixing-web text-white font-36"></i>
                                        </a>
                                        <div class="ml-120 ml-sm-0">
                                            <h4 class="icon-box-title text-white mt-5 mb-10 text-uppercase letter-space-1">
                                                Automotive Scholarship</h4>
                                            <p class="text-white">SAE scholarships assist in developing the future
                                                engineering
                                                workforce by helping students achieve their dreams of becoming an
                                                engineer. </p>
                                        </div>
                                    </div>
                                    <div class="icon-box clearfix m-0 p-10">
                                        <a href="#"
                                           class="icon icon-circled bg-theme-colored icon-lg pull-left flip sm-pull-none">
                                            <i class="flaticon-carfixing-tool-6 text-white font-36"></i>
                                        </a>
                                        <div class="ml-120 ml-sm-0">
                                            <h4 class="icon-box-title text-white mt-5 mb-10 text-uppercase letter-space-1">
                                                Brand
                                                Ambassador</h4>
                                            <p class="text-white">All Brand Ambassadors and event staff are trained in
                                                the
                                                art
                                                of customer service. To become a Certified Brand Ambassador
                                                Representative,
                                                our
                                                staff is given the knowledge, skills, and competencies required to
                                                increase
                                                customer satisfaction. </p>
                                        </div>
                                    </div>
                                    <div class="icon-box clearfix m-0 p-10">
                                        <a href="#"
                                           class="icon icon-circled bg-theme-colored icon-lg pull-left flip sm-pull-none">
                                            <i class="flaticon-carfixing-transport-7 text-white font-36"></i>
                                        </a>
                                        <div class="ml-120 ml-sm-0">
                                            <h4 class="icon-box-title text-white mt-5 mb-10 text-uppercase letter-space-1">
                                                Affiliate Programs</h4>
                                            <p class="text-white"> If you are a Web site owner, blogger, or a Web
                                                developer,
                                                you
                                                can start earning money today. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 p-0 bg-img-cover wow fadeInDown hidden-xs"
                                 data-bg-img="font-end/images/Covers/950x540.png" data-wow-duration="1s"
                                 data-wow-delay="0.3s">
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section: Services -->
                <section class="text-center">
                    <div class="container pb-20">
                        <div class="section-title text-center mb-10">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="line-height-1 mt-0 mb-0 pb-20 text-center">Our<span
                                                class="text-theme-color-2"> Services</span>
                                    </h2>
                                    <p>Automotive Maintenance and services</p>
                                </div>
                            </div>
                        </div>
                        <div class="section-content">
                            <div class="row features-style1 mt-20">
                                <div class="col-sm-4">
                                    <div class="icon-box left media p-0 mr-20 mb-40"><a href="#"
                                                                                        class="media-left pull-left"><i
                                                    class="flaticon-carfixing-car-washing-machine text-theme-colored"></i></a>
                                        <div class="media-body">
                                            <h4 class="media-heading heading">Car Wash and Glassing</h4>
                                            <p>Detailing Services |Full Service Cleaning |Exterior Cleaning |Interior
                                                Clearning</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="icon-box left media p-0 mr-20 mb-40"><a href="#"
                                                                                        class="media-left pull-left"><i
                                                    class="flaticon-carfixing-pistons-cross text-theme-colored"></i></a>
                                        <div class="media-body">
                                            <h4 class="media-heading heading">Engine Diognostic</h4>
                                            <p>Ignition module |Spark Plugs |Fuel pump |Engine sensors and electronic
                                                diagnostics | Emissions control system</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="icon-box left media p-0 mr-20 mb-40"><a href="#"
                                                                                        class="media-left pull-left"><i
                                                    class="flaticon-carfixing-tool-4 text-theme-colored"></i></a>
                                        <div class="media-body">
                                            <h4 class="media-heading heading">Performance</h4>
                                            <p>Car Audio |Electronics |Exhaust | Performance Tuning Service |
                                                Aftermarket
                                                Electronics | .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="icon-box left media p-0 mr-20 mb-40"><a href="#"
                                                                                        class="media-left pull-left"><i
                                                    class="flaticon-carfixing-tool-7 text-theme-colored"></i></a>
                                        <div class="media-body">
                                            <h4 class="media-heading heading">Protective Maintenance </h4>
                                            <p>Auto Air Conditioning Repair |Batteries |Filter Replacement |Lights |Oil
                                                Changes
                                                |Wiper Blades</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="icon-box left media p-0 mr-20 mb-40"><a href="#"
                                                                                        class="media-left pull-left"><i
                                                    class="flaticon-carfixing-transport-6 text-theme-colored"></i></a>
                                        <div class="media-body">
                                            <h4 class="media-heading heading">Repair and Services</h4>
                                            <p>Batteries Belts | Brakes | Cooling | Hoses Heating | Shocks | Struts &
                                                Suspension</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="icon-box left media p-0 mr-20 mb-40"><a href="#"
                                                                                        class="media-left pull-left"><i
                                                    class="flaticon-carfixing-transport-7 text-theme-colored"></i></a>
                                        <div class="media-body">
                                            <h4 class="media-heading heading">Wheel & Tire Repairing</h4>
                                            <p>Alignment | Flat Tire Repair | Tire Balancing | Tire Rotation | TPMS
                                                Services.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section: Counselor & Upcoming Events -->
                <section>
                    <div class="container pt-60">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-7 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <h3 class="text-uppercase title line-bottom mt-0 mb-30">Goldstar</span>  <span
                                                class="text-theme-color-2">Experts</span></h3>
                                    <div class="owl-carousel-2col">
                                        <div class="item">
                                            <div class="team-members maxwidth400 mb-30">
                                                <div class="team-thumb">
                                                    <img class="img-fullwidth" alt="" src="http://placehold.it/260x180">
                                                </div>
                                                <div class="team-bottom-part border-bottom-theme-color-2-2px border-1px text-center p-10 pt-20 pb-10">
                                                    <h4 class="text-uppercase font-raleway text-theme-color-2 font-weight-600 line-bottom-center m-0">
                                                        Hulu Bulbul</h4>
                                                    <h5 class="m-10">- Engine Specialist -</h5>
                                                    <ul class="styled-icons icon-sm icon-gray icon-hover-theme-colored">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="team-members maxwidth400 mb-30">
                                                <div class="team-thumb">
                                                    <img class="img-fullwidth" alt="" src="http://placehold.it/260x180">
                                                </div>
                                                <div class="team-bottom-part border-bottom-theme-color-2-2px border-1px text-center p-10 pt-20 pb-10">
                                                    <h4 class="text-uppercase font-raleway text-theme-color-2 font-weight-600 line-bottom-center m-0">
                                                        Aztek Tawni</h4>
                                                    <h5 class="m-10">- Wheels & Tire Specialist -</h5>
                                                    <ul class="styled-icons icon-sm icon-gray icon-hover-theme-colored">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="team-members maxwidth400 mb-30">
                                                <div class="team-thumb">
                                                    <img class="img-fullwidth" alt="" src="http://placehold.it/260x180">
                                                </div>
                                                <div class="team-bottom-part border-bottom-theme-color-2-2px border-1px text-center p-10 pt-20 pb-10">
                                                    <h4 class="text-uppercase font-raleway text-theme-color-2 font-weight-600 line-bottom-center m-0">
                                                        Mufasa Mek</h4>
                                                    <h5 class="m-10">-Air Conditioning Specialist -</h5>
                                                    <ul class="styled-icons icon-sm icon-gray icon-hover-theme-colored">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="team-members maxwidth400 mb-30">
                                                <div class="team-thumb">
                                                    <img class="img-fullwidth" alt="" src="http://placehold.it/260x180">
                                                </div>
                                                <div class="team-bottom-part border-bottom-theme-color-2-2px border-1px text-center p-10 pt-20 pb-10">
                                                    <h4 class="text-uppercase font-raleway text-theme-color-2 font-weight-600 line-bottom-center m-0">
                                                        Jose Willi</h4>
                                                    <h5 class="m-10">- Performance Specialist -</h5>
                                                    <ul class="styled-icons icon-sm icon-gray icon-hover-theme-colored">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <h3 class="line-bottom mt-0 mt-sm-30 mb-30">Why <span
                                                class="text-theme-color-2">MOTORMEN?</span></h3>
                                    <div id="accordion1" class="panel-group accordion">
                                        <div class="panel">
                                            <div class="panel-title"><a class="active" data-parent="#accordion1"
                                                                        data-toggle="collapse" href="#accordion11"
                                                                        aria-expanded="true"> <span
                                                            class="open-sub"></span>24/7
                                                    Service</a></div>
                                            <div id="accordion11" class="panel-collapse collapse in" role="tablist"
                                                 aria-expanded="true">
                                                <div class="panel-content">
                                                    <p>24/7 Service To provide the best customer support to our valued
                                                        customers, we offer 24/7 support ! </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-title"><a data-parent="#accordion1" data-toggle="collapse"
                                                                        href="#accordion12" class=""
                                                                        aria-expanded="true"> <span
                                                            class="open-sub"></span>Service Warranty</a></div>
                                            <div id="accordion12" class="panel-collapse collapse" role="tablist"
                                                 aria-expanded="true">
                                                <div class="panel-content">
                                                    <p>First 12 months or 12,000 miles Coverage , whichever comes first.
                                                        Motormen is committed to ensuring your satisfaction with our
                                                        services
                                                        and also invites you to return for all your service needs, both
                                                        during
                                                        and after the warranty period.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-title"><a data-parent="#accordion1" data-toggle="collapse"
                                                                        href="#accordion13" class=""
                                                                        aria-expanded="true"> <span
                                                            class="open-sub"></span>High Quality Services</a></div>
                                            <div id="accordion13" class="panel-collapse collapse" role="tablist"
                                                 aria-expanded="true">
                                                <div class="panel-content">
                                                    <p>We provide high quality repairs & services tailored to our
                                                        client's
                                                        unique quality standards.
                                                        Our team is composed of highly professional team of mechanics
                                                        and
                                                        technician and business partnerss who can help dream into a
                                                        reality.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-title"><a data-parent="#accordion1" data-toggle="collapse"
                                                                        href="#accordion14" class=""
                                                                        aria-expanded="true"> <span
                                                            class="open-sub"></span>Instant Service Payment Finance </a>
                                            </div>
                                            <div id="accordion14" class="panel-collapse collapse" role="tablist"
                                                 aria-expanded="true">
                                                <div class="panel-content">
                                                    <p>Motormen is happy to partner with Affirm to offer credit lines to
                                                        finance
                                                        your Service and get you rolling down the road today! You can
                                                        pre-qualify, or you can simply choose Affirm at check-out, fill
                                                        out
                                                        your
                                                        information and choose the monthly payment that works best for
                                                        you!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-title"><a data-parent="#accordion1" data-toggle="collapse"
                                                                        href="#accordion14" class=""
                                                                        aria-expanded="true"> <span
                                                            class="open-sub"></span>Radically Simple Pricing </a></div>
                                            <div id="accordion15" class="panel-collapse collapse" role="tablist"
                                                 aria-expanded="true">
                                                <div class="panel-content">
                                                    <p>Transparent pricing • No minimum contract • No hidden fees • <br>
                                                        We avoid obscure and arbitrary pricing. Our pricing strategies
                                                        are
                                                        completely transparent and open. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Section: Gallery -->
                <section class="divider parallax layer-overlay overlay-dark-8"
                         data-bg-img="http://placehold.it/1920x1280"
                         id="gallery">
                    <div class="container pb-40">
                        <div class="section-title text-center">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2 class="text-uppercase mt-0 pb-0 mb-0 text-white">Community<span
                                                class="text-theme-color-2"> Gallery</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="section-content">
                            <div class="row">
                                <!-- Gallery Grid -->
                                <div class="owl-carousel-4col" data-nav="true">
                                    <div class="item">
                                        <div class="work-gallery">
                                            <div class="gallery-thumb">
                                                <img class="img-fullwidth" alt="" src="http://placehold.it/280x220">
                                                <div class="gallery-overlay"></div>
                                                <div class="gallery-contect">
                                                    <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                        <li><a data-lightbox-gallery="gallery"
                                                               href="http://placehold.it/280x220"><i
                                                                        class="fa fa-arrows"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="gallery-bottom-part text-center">
                                                <h4 class="title text-uppercase font-raleway font-weight-600 m-0">
                                                    Kiosk</h4>
                                                <h5 class="sub-title m-0">- Fort Lauderdale -</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="work-gallery">
                                            <div class="gallery-thumb">
                                                <img class="img-fullwidth" alt="" src="http://placehold.it/280x220">
                                                <div class="gallery-overlay"></div>
                                                <div class="gallery-contect">
                                                    <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                        <li><a data-lightbox-gallery="gallery"
                                                               href="http://placehold.it/280x220"><i
                                                                        class="fa fa-arrows"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="gallery-bottom-part text-center">
                                                <h4 class="title text-uppercase font-raleway font-weight-600 m-0">Racing
                                                    Event</h4>
                                                <h5 class="sub-title m-0">- Motormen Go-Kart Championship -</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="work-gallery">
                                            <div class="gallery-thumb">
                                                <img class="img-fullwidth" alt="" src="http://placehold.it/280x220">
                                                <div class="gallery-overlay"></div>
                                                <div class="gallery-contect">
                                                    <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                        <li><a data-lightbox-gallery="gallery"
                                                               href="http://placehold.it/280x220"><i
                                                                        class="fa fa-arrows"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="gallery-bottom-part text-center">
                                                <h4 class="title text-uppercase font-raleway font-weight-600 m-0">Road
                                                    Safety</h4>
                                                <h5 class="sub-title m-0">- Road Safety Supporting Fort Lauderdale
                                                    -</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="work-gallery">
                                            <div class="gallery-thumb">
                                                <img class="img-fullwidth" alt="" src="http://placehold.it/280x220">
                                                <div class="gallery-overlay"></div>
                                                <div class="gallery-contect">
                                                    <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                        <li><a data-lightbox-gallery="gallery"
                                                               href="http://placehold.it/280x220"><i
                                                                        class="fa fa-arrows"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="gallery-bottom-part text-center">
                                                <h4 class="title text-uppercase font-raleway font-weight-600 m-0">
                                                    Remote
                                                    Carwash </h4>
                                                <h5 class="sub-title m-0">- Motormen Partners -</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="work-gallery">
                                            <div class="gallery-thumb">
                                                <img class="img-fullwidth" alt="" src="http://placehold.it/280x220">
                                                <div class="gallery-overlay"></div>
                                                <div class="gallery-contect">
                                                    <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                        <li><a data-lightbox-gallery="gallery"
                                                               href="http://placehold.it/280x220"><i
                                                                        class="fa fa-arrows"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="gallery-bottom-part text-center">
                                                <h4 class="title text-uppercase font-raleway font-weight-600 m-0">Glass
                                                    Cleaning</h4>
                                                <h5 class="sub-title m-0">- Motormen Partners -</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="work-gallery">
                                            <div class="gallery-thumb">
                                                <img class="img-fullwidth" alt="" src="http://placehold.it/280x220">
                                                <div class="gallery-overlay"></div>
                                                <div class="gallery-contect">
                                                    <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                        <li><a data-lightbox-gallery="gallery"
                                                               href="http://placehold.it/280x220"><i
                                                                        class="fa fa-arrows"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="gallery-bottom-part text-center">
                                                <h4 class="title text-uppercase font-raleway font-weight-600 m-0">Quick
                                                    FixTire</h4>
                                                <h5 class="sub-title m-0">- Motormen Partners -</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Gallery Grid -->
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Section: Shop 285x300 IMAGE SIZE -->
                <section class="bg-lighter">
                    <div class="container pb-40">
                        <div class="row multi-row-clearfix">
                            <div class="col-md-12">
                                <h2 class="mt-0 line-height-1 text-center mb-40">This Month Fabulous Deals</h2>
                                <div class="products owl-carousel-4col">
                                    <div class="item">
                                        <div class="product">
                                            <span class="tag-sale">Sale!</span>
                                            <div class="product-thumb">
                                                <img alt="" src="{{asset('font-end/images/deals/engine_oil.png')}}"
                                                     class="img-responsive img-fullwidth">
                                                <div class="overlay">
                                                    <div class="btn-add-to-cart-wrapper">
                                                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700"
                                                           href="shop-cart.html" target="_blank">Add To Cart</a>
                                                    </div>
                                                    <div class="btn-product-view-details">
                                                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700"
                                                           href="shop-product-details.html" target="_blank">View
                                                            detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <a href="#"><h5 class="product-title">Engine Oil</h5></a>
                                                <div class="star-rating" title="Rated 3.50 out of 5"><span
                                                            data-width="67%">3.50</span></div>
                                                <div class="price">
                                                    <del><span class="amount">$110.00</span></del>
                                                    <ins><span class="amount">$90.00</span></ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <img alt="" src="{{asset('font-end/images/deals/brake_disk.png')}}"
                                                     class="img-responsive img-fullwidth">
                                                <div class="overlay">
                                                    <div class="btn-add-to-cart-wrapper">
                                                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700"
                                                           href="shop-cart.html" target="_blank">Add To Cart</a>
                                                    </div>
                                                    <div class="btn-product-view-details">
                                                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700"
                                                           href="shop-product-details.html" target="_blank">View
                                                            detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <a href="#"><h5 class="product-title">Brake Disk</h5></a>
                                                <div class="star-rating" title="Rated 5.00 out of 5"><span
                                                            data-width="100%">5.00</span>
                                                </div>
                                                <div class="price">
                                                    <ins><span class="amount">$480.00</span></ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product">
                                            <span class="tag-sale">Sale!</span>
                                            <div class="product-thumb">
                                                <img alt=""
                                                     src="{{asset('font-end/images/deals/windshield_wipers.png')}}"
                                                     class="img-responsive img-fullwidth">
                                                <div class="overlay">
                                                    <div class="btn-add-to-cart-wrapper">
                                                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700"
                                                           href="shop-cart.html" target="_blank">Add To Cart</a>
                                                    </div>
                                                    <div class="btn-product-view-details">
                                                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700"
                                                           href="shop-product-details.html" target="_blank">View
                                                            detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <a href="#"><h5 class="product-title">Windshield Wipers</h5></a>
                                                <div class="star-rating" title="Rated 3.50 out of 5"><span
                                                            data-width="60%">3.50</span></div>
                                                <div class="price">
                                                    <del><span class="amount">$70.00</span></del>
                                                    <ins><span class="amount">$55.00</span></ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <img alt="" src="{{asset('font-end/images/deals/steering_wheel.png')}}"
                                                     class="img-responsive img-fullwidth">
                                                <div class="overlay">
                                                    <div class="btn-add-to-cart-wrapper">
                                                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700"
                                                           href="shop-cart.html" target="_blank">Add To Cart</a>
                                                    </div>
                                                    <div class="btn-product-view-details">
                                                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700"
                                                           href="shop-product-details.html" target="_blank">View
                                                            detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <a href="#"><h5 class="product-title">Steering Wheel</h5></a>
                                                <div class="star-rating" title="Rated 3.50 out of 5"><span
                                                            data-width="75%">3.50</span></div>
                                                <div class="price">
                                                    <ins><span class="amount">$185.00</span></ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product">
                                            <span class="tag-sale">Sale!</span>
                                            <div class="product-thumb">
                                                <img alt="" src="{{asset('font-end/images/deals/Spark Plugs.png')}}"
                                                     class="img-responsive img-fullwidth">
                                                <div class="overlay">
                                                    <div class="btn-add-to-cart-wrapper">
                                                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700"
                                                           href="shop-cart.html" target="_blank">Add To Cart</a>
                                                    </div>
                                                    <div class="btn-product-view-details">
                                                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700"
                                                           href="shop-product-details.html" target="_blank">View
                                                            detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <a href="#"><h5 class="product-title">Super Plus Spark</h5></a>
                                                <div class="star-rating" title="Rated 3.50 out of 5"><span
                                                            data-width="40%">3.50</span></div>
                                                <div class="price">
                                                    <del><span class="amount">$220.00</span></del>
                                                    <ins><span class="amount">$210.00</span></ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Divider: testimonials -->
                <section class="divider parallax layer-overlay overlay-dark-8"
                         data-bg-img="http://placehold.it/1920x1280">
                    <div class="container pb-70">
                        <div class="row">
                            <div class="col-md-12 mb-10">
                                <div class="owl-carousel-2col">
                                    <div class="item">
                                        <div class="testimonial pt-10">
                                            <div class="thumb pull-left mb-0 mr-0 pr-20">
                                                <img width="75" class="img-circle" alt=""
                                                     src="{{asset('font-end/images/partners/cust_1.png')}}">
                                            </div>
                                            <div class="ml-100 ">
                                                <h4 class="mt-0 text-white font-weight-400">No.1 Instant Service
                                                    provider.</h4>
                                                <p class="author mt-20">- <span class="text-white">Cartoon Grace,</span>
                                                    <small><em class="text-gray">Cartoon apple.inc</em></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimonial pt-10">
                                            <div class="thumb pull-left mb-0 mr-0 pr-20">
                                                <img width="75" class="img-circle" alt=""
                                                     src="{{asset('font-end/images/partners/cust_1.png')}}">
                                            </div>
                                            <div class="ml-100 ">
                                                <h4 class="mt-0 text-white font-weight-400">No.1 Instant Service
                                                    provider</h4>
                                                <p class="author mt-20">- <span class="text-white">Cartoon Two,</span>
                                                    <small><em class="text-gray">Two apple.inc</em></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimonial pt-10">
                                            <div class="thumb pull-left mb-0 mr-0 pr-20">
                                                <img width="75" class="img-circle" alt=""
                                                     src="{{asset('font-end/images/partners/cust_1.png')}}">
                                            </div>
                                            <div class="ml-100 ">
                                                <h4 class="mt-0 text-white font-weight-400">No.1 Instant Service
                                                    provider.</h4>
                                                <p class="author mt-20">- <span class="text-white">Cartoon Three,</span>
                                                    <small><em class="text-gray">Three apple.inc</em></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimonial pt-10">
                                            <div class="thumb pull-left mb-0 mr-0 pr-20">
                                                <img width="75" class="img-circle" alt=""
                                                     src="{{asset('font-end/images/partners/cust_1.png')}}">
                                            </div>
                                            <div class="ml-100 ">
                                                <h4 class="mt-0 text-white font-weight-400">No.1 Instant Service
                                                    provider.</h4>
                                                <p class="author mt-20">- <span class="text-white">Cartoon Four,</span>
                                                    <small><em class="text-gray">Tom Kom Phew.inc</em></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Divider: Clients -->
                <section class="clients bg-theme-colored">
                    <div class="container pt-10 pb-0 pt-sm-0 pb-sm-0">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Section: Clients -->
                                <div class="owl-carousel-6col transparent text-center owl-nav-top">
                                    <div class="item"><a href="#"><img
                                                    src="{{asset('font-end/images/partners/partner1.png')}}"
                                                    alt=""></a></div>
                                    <div class="item"><a href="#"><img
                                                    src="{{asset('font-end/images/partners/partner2.png')}}"
                                                    alt=""></a></div>
                                    <div class="item"><a href="#"><img
                                                    src="{{asset('font-end/images/partners/partner3.png')}}"
                                                    alt=""></a></div>
                                    <div class="item"><a href="#"><img
                                                    src="{{asset('font-end/images/partners/partner4.png')}}"
                                                    alt=""></a></div>
                                    <div class="item"><a href="#"><img
                                                    src="{{asset('font-end/images/partners/partner5.png')}}"
                                                    alt=""></a></div>
                                    <div class="item"><a href="#"><img
                                                    src="{{asset('font-end/images/partners/partner6.png')}}"
                                                    alt=""></a></div>
                                    <div class="item"><a href="#"><img
                                                    src="{{asset('font-end/images/partners/partner7.png')}}"
                                                    alt=""></a></div>
                                    <div class="item"><a href="#"><img
                                                    src="{{asset('font-end/images/partners/partner8.png')}}"
                                                    alt=""></a></div>
                                    <div class="item"><a href="#"><img
                                                    src="{{asset('font-end/images/partners/partner9.png')}}"
                                                    alt=""></a></div>
                                    <div class="item"><a href="#"><img
                                                    src="{{asset('font-end/images/partners/partner10.png')}}"
                                                    alt=""></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
            <!-- end main-content -->
            <!-- Footer -->
            <footer id="footer" class="footer divider layer-overlay overlay-dark-8"
                    data-bg-img="http://placehold.it/1920x1280">
                <div class="container pt-70 pb-40">
                    <div class="row border-bottom">
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <img class="mt-5 mb-20" alt="" src="http://placehold.it/322x56">
                                <p>MOTORMEN <br> P.O. Box 007, Ft Lauderdale,<br> Florida-33022, USA.</p>
                                <ul class="list-inline mt-5">
                                    <li class="m-0 pl-10 pr-10"><i class="fa fa-phone text-theme-color-2 mr-5"></i> <a
                                                class="text-gray" href="#">123-456-789</a></li>
                                    <li class="m-0 pl-10 pr-10"><i class="fa fa-envelope-o text-theme-color-2 mr-5"></i>
                                        <a
                                                class="text-gray" href="#">enquiry@motormen.com</a></li>
                                    <li class="m-0 pl-10 pr-10"><i class="fa fa-globe text-theme-color-2 mr-5"></i> <a
                                                class="text-gray" href="#">www.availby.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h4 class="widget-title line-bottom-theme-colored-2">Company</h4>
                                <ul class="list angle-double-right list-border">
                                    <li><a href="about_us.html">About Us</a></li>
                                    <li><a href="news_index.html">Newsroom</a></li>
                                    <li><a href="career_index.html">Career</a></li>
                                    <li><a href="eshop_index.html"> eStore</a></li>
                                    <li><a href="legal_index">Legal</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h4 class="widget-title line-bottom-theme-colored-2">Support</h4>
                                <ul class="list list-border">
                                    <li><a href="customer_support_index.html">Customer Supports</a></li>
                                    <li><a href="partners_support_index.html">Partners Support</a></li>
                                    <li><a href="abuse_report.html">Report Abuse</a></li>
                                    <li><a href="affiliate_programs.html">Affiliates</a></li>
                                    <li><a href="t&a_ac.html">Tips & Advice</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h4 class="widget-title line-bottom-theme-colored-2">Account</h4>
                                <ul class="list list-border">
                                    <li><a href="login.html">My Account</a></li>
                                    <li><a href="partners_login.html">Partner Login</a></li>
                                    <li><a href="partners_login.html">Partner Registration</a></li>
                                    <li><a href="#">How It Work?</a></li>
                                    <li><a href="sitemap.html">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-md-2">
                        <div class="widget dark">
                            <h5 class="widget-title mb-10">MOTORMEN</h5>
                            <div class="text-gray">


                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget dark">
                            <h5 class="widget-title mb-10">Connect With Us</h5>
                            <ul class="styled-icons icon-bordered icon-sm">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-2">
                        <div class="widget dark">
                            <h5 class="widget-title mb-10">Subscribe For Update</h5>
                            <!-- Mailchimp Subscription Form Starts Here -->
                            <form id="mailchimp-subscription-form-footer" class="newsletter-form">
                                <div class="input-group">
                                    <input type="email" value="" name="EMAIL" placeholder="Your Email"
                                           class="form-control input-lg font-16" data-height="45px"
                                           id="mce-EMAIL-footer">
                                    <span class="input-group-btn">
                  <button data-height="45px" class="btn bg-theme-color-2 text-white btn-xs m-0 font-14" type="submit">Subscribe</button>
                </span>
                                </div>
                            </form>
                            <!-- Mailchimp Subscription Form Validation-->

                            <!-- Mailchimp Subscription Form Ends Here -->
                        </div>
                    </div>
                </div>

                <div class="footer-bottom bg-black-333">
                    <div class="container pt-20 pb-20">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="font-11 text-black-777 m-0">Copyright &copy;2019 MOTORMEN. All Rights
                                    Reserved</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <div class="widget no-border m-0">
                                    <ul class="list-inline sm-text-center mt-5 font-12">
                                        <li>
                                            <a href="site_faq.html">FAQ</a>
                                        </li>
                                        <li>|</li>
                                        <li>
                                            <a href="help_desk.html">Help Desk</a>
                                        </li>
                                        <li>|</li>
                                        <li>
                                            <a href="#">Support</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- end wrapper -->
</div>
<!-- Reservation Form End-->

<!-- Reservation Form Validation Start-->
<script type="text/javascript">
    $("#reservation_form").validate({
        submitHandler: function (form) {
            var form_btn = $(form).find('button[type="submit"]');
            var form_result_div = '#form-result';
            $(form_result_div).remove();
            form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
            var form_btn_old_msg = form_btn.html();
            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
            $(form).ajaxSubmit({
                dataType: 'json',
                success: function (data) {
                    if (data.status == 'true') {
                        $(form).find('.form-control').val('');
                    }
                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                    $(form_result_div).html(data.message).fadeIn('slow');
                    setTimeout(function () {
                        $(form_result_div).fadeOut('slow')
                    }, 6000);
                }
            });
        }
    });
</script>
<!-- Reservation Form Validation Start -->
<!-- end .rev_slider_wrapper -->
<script>
    $(document).ready(function (e) {
        $(".rev_slider").revolution({
            sliderType: "standard",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 5000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    style: "zeus",
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 600,
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    }
                },
                bullets: {
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 600,
                    style: "metis",
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                    tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{config('app.name')}}</span>'
                }
            },
            responsiveLevels: [1240, 1024, 778],
            visibilityLevels: [1240, 1024, 778],
            gridwidth: [1170, 1024, 778, 480],
            gridheight: [650, 768, 960, 720],
            lazyType: "none",
            parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "on",
            stopAfterLoops: 0,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "0",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
        });
    });
</script>
<!-- Slider Revolution Ends -->
<script type="text/javascript">
    $('#mailchimp-subscription-form-footer').ajaxChimp({
        callback: mailChimpCallBack,
        url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
    });

    function mailChimpCallBack(resp) {
        // Hide any previous response text
        let $mailchimpform = $('#mailchimp-subscription-form-footer'),
            $response = '';
        $mailchimpform.children(".alert").remove();
        if (resp.result === 'success') {
            $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
        } else if (resp.result === 'error') {
            $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
        }
        $mailchimpform.prepend($response);
    }
</script>
<!-- Footer Scripts -->
<!-- JS | Calendar Event Data -->
<script src="{{asset('font-end/js/calendar-events-data.js')}}"></script>
<!-- JS | Custom script for all pages -->
<script src="{{asset('font-end/js/custom.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript"
        src="{{asset('font-end/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('font-end/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('font-end/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('font-end/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('font-end/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('font-end/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('font-end/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('font-end/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('font-end/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
