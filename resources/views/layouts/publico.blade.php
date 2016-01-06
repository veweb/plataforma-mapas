<html>

	<head>

		<link id="css-main" media="screen, projection" href="css/realocation.css" type="text/css" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
		<link media="screen, projection" href="css/flexslider.css" type="text/css" rel="stylesheet">
	</head>
	<body>



<div id="wrapper">
    <div id="header-wrapper">
        <div id="header">
    <div id="header-inner">
        <div class="header-bar">
            <div class="container">
               <!--  <div class="header-infobox">
                    <strong>E-mail:</strong> <a href="#">hello@yourcompany.com</a>
                </div>/.header-infobox-->
<!--
                <div class="header-infobox">
                    <strong>Phone:</strong> 800-123-4567
                </div> /.header-infobox-->

                <ul class="header-bar-nav nav nav-register">
    <li><a href="{{ route('login') }}">Acceso</a></li>
    <li><a href="{{ route('register') }}">Registrarse</a></li>
    >
</ul>            </div><!-- /.container -->
        </div><!-- /.header-bar -->

        <div class="header-top">
            <div class="container">
                <div class="header-identity">
                    <a href="index.html" class="header-identity-target">
                        <span class="header-icon"><i class="fa fa-home"></i></span>
                        <span class="header-title"><img src="images/logo.png" height="75" width="200" ></span><!-- /.header-title -->
                        <span class="header-slogan"><!--Real Estate &amp; Rental <br> Bussiness Template--></span><!-- /.header-slogan -->
                    </a><!-- /.header-identity-target-->
                </div><!-- /.header-identity -->
<!--
                <div class="header-actions pull-right">
                    <a href="create-agency.html" class="btn btn-regular">Create Agency Profile</a> <strong class="separator">or</strong> <a href="submit-property.html" class="btn btn-primary"><i class="fa fa-plus"></i>Submit Property</a>
                </div> /.header-actions -->

                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".header-navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div><!-- /.container -->
        </div><!-- .header-top -->

        <div class="header-navigation">
            <div class="container">
                <div class="row">
                    <ul class="header-nav nav nav-pills">
    <li class="menuparent">
       <!--  <a href="#">Home</a>

        <ul class="sub-menu">
            <li><a href="index.html">Map Version</a></li>
            <li><a href="homepage-static-image.html">Static Image</a></li>
            <li><a href="homepage-sidebar.html">Sidebar Version</a></li>
            <li class="menuparent">
                <a href="#">Map Styles</a>

                <ul class="sub-menu">
                    <li><a href="index.html?style=1">Version 1</a></li>
                    <li><a href="index.html?style=2">Version 2</a></li>
                    <li><a href="index.html?style=3">Version 3</a></li>
                    <li><a href="index.html?style=4">Version 4</a></li>
                    <li><a href="index.html?style=5">Version 5</a></li>
                    <li><a href="index.html?style=6">Version 6</a></li>
                    <li><a href="index.html?style=7">Version 7</a></li>
                    <li><a href="index.html?style=8">Version 8</a></li>
                </ul>
            </li>
        </ul>
    </li>

    <li class="menuparent">
        <a href="#">Properties</a>

        <ul class="sub-menu">
            <li><a href="property-detail.html">Property Detail</a></li>
            <li><a href="properties-rows.html">Rows Style</a></li>
            <li><a href="properties-grid.html">Grid Style</a></li>
            <li><a href="properties-grid-isotope.html">Isotope Grid</a></li>
        </ul>
    </li>

    <li class="menuparent">
        <a href="#">Agencies</a>

        <ul class="sub-menu">
            <li><a href="agency-detail.html">Agency Detail</a></li>
            <li><a href="agencies.html">Row Style</a></li>
        </ul>
    </li>

    <li class="menuparent">
        <a href="#">Agents</a>
        <ul class="sub-menu">
            <li><a href="agent-detail.html">Agent Detail</a></li>
            <li><a href="agents-small.html">Small Boxes</a></li>
            <li><a href="agents-rows.html">Row Style</a></li>
            <li><a href="agents-grid.html">Grid Style</a></li>
        </ul>
    </li>

    <li class="menuparent">
        <a href="#">Pages</a>

        <ul class="sub-menu">
            <li class="menuparent">
                <a href="#">Headers</a>
                <ul class="sub-menu">
                    <li><a href="header-standard.html">Standard</a></li>
                    <li><a href="header-no-topbar.html">No Topbar</a></li>
                    <li><a href="header-social-icons.html">Social Icons</a></li>
                    <li><a href="header-minimal.html">Minimal</a></li>
                    <li><a href="header-classic.html">Classic</a></li>
                </ul>
            </li>
            <li><a href="submit-property.html">Submit Property</a></li>
            <li><a href="create-agency.html">Create Agency</a></li>
            <li><a href="my-properties.html">My Properties</a></li>
            <li><a href="features.html">Features</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="invoice.html">Invoice Template</a></li>
            <li><a href="login.html">Login Form</a></li>
            <li><a href="renew-password.html">Renew Password</a></li>
            <li><a href="register.html">Registration</a></li>
            <li><a href="change-password.html">Change Password</a></li>
            <li><a href="terms-conditions.html">Terms &amp; Conditions</a></li>
            <li><a href="grid.html">Grid Layout</a></li>
            <li><a href="404.html">404 - Not Found</a></li>
            <li><a href="500.html">500 - Internal Error</a></li>
        </ul>
    </li>
    <li class="menuparent">
        <a href="#">Blog</a>
        <ul class="sub-menu">
            <li><a href="blog-left.html">Left Sidebar</a></li>
            <li><a href="blog-right.html">Right Sidebar</a></li>
            <li><a href="blog-fullwidth.html">Fullwidth</a></li>
        </ul>
    </li>
