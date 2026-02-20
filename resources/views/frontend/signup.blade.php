<html lang="en">
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('frontend/css/login.css')}}">
  </head>

<body>
<div id="form">
  <div class="container">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
      <div id="userform">
        <ul class="nav nav-tabs nav-justified" role="tablist">
          <li class="active"><a href="#signup"  role="tab" data-toggle="tab">Sign up</a></li>
          <li><a href="#login"  role="tab" data-toggle="tab">Log in</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade active in" id="signup">
            <h2 class="text-uppercase text-center"> Sign Up for Free</h2>
            <form id="signup" action="/signup" method="post">
                @csrf
              <div class="row">
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label>First Name<span class="req">*</span> </label>
                    <input type="text" class="form-control" name="first_name" id="first_name" required data-validation-required-message="Please enter your name." autocomplete="off">
                    @error('first_name')
                    <p class="help-block text-danger"></p>
                    @enderror
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label> Last Name<span class="req">*</span> </label>
                    <input type="text" class="form-control" name="last_name" id="last_name" required data-validation-required-message="Please enter your name." autocomplete="off">
                    @error('last_name')
                    <p class="help-block text-danger"></p>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label> Your Email<span class="req">*</span> </label>
                <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off">
                @error('email')
                <p class="help-block text-danger"></p>
                @enderror
              </div>
              <div class="form-group">
                <label> Your Phone<span class="req">*</span> </label>
                <input type="tel" class="form-control" name="phone" id="phone" required data-validation-required-message="Please enter your phone number." autocomplete="off">
               @error('phone')
                <p class="help-block text-danger"></p>
                @enderror
              </div>
                <div class="form-group">
                <label> Enter Sponsor<span class="req">*</span> </label>
                <input type="text" class="form-control" name="sponsor_id" id="sponsor_id" required data-validation-required-message="Please enter your sponsor" autocomplete="off">
               @error('phone')
                <p class="help-block text-danger"></p>
                @enderror
              </div>
              <div class="form-group">
                <label> Password<span class="req">*</span> </label>
                <input type="password" class="form-control" name="password" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
                 @error('password')
                <p class="help-block text-danger"></p>
                @enderror
              </div>
              <div class="mrgn-30-top">
                <button type="submit" class="btn btn-larger btn-block"/>
                Sign up
                </button>
              </div>

            </form>
          </div>
          <div class="tab-pane fade in" id="login">
            <h2 class="text-uppercase text-center"> Log in</h2>
            <form id="login" method="post" action="/login">
                @csrf
              <div class="form-group">
                <label> Your Email<span class="req">*</span> </label>
                <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off">
                 @error('email')
                <p class="help-block text-danger"></p>
                @enderror
              </div>
              <div class="form-group">
                <label> Password<span class="req">*</span> </label>
                <input type="password" class="form-control" name="password" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
                 @error('password')
                <p class="help-block text-danger"></p>
                @enderror
              </div>
              <div class="mrgn-30-top">
                <button type="submit" class="btn btn-larger btn-block"/>
                Log in
                </button>
              </div>
            </form>
          </div>
  @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->
</div>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
