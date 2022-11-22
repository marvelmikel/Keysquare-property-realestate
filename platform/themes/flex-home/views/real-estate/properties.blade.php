
<link rel="stylesheet" href="css/bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/all.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
@include('partials.notify')
<section class="main-homes pb-3">
<h2 class="text-white single-down-line text-center">Keysquare Properties</h2>
<div class="full-row" style="padding: 30px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <span class="text-center mt-4 d-block mb-5 text-white">With the same directors and board members, Leisure Lifestyle Homes is a sister company to Leisure Court,
                    and both are household names in the real estate industry. The two companies partner with Super Structures Limited to deliver excellent housing solutions,
                    matching affordability with luxury. Welcome to the Lagos branch of the best real estate developer in the country.
                    </span>
                    <h2 class="text-secondary double-down-line text-center">Featured Projects</h2>
                </div>
                @foreach($properties as $property)
                <div class="col-lg-6">
                    <div class="featured-thumb hover-zoomer mb-4">
                        <div class="overlay-black overflow-hidden position-relative">
                        {!! BaseHelper::clean($property->content)!!} 
                            @if($property->status == "selling")
                            <div class="featured bg-success text-white">New</div>
                            @else
                            <div class="featured bg-danger text-white">Sold</div>
                            @endif
                            <div class="sale bg-secondary text-white">Selling</div>
                            <div class="appartment">
                                <h5 class="text-white hover-text-primary mb-1"><a href="#">{{$property->name}}</a></h5>
                                <span class="location text-white font-14"><i class="fas fa-map-marker-alt text-danger"></i>{{$property->location}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
        <div class="full-row py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-info">
                            <div class="d-lg-flex">
                                <div class="circle"><img src="images/icon.png" alt="" /></div>
                                <div class="contact-details">
                                    <ul>
                                        <li class="d-flex mb-4">
                                            <i class="fas fa-phone-alt text-primary me-2 font-13 mt-2"></i>
                                            <div class="contact-address">
                                                <h4 class="text-white">Phone Number</h4>
                                                <br />
                                                <h5 class="text-white">Abuja</h5>
                                                <span class="text-white">+2349048581703</span>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4">
                                            <i class="fas fa-envelope text-primary me-2 font-13 mt-1"></i>
                                            <div class="contact-address">
                                                <h5 class="text-white">Email Address</h5>
                                                <span><a href="" class="text-white">keysquareservices@gmail.com</a></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-info">
                            <ul>
                                <li class="d-flex mb-4">
                                    <i class="fas fa-map-marker-alt text-primary me-2 font-13 mt-1"></i>
                                    <div class="contact-address">
                                        <h4 class="text-white">Office Address</h4>
                                        <br />
                                        <h5 class="text-white">Abuja</h5>
                                        <span class="text-white" >No 7 EKET CLOSE GARKI AREA 8, ABUJA, NIGERIA.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="contact-info">
                            <h3 class="mb-5 text-white">Social</h3>
                            <div class="text-secondary hover-text-primary">
                                <a class="me-4 text-white fw-bold" href="#" target="_"><i class="fab fa-facebook-f"></i></a>
                                <a class="me-4 text-white fw-bold" href="#" target="_"><i class="fab fa-twitter"></i></a>
                                <a class="me-4 text-white fw-bold" href="#" target="_"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mapouter">
            <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=No 7 EKET CLOSE GARKI AREA 8, ABUJA, NIGERIA.&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                <a href="https://formatjson.org/">format json</a>
            </div>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    width: 100%;
                    height: 400px;
                }
                
                .gmap_canvas {
                    overflow: hidden;
                    background: none!important;
                    width: 100%;
                    height: 400px;
                }
                
                .gmap_iframe {
                    height: 400px!important;
                }
            </style>
              <script src="css/bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
        </div>
</section>