</ul><!-- /.header-nav -->
                    <div class="form-search-wrapper col-sm-3">
                        <form method="post" action="?" class="form-horizontal form-search">
                            <div class="form-group has-feedback no-margin">
                                <input class="form-control" placeholder="Search" type="text">

                                <span class="form-control-feedback">
                                    <i class="fa fa-search"></i>
                                </span><!-- /.form-control-feedback -->
                            </div><!-- /.form-group -->
                        </form>
                    </div>
                </div>
            </div><!-- /.container -->
        </div><!-- /.header-navigation -->
    </div><!-- /.header-inner -->
</div><!-- /#header -->    </div><!-- /#header-wrapper -->
<div id="main-wrapper">
    <div id="main">
        <div id="main-inner">

            <!-- MAP -->
<div class="block-content no-padding">
    <div class="block-content-inner">
        @yield('content');
    </div><!-- /.block-content-inner -->
</div><!-- /.block-content -->
            <div class="container">
                <!-- SLOGAN -->
<div class="block-content background-primary background-map block-content-small-padding fullwidth">
    <div class="block-content-inner">
        <h2 class="no-margin center caps"><!-- INTRODUCIR TEXTO --></h2>
    </div><!-- /.block-content-iner -->
</div><!-- /.block-content-->       
         <!-- ISOTOPE GRID 
<div class="block-content block-content-small-padding">
<div class="block-content-inner">
<h2 class="center">Best Rated Properties</h2>

<ul class="properties-filter">
    <li class="selected"><a href="#" data-filter="*"><span>All</span></a></li>
    <li><a href="#" data-filter=".property-featured"><span>Featured</span></a></li>
    <li><a href="#" data-filter=".property-rent"><span>Rent</span></a></li>
    <li><a href="#" data-filter=".property-sale"><span>Sale</span></a></li>
</ul>
<!-- /.property-filter 

<div style="position: relative; overflow: hidden; height: 812px;" class="properties-items isotope">
<div class="row">
    <div style="position: absolute; left: 0px; top: 0px; transform: translate(0px, 0px);" class="property-item property-featured col-sm-6 col-md-3 isotope-item">
        <div class="property-box">
            <div class="property-box-inner">
                <h3 class="property-box-title"><a href="property-detail.html">Bedford Ave</a></h3>
                <h4 class="property-box-subtitle"><a href="property-detail.html">Silicon Valley, SA</a></h4>

                <div class="property-box-label property-box-label-primary">Rent</div>
                <!-- /.property-box-label 

                <div class="property-box-picture">
                    <div class="property-box-price">$ 145 000</div>
                    <!-- /.property-box-price -
                    <div class="property-box-picture-inner">
                        <a href="property-detail.html" class="property-box-picture-target">
                            <img src="assets/img/tmp/properties/medium/7.jpg" alt="">
                        </a><!-- /.property-box-picture-target 
                    </div>
                    <!-- /.property-picture-inner 
                </div>
                <!-- /.property-picture 

                <div class="property-box-meta">
                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>2</strong>
                        <span>Baths</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>1</strong>
                        <span>Beds</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>191</strong>
                        <span>Area</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>2</strong>
                        <span>Garages</span>
                    </div>
                    <!-- /.col-sm-3 
                </div>
                <!-- /.property-box-meta 
            </div>
            <!-- /.property-box-inner 
        </div>
        <!-- /.property-box 
    </div>
    <!-- /.property-item 

    <div style="position: absolute; left: 0px; top: 0px; transform: translate(285px, 0px);" class="property-item property-rent col-sm-6 col-md-3 isotope-item">
        <div class="property-box">
            <div class="property-box-inner">
                <h3 class="property-box-title"><a href="property-detail.html">St Johns Pl</a></h3>
                <h4 class="property-box-subtitle"><a href="property-detail.html">Palo Alto, SA</a></h4>

                <div class="property-box-picture">
                    <div class="property-box-price">$ 1900 / month</div>
                    <!-- /.property-box-price 
                    <div class="property-box-picture-inner">
                        <a href="property-detail.html" class="property-box-picture-target">
                            <img src="assets/img/tmp/properties/medium/5.jpg" alt="">
                        </a><!-- /.property-box-picture-target 
                    </div>
                    <!-- /.property-picture-inner 
                </div>
                <!-- /.property-picture 

                <div class="property-box-meta">
                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>1</strong>
                        <span>Baths</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>2</strong>
                        <span>Beds</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>311</strong>
                        <span>Area</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>3</strong>
                        <span>Garages</span>
                    </div>
                    <!-- /.col-sm-3 
                </div>
                <!-- /.property-box-meta 
            </div>
            <!-- /.property-box-inner 
        </div>
        <!-- /.property-box 
    </div>
    <!-- /.property-item 

    <div style="position: absolute; left: 0px; top: 0px; transform: translate(570px, 0px);" class="property-item property-sale col-sm-6 col-md-3 isotope-item">
        <div class="property-box">
            <div class="property-box-inner">
                <h3 class="property-box-title"><a href="property-detail.html">Jefferson Blvd</a></h3>
                <h4 class="property-box-subtitle"><a href="property-detail.html">Kingman Park</a></h4>

                <div class="property-box-label">Sale</div>
                <!-- /.property-box-label 

                <div class="property-box-picture">
                    <div class="property-box-price">$ 430 000</div>
                    <!-- /.property-box-price 
                    <div class="property-box-picture-inner">
                        <a href="property-detail.html" class="property-box-picture-target">
                            <img src="assets/img/tmp/properties/medium/4.jpg" alt="">
                        </a><!-- /.property-box-picture-target 
                    </div>
                    <!-- /.property-picture-inner 
                </div>
                <!-- /.property-picture 

                <div class="property-box-meta">
                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>1</strong>
                        <span>Baths</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>1</strong>
                        <span>Beds</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>154</strong>
                        <span>Area</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>2</strong>
                        <span>Garages</span>
                    </div>
                    <!-- /.col-sm-3 
                </div>
                <!-- /.property-box-meta 
            </div>
            <!-- /.property-box-inner 
        </div>
        <!-- /.property-box 
    </div>
    <!-- /.property-item 

    <div style="position: absolute; left: 0px; top: 0px; transform: translate(855px, 0px);" class="property-item property-rent col-sm-6 col-md-3 isotope-item">
        <div class="property-box">
            <div class="property-box-inner">
                <h3 class="property-box-title"><a href="property-detail.html">Jeopardy Ln</a></h3>
                <h4 class="property-box-subtitle"><a href="property-detail.html">Manhattan</a></h4>

                <div class="property-box-picture">
                    <div class="property-box-price">$ 430 000</div>
                    <!-- /.property-box-price 
                    <div class="property-box-picture-inner">
                        <a href="property-detail.html" class="property-box-picture-target">
                            <img src="assets/img/tmp/properties/medium/2.jpg" alt="">
                        </a><!-- /.property-box-picture-target 
                    </div>
                    <!-- /.property-picture-inner 
                </div>
                <!-- /.property-picture -

                <div class="property-box-meta">
                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>1</strong>
                        <span>Baths</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>2</strong>
                        <span>Beds</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>280</strong>
                        <span>Area</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>1</strong>
                        <span>Garages</span>
                    </div>
                    <!-- /.col-sm-3 
                </div>
                <!-- /.property-box-meta 
            </div>
            <!-- /.property-box-inner 
        </div>
        <!-- /.property-box 
    </div>
    <!-- /.property-item -
</div>
<!-- /.row 

<div class="row">
    <div style="position: absolute; left: 0px; top: 0px; transform: translate(0px, 406px);" class="property-item property-featured col-sm-6 col-md-3 isotope-item">
        <div class="property-box">
            <div class="property-box-inner">
                <h3 class="property-box-title"><a href="property-detail.html">Everett Ave</a></h3>
                <h4 class="property-box-subtitle"><a href="property-detail.html">Brooklyn</a></h4>

                <div class="property-box-picture">
                    <div class="property-box-price">$ 145 000</div>
                    <!-- /.property-box-price 
                    <div class="property-box-picture-inner">
                        <a href="property-detail.html" class="property-box-picture-target">
                            <img src="assets/img/tmp/properties/medium/12.jpg" alt="">
                        </a><!-- /.property-box-picture-target
                    </div>
                    <!-- /.property-picture-inner 
                </div>
                <!-- /.property-picture 

                <div class="property-box-meta">
                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>2</strong>
                        <span>Baths</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>1</strong>
                        <span>Beds</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>254</strong>
                        <span>Area</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>1</strong>
                        <span>Garages</span>
                    </div>
                    <!-- /.col-sm-3 
                </div>
                <!-- /.property-box-meta 
            </div>
            <!-- /.property-box-inner 
        </div>
        <!-- /.property-box 
    </div>
    <!-- /.property-item 

    <div style="position: absolute; left: 0px; top: 0px; transform: translate(285px, 406px);" class="property-item property-sale col-sm-6 col-md-3 isotope-item">
        <div class="property-box">
            <div class="property-box-inner">
                <h3 class="property-box-title"><a href="property-detail.html">Emerson Street</a></h3>
                <h4 class="property-box-subtitle"><a href="property-detail.html">Civic Betterment</a></h4>

                <div class="property-box-label property-box-label-primary">Rent</div>
                <!-- /.property-box-label 

                <div class="property-box-picture">
                    <div class="property-box-price">$ 145 000</div>
                    <!-- /.property-box-price 
                    <div class="property-box-picture-inner">
                        <a href="property-detail.html" class="property-box-picture-target">
                            <img src="assets/img/tmp/properties/medium/1.jpg" alt="">
                        </a><!-- /.property-box-picture-target 
                    </div>
                    <!-- /.property-picture-inner 
                </div>
                <!-- /.property-picture -

                <div class="property-box-meta">
                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>2</strong>
                        <span>Baths</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>1</strong>
                        <span>Beds</span>
                    </div>
                    <!-- /.col-sm-3 -

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>165</strong>
                        <span>Area</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-sm-3">
                        <strong>3</strong>
                        <span>Garages</span>
                    </div>
                    <!-- /.col-sm-3 
                </div>
                <!-- /.property-box-meta 
            </div>
            <!-- /.property-box-inner 
        </div>
        <!-- /.property-box 
    </div>
    <!-- /.property-item 

    <div style="position: absolute; left: 0px; top: 0px; transform: translate(570px, 406px);" class="property-item property-rent col-sm-6 col-md-3 isotope-item">
        <div class="property-box">
            <div class="property-box-inner">
                <h3 class="property-box-title"><a href="property-detail.html">McLaugh Ave</a></h3>
                <h4 class="property-box-subtitle"><a href="property-detail.html">Manhattan</a></h4>

                <div class="property-box-label property-box-label-primary">Rent</div>
                <!-- /.property-box-label 

                <div class="property-box-picture">
                    <div class="property-box-price">$ 145 000</div>
                    <!-- /.property-box-price 
                    <div class="property-box-picture-inner">
                        <a href="property-detail.html" class="property-box-picture-target">
                            <img src="assets/img/tmp/properties/medium/9.jpg" alt="">
                        </a><!-- /.property-box-picture-target 
                    </div>
                    <!-- /.property-picture-inner 
                </div>
                <!-- /.property-picture 

                <div class="property-box-meta">
                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>2</strong>
                        <span>Baths</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>2</strong>
                        <span>Beds</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>322</strong>
                        <span>Area</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>3</strong>
                        <span>Garages</span>
                    </div>
                    <!-- /.col-sm-3 
                </div>
                <!-- /.property-box-meta 
            </div>
            <!-- /.property-box-inner 
        </div>
        <!-- /.property-box 
    </div>
    <!-- /.property-item 

    <div style="position: absolute; left: 0px; top: 0px; transform: translate(855px, 406px);" class="property-item property-sale col-sm-6 col-md-3 isotope-item">
        <div class="property-box">
            <div class="property-box-inner">
                <h3 class="property-box-title"><a href="property-detail.html">Culver Blvd</a></h3>
                <h4 class="property-box-subtitle"><a href="property-detail.html">Kingman Park</a></h4>

                <div class="property-box-label">Sale</div>
                <!-- /.property-box-label 

                <div class="property-box-picture">
                    <div class="property-box-price">$ 430 000</div>
                    <!-- /.property-box-price
                    <div class="property-box-picture-inner">
                        <a href="property-detail.html" class="property-box-picture-target">
                            <img src="assets/img/tmp/properties/medium/3.jpg" alt="">
                        </a><!-- /.property-box-picture-target 
                    </div>
                    <!-- /.property-picture-inner 
                </div>
                <!-- /.property-picture 

                <div class="property-box-meta">
                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>1</strong>
                        <span>Baths</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>1</strong>
                        <span>Beds</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>123</strong>
                        <span>Area</span>
                    </div>
                    <!-- /.col-sm-3 

                    <div class="property-box-meta-item col-xs-3 col-sm-3">
                        <strong>3</strong>
                        <span>Garages</span>
                    </div>
                    <!-- /.col-sm-3 
                </div>
                <!-- /.property-box-meta 
            </div>
            <!-- /.property-box-inner 
        </div>
        <!-- /.property-box 
    </div>
    <!-- /.property-item 
</div>
<!-- /.row -
</div>
<!-- /.properties-items 

</div>
<!-- /.block-content-inner 
</div><!-- /.block-content                
<!-- CAROUSEL 
<div class="block-content background-secondary background-map fullwidth">
<div class="block-content-inner">
<div style="max-width: 1170px;" class="bx-wrapper"><div style="width: 100%; overflow: hidden; position: relative; height: 287px;" class="bx-viewport"><ul style="width: 2015%; position: relative; transition-duration: 0s; transform: translate3d(-1200px, 0px, 0px);" class="bxslider clearfix"><li class="bx-clone" style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">McLaugh Ave</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Kingman Park</a></h4>
            <div class="property-box-label property-box-label-primary">Sale</div><!-- /.property-box-label 

            <div class="property-box-picture">
                <div class="property-box-price">$ 13,000</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/3.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li><li class="bx-clone" style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">3117 Cozy River</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Needy, Jersey</a></h4>

            <div class="property-box-picture">
                <div class="property-box-price">$ 13,000</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/12.jpg" alt="">
                    </a><!-- /.property-box-picture-target -->
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li><li class="bx-clone" style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">Emerson Street</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Silicon Valley, SA</a></h4>
            <div class="property-box-label property-box-label-primary">Rent</div><!-- /.property-box-label 

            <div class="property-box-picture">
                <div class="property-box-price">$ 89,200</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/4.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li><li class="bx-clone" style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">Hansbury Ave</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Civic Betterment</a></h4>
            <div class="property-box-label property-box-label-primary">Sale</div><!-- /.property-box-label 

            <div class="property-box-picture">
                <div class="property-box-price">$ 13,000</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/9.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner -
    </div><!-- /.property-box 
