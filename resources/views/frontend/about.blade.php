@extends('frontend/layout/main')
@section('content')
<banner />
 <section class="page-title" style="background-image: url({{asset('frontend/images/background/4.png')}});background-size: cover; overflow:hidden;  background-repeat: no-repeat;">
            <div class="auto-container">
                <h1>About Us</h1>
                <ul class="page-breadcrumb">
                    <li><a href="/">home</a></li>

                    <li>About us</li>
                </ul>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- About Section -->
        <section class="about-section">
            <div class="pattern-layer" style="background-image: url({{asset('frontend/images/background/pattern-1.png')}})"></div>
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="image-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="images/about/2.png" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title">About Dr. Baba Network Marketing Private Limited</div>
                            <h2> Premium Nutrition & <br> Organic Wellness <span>For Everyone</span></h2>

                            <p>
                                At Dr. Baba Network Marketing Private Limited, we bring natural wellness closer to you through our premium range of
                                organic products and nutritional supplements. Our mission is to enhance everyday health through
                                safe, scientifically formulated, and high-quality ingredients.
                            </p>

                            <div class="text">
                                We believe in purity and transparency—that is why our products use naturally sourced
                                ingredients paired with modern nutritional science. From immunity boosters and herbal extracts
                                to fitness supplements and daily nutrition, our goal is to support healthier lifestyles
                                naturally.
                            </div>

                            <p>
                                Whether you aim for better digestion, stronger immunity, improved stamina, or overall wellness,
                                Dr. Baba Network Marketing Private Limited delivers trusted nutrition crafted for results. Choose quality, choose
                                purity, and get supplements that your body truly deserves.
                            </p>

                            <!-- Fact Counter -->
                            <div class="fact-counter">
                                <div class="row clearfix">

                                    <!-- Column -->
                                    <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <div class="content">
                                                <div class="icon flaticon-soccer-cup"></div>
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="3500" data-stop="60">0</span>+
                                                </div>
                                                <div class="counter-title">Certified Products</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Column-->
                                    <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                            <div class="content">
                                                <div class="icon flaticon-flag"></div>
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="2500" data-stop="10">0</span>+
                                                </div>
                                                <div class="counter-title">Years of Research</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Column-->
                                    <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                            <div class="content">
                                                <div class="icon flaticon-book"></div>
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="3000" data-stop="5000">0</span>+
                                                </div>
                                                <div class="counter-title">Happy Customers</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <a href="about-us.html" class="theme-btn btn-style-two">
                                <span class="txt">Learn More About Us</span>
                            </a>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- End About Section -->


        <!-- Story Section -->
        <section class="story-section">
            <div class="pattern-layer" style="background-image: url({{asset('frontend/images/background/pattern-7.png')}})"></div>
            <div class="pattern-layer-two" style="background-image: url({{asset('frontend/images/background/pattern-8.png')}})"></div>
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title">OUR STORY</div>
                            <h2>A Journey of Wellness, <span>Purity & Healthy Living</span></h2>
                            <p>
                                Dr. Baba Network Marketing Private Limited began its journey with a vision to bring pure, organic, and scientifically tested nutrition
                                into every home. What started as a mission to improve daily wellness has turned into a trusted brand,
                                delivering high-quality supplements that support immunity, strength, weight management, and overall vitality.
                                <br><br>
                                With a commitment to nature-based ingredients and modern formulation standards, Dr. Baba Network Marketing Private Limited focuses on creating
                                products that are safe, effective, and suitable for daily nutrition. Today, thousands of families rely on our
                                premium wellness products to lead a healthier lifestyle.
                            </p>

                            <div class="row clearfix">
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <ul class="list-style-three">
                                        <li>Scientifically Researched Formulas</li>
                                        <li>Premium Organic Ingredients</li>
                                        <li>Trusted by Thousands of Customers</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="btn-box">
                                <a href="contact-us.html" class="theme-btn btn-style-four"><span class="txt">Discover More</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Counter Column -->
                    <div class="counter-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="fact-counter-two">
                                <div class="row clearfix">

                                    <div class="column counter-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <div class="content">
                                                <div class="icon flaticon-like-1"></div>
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="3500" data-stop="2450">0</span>+
                                                </div>
                                                <div class="counter-title">Happy Customers</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="column counter-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                            <div class="content">
                                                <div class="icon flaticon-soccer-cup"></div>
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="2500" data-stop="120">0</span>+
                                                </div>
                                                <div class="counter-title">Quality Certifications</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="column counter-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                            <div class="content">
                                                <div class="icon flaticon-team"></div>
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="3000" data-stop="50">0</span>+
                                                </div>
                                                <div class="counter-title">Certified Product Lines</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="column counter-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                            <div class="content">
                                                <div class="icon flaticon-chart"></div>
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="3000" data-stop="1490">0</span>+
                                                </div>
                                                <div class="counter-title">Products Delivered</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

@endsection
