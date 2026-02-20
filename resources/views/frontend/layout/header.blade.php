

<body class="hidden-bar-wrapper">

    <div class="page-wrapper">

        <!-- Preloader
    <div class="preloader"></div>-->

        <!-- Main Header-->
            <header class="main-header header-style-one">

    	<!-- Header Top -->
    	<div class="header-top">
    		<div class="auto-container">
    			<div class="clearfix">
    				<!-- Top Left -->
    				<div class="top-left">
    					<!-- Info List -->
    					<ul class="info-list">
    						<li><a href="#" style="color:white;"><span class="icon flaticon-map" style="color:white;"></span>D22,Budh Vihar, Badarpur ,Delhi</a></li>
    						<li><a href="#" style="color:white;"><span class="icon flaticon-phone-call" style="color:white;"></span>7309795563</a></li>
    						<li><a href="#" style="color:white;"><span class="icon flaticon-email" style="color:white;"></span>Dr.BabaNetworkMarketingPrivateLimited@gmail.com</a></li>
    					</ul>
    				</div>

    				<!-- Top Right -->
    				<div class="top-right pull-right">
    					<span class="border-line"></span>
    					<!--Language-->

    					<div class="language dropdown" style="color:White">
    						@if(Auth::check())
{{ Auth()->user()->email}}
                            @else
                           <a class="btn btn-default dropdown-toggle"  href="/signup"> Register Now �</a>
                            @endif
    					</div>

    				</div>

    			</div>
    		</div>
    	</div>

    	<!--Header-Upper-->
    	<div class="header-upper">
    		<div class="auto-container clearfix">

    			<div class="pull-left logo-box p-2" style="background-color:white ">
    				<div class="logo"><a href="index.html"><img src="{{asset('frontend/images/logo.png')}}" style="width:110px;" alt="Dr. Baba Network Marketing Private Limited" title=""></a></div>
    			</div>

    			<div class="nav-outer clearfix">
    				<!--Mobile Navigation Toggler-->
    				<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
    				<!-- Main Menu -->
    				<nav class="main-menu navbar-expand-md">
    					<div class="navbar-header">
    						<!-- Toggle Button -->
    						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    							<span class="icon-bar"></span>
    							<span class="icon-bar"></span>
    							<span class="icon-bar"></span>
    						</button>
    					</div>

    					<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
    						<ul class="navigation clearfix">
    							<!--		<li class="current dropdown"><a href="#">Home</a>

								</li> -->
    							<li><a href="/">Home</a></li>
    							<li><a href="/about-us">About us</a></li>
    							<li><a href="/legal">Legal</a></li>
    							<!-- <li><a href="career.html">Career</a></li> -->
    							<li><a href="/plan">Plan</a></li>
    							<!-- <li><a href="product.html">Products</a></li> -->
                             @if(!Auth::check())
    <li><a href="/signup">Register</a></li>
    <li><a href="/signup#login">Login</a></li>
    @else
      <li><a href="/dashboard">Dashboard</a></li>
@endif

    							<li><a href="/contact-us">Contact Us</a></li>
                                                         @if(Auth::check())
    <li><a href="/logout">Logout</a></li>
@endif
    						</ul>
    					</div>
    				</nav>

    				<!-- Main Menu End-->
    				<div class="outer-box clearfix">

    					<!-- Cart Box

						</div>-->

    					<!-- Search Btn
						<div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>-->

    				</div>
    			</div>

    		</div>
    	</div>
    	<!--End Header Upper-->

    	<!-- Sticky Header  -->
    	<div class="sticky-header">
    		<div class="auto-container clearfix">
    			<!--Logo-->
    			<div class="logo pull-left">
    				<a href="index.html" title=""><img src="{{asset('frontend/images/logo.png')}}" style="max-width:110px" alt="Dr. Baba Network Marketing Private Limited" title=""></a>
    			</div>
    			<!--Right Col-->
    			<div class="pull-right">
    				<!-- Main Menu -->
    				<nav class="main-menu">
    					<!--Keep This Empty / Menu will come through Javascript-->
    				</nav><!-- Main Menu End-->

    				<!-- Main Menu End-->
    				<div class="outer-box clearfix">

    					<!-- Cart Box
						<div class="cart-box">

						</div>-->

    					<!-- Search Btn
						<div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>-->

    				</div>

    			</div>
    		</div>
    	</div><!-- End Sticky Menu -->

    	<!-- Mobile Menu  -->
    	<div class="mobile-menu">
    		<div class="menu-backdrop"></div>
    		<div class="close-btn"><span class="icon flaticon-multiply"></span></div>

    		<nav class="menu-box">
    			<div class="nav-logo"><a href="index.html"><img src="{{asset('frontend/images/logo.png')}}" alt="Dr. Baba Network Marketing Private Limited" title=""></a></div>
    			<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
    		</nav>
    	</div>
    </header>
