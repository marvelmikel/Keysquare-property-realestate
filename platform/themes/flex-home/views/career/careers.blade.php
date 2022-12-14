<section class="ftco-section bg-light">
    <div class="container">
    <div class="row no-gutters align-items-center justify-content-center">
    <div class="col-md-12">
    <div class="wrapper">
    <div class="row g-0">
    <div class="col-lg-6">
    <div class="contact-wrap w-100 p-md-5 p-4">
    <h3>career</h3>
    @include('partials.notify')
    @if(Session::has('success'))
    <div class="alert alert-success">
    {{ Session::get('success') }}
   </div>
   @endif
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
          <option value="Business Executive">Business Executive</option>
          <option value="Driver">Driver</option>
          <option value="Cleaner">Cleaner</option>
          <option value="Accountant">Accountant</option>
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