</li><li class="bx-clone" style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">3117 Cozy River</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Needy, Jersey</a></h4>

            <div class="property-box-picture">
                <div class="property-box-price">$ 13,000</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/4.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li><li class="bx-clone" style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">Jefferson Blvd</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Brooklyn</a></h4>
            <div class="property-box-label property-box-label-primary">Rent</div><!-- /.property-box-label -

            <div class="property-box-picture">
                <div class="property-box-price">$ 89,200</div><!-- /.property-box-price -
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/9.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner -
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box -
</li>
<li style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">West Side</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Civic Betterment</a></h4>
            <div class="property-box-label property-box-label-primary">Sale</div><!-- /.property-box-label 

            <div class="property-box-picture">
                <div class="property-box-price">$ 13,000</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/11.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li>

<li style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">3117 Cozy River</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Needy, Jersey</a></h4>

            <div class="property-box-picture">
                <div class="property-box-price">$ 1,200 <span class="property-box-price-suffix">/ month</span></div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/8.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box -
</li>

<li style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">Evergreen Tr</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Silicon Valley, SA</a></h4>
            <div class="property-box-label property-box-label-primary">Rent</div><!-- /.property-box-label -

            <div class="property-box-picture">
                <div class="property-box-price">$ 89,200</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/6.jpg" alt="">
                    </a><!-- /.property-box-picture-target
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box -
</li>

<li style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">Fife Ave</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Palo Alto, SA</a></h4>
            <div class="property-box-label property-box-label-primary">Sale</div><!-- /.property-box-label 

            <div class="property-box-picture">
                <div class="property-box-price">$ 13,000</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/10.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li>

<li style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">3117 Cozy River</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Needy, Jersey</a></h4>

            <div class="property-box-picture">
                <div class="property-box-price">$ 13,000</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/11.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li>

<li style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">South St</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Brooklyn</a></h4>
            <div class="property-box-label property-box-label-primary">Rent</div><!-- /.property-box-label 

            <div class="property-box-picture">
                <div class="property-box-price">$ 89,200</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/7.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li>

<li style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">Hansbury Ave</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Brooklyn</a></h4>
            <div class="property-box-label property-box-label-primary">Sale</div><!-- /.property-box-label 

            <div class="property-box-picture">
                <div class="property-box-price">$ 13,000</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/5.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li>

<li style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">3117 Cozy River</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Needy, Jersey</a></h4>

            <div class="property-box-picture">
                <div class="property-box-price">$ 13,000</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/8.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li>

<li style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">St Johns Pl</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Manhattan</a></h4>
            <div class="property-box-label property-box-label-primary">Rent</div><!-- /.property-box-label

            <div class="property-box-picture">
                <div class="property-box-price">$ 89,200</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/6.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li>

<li style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">Everett Ave</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Civic Betterment</a></h4>
            <div class="property-box-label property-box-label-primary">Sale</div><!-- /.property-box-label 

            <div class="property-box-picture">
                <div class="property-box-price">$ 13,000</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/10.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture -
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li>

<li style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">3117 Cozy River</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Needy, Jersey</a></h4>

            <div class="property-box-picture">
                <div class="property-box-price">$ 13,000</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/1.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li>

<li style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">Jeopardy Ln</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Palo Alto, SA</a></h4>
            <div class="property-box-label property-box-label-primary">Rent</div><!-- /.property-box-label -->

            <div class="property-box-picture">
                <div class="property-box-price">$ 89,200</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/2.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li>

<li style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">McLaugh Ave</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Kingman Park</a></h4>
            <div class="property-box-label property-box-label-primary">Sale</div><!-- /.property-box-label 

            <div class="property-box-picture">
                <div class="property-box-price">$ 13,000</div><!-- /.property-box-price
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/3.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li>

<li style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">3117 Cozy River</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Needy, Jersey</a></h4>

            <div class="property-box-picture">
                <div class="property-box-price">$ 13,000</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/12.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li>

<li style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">Emerson Street</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Silicon Valley, SA</a></h4>
            <div class="property-box-label property-box-label-primary">Rent</div><!-- /.property-box-label 

            <div class="property-box-picture">
                <div class="property-box-price">$ 89,200</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/4.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li>

