{!! Theme::partial('header') !!}
@include('partials.notify')
<section class="ftco-section ftco-about-section">
    <div class="container-xl">
    <div class="row g-xl-5">
    <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
    <div class="img w-100" style="background-image:url({{ URL::asset('u/images/replace/1652098460948.jpg')}})"></div>
    </div>
    <div class="col-md-8 heading-section" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
    <span class="subheading">About Us</span>
    <h2 class="mb-4" style="color: black">Keysquare Homes & Propertice LTD.</h2>
    <p>The company: A wholly indigenous private limited liability company with RC 1721549 excellent customized services in the real estate sector of the economy...</p>
    <a href="/about-us" class="btn btn-primary rounded mb-4">Read More &#8594; </a>
    <div class="img img-2" style="background-image:url({{ URL::asset('u/images/replace/teaching.jpg')}})" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
    </div>
    </div>
    </div>
    </div>
    </section>
    <section class="ftco-intro ftco-no-pt ftco-no-pb img" style="background-image:url({{ URL::asset('u/images/xbg_4.jpg.pagespeed.ic.wYQ9Oeghhn.jpg')}})">
        <div class="overlay"></div>
        <div class="container-xl py-5">
        <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8">
        <div class="row">
        <div class="col-md-8 d-flex align-items-center">
        <div>
        <h1 class="mb-0">Find Best Place For Leaving</h1>
        <p>Find Best Place For Leaving</p>
        </div>
        </div>
        <div class="col-md-4 d-flex align-items-center">
        <p class="mb-0"><a href="/contact" class="btn btn-black py-3 px-4">Get in touch</a></p>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section>
<div id="app">
    <div id="ismain-homes">
        {!! Theme::content() !!}
    </div>
</div>

<section class="ftco-gallery">
    <div class="container-xl-fluid">
    <div class="row g-0">
    <div class="col-md-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
    <a href="{{ URL::asset('u/images/gallery-1.jpg')}}" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image:url({{ URL::asset('u/images/replace/DSC_0269.jpg')}})">
    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
    </a>
    </div>
    <div class="col-md-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
    <a href="{{ URL::asset('u/images/gallery-1.jpg')}}" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image:url({{ URL::asset('u/images/replace/DSC_0275.jpg')}})">
    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
    </a>
    </div>
    <div class="col-md-2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
    <a href="{{ URL::asset('u/images/gallery-3.jpg')}}" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image:url({{ URL::asset('u/images/replace/DSC_0287.jpg')}})">
    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
    </a>
    </div>
    <div class="col-md-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
    <a href="{{ URL::asset('u/images/gallery-4.jpg')}}" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image:url({{ URL::asset('u/images/replace/DSC_0290.jpg')}})">
    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
    </a>
    </div>
    <div class="col-md-2" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
    <a href="{{ URL::asset('u/images/gallery-5.jpg')}}" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image:url({{ URL::asset('u/images/replace/md4.jpg')}})">
     <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
    </a>
    </div>
    <div class="col-md-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
    <a href="{{ URL::asset('u/images/gallery-6.jpg')}}" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image:url({{ URL::asset('u/images/replace/keysquare.jpg')}})">
    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
    </a>
    </div>
    </div>
    </div>
    </section>

    <div class="survay_popup">
		<div class="box">
			<div class="form">
				<form method="post" action="/inspection">
                    @csrf
					<div class="close">
						<span>&times;</span>
					</div>
					<div class="form-body">
						<h3 class="heading" style="font-weight:300;">BOOK AN INSPECTION</h3>
						<p class="paragraph">Fill the form below and one of our Executives will get in touch with you</p>
						<div class="txt-field">
							<div><input class="txt-input" type="text" name="name" placeholder="Full Name" required></div>
						</div>
						<div class="txt-field">
							<input class="txt-input" type="email" name="email" placeholder="Email" required>
						</div>
						<div class="txt-field">
							<input class="txt-input" type="number" name="phone_number" placeholder="Phone number" required>
						</div>
						<div class="txt-field">
							<label>Choose Preffered Date</label>
							<input class="txt-input" type="date" name="preffered_date" placeholder="Click to choose date" required>
						</div>
						<div class="txt-field">
							<label>Choose Preffered Time</label>
							<input class="txt-input" type="time" name="preffered_time" placeholder="Click to choose time" required>
						</div>
						<div class="txt-field">
							<select class="txt-input" id="preffered_city" name="preffered_city" required>
							<option> choose preferred estate Location</option>
							<option value="idu">Idu</option>
							<option value="apo">Apo</option>
							<option value="lugbe">Lugbe</option>
							<option value="Karasana">Karasana</option>
                            <option value="maintama">Maitama</option>
                            <option value="Kubwa">Kubwa</option>
                            <option value="Guzape">Guzape</option>
                            <option value="Life Camp">Life Camp</option>
                            <option value="Jahi">Jahi</option>
							</select>
						</div>
					</div>
					<div class="button">
						<button type="submit" class="btn" style="background: #06112A; color:aliceblue">SUBMIT</button>
					</div>
				</form>
			</div>
		</div>
	</div>


{!! Theme::partial('footer') !!}

