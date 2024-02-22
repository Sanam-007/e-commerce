@extends('admin.layouts.auth')

@section('content')

<main>
    <div class="container">
    

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
          @include('navbar')
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="{{ asset('admin/assets/img/logo.png') }}" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                @if(Session::has('err_msg'))
                <div class="alert alert-danger">
                    <strong>{{ Session::get('err_msg') }}</strong> 
                </div>
                @endif
                

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Register YOur Account</h5>
                    
                  </div>

                  <form method="post" action="{{ url('/signupstore') }}" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-12">
                      <label for="yourPassword" class="form-label"> Name</label>
                      <input type="text" name="name" class="form-control"  required>
                      <div class="invalid-feedback">Please enter your First Name!</div>
                    </div>

                    

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="pass1" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Confirm Password</label>
                      <input type="password" name="pass2" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Sign Up</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have account? <a href="{{URL::to('login')}}">Log in account</a></p>
                    </div>
                    
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
              </div>

            </div>
          </div>
        </div>

      </section>
      

    </div>
  </main><!-- End #main -->
@endsection