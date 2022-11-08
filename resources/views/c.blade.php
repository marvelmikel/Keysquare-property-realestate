
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
    {!! Theme::header() !!}
    @include('partials.notify')
</head>

<section class="ftco-section bg-light">
    <div class="container">
    <div class="row no-gutters align-items-center justify-content-center">
    <div class="col-md-12">
    <div class="wrapper">
    <div class="row g-0">
    <div class="col-lg-6">
    <div class="contact-wrap w-100 p-md-5 p-4">
        <a href="/"><img src="{{URL::asset('u/images/Keysquare-logo.png')}}"></a>
        <hr>
    <h3>career</h3>
    
    <p class="mb-4">Please Fill the form below</p>
    
    <form method="POST"  action ='/careers' id="contactForm" name="contactForm" class="contactForm" enctype="multipart/form-data">
        @csrf
    <div class="row">
    <div class="col-md-12">
    <div class="form-group">
    <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <input type="number" class="form-control" name="phone_number" id="phone_number" placeholder="Phone number">
    </div>
    </div>
    <div class="col-md-12">
     <div class="form-group">
        <label for="exampleFormControlSelect1" class="mt-3">Job Position : </label>
        <select class="option-list mt-0" id="exampleFormControlSelect1" name="job_position">
          <option></option>
          <option value="business">Business Executive</option>
          <option value="driver">Driver</option>
          <option value="cleaner">Cleaner</option>
          <option value="accountant">Accountant</option>
        </select>
      </div>
    <div class="col-md-12">
    <div class="form-group">
    <input type="text" class="form-control" name="qualification" id="qualification" placeholder="Qualification">
    </div>
    <div class="form-group mt-3">
    <label class="d-flex mb-1">Upload Your C V : </label>
    <input type="file" class="" name="file" id="file">
    </div> 
    </div>
    <div class="col-md-12 mt-3">
    <div class="form-group">
    <input type="submit" value="Submit" class="btn btn-primary">
    <div class="submitting"></div>
    </div>
    </div>
    </div>
    </form>
    <div class="w-100 social-media mt-5">
    <h3>Follow us here</h3>
    <p>
    <a href="#">Facebook</a>
    <a href="#">Twitter</a>
    <a href="#">Instagram</a>
    <a href="#">Dribbble</a>
    </p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
</html>