<li style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">Hansbury Ave</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Civic Betterment</a></h4>
            <div class="property-box-label property-box-label-primary">Sale</div><!-- /.property-box-label 

            <div class="property-box-picture">
                <div class="property-box-price">$ 13,000</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/9.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner -->
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li>

<li style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">3117 Cozy River</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Needy, Jersey</a></h4>

            <div class="property-box-picture">
                <div class="property-box-price">$ 13,000</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/4.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li>

<li style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">Jefferson Blvd</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Brooklyn</a></h4>
            <div class="property-box-label property-box-label-primary">Rent</div><!-- /.property-box-label 

            <div class="property-box-picture">
                <div class="property-box-price">$ 89,200</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/9.jpg" alt="">
                    </a><!-- /.property-box-picture-target
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner
    </div><!-- /.property-box 
</li>
<li class="bx-clone" style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">West Side</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Civic Betterment</a></h4>
            <div class="property-box-label property-box-label-primary">Sale</div><!-- /.property-box-label 

            <div class="property-box-picture">
                <div class="property-box-price">$ 13,000</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/11.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li><li class="bx-clone" style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">3117 Cozy River</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Needy, Jersey</a></h4>

            <div class="property-box-picture">
                <div class="property-box-price">$ 1,200 <span class="property-box-price-suffix">/ month</span></div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/8.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li><li class="bx-clone" style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">Evergreen Tr</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Silicon Valley, SA</a></h4>
            <div class="property-box-label property-box-label-primary">Rent</div><!-- /.property-box-label

            <div class="property-box-picture">
                <div class="property-box-price">$ 89,200</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/6.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li><li class="bx-clone" style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">Fife Ave</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Palo Alto, SA</a></h4>
            <div class="property-box-label property-box-label-primary">Sale</div><!-- /.property-box-label 

            <div class="property-box-picture">
                <div class="property-box-price">$ 13,000</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/10.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li><li class="bx-clone" style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">3117 Cozy River</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Needy, Jersey</a></h4>

            <div class="property-box-picture">
                <div class="property-box-price">$ 13,000</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/11.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner
    </div><!-- /.property-box 
</li><li class="bx-clone" style="float: left; list-style: outside none none; position: relative; margin-right: 30px; width: 170px;">
    <div class="property-box no-border small">
        <div class="property-box-inner">
            <h3 class="property-box-title"><a href="#">South St</a></h3>
            <h4 class="property-box-subtitle"><a href="#">Brooklyn</a></h4>
            <div class="property-box-label property-box-label-primary">Rent</div><!-- /.property-box-label 

            <div class="property-box-picture">
                <div class="property-box-price">$ 89,200</div><!-- /.property-box-price 
                <div class="property-box-picture-inner">
                    <a href="#" class="property-box-picture-target">
                        <img src="assets/img/tmp/properties/medium/7.jpg" alt="">
                    </a><!-- /.property-box-picture-target 
                </div><!-- /.property-picture-inner 
            </div><!-- /.property-picture 
        </div><!-- /.property-box-inner 
    </div><!-- /.property-box 
</li></ul></div><div class="bx-controls bx-has-pager bx-has-controls-direction"><div class="bx-pager bx-default-pager"><div class="bx-pager-item"><a href="" data-slide-index="0" class="bx-pager-link active">1</a></div><div class="bx-pager-item"><a href="" data-slide-index="1" class="bx-pager-link">2</a></div><div class="bx-pager-item"><a href="" data-slide-index="2" class="bx-pager-link">3</a></div></div><div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div></div></div>
</div><!-- /.block-content-inner 
</div><!-- /.block-content -->                <!-- STATISTICS 
<div class="block-content block-content-small-padding">
    <div class="block-content-inner">
        <div class="center">
            <h2 class="color-primary">Over 10 000 Properties In Our Directory</h2>
        </div><!-- /.center 

        <div class="row">
            <div class="col-sm-2 col-sm-offset-2">
                <div class="block-stats background-dots background-primary color-white">
                    <strong>3500+</strong>
                    <span>Apartments</span>
                </div><!-- /.block-stats 
            </div>
            <div class="col-sm-2">
                <div class="block-stats background-dots background-primary color-white">
                    <strong>3000+</strong>
                    <span>Houses</span>
                </div><!-- /.block-stats 
            </div>
            <div class="col-sm-2">
                <div class="block-stats background-dots background-primary color-white">
                    <strong>5000+</strong>
                    <span>Condos</span>
                </div><!-- /.block-stats 
            </div>
            <div class="col-sm-2">
                <div class="block-stats background-dots background-primary color-white">
                    <strong>2500+</strong>
                    <span>Areas</span>
                </div><!-- /.block-stats
            </div>
        </div><!-- /.row 
    </div><!-- /.block-content-inner 
