@extends('frontend/layout/main')
@section('content')
@include('frontend/layout/banner')
        <!-- End Banner Section -->
        <!-- About Section -->
        {{-- @include('frontend/layout/banner') --}}
        <x-banner />
       <x-about />

        <!-- End About Section -->
        <!-- Services Section -->
        <section class="services-section">
            <div class="auto-container">

                <!-- Sec Title -->
                <div class="sec-title centered">
                    <div class="title">OUR SERVICES</div>
                    <h2>Our Premium <span>Health Solutions</span></h2>
                </div>

                <div class="row clearfix">

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="color-layer">
                                <span class="side-icon flaticon-line-graph"></span>
                            </div>
                            <div class="icon-box">
                                <span class="icon flaticon-user"></span>
                            </div>
                            <h4><a href="#">Personal Health Care</a></h4>
                            <div class="text">
                                We support personalized supplement recommendations based on immunity, health and weight history,
                                and overall wellness for long-term growth.
                            </div>
                            <a class="arrow" href="#">
                                <span class="txt">More</span>
                                <span class="arrow-icon flaticon-right-arrow-1"></span>
                            </a>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="color-layer">
                                <span class="side-icon flaticon-line-graph"></span>
                            </div>
                            <div class="icon-box">
                                <span class="icon flaticon-bar-chart"></span>
                            </div>
                            <h4><a href="#">Custom Nutritional Plans</a></h4>
                            <div class="text">
                                Our well trained experts help you to customize daily nutrition plans including herbal ayurveda,
                                energy enancer and immunity formulas customized to your lifestyle.
                            </div>
                            <a class="arrow" href="#">
                                <span class="txt">More</span>
                                <span class="arrow-icon flaticon-right-arrow-1"></span>
                            </a>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="color-layer">
                                <span class="side-icon flaticon-line-graph"></span>
                            </div>
                            <div class="icon-box">
                                <span class="icon flaticon-user"></span>
                            </div>
                            <h4><a href="#">Nurturing mental freedom</a></h4>
                            <div class="text">
We support bodily and emotionalthrough comprehensive wellness and sustainable growth happiness,delight, and well-being for individuals globally.
                            </div>
                            <a class="arrow" href="#">
                                <span class="txt">More</span>
                                <span class="arrow-icon flaticon-right-arrow-1"></span>
                            </a>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="color-layer">
                                <span class="side-icon flaticon-line-graph"></span>
                            </div>
                            <div class="icon-box">
                                <span class="icon flaticon-bar-chart"></span>
                            </div>
                            <h4><a href="#">Nationwide Expansion</a></h4>
                            <div class="text">
                               Our plan is to establish one NatureCare Wellness franchise at every district level and want to support and promote the initiatives and vision of both central and state Governments.
                            </div>
                            <a class="arrow" href="#">
                                <span class="txt">More</span>
                                <span class="arrow-icon flaticon-right-arrow-1"></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- End Services Section -->
        <!-- Business Section -->
        <x-why />




        <!-- End Business Section -->

        <!-- Testimonial Section -->
      <x-review />


        <!-- End Testimonial Section -->

        <!-- News Section -->


        <!-- CTA Section -->
        <section class="cta-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="pattern-layer" style="background-image: url('{{ asset("frontend/images/pattern-4.png")}}')"></div>
                    <div class="row clearfix">

                        <!-- Title Column -->
                        <div class="title-column col-lg-9 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h2>Boost Your Health with Pure & Organic <span>Nutrition Supplements</span><br> Start Your Wellness Journey Today</h2>
                                <a href="contact.html" class="started">Connect With Us</a>
                            </div>
                        </div>

                        <!-- Button Column -->
                        <div class="button-column col-lg-3 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <a href="#" class="theme-btn btn-style-four">
                                    <span class="txt">Explore Our Products</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
@endsection
