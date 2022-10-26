<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!--new design-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family={{ urlencode(theme_option('primary_font', 'Nunito Sans')) }}:wght@300;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ URL::asset('u/stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('u/cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('u/css/A.animate.css%2bflaticon.css%2btiny-slider.css%2bglightbox.min.css%2baos.css%2bstyle.css%2cMcc.GVIUmIpB3f.css.pagespeed.cf.wuDyiIMmfX.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('u/css/style.css') }}">
<!--end new design-->

    <style>
        :root {
            --primary-color: {{ theme_option('primary_color', '#1d5f6f') }};
            --primary-color-rgb: {{ BaseHelper::hexToRgba(theme_option('primary_color', '#1d5f6f'), 0.8) }};
            --primary-color-hover: {{ theme_option('primary_color_hover', '#063a5d') }};
            --primary-font: '{{ theme_option('primary_font', 'Nunito Sans') }}';
        }



    </style>


    {!! Theme::header() !!}
</head>



<body @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif>

{!! apply_filters(THEME_FRONT_BODY, null) !!}
<div id="alert-container"></div>
 {{-- <div class="py-4 top-wrap">
<div class="container-xl">
<div class="row d-flex align-items-start">
<div class="col-md topper d-flex mb-md-0 align-items-xl-center">
<div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-map"></span>
</div>
<div class="text pl-3 pl-md-3">
<p class="con"><span>Free Call</span> <span>{{ __('Hotline') }}: &nbsp;<a href="tel:{{ theme_option('hotline') }}">{{ theme_option('hotline') }}</a></span></p>
<p class="con" style="color:white ">&nbsp; Call Us Now 24/7 Customer Support</p>
</div>
</div>
<div class="col-md topper d-flex mb-md-0 align-items-xl-center">
<div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-paper-plane"></span>
</div>
<div class="text pl-3 pl-md-3">
    @if (theme_option('address'))
    <p class="hr"><span class="fas fa-map-marker-alt">&nbsp;   Our Location</span></p>

@endif

<p class="hr" style="color:white ">&nbsp; {{ theme_option('address') }}
</p>
</div>
</div>
<div class="col-md topper d-flex mb-md-0 align-items-xl-center">
<div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-connectdevelop"></span>
</div>
<div class="text pl-3 pl-md-3">
    <p class="con"><span>Connect </span> <span>with us</span></p>
    <p class="con"><a href="#">Facebook</a> <a href="#">Twitter</a> <a href="https://youtube.com/channel/UCduGXeujXPR4o2lK-ix0gpQ">Youtube</a></p>

    </div>


    <!--Auth-->
    @if (is_plugin_active('real-estate') && RealEstateHelper::isRegisterEnabled())
        <ul class="topbar-items">
      @if (auth('account')->check())
        <li class="login-item"><a href="{{ route('public.account.dashboard') }}" rel="nofollow"><i class="fas fa-user"></i> <span>{{ auth('account')->user()->name }}</span></a></li>
        <li class="login-item"><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" rel="nofollow"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a></li>
         @else
        <li class="login-item" style="color: white">
        <a href="{{ route('public.account.login') }}"><i class="fas fa-sign-in-alt"></i>  {{ __('Login') }}</a>
        </li>
        @endif
        </ul>
    @if (auth('account')->check())
     <form id="logout-form" action="{{ route('public.account.logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
        @endif
    @endif
</div>
</div>
</div>
</div> --}}



<div class="bravo_topbar d-none d-sm-block">
    <div class="container-fluid w90">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <div class="topbar-left">
                        @if (theme_option('social_links'))
                            <div class="top-socials">
                                @foreach(json_decode(theme_option('social_links'), true) as $socialLink)
                                    @if (count($socialLink) == 3)
                                        <a href="{{ $socialLink[2]['value'] }}"
                                           title="{{ $socialLink[0]['value'] }}">
                                            <i class="{{ $socialLink[1]['value'] }}"></i>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <span class="line"></span>
                        @endif
                        <a href="mailto:{{ theme_option('email') }}">{{ theme_option('email') }}</a>
                    </div>
                    <div class="topbar-right">
                        @if (is_plugin_active('real-estate'))
                            @if (RealEstateHelper::isEnabledWishlist())
                                <ul class="topbar-items">
                                    <li><a href="{{ route('public.wishlist') }}"><i class="fas fa-heart"></i> {{ __('Wishlist') }}(<span class="wishlist-count">0</span>)</a></li>
                                </ul>
                            @endif

                            @php $currencies = get_all_currencies(); @endphp
                            @if (count($currencies) > 1)
                                <div class="language currency-switcher">
                                    <div class="language-switcher-wrapper">
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-secondary dropdown-toggle btn-select-language" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                {{ get_application_currency()->title }}
                                            </button>
                                            <ul class="dropdown-menu language_bar_chooser">
                                                @foreach ($currencies as $currency)
                                                    <li>
                                                        <a href="{{ route('public.change-currency', $currency->title) }}" @if (get_application_currency_id() == $currency->id) class="active" @endif ><span style="color:white">{{ $currency->title }}</span></a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                        {!! Theme::partial('language-switcher') !!}
                        @if (is_plugin_active('real-estate') && RealEstateHelper::isRegisterEnabled())
                            <ul class="topbar-items">
                                @if (auth('account')->check())
                                    <li class="login-item"><a href="{{ route('public.account.dashboard') }}" rel="nofollow"><i class="fas fa-user"></i> <span>{{ auth('account')->user()->name }}</span></a></li>
                                    <li class="login-item"><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" rel="nofollow"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a></li>
                                @else
                                    <li class="login-item">
                                        <a href="{{ route('public.account.login') }}"><i class="fas fa-sign-in-alt"></i>  {{ __('Login') }}</a>
                                    </li>
                                @endif
                            </ul>
                            @if (auth('account')->check())
                                <form id="logout-form" action="{{ route('public.account.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<header class="topmenu" style="background:#06112A">
    <div @if (theme_option('enable_sticky_header', 'yes') == 'yes') id="header-waypoint" @endif class="main-header">
        <div class="container-fluid w90">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        @if (theme_option('logo'))
                            <a class="navbar-brand" href="{{ route('public.index') }}">
                                <img src="{{ RvMedia::getImageUrl(theme_option('logo')) }}"
                                     class="logo" sizes="40%" alt="{{ theme_option('site_name') }}">
                            </a>
                        @endif
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                id="header-waypoint"                   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fa fa-bars"></span> Menu
                        </button>

                        <div class="collapse navbar-collapse justify-content-end animation" id="navbarSupportedContent">
                            <div class="main-menu-darken"></div>
                            <div class="main-menu-content">
                                <div class="d-lg-none bg-primary p-2">
                                    <span class="text-white">{{ __('Menu') }}</span>
                                    <span class="float-right toggle-main-menu-offcanvas text-white">
                                        <i class="far fa-times-circle"></i>
                                    </span>
                                </div>
                                <div class="main-menu-nav d-lg-flex">



                                    {!!
                                        Menu::renderMenuLocation('main-menu', [
                                            'options' => ['class' => 'navbar-nav justify-content-end menu menu--mobile'],
                                            'view'    => 'main-menu',
                                        ])
                                    !!}
                                    @if (is_plugin_active('real-estate') && RealEstateHelper::isRegisterEnabled())
                                        <a class="btn btn-primary add-property" href="{{ route('public.account.properties.index') }}">
                                            <i class="fas fa-plus-circle"></i> {{ __('Add Property') }}
                                        </a>
                                    @endif

                                    <div class="d-sm-none">
                                        <div>
                                            @if (is_plugin_active('real-estate'))
                                                @if (RealEstateHelper::isEnabledWishlist())
                                                    <ul class="topbar-items d-block">
                                                        <li class="login-item">
                                                            <a href="{{ route('public.wishlist') }}"><i class="fas fa-heart"></i> {{ __('Wishlist') }}(<span class="wishlist-count">0</span>)</a>
                                                        </li>
                                                    </ul>
                                                @endif

                                                @if (count($currencies) > 1)
                                                    {{-- <div class="language">
                                                        <div class="language-switcher-wrapper">
                                                            <div class="d-inline-block language-label" style="color:white">
                                                                {{ __('Currencies') }}:
                                                            </div>
                                                            <div class="dropdown d-inline-block">
                                                                <button style="color:white" class="btn btn-secondary dropdown-toggle btn-select-language" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                    {{ get_application_currency()->title }}
                                                                </button>
                                                                <ul class="dropdown-menu language_bar_chooser" style="color:white">
                                                                    @foreach ($currencies as $currency)
                                                                        <li >
                                                                            <a href="{{ route('public.change-currency', $currency->title) }}" @if (get_application_currency_id() == $currency->id) class="active" @endif><span>{{ $currency->title }}</span></a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                @endif
                                            @endif
                                            {{-- {!! Theme::partial('language-switcher') !!} --}}
                                            @if (is_plugin_active('real-estate') && RealEstateHelper::isRegisterEnabled())
                                                <ul class="topbar-items d-block">
                                                    @if (auth('account')->check())
                                                        <li class="login-item"><a href="{{ route('public.account.dashboard') }}" rel="nofollow"><i class="fas fa-user"></i> <span>{{ auth('account')->user()->name }}</span></a></li>
                                                        <li class="login-item"><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" rel="nofollow"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a></li>
                                                    @else
                                                        <li class="login-item" >
                                                            <a style="color:white" href="{{ route('public.account.login') }}"><i style="color:white" class="fas fa-sign-in-alt"></i>  {{ __('Login') }}</a>
                                                        </li>
                                                    @endif
                                                </ul>
                                                @if (is_plugin_active('real-estate') && auth('account')->check())
                                                    <form id="logout-form" action="{{ route('public.account.logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    @php
        $page = Theme::get('page');
    @endphp
    @if (is_plugin_active('real-estate') && url()->current() == route('public.index') || ($page && $page->template === 'homepage'))
        @php
            $categories = get_property_categories(['indent' => '↳', 'conditions' => ['status' => \Botble\Base\Enums\BaseStatusEnum::PUBLISHED]]);
        @endphp
</header>

<!--newslider-->
<section class="slider-hero">
    <div class="overlay"></div>
    <div class="hero-slider">
    <div class="item">
    <div class="work">
    <div class="img d-flex align-items-center js-fullheight" style="background-image:url({{ URL::asset('u/images/replace/IMG-20221013-WA0019.jpg')}})">
    <div class="container-xl">
    <div class="row justify-content-center">
    <div class="col-md-10 col-xl-6">
    <div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
    @if (theme_option('home_banner_description'))<h2 class="text-center text-white mb-4 banner-text-description">{{ theme_option('home_banner_description') }}</h2>@endif</h2>
    <!-- <p class="mb-5">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
    <p><a href="/about-us" class="btn btn-primary px-5 py-3">Learn More <span class="ion ion-ios-arrow-round-forward"></span></a></p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="work">
    <div class="img d-flex align-items-center justify-content-center js-fullheight" style="background-image:url({{ URL::asset('u/images/replace/IMG-20221013-WA0020.jpg')}})">
    <div class="container-xl">
    <div class="row justify-content-center">
    <div class="col-md-10 col-xl-6">
    <div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
    <h2>Five Bedroom Detached Duplex</h2>
    <!-- <p class="mb-5">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
    <p><a href="/about-us" class="btn btn-primary px-5 py-3">Learn More <span class="ion ion-ios-arrow-round-forward"></span></a></p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="work">
    <div class="img d-flex align-items-center justify-content-center js-fullheight" style="background-image:url({{ URL::asset('u/images/xbg_3.jpg.pagespeed.ic.33WGlYurvU.jpg')}})">
    <div class="container-xl">
    <div class="row justify-content-center">
    <div class="col-md-10 col-xl-6">
    <div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
    <h2>Modern House Make Better Life</h2>
    <!-- <p class="mb-5">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
    <p><a href="/about-us" class="btn btn-primary px-5 py-3">Learn More <span class="ion ion-ios-arrow-round-forward"></span></a></p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
        <div class="topsearch">
            <form @if (theme_option('enable_search_projects_on_homepage_search', 'yes') == 'yes' && theme_option('default_home_search_type', 'project') == 'project') action="{{ route('public.projects') }}" @else action="{{ route('public.properties') }}" @endif method="GET" id="frmhomesearch">
                    <div class="typesearch" id="hometypesearch">
                        @if (theme_option('enable_search_projects_on_homepage_search', 'yes') == 'yes')
                            <a href="javascript:void(0)" @if (theme_option('enable_search_projects_on_homepage_search', 'yes') == 'yes' && theme_option('default_home_search_type', 'project') == 'project') class="active" @endif rel="project" data-url="{{ route('public.projects') }}">{{ __('Projects') }}</a>
                        @endif
                        <a href="javascript:void(0)" rel="sale" @if (theme_option('default_home_search_type', 'project') == 'sale') class="active" @endif data-url="{{ route('public.properties') }}">{{ __('Sale') }}</a>
                        <a href="javascript:void(0)" rel="rent" @if (theme_option('default_home_search_type', 'project') == 'rent') class="active" @endif data-url="{{ route('public.properties') }}">{{ __('Rent') }}</a>
                    </div>
                    <div class="input-group input-group-lg">

                        <input type="hidden" name="type" @if (theme_option('enable_search_projects_on_homepage_search', 'yes') == 'yes' && theme_option('default_home_search_type', 'project') == 'project') value="project" @else value="{{ theme_option('default_home_search_type', 'sale') }}" @endif id="txttypesearch">

                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-search"></i></span>
                        </div>
                        <div class="keyword-input">
                            <input type="text" class="form-control" name="k" placeholder="{{ __('Enter keyword...') }}" id="txtkey" autocomplete="off">
                            <div class="spinner-icon">
                                <i class="fas fa-spin fa-spinner"></i>
                            </div>
                        </div>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-location"></i></span>
                        </div>
                        <div class="location-input" data-url="{{ route('public.ajax.cities') }}">
                            <input type="hidden" name="city_id">
                            <input class="select-city-state form-control" name="location" value="{{ request()->input('location') }}" placeholder="{{ __('City, State') }}" autocomplete="off">
                            <div class="spinner-icon">
                                <i class="fas fa-spin fa-spinner"></i>
                            </div>
                            <div class="suggestion">

                            </div>
                        </div>
                        <div class="input-group-append search-button-wrapper">
                            <button class="btn btn-orange" type="submit">{{ __('Search') }}</button>
                        </div>

                        <div class="advanced-search d-none d-sm-block">
                            <a href="#" class="advanced-search-toggler">{{ __('Advanced') }} <i class="fas fa-caret-down"></i></a>
                            <div class="advanced-search-content property-advanced-search">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 pr-md-1">
                                            {!! Theme::partial('real-estate.filters.categories', compact('categories')) !!}
                                        </div>
                                        <div class="col-md-3 col-sm-6 px-md-1">
                                            {!! Theme::partial('real-estate.filters.bedroom') !!}
                                        </div>
                                        <div class="col-md-3 col-sm-6 px-md-1">
                                            {!! Theme::partial('real-estate.filters.bathroom') !!}
                                        </div>
                                        <div class="col-md-3 col-sm-6 pl-md-1">
                                            {!! Theme::partial('real-estate.filters.floor') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if (theme_option('enable_search_projects_on_homepage_search', 'yes') == 'yes')
                                <div class="advanced-search-content project-advanced-search">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                {!! Theme::partial('real-estate.filters.categories', compact('categories')) !!}
                                            </div>
                                            <div class="col-md-8">
                                                {!! Theme::partial('real-estate.filters.price') !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="listsuggest">

                    </div>
                </form>
        </div>

        <section class="ftco-section">
            <div class="container-xl">
            <div class="row justify-content-center">
            <div class="col-md-8 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
            <span class="subheading">Categories</span>
            <h2 class="mb-4">Explore Our Categories &amp; Places</h2>
            </div>
            </div>
            <div class="row justify-content-center">
            <div class="col-md-10">
            <div class="row g-1 mb-1">
            <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <a href="/properties" class="services">
            <div class="icon"><span class="flaticon-architect"></span></div>
            <div class="text">
            <h2>Land</h2>
            </div>
            </a>
            </div>
            <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <a href="/properties" class="services">
            <div class="icon"><span class="flaticon-house"></span></div>
            <div class="text">
            <h2>Residential</h2>
            </div>
            </a>
            </div>
            <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
            <a href="/properties" class="services">
            <div class="icon"><span class="flaticon-apartment"></span></div>
            <div class="text">
            <h2>Commercial</h2>
            </div>
            </a>
            </div>
            <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
            <a href="/properties" class="services">
            <div class="icon"><span class="flaticon-factory"></span></div>
            <div class="text">
            <h2>Industrial</h2>
            </div>
            </a>
            </div>
            </div>
            </div>


            </div>
            </div>
            </div>
            </div>
            </section>
        </header>



        {{-- <div class="home_banner" style="background-image: url({{ theme_option('home_banner') ? RvMedia::getImageUrl(theme_option('home_banner')) : Theme::asset()->url('images/banner.jpg') }})">
            <div class="topsearch">
                @if (theme_option('home_banner_description'))<h1 class="text-center text-white mb-4 banner-text-description">{{ theme_option('home_banner_description') }}</h1>@endif
                <form @if (theme_option('enable_search_projects_on_homepage_search', 'yes') == 'yes' && theme_option('default_home_search_type', 'project') == 'project') action="{{ route('public.projects') }}" @else action="{{ route('public.properties') }}" @endif method="GET" id="frmhomesearch">
                        <div class="typesearch" id="hometypesearch">
                            @if (theme_option('enable_search_projects_on_homepage_search', 'yes') == 'yes')
                                <a href="javascript:void(0)" @if (theme_option('enable_search_projects_on_homepage_search', 'yes') == 'yes' && theme_option('default_home_search_type', 'project') == 'project') class="active" @endif rel="project" data-url="{{ route('public.projects') }}">{{ __('Projects') }}</a>
                            @endif
                            <a href="javascript:void(0)" rel="sale" @if (theme_option('default_home_search_type', 'project') == 'sale') class="active" @endif data-url="{{ route('public.properties') }}">{{ __('Sale') }}</a>
                            <a href="javascript:void(0)" rel="rent" @if (theme_option('default_home_search_type', 'project') == 'rent') class="active" @endif data-url="{{ route('public.properties') }}">{{ __('Rent') }}</a>
                        </div>
                        <div class="input-group input-group-lg">

                            <input type="hidden" name="type" @if (theme_option('enable_search_projects_on_homepage_search', 'yes') == 'yes' && theme_option('default_home_search_type', 'project') == 'project') value="project" @else value="{{ theme_option('default_home_search_type', 'sale') }}" @endif id="txttypesearch">

                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-search"></i></span>
                            </div>
                            <div class="keyword-input">
                                <input type="text" class="form-control" name="k" placeholder="{{ __('Enter keyword...') }}" id="txtkey" autocomplete="off">
                                <div class="spinner-icon">
                                    <i class="fas fa-spin fa-spinner"></i>
                                </div>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-location"></i></span>
                            </div>
                            <div class="location-input" data-url="{{ route('public.ajax.cities') }}">
                                <input type="hidden" name="city_id">
                                <input class="select-city-state form-control" name="location" value="{{ request()->input('location') }}" placeholder="{{ __('City, State') }}" autocomplete="off">
                                <div class="spinner-icon">
                                    <i class="fas fa-spin fa-spinner"></i>
                                </div>
                                <div class="suggestion">

                                </div>
                            </div>
                            <div class="input-group-append search-button-wrapper">
                                <button class="btn btn-orange" type="submit">{{ __('Search') }}</button>
                            </div>

                            <div class="advanced-search d-none d-sm-block">
                                <a href="#" class="advanced-search-toggler">{{ __('Advanced') }} <i class="fas fa-caret-down"></i></a>
                                <div class="advanced-search-content property-advanced-search">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6 pr-md-1">
                                                {!! Theme::partial('real-estate.filters.categories', compact('categories')) !!}
                                            </div>
                                            <div class="col-md-3 col-sm-6 px-md-1">
                                                {!! Theme::partial('real-estate.filters.bedroom') !!}
                                            </div>
                                            <div class="col-md-3 col-sm-6 px-md-1">
                                                {!! Theme::partial('real-estate.filters.bathroom') !!}
                                            </div>
                                            <div class="col-md-3 col-sm-6 pl-md-1">
                                                {!! Theme::partial('real-estate.filters.floor') !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if (theme_option('enable_search_projects_on_homepage_search', 'yes') == 'yes')
                                    <div class="advanced-search-content project-advanced-search">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    {!! Theme::partial('real-estate.filters.categories', compact('categories')) !!}
                                                </div>
                                                <div class="col-md-8">
                                                    {!! Theme::partial('real-estate.filters.price') !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="listsuggest">

                        </div>
                    </form>
            </div>
        </div>
        </div>--}}
    @endif



    <section class="img vid-section" style="background-image:url({{ URL::asset('u/images/replace/men.jpg')}})">
        <div class="overlay"></div>
        <div class="container-xl">
        <div class="row justify-content-center">
        <div class="col-md-6 vid-height d-flex align-items-center justify-content-center text-center">

        <div class="video-wrap" data-aos="fade-up">
        <h3>Modern House Video</h3>
        <video width="200" height="200" controls>
        <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
        <source src="{{ URL::asset('u/video/keysqaure.mp4')}}" type="video/mp4" class="video-icon glightbox d-flex align-items-center justify-content-center">
        <span class="ion-ios-play"></span>

    </video>
        </div>
        </div>
        </div>
        </div>
        </section>

