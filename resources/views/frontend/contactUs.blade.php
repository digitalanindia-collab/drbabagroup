@extends('frontend/layout/main')
@section('content')
<banner />
 <section class="page-title" style="background-image: url({{asset('frontend/images/2.png')}});background-size: cover; overflow:hidden;  background-repeat: no-repeat;">
    	<div class="auto-container">
			<h1>Contact Us</h1>
			<ul class="page-breadcrumb">
				<li><a href="https://ghlc.in">home</a></li>
				<li>Contact Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Contact Page Section -->
    <div class="contact-page-section" style="background-image: url(images/pattern-9.png)">
    	<div class="auto-container">
        	<div class="row clearfix">

				<!-- Contact Info Block -->
				<div class="contact-info-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="icon-box">
							<span class="icon flaticon-phone-call"></span>
						</div>
						<h6>Talk to Us</h6>
						<ul>
							<li><span>Phone : </span><a href="#">9643346057</a></li>
						<!--	<li><span>Telephone : </span><a href="tel%2b1-800-100-900.html">+1 800 100 900</a></li> -->
						</ul>
					</div>
				</div>

				<!-- Contact Info Block -->
				<div class="contact-info-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="icon-box">
							<span class="icon flaticon-big-envelope"></span>
						</div>
						<h6>Contact Us</h6>
						<ul>
							<li><span>Email : </span><a href="#">drbabagroup@gmail.com</a></li>

						</ul>
					</div>
				</div>

				<!-- Contact Info Block -->
				<div class="contact-info-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="icon-box">
							<span class="icon flaticon-map"></span>
						</div>
						<h6>Location</h6>
						<ul>
							<li>D22,Budh Vihar,Tajpur Pahari, Badarpur,Delhi</li>

						</ul>
					</div>
				</div>

				<!-- Contact Info Block -->
				<div class="contact-info-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="color-layer"></div>
						<div class="icon-box">
							<span class="icon flaticon-wall-clock"></span>
						</div>
						<h6>Opening Hours</h6>
						<ul>
							<li>Mon - Sat 10:00am To 06:00pm</li>

						</ul>
					</div>
				</div>

			</div>

			<!-- Lower Section -->
			<div class="lower-section">
				<div class="row clearfix">

					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title">
								<div class="title">Get In Touch</div>
								<h2>Get In <span>Touch</span></h2>
							</div>
						</div>
						<div class="text">
                        We're Happy to Discuss about Your Queries and Answer any Question.
                         </div>
						<!-- Social Box -->
						<ul class="social-box">
							<li class="facebook"><a target="_blank" href="https://www.facebook.com" class="fa fa-facebook-f"></a></li>
							<li class="linkedin"><a target="_blank" href="https://www.Google.com/" class="fa fa-linkedin"></a></li>
							<li class="twitter"><a target="_blank" href="https://twitter.com/" class="fa fa-twitter"></a></li>
							<li class="instagram"><a target="_blank" href="https://www.insatgram.com/" class="fa fa-instagram"></a></li>
						</ul>
					</div>

					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">

							<!-- Contact Form -->
							<div class="contact-page-form">
								<!-- Contact Form -->
                                                                								<form method="post" name="frm">
									<div class="row clearfix">

										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<span class="icon flaticon-user-2"></span>
											<input type="text" name="contact_person_name" placeholder="Name" required="">
										</div>

										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<span class="icon flaticon-phone-call"></span>
											<input type="text" name="contact_person_phone" placeholder="Phone" oninput="maxLengthCheck(this)" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" min="10" required="">
										</div>

										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<span class="icon flaticon-big-envelope"></span>
											<input type="email" name=" contact_person_email" placeholder="Email(Optional)">
										</div>

										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<span class="icon flaticon-user-2"></span>
											<input type="text" name="subject" placeholder="Subject" required="">
										</div>

										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<span class="icon flaticon-user-2"></span>
											<textarea name="message" placeholder="Message" required=""></textarea>
										</div>

										<div class="col-12">
										<div class="g-recaptcha" data-sitekey="6LerVjUqAAAAAFcUixHI0sDzzWCu6Dw-Nml0bApx"></div>
										</div>

										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<button class="theme-btn submit-btn" type="submit" name="send">Submit Now <span class="arrow flaticon-right-arrow-1"></span></button>
										</div>

									</div>
								</form>
								<!-- Contact Form -->
							</div>

						</div>
					</div>

				</div>
			</div>

		</div>
	</div>

@endsection
