<!--FOOTER-->
<footer class="ftco-footer">
    <div class="container-xl">
    <div class="row mb-5 pb-5 justify-content-between">
    <div class="col-md-6 col-lg">
    <div class="ftco-footer-widget mb-4">
        @if (theme_option('logo'))
    <h2 class="ftco-heading-2 logo d-flex">
    <a class="navbar-brand align-items-center" href="{{ route('public.index') }}">
    <span class="logo"><img src="{{ RvMedia::getImageUrl(theme_option('logo'))  }}"></span>
    </a>
    </h2>
    @endif

    <!-- <ul class="ftco-footer-social list-unstyled mt-2">
    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
    <li><a href="#"><span class="fa fa-instagram"></span></a></li>
    </ul> -->
    </div>
    </div>
    <div class="col-md-6 col-lg-2">
    <div class="ftco-footer-widget mb-4">
    <h2 class="ftco-heading-2">ABOUT</h2>
    <ul class="list-unstyled">
    <li><a href="/about-us"><span class="fa fa-chevron-right mr-2"></span>About us</a></li>
    <li><a href="/contact"><span class="fa fa-chevron-right mr-2"></span>Contact us</a></li>
    <li><a href="/careers"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
    <li><a href="/terms-conditions"><span class="fa fa-chevron-right mr-2"></span>Terms &amp;Conditions</a></li>
    </ul>
    </div>
    </div>
    <div class="col-md-6 col-lg-2">
    <div class="ftco-footer-widget mb-4">
    <h2 class="ftco-heading-2">MORE INFORMATION</h2>
    <ul class="list-unstyled">
    <li><a href="/projects"><span class="fa fa-chevron-right mr-2"></span>All projects</a></li>
    <li><a href="/properties"><span class="fa fa-chevron-right mr-2"></span>All properties</a></li>
    <li><a href="/properties?type=sale"><span class="fa fa-chevron-right mr-2"></span>Houses for sale</a></li>
    <li><a href="/properties?type=rent"><span class="fa fa-chevron-right mr-2"></span>Houses for rent</a></li>
    </ul>
    </div>
    </div>
    <div class="col-md-6 col-lg-2">
    <div class="ftco-footer-widget mb-4">
    <h2 class="ftco-heading-2">NEWS</h2>
    <ul class="list-unstyled">
    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Latest news</a></li>

    </ul>
    </div>
    </div>
    <div class="col-md-6 col-lg">
    <div class="ftco-footer-widget mb-4">
    <h2 class="ftco-heading-2">Have a Questions?</h2>
    <div class="block-23 mb-3">
    <ul>
    <li>
        @if (theme_option('address'))
        <i style="color: green" class="fas fa-map-marker-alt"></i> &nbsp;</span><span class="text">&nbsp;{{ theme_option('address') }}</span>
        @endif
    </li>
    <li>

        @if (theme_option('hotline'))
        <a href="tel:{{ theme_option('hotline') }}"><span class="icon fa fa-phone"></span><span class="text">{{ __('Hotline') }}: &nbsp;</span>{{ theme_option('hotline') }}</a>
        @endif
    </li>
    <li>
        @if (theme_option('email'))
        <p style="color: white"><i class="fas fa-envelope" style="color: green"></i> {{ __('Email') }}: &nbsp;<a href="mailto:{{ theme_option('email') }}">{{ theme_option('email') }}</a></p>
    @endif

    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="container-fluid px-0 py-5 bg-darken">
    <div class="container-xl">
    <div class="row">
    <div class="col-md-12 text-center">
    <p class="mb-0" style="color: rgba(255,255,255,.5); font-size: 13px;">  {!! BaseHelper::clean(theme_option('copyright')) !!}</p>
    </div>
    </div>
    </div>
    </div>
    </footer>

<!--FOOTER-->

<script src="{{ URL::asset('u/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ URL::asset('u/js/tiny-slider.js')}}"></script>
<script src="{{ URL::asset('u/js/glightbox.min.js%2baos.js%2bgoogle-map.js%2bmain.js.pagespeed.jc.Ed1LceD4Zh.js')}}"></script><script>eval(mod_pagespeed_rdWE5e7ZHS);</script>
<script>eval(mod_pagespeed_TbXghfTMVh);</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script>eval(mod_pagespeed_Jq3FPUXGcI);</script>
<script>eval(mod_pagespeed_F7TkqtYUhP);</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
										window.dataLayer = window.dataLayer || [];
										function gtag(){dataLayer.push(arguments);}
										gtag('js', new Date());

										gtag('config', 'UA-23581568-13');
									</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"753d32a5ebf6b7f1","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.8.1","si":100}' crossorigin="anonymous"></script>
<script src="{{ URL::asset('u/js/script.js')}}"></script>

<script>
    window.trans = {
        "Price": "{{ __('Price') }}",
        "Number of rooms": "{{ __('Number of rooms') }}",
        "Number of rest rooms": "{{ __('Number of rest rooms') }}",
        "Square": "{{ __('Square') }}",
        "No property found": "{{ __('No property found') }}",
        "million": "{{ __('million') }}",
        "billion": "{{ __('billion') }}",
        "in": "{{ __('in') }}",
        "Added to wishlist successfully!": "{{ __('Added to wishlist successfully!') }}",
        "Removed from wishlist successfully!": "{{ __('Removed from wishlist successfully!') }}",
        "I care about this property!!!": "{{ __('I care about this property!!!') }}",
    };
    window.themeUrl = '{{ Theme::asset()->url('') }}';
    window.siteUrl = '{{ url('') }}';
    window.currentLanguage = '{{ App::getLocale() }}';
</script>

<!--END FOOTER-->

<div class="action_footer">
    <a href="#" class="cd-top" @if (!Theme::get('hotlineNumber') && !theme_option('hotline')) style="top: -40px;" @endif><i class="fas fa-arrow-up"></i></a>
    @if (Theme::get('hotlineNumber') || theme_option('hotline'))
        <a href="tel:{{ Theme::get('hotlineNumber') ?: theme_option('hotline') }}" style="color: white;font-size: 17px;"><i class="fas fa-phone"></i> <span>  &nbsp;{{ Theme::get('hotlineNumber') ?: theme_option('hotline') }}</span></a>
    @endif
</div>

    {!! Theme::footer() !!}
</body>
</html>