</div><!-- /.block-content -->                <!-- HEXS 
<div class="block-content fullwidth background-primary background-map clearfix">
    <div class="block-content-inner row">
        <div class="hex-wrapper col-sm-4 center">
            <div class="clearfix">
                <div class="hex col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2">
                    <div class="hex-inner">
                        <img src="assets/img/hex.png" alt="" class="hex-image">

                        <div class="hex-content">
                            <i class="fa fa-group"></i>
                        </div><!-- /.hex-content 
                    </div><!-- /.hex-inner 
                </div><!-- /.hex 
            </div><!-- /.clearfix 

            <h3>15 000+ Satisfied Users</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur diping elit. Curabitur non gravida nisi. Nam vel magna
            </p>

            <a class="btn btn-white" href="#">More</a>
        </div>

        <div class="hex-wrapper col-sm-4 center">
            <div class="clearfix">
                <div class="hex col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2">
                    <div class="hex-inner">
                        <img src="assets/img/hex.png" alt="" class="hex-image">

                        <div class="hex-content">
                            <i class="fa fa-search"></i>
                        </div><!-- /.hex-content -->
                    </div><!-- /.hex-inner 
                </div><!-- /.hex 
            </div><!-- /.clearfix 

            <h3>Smart Property Search</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur diping elit. Curabitur non gravida nisi. Nam vel magna
            </p>

            <a class="btn btn-white" href="#">More</a>
        </div>

        <div class="hex-wrapper col-sm-4 center">
            <div class="clearfix">
                <div class="hex col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2">
                    <div class="hex-inner">
                        <img src="assets/img/hex.png" alt="" class="hex-image">

                        <div class="hex-content">
                            <i class="fa fa-compass"></i>
                        </div><!-- /.hex-content 
                    </div><!-- /.hex-inner
                </div><!-- /.hex 
            </div><!-- /.clearfix -

            <h3>We Are Here To Help You</h3>

            <p>
                Lorem ipsum dolor sit amet, consectetur diping elit. Curabitur non gravida nisi. Nam vel magna
            </p>

            <a class="btn btn-white" href="#">More</a>
        </div>
    </div><!-- /.block-content-inner 
</div><!-- /.block-content            </div><!-- /.container -->
        </div><!-- /#main-inner -->
    </div><!-- /#main -->
</div><!-- /#main-wrapper -->

    <div id="footer-wrapper">
        <div id="footer"><!--
            <div id="footer-inner">
                <div class="footer-top">
    <div class="container">
        <div class="row">
    <div class="widget col-sm-8">
        <h2>Template Features</h2>

        <div class="row">
            <div class="feature col-xs-12 col-sm-6">
                <div class="feature-icon col-xs-2 col-sm-2">
                    <div class="feature-icon-inner">
                        <i class="fa fa-rocket"></i>
                    </div><!-- /.feature-icon-inner 
                </div><!-- /.feature-icon

                <div class="feature-content col-xs-10 col-sm-10">
                    <h3 class="feature-title">Portal Ready Solution</h3>

                    <p class="feature-body">
                        Donec vel tortor eros. Morbi non purus vitae enim semper vehicula.
                    </p>
                </div><!-- /.feature-content -->
            </div><!-- /.feature 


            <div class="feature col-xs-12 col-sm-6">
                <div class="feature-icon col-xs-2 col-sm-2">
                    <div class="feature-icon-inner">
                        <i class="fa fa-map-marker"></i>
                    </div><!-- /.feature-icon-inner
                </div><!-- /.feature-icon 

                <div class="feature-content col-xs-10 col-sm-10">
                    <h3 class="feature-title">Directory Features</h3>

                    <p class="feature-body">
                        Donec vel tortor eros. Morbi non purus vitae enim semper vehicula.
                    </p>
                </div><!-- /.feature-content 
            </div><!-- /.feature 

            <div class="feature col-xs-12 col-sm-6">
                <div class="feature-icon col-xs-2 col-sm-2">
                    <div class="feature-icon-inner">
                        <i class="fa fa-code"></i>
                    </div><!-- /.feature-icon-inner -->
                </div><!-- /.feature-icon -

                <div class="feature-content col-xs-10 col-sm-10">
                    <h3 class="feature-title">Superb Source Code</h3>

                    <p class="feature-body">
                        Donec vel tortor eros. Morbi non purus vitae enim semper vehicula.
                    </p>
                </div><!-- /.feature-content 
            </div><!-- /.feature 

            <div class="feature col-xs-12 col-sm-6">
                <div class="feature-icon col-xs-2 col-sm-2">
                    <div class="feature-icon-inner">
                        <i class="fa fa-flask"></i>
                    </div><!-- /.feature-icon-inner 
                </div><!-- /.feature-icon 

                <div class="feature-content col-xs-10 col-sm-10">
                    <h3 class="feature-title">Most Recent Bootstrap</h3>

                    <p class="feature-body">
                        Donec vel tortor eros. Morbi non purus vitae enim semper vehicula.
                    </p>
                </div><!-- /.feature-content 
            </div><!-- /.feature 

            <div class="feature col-xs-12 col-sm-6">
                <div class="feature-icon col-xs-2 col-sm-2">
                    <div class="feature-icon-inner">
                        <i class="fa fa-mobile"></i>
                    </div><!-- /.feature-icon-inner -->
                </div><!-- /.feature-icon 

                <div class="feature-content col-xs-10 col-sm-10">
                    <h3 class="feature-title">Full Responsive Design</h3>

                    <p class="feature-body">
                        Donec vel tortor eros. Morbi non purus vitae enim semper vehicula.
                    </p>
                </div><!-- /.feature-content 
            </div><!-- /.feature 

            <div class="feature col-xs-12 col-sm-6">
                <div class="feature-icon col-xs-2 col-sm-2">
                    <div class="feature-icon-inner">
                        <i class="fa fa-search"></i>
                    </div><!-- /.feature-icon-inner 
                </div><!-- /.feature-icon 

                <div class="feature-content col-xs-10 col-sm-10">
                    <h3 class="feature-title">Retina Ready</h3>

                    <p class="feature-body">
                        Donec vel tortor eros. Morbi non purus vitae enim semper vehicula.
                    </p>
                </div><!-- /.feature-content 
            </div><!-- /.feature 
        </div><!-- /.row 
    </div><!-- /.widget 

    <div class="widget col-sm-4">
        <h2>Why Choose Us</h2>

        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading active">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            Property Management
                        </a>
                    </h4>
                </div><!-- /.panel-heading 

                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    </div><!-- /.panel-body 
                </div><!-- /.panel-heading 
            </div><!-- /.panel 

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            Lifetime Updates
                        </a>
                    </h4>
                </div><!-- /.panel-heading 

                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    </div><!-- /.panel-body -->
                </div><!-- /.panel-collapse 
            </div><!-- /.panel 

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            Free Theme Support
                        </a>
                    </h4>
                </div><!-- /.panel-heading 

                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    </div><!-- /.panel-body 
                </div><!-- /.panel-collapse 
            </div><!-- /.panel 

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            Rich Documentation
                        </a>
                    </h4>
                </div><!-- /.panel-heading 

                <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    </div><!-- /.panel-body 
                </div><!-- /.panel-collapse 
            </div><!-- /.panel 
        </div><!-- /.panel-group 
    </div><!-- /.widget
