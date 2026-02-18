

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
    						<li><a href="#"><span class="icon flaticon-map"></span>Deokali, Ghazipur,Uttar-Pradesh-232339</a></li>
    						<li><a href="#"><span class="icon flaticon-phone-call"></span>7309795563</a></li>
    						<li><a href="#"><span class="icon flaticon-email"></span>Dr Baba Grouppvtltd@gmail.com</a></li>
    					</ul>
    				</div>

    				<!-- Top Right -->
    				<div class="top-right pull-right">
    					<span class="border-line"></span>
    					<!--Language-->

    					<div class="language dropdown">
    						@if(Auth::check())
{{ Auth()->user()->email}}
                            @else
                           <a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="/signup"> Register Now �</a>
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
    				<div class="logo"><a href="index.html"><img src="{{asset('frontend/images/logo.png')}}" style="width:110px;" alt="Dr Baba Group HERBAL LIFE CARE PVT LTD" title=""></a></div>
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
    <li><a href="/login">Login</a></li>
    @else
      <li><a href="/dashboard">Dashboard</a></li>
@endif

    							<li><a href="/contact">Contact Us</a></li>
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
    				<a href="index.html" title=""><img src="{{asset('frontend/images/logo.png')}}" style="max-width:110px" alt="Dr Baba Group HERBAL LIFE CARE PVT LTD" title=""></a>
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
    			<div class="nav-logo"><a href="index.html"><img src="{{asset('frontend/images/logo.png')}}" alt="Dr Baba Group HERBAL LIFE CARE PVT LTD" title=""></a></div>
    			<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
    		</nav>
    	</div>
    </header>