</div><!-- /.row 

        <hr>

        <div class="row">
    <div class="col-sm-9">
        <ul class="footer-nav nav nav-pills">
            <li><a href="#">Home</a></li>
            <li><a href="#">Properties</a></li>
            <li><a href="#">Agents</a></li>
            <li><a href="#">Agencies</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul><!-- /.footer-nav 
    </div>

    <div class="col-sm-3">
        <form method="post" action="?" class="form-horizontal form-search">
            <div class="form-group has-feedback no-margin">
                <input class="form-control" placeholder="Search" type="text">

                                        <span class="form-control-feedback">
                                            <i class="fa fa-search"></i>
                                        </span><!-- /.form-control-feedback 
            </div><!-- /.form-group 
        </form>
    </div>
</div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.footer-top -
                <div class="footer-bottom">
                    <div class="container">
                        <p class="center no-margin">
                            &copy; 2016 Mapas de Guatemala, All Right reserved
                        </p>

                        <div class="center">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul><!-- /.social 
                        </div><!-- /.center 
                    </div><!-- /.container 
                </div><!-- /.footer-bottom 
            </div><!-- /#footer-inner -->
        </div><!-- /#footer -->
    </div><!-- /#footer-wrapper -->
</div><!-- /#wrapper -->

 <!-- jQuery -->
    {!!Html::script('js/jquery-1.11.1.min.js')!!}
    {!!Html::script('js/jquery.js')!!} 

    <!-- Bootstrap Core JavaScript -->
    {!!Html::script('js/bootstrap.min.js')!!}


<script type="text/javascript" src="assets/libraries/bootstrap-sass/vendor/assets/javascripts/bootstrap/transition.js"></script>
<script type="text/javascript" src="assets/libraries/bootstrap-sass/vendor/assets/javascripts/bootstrap/collapse.js"></script>
<script type="text/javascript" src="assets/libraries/jquery-bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="assets/libraries/flexslider/jquery.flexslider.js"></script>
<script type="text/javascript" src=""></script>
{!!Html::script('js/dropdown.js')!!}
{!!Html::script('js/jquery.smoothZoom.min.js')!!}


<script>
    jQuery(function($){
     
        

        $('#yourImageID').smoothZoom({
            width: '100%',
            height: 580,
            initial_ZOOM: 110, 
            button_MARGIN:80,   
            pan_BUTTONS_SHOW: "YES",
            pan_LIMIT_BOUNDARY: "NO",
            button_SIZE: 24,
            button_ALIGN: "top left", 
            zoom_MIN: 40, 
            zoom_MAX: 700,
            border_TRANSPARENCY: 0,
            container: 'zoom_container',
            
            /******************************************
            Enable Responsive settings below if needed.
            Max width and height values are optional.
            ******************************************/
            responsive: false,
            responsive_maintain_ratio: true,
            max_WIDTH: '',
            max_HEIGHT: ''
        });
    });
</script>


	</body>
</html>