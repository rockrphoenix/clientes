<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>ESTATE PLUS - Real Estate HTML5 Website Template</title>

	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">

	<!-- Style CSS -->
	<link href="style.css" rel="stylesheet">
    
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,700,700italic,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,300italic,400italic' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="assets/js/html5shiv.js"></script>
	  <script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/ico/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="assets/ico/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="assets/ico/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/ico/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/ico/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/ico/apple-touch-icon-144x144.png">

</head>
<body>
        <div class="toolbar-wrapp">
            <div class="sticky-toolbar">
                <ul>
                    <li id="support"><a title="Support Menu" title="" href="#" ><i class="fa fa-link"></i></a></li>
                    <li id="help"><a href="#ContactFormModal" data-toggle="modal" title="Ask a question"><i class="fa fa-question"></i></a></li>
                    <li id="accountlogin"><a title="Login account" href="#" ><i class="fa fa-lock"></i></a></li>
                </ul>
            </div><!--/ sticky-toolbar-->
                
            <div class="popup">
                <ul>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="forum.html">Support</a></li>
                    <li><a href="ticket.html">Open Ticket</a></li>
                </ul>
            </div><!--/ popup-->
        
            <div class="loginpopup">
                <h3><i class="fa fa-key"></i> Agent Login Form</h3>
                <form id="loginform" method="post" name="loginform" action="http://designingmedia.com/html/estate-plus/login.php">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="login.html" title="" class="btn btn-primary">Sign in</a> <a title="" href="login.html" class="btn btn-primary">Register</a>
                    </div>
                </form>
            </div><!--/ login-popup-->
        </div><!--/ toolbar-wrapp-->

		<div class="modal fade" id="ContactFormModal" tabindex="-1" role="dialog" aria-labelledby="ContactFormModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="big_title">Do you have questions?
                            <small>Dont worry! We're here to help you</small>
                        </h3>
                    </div>
                    <div class="modal-body clearfix">
                    	<div class="text-left">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="ImageWrapper boxes_img">
                            		<img src="demos/01_about.jpg" class="img-responsive" alt="">
									<div class="ImageOverlayH"></div>
										<div class="Buttons StyleSc">
											<span class="WhiteSquare"><a href="#"><i class="fa fa-facebook"></i></a></span>
											<span class="WhiteSquare"><a href="#"><i class="fa fa-twitter"></i></a></span>
											<span class="WhiteSquare"><a href="#"><i class="fa fa-google-plus"></i></a></span>
										</div>
								</div>
                                <div class="servicetitle"><h3>Contact Details</h3></div>
                                <ul>
                                    <li><i class="fa fa-external-link"></i> www.yoursite.com</li>
                                    <li><i class="fa fa-envelope"></i> info@yoursite.com</li>
                            		<li><i class="fa fa-phone-square"></i> +90 333 444 55 66</li>
                            		<li><i class="fa fa-phone-square"></i> +90 333 444 55 66</li>
                                </ul>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <form id="contact" class="row" action="http://designingmedia.com/html/estate-plus/contact.php" name="contactform" method="post">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name"> 
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email"> 
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject"> 
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Your Message ..."></textarea>
                                    <button type="button" class="btn btn-primary">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
        
		<div class="topbar clearfix">
        	<div class="container">
            	<div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="callus">
                            <p>
                            <span><i class="fa fa-envelope"></i> info@yoursite.com</span>
                            <span><i class="fa fa-phone-square"></i> +90 333 444 55 66</span>
                            </p>
                        </div><!-- end callus-->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="marketing">
                            <ul class="topflags pull-right">
                                <li><a data-placement="bottom" data-toggle="tooltip" data-original-title="German" title="" href="#"><img alt="de" src="images/flags/de.png"></a></li>
                                <li><a data-placement="bottom" data-toggle="tooltip" data-original-title="Turkish" title="" href="#"><img alt="tr" src="images/flags/tr.png"></a></li>
                                <li><a data-placement="bottom" data-toggle="tooltip" data-original-title="Geek" title="" href="#"><img alt="gr" src="images/flags/gr.png"></a></li>
                            </ul><!-- end flags -->
                            <ul class="topmenu pull-right">
                                <li><a href="login.html"><i class="fa fa-lock"></i> Login / Register</a></li>
                            </ul><!-- topmenu -->
                        </div><!-- end marketing -->
                    </div><!-- end col-lg-6 -->
            	</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end topbar -->        <header class="header1">
			<div class="container">
            	<div class="row header-row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                       <div class="logo-wrapper clearfix">
							<div class="logo">
								<a href="index.html" title="Home">
									<img src="images/logo.png" alt="Estate">
								</a>
							</div><!-- /.site-name -->
						</div><!-- /.logo-wrapper -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                    </div>      
                    <div class="col-lg-5 col-md-5 col-sm-12  pull-right">
                        <div class="social clearfix pull-right">
                            <span><a data-placement="bottom" data-toggle="tooltip" data-original-title="Twitter" title="" href="#"><i class="fa fa-twitter"></i></a></span>
                            <span><a data-placement="bottom" data-toggle="tooltip" data-original-title="Facebook" title="" href="#"><i class="fa fa-facebook"></i></a></span>
                            <span><a data-placement="bottom" data-toggle="tooltip" data-original-title="Google Plus" title="" href="#"><i class="fa fa-google-plus"></i></a></span>
                            <span><a data-placement="bottom" data-toggle="tooltip" data-original-title="Linkedin" title="" href="#"><i class="fa fa-linkedin"></i></a></span>
                            <span><a data-placement="bottom" data-toggle="tooltip" data-original-title="Github" title="" href="#"><i class="fa fa-github"></i></a></span>
                            <span><a data-placement="bottom" data-toggle="tooltip" data-original-title="Pinterest" title="" href="#"><i class="fa fa-pinterest"></i></a></span>
                            <span><a data-placement="bottom" data-toggle="tooltip" data-original-title="RSS" title="" href="#"><i class="fa fa-rss"></i></a></span>
                        </div><!-- end social -->
                    </div>     
                </div><!-- end row -->
                <nav class="navbar navbar-default fhmm" role="navigation">
                    <div class="menudrop container">
                        <div class="navbar-header">
                            <button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        </div><!-- end navbar-header -->
                        <div id="defaultmenu" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <!-- Mega Menu -->
                                <li class="dropdown fhmm-fw active"><a href="#"><i class="fa fa-home"></i> HOME</a></li><!-- mega menu -->
                                <!-- list elements -->
                                <li class="dropdown fhmm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">FEATURES <b class="caret"></b></a>
                                    <ul class="dropdown-menu fullwidth">
                                        <li class="fhmm-content withdesc">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <h3 class="title">SPECIAL STYLES</h3>
                                                    <ul>
                                                        <li><a data-description="Default Homepage" href="index.html">Home Slider Style</a></li>
                                                        <li><a data-description="Home with big map" href="index-2.html">Home Map Style</a></li>
                                                        <li><a data-description="Home with blog style" href="index-3.html">Home Blog Style</a></li>
                                                        <li><a data-description="List Property Page" href="list-property.html">List A Property</a></li>
                                                        <li><a data-description="Complete Search Page" href="advanced-search.html">Advanced Search</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-2">
                                                    <h3 class="title">PAGE STYLES</h3>
                                                    <ul>
                                                        <li><a data-description="Page with sidebar" href="page.html">Page Sidebar</a></li>
                                                        <li><a data-description="Page with full width" href="fullwidth.html">Page Full Width</a></li>
                                                        <li><a data-description="Page not found style" href="404.html">404 - Not Found</a></li>
                                                        <li><a data-description="Sitemap / archives style" href="sitemap.html">Sitemap</a></li>
                                                        <li><a data-description="Agent login page" href="login.html">Login / Register</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-2">
                                                    <h3 class="title">LISTING VIEWS</h3>
                                                    <ul>
                                                        <li><a data-description="List property page " href="list-view.html">List view</a></li>
                                                        <li><a data-description="Grid property page" href="grid-view.html">Grid view</a></li>
                                                        <li><a data-description="Google map property page" href="with-google-map.html">With Google Map</a></li>
                                                        <li><a data-description="Single property page" href="single-property.html">Single Property Page</a></li>
                                                        <li><a data-description="Property category page" href="property-category.html">Property Category Page</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-2">
                                                    <h3 class="title">AGENTS VIEWS</h3>
                                                    <ul>
                                                        <li><a data-description="Complete About Page" href="about.html">About Us</a></li>
                                                        <li><a data-description="Agencies listing page" href="agencies.html">Agencies Page</a></li>
                                                        <li><a data-description="Single agency page" href="single-agency.html">Single Agency</a></li>
                                                        <li><a data-description="Agents listing page" href="agents.html">Agents Page</a></li>
                                                        <li><a data-description="Single agent page" href="single-agent.html">Single Agent</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-2">
                                                    <h3 class="title">GALLERY STYLES</h3>
                                                    <ul>
                                                        <li><a data-description="Two columns gallery" href="two-columns-gallery.html">Two Columns Gallery</a></li>
                                                        <li><a data-description="Three columns gallery" href="three-columns-gallery.html">Three Columns Gallery</a></li>
                                                        <li><a data-description="Four columns gallery" href="four-columns-gallery.html">Four Columns Gallery</a></li>
                                                        <li><a data-description="Single gallery page" href="single-gallery.html">Single Gallery Page</a></li>
                                                        <li><a data-description="Gallery Category Page" href="gallery-category.html">Gallery Category</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-2">
                                                    <h3 class="title">BLOG STYLES</h3>
                                                    <ul>
                                                        <li><a data-description="Standard blog posts" href="blog.html">Standard Blog</a></li>
                                                        <li><a data-description="Two Columns Blog" href="two-blog.html">Two Columns Blog</a></li>
                                                        <li><a data-description="Grid style blog" href="grid-blog.html">Grid Style Blog</a></li>
                                                        <li><a data-description="Rich content single" href="single-blog.html">Single Blog Page</a></li>
                                                        <li><a data-description="A Blog Category Page" href="blog-category.html">Blog Category</a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- end row -->
                                        </li><!-- end grid demo -->
                                    </ul><!-- end drop down menu -->
                                </li><!-- end list elements -->
                                <!-- list elements -->
                                <li class="dropdown fhmm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">ADVANCED SEARCH <b class="caret"></b></a>
                                    <ul class="dropdown-menu half">
                                        <li class="fhmm-content withoutdesc">
                                            <div class="row">
                                                <form id="advanced_search_module" class="clearfix" action="#" name="advanced_search_module" method="post">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <label for="country">Country</label>
                                                        <select id="advanced_search_module_country" class="form-control">
                                                            <option value="usa">United States</option>
                                                            <option value="turkei">Turkei</option>
                                                            <option value="germany">Germany</option>
                                                            <option value="israel">Israel</option>
                                                            <option value="holland">Holland</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <label for="location">Location</label>
                                                        <select id="advanced_search_module_location" class="form-control">
                                                            <option value="miami">Miami</option>
                                                            <option value="antalya">Antalya</option>
                                                            <option value="bodrum">Bodrum</option>
                                                            <option value="hanue">Hanue</option>
                                                            <option value="aksa">Aksa</option>
                                                            <option value="amsterdam">Amsterdam</option>
                                                        </select>
                                                    </div>                                               
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="status">Status</label>
                                                        <select id="advanced_search_module_status" class="form-control">
                                                            <option value="rent">On Rent</option>
                                                            <option value="sale">On Sale</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="type">Type</label>
                                                        <select id="advanced_search_module_type" class="form-control">
                                                            <option value="apertment">Apertment</option>
                                                            <option value="condo">Condo</option>
                                                            <option value="villa">Villa</option>
                                                            <option value="cottage">Cottage</option>
                                                            <option value="house">House</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="bedrooms">Bedrooms</label>
                                                        <select id="advanced_search_module_bedrooms" class="form-control">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="baths">Baths</label>
                                                        <select id="advanced_search_module_baths" class="form-control">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="min_price">Min Price</label>
                                                        <select id="advanced_search_module_min_price" class="form-control">
                                                            <option value="0">$0</option>
                                                            <option value="1000">$1000</option>
                                                            <option value="5000">$5000</option>
                                                            <option value="10000">$10000</option>
                                                            <option value="25000">$25000</option>
                                                            <option value="50000+">$50000+</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="max_price">Max Price</label>
                                                        <select id="advanced_search_module_max_price" class="form-control">
                                                            <option value="1000">$1000</option>
                                                            <option value="5000">$5000</option>
                                                            <option value="15000">$15000</option>
                                                            <option value="25000">$25000</option>
                                                            <option value="50000">$50000</option>
                                                            <option value="100000+">$100000+</option>
                                                        </select>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <hr>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <p>For faster results, please use the advanced form above. If you want to contact us for more private results, <a href="contact.html">get in touch</a> right now.</p>  
                                                        
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <a href="#" class="btn btn-primary btn-block"><i class="fa fa-search"></i> SEARCH</a>                                                </div> 
                                                </form>
                                            </div>
                                        </li><!-- end grid demo -->
                                    </ul><!-- end drop down menu -->
                                </li><!-- end list elements -->
                                <!-- list elements -->
                                <li class="dropdown fhmm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">POPULAR PROPERTIES <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li class="fhmm-content fullwidth">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                    <div class="boxes first">
                                                        <div class="ImageWrapper boxes_img">
                                                            <img class="img-responsive" src="demos/01_home.jpg" alt="">
                                                            <div class="ImageOverlayH"></div>
                                                            <div class="Buttons StyleSc">
                                                                <span class="WhiteSquare"><a class="fancybox" href="demos/01_home.jpg"><i class="fa fa-search"></i></a>
                                                                </span>
                                                                <span class="WhiteSquare"><a class="fancybox" data-type="iframe" href="http://player.vimeo.com/video/64550407?autoplay=1"><i class="fa fa-video-camera"></i></a>
                                                                </span>
                                                                <span class="WhiteSquare"><a href="single-property.html"><i class="fa fa-link"></i></a>
                                                                </span>
                                                            </div>
                                                            <div class="box_type">$3.000.00</div>
                                                            <div class="status_type">For Sale</div>
                                                        </div>
                                                        <h2 class="title"><a href="single-property.html"> Home of your dreams</a> <small class="small_title">2307 New York City</small></h2>
                                                       
                                                        <div class="boxed_mini_details1 clearfix">
                                                            <span class="garage first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                                            <span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> 4</span>
                                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                                            <span class="sqft last"><strong>Area</strong><i class="icon-sqft"></i> 325</span>
                                                        </div>
                                                    </div><!-- end boxes -->
                                                </div>
                
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                    <div class="boxes">
                                                        <div class="ImageWrapper boxes_img">
                                                            <img class="img-responsive" src="demos/02_home.jpg" alt="">
                                                            <div class="ImageOverlayH"></div>
                                                            <div class="Buttons StyleMg">
                                                                <span class="WhiteSquare"><a class="fancybox" href="demos/02_home.jpg"><i class="fa fa-search"></i></a>
                                                                </span>
                                                                <span class="WhiteSquare"><a href="single-property.html"><i class="fa fa-link"></i></a>
                                                                </span>
                                                            </div>
                                                            <div class="box_type">$2550</div>
                                                            <div class="status_type">For Rent</div>
                                                        </div>
                                                        <h2 class="title"><a href="single-property.html"> A Family Home for all your needs</a> <small class="small_title">890 Istanbul / Maslak</small></h2>
                                                       
                                                        <div class="boxed_mini_details1 clearfix">
                                                            <span class="garage first"><strong>Garage</strong><i class="icon-garage"></i> 2</span>
                                                            <span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> 3</span>
                                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                                            <span class="sqft last"><strong>Area</strong><i class="icon-sqft"></i> 140</span>
                                                        </div>
                                                    </div><!-- end boxes -->
                                                </div>
                                                
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                    <div class="boxes">
                                                        <div class="ImageWrapper boxes_img">
                                                            <img class="img-responsive" src="demos/03_home.jpg" alt="">
                                                            <div class="ImageOverlayH"></div>
                                                            <div class="Buttons StyleMg">
                                                                <span class="WhiteSquare"><a class="fancybox" href="demos/03_home.jpg"><i class="fa fa-search"></i></a>
                                                                </span>
                                                                <span class="WhiteSquare"><a href="single-property.html"><i class="fa fa-link"></i></a>
                                                                </span>
                                                            </div>
                                                            <div class="box_type">$3000</div>
                                                            <div class="status_type">For Rent</div>
                                                        </div>
                                                        <h2 class="title"><a href="single-property.html"> Complete Apertment (1 Year)</a> <small class="small_title">50/7 Amsterdam / HOLLAND</small></h2>
                                                       
                                                        <div class="boxed_mini_details1 clearfix">
                                                            <span class="garage first"><strong>Garage</strong><i class="icon-garage"></i> 2</span>
                                                            <span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> 5</span>
                                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                                            <span class="sqft last"><strong>Area</strong><i class="icon-sqft"></i> 400</span>
                                                        </div>
                                                    </div><!-- end boxes -->
                                                </div>
                
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                    <div class="boxes last">
                                                        <div class="ImageWrapper boxes_img">
                                                            <img class="img-responsive" src="demos/04_home.jpg" alt="">
                                                            <div class="ImageOverlayH"></div>
                                                            <div class="Buttons StyleMg">
                                                                <span class="WhiteSquare"><a class="fancybox" href="demos/04_home.jpg"><i class="fa fa-search"></i></a>
                                                                </span>
                                                                <span class="WhiteSquare"><a href="single-property.html"><i class="fa fa-link"></i></a>
                                                                </span>
                                                            </div>
                                                            <div class="box_type">$5 000 000</div>
                                                            <div class="status_type">For Sale</div>
                                                        </div>
                                                        <h2 class="title"><a href="single-property.html"> Grand Triplex (Limited time)</a> <small class="small_title">1508 Bodrum / TURKEI</small></h2>
                                                       
                                                        <div class="boxed_mini_details1 clearfix">
                                                            <span class="garage first"><strong>Garage</strong><i class="icon-garage"></i> 3</span>
                                                            <span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> 12</span>
                                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 7</span>
                                                            <span class="sqft last"><strong>Area</strong><i class="icon-sqft"></i> 890</span>
                                                        </div>
                                                    </div><!-- end boxes -->
                                                </div>                       
                                            </div><!-- end row -->
                                        </li><!-- end grid demo -->
                                    </ul><!-- end drop down menu -->
                                </li><!-- end list elements -->
                                <!-- standard drop down -->
                                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">ELEMENTS <b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="faqs.html">Faqs</a></li>
                                        <li><a href="icons.html">Retina Icons</a></li>
                                        <li><a href="animations.html">Animations</a></li>
                                        <li><a href="buttons.html">Buttons</a></li>
                                        <li><a href="form-elements.html">Form Elements</a></li>
                                        <li><a href="tables.html">Table Elements</a></li>
                                        <li><a href="tabs.html">Tab Elements</a></li>
                                        <li><a href="accordion-toggle.html">Accordions / Toggles</a></li>
                                        <li><a href="alerts.html">Alert Elements</a></li>
                                        <li><a href="carousel.html">Carousel Elements</a></li>
                                        <li><a href="progress-bars.html">Progress Bars</a></li>
                                        <li><a href="columns.html">Columns / Layouts</a></li>
                                        <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                        <li><a href="tooltips-popovers.html">Tooltips & Popovers</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Drop down</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Sub item</a></li>
                                                <li><a href="#">Sub item</a></li>
                                                <li><a href="#">Sub item</a></li>
                                            </ul><!-- end dropdown-menu -->
                                        </li><!-- end dropdown-submenu -->
                                    </ul><!-- end dropdown-menu -->
                                </li><!-- end standard drop down -->
                                <li><a href="list-property.html">LIST A PROPERTY</a></li>
                            </ul><!-- end nav navbar-nav -->
                        </div><!-- end #navbar-collapse-1 -->
                     </div><!-- end dm_container -->
                </nav><!-- end navbar navbar-default fhmm -->
            </div><!-- end container -->
        </header><!-- end header -->

        <section class="post-wrapper-top dm-shadow clearfix">
            <div class="container">
                <div class="post-wrapper-top-shadow">
                    <span class="s1"></span>
                </div>
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li>Property Category: Villa</li>
                    </ul>
                    <h2>Property Category: Villa</h2>
                </div>
            </div>
        </section><!-- end post-wrapper-top -->
        
        <section class="generalwrapper dm-shadow clearfix">
        	<div class="container">
				<div class="row">
                	<div id="left_sidebar" class="col-lg-2 col-md-3 col-sm-3 col-xs-12 first clearfix">
              			<div class="widget clearfix">
                        	<div class="title"><h3>Banner Ads</h3></div>
							<a href="#"><img src="demos/03_banner.png" alt="" class="img-thumbnail img-responsive"></a>
                        </div><!-- end widget -->
                        
              			<div class="widget clearfix">
                        	<div class="title"><h3>Site Links</h3></div>
                            <ul class="list">
                            	<li><a title="" href="#">Support</a></li>
                            	<li><a title="" href="#">Get in touch</a></li>
                            	<li><a title="" href="#">About us</a></li>
                            	<li><a title="" href="#">Terms of use</a></li>
                            	<li><a title="" href="#">Copyrights</a></li>
                            	<li><a title="" href="#">Join us</a></li>
                            </ul>
                        </div>
                                                       
                    	<div class="widget cats_widget clearfix">
							<div class="title"><h3><i class="icon-sale"></i> For Sale</h3></div>
                			<ul class="real-estate-cats-widget" data-effect="slide-left">
                                <li><a href="#">Housing (21)</a>
                                    <ul>
                                        <li><a href="#">Apartment</a></li>
                                        <li><a href="#">Villa</a></li>
                                        <li><a href="#">Summerhouse</a></li>
                                        <li><a href="#">Family House</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Workplace (12)</a>
                                    <ul>
                                        <li><a href="#">Shop</a></li>
                                        <li><a href="#">Apartment</a></li>
                                        <li><a href="#">Resort</a></li>
                                        <li><a href="#">Emporium</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Land (9)</a>
                                    <ul>
                                        <li><a href="#">Arable Field</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- end widget -->
                        
                    	<div class="widget clearfix">
							<div class="title"><h3><i class="icon-rent"></i> For Rent</h3></div>
                			<ul class="real-estate-cats-widget" data-effect="slide-left">
                                <li><a href="#">Housing (15)</a>
                                    <ul>
                                        <li><a href="#">Apartment</a></li>
                                        <li><a href="#">Villa</a></li>
                                        <li><a href="#">Summerhouse</a></li>
                                        <li><a href="#">Family House</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Workplace (65)</a>
                                    <ul>
                                        <li><a href="#">Shop</a></li>
                                        <li><a href="#">Apartment</a></li>
                                        <li><a href="#">Resort</a></li>
                                        <li><a href="#">Emporium</a></li>
                                        <li><a href="#">Arable Field</a></li>
                                        <li><a href="#">Land</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- end widget -->
                    </div><!-- #left_sidebar -->
                    
                	<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
                    	<div class="property_wrapper boxes clearfix">
							<div class="ImageWrapper boxes_img">
								<img class="img-responsive" src="demos/01_home.jpg" alt="">
								<div class="ImageOverlayH"></div>
								<div class="Buttons StyleMg">
									<span class="WhiteSquare"><a class="fancybox" href="demos/01_home.jpg"><i class="fa fa-search"></i></a></span>
									<span class="WhiteSquare"><a href="single-property.html"><i class="fa fa-link"></i></a></span>
								</div><!-- end Buttons -->
								<div class="box_type">$2.500.000</div>
								<div class="status_type">For Sale</div>
							</div><!-- ImageWrapper -->
                            
							<div class="title clearfix">
                            	<span class="agent_img pull-right"><a data-placement="bottom" data-toggle="tooltip" data-original-title="Mark ANTHONY" title="" href="single-agent.html"><img width="75" class="img-responsive img-thumbnail" src="demos/03_team.png" alt=""></a></span>
                            	<h3><a href="single-property.html"> A Family Home for all your needs</a> 
                                <small class="small_title">890 Istanbul / Maslak</small>
                                </h3>
							</div><!-- end title -->

							<div class="boxed_mini_details1 clearfix">
								<span class="type first"><strong>Type</strong><a href="agencies.html">Villa</a></span>
								<span class="sqft"><strong>Area</strong><i class="icon-sqft"></i> 140</span>
								<span class="garage"><strong>Garage</strong><i class="icon-garage"></i> 2</span>
								<span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> 3</span>
								<span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
								<span class="furnished"><strong>Furnish</strong><i class="icon-furnished"></i> Yes</span>
								<span class="pool last"><strong>Pool</strong><i class="icon-pool"></i> Yes</span>
							</div><!-- end boxed_mini_details1 -->
                            
                            <div class="property_desc clearfix">
                            	<p>Lorem Ipsum is simply dummy Lorem Ipsum has been the industry's standard dummy text. Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free.</p>
                                <a class="btn btn-primary btn-xs" href="single-property.html" title="">read more</a>
                            </div>
                        </div><!-- end property_wrapper -->

                    	<div class="property_wrapper boxes clearfix">
							<div class="ImageWrapper boxes_img">
								<img class="img-responsive" src="demos/02_home.jpg" alt="">
								<div class="ImageOverlayH"></div>
								<div class="Buttons StyleMg">
									<span class="WhiteSquare"><a class="fancybox" href="demos/02_home.jpg"><i class="fa fa-search"></i></a></span>
									<span class="WhiteSquare"><a href="single-property.html"><i class="fa fa-link"></i></a></span>
								</div><!-- end Buttons -->
								<div class="box_type">$3.000</div>
								<div class="status_type">For Rent</div>
							</div><!-- ImageWrapper -->
                            
							<div class="title clearfix">
                            	<span class="agent_img pull-right"><a data-placement="bottom" data-toggle="tooltip" data-original-title="Stephania JOHNSON" title="" href="single-agent.html"><img width="75" class="img-responsive img-thumbnail" src="demos/02_team.png" alt=""></a></span>
                            	<h3><a href="single-property.html">Complete Apertment (1 Year)</a> 
                                <small class="small_title">50/7 Amsterdam / HOLLAND</small>
                                </h3>
							</div><!-- end title -->

							<div class="boxed_mini_details1 clearfix">
								<span class="type first"><strong>Type</strong><a href="agencies.html">Villa</a></span>
								<span class="sqft"><strong>Area</strong><i class="icon-sqft"></i> 140</span>
								<span class="garage"><strong>Garage</strong><i class="icon-garage"></i> 2</span>
								<span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> 3</span>
								<span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
								<span class="furnished"><strong>Furnish</strong><i class="icon-furnished"></i> Yes</span>
								<span class="pool last"><strong>Pool</strong><i class="icon-pool"></i> Yes</span>
							</div><!-- end boxed_mini_details1 -->
                            
                            <div class="property_desc clearfix">
                            	<p>Lorem Ipsum is simply dummy Lorem Ipsum has been the industry's standard dummy text. Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free.</p>
                                <a class="btn btn-primary btn-xs" href="single-property.html" title="">read more</a>
                            </div>
                        </div><!-- end property_wrapper -->

                    	<div class="property_wrapper boxes clearfix">
							<div class="ImageWrapper boxes_img">
								<img class="img-responsive" src="demos/03_home.jpg" alt="">
								<div class="ImageOverlayH"></div>
								<div class="Buttons StyleMg">
									<span class="WhiteSquare"><a class="fancybox" href="demos/03_home.jpg"><i class="fa fa-search"></i></a></span>
									<span class="WhiteSquare"><a href="single-property.html"><i class="fa fa-link"></i></a></span>
								</div><!-- end Buttons -->
								<div class="box_type">$1.560.000</div>
								<div class="status_type">For Sale</div>
							</div><!-- ImageWrapper -->
                            
							<div class="title clearfix">
                            	<span class="agent_img pull-right"><a data-placement="bottom" data-toggle="tooltip" data-original-title="Mustapha COLLIENS" title="" href="single-agent.html"><img width="75" class="img-responsive img-thumbnail" src="demos/01_team.png" alt=""></a></span>
                            	<h3><a href="single-property.html">Creative & Modern Family House</a> 
                                <small class="small_title">120/79 ST Antalya / TURKEI</small>
                                </h3>
							</div><!-- end title -->

							<div class="boxed_mini_details1 clearfix">
								<span class="type first"><strong>Type</strong><a href="agencies.html">House</a></span>
								<span class="sqft"><strong>Area</strong><i class="icon-sqft"></i> 340</span>
								<span class="garage"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
								<span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
								<span class="status"><strong>Baths</strong><i class="icon-bath"></i> 4</span>
								<span class="furnished"><strong>Furnish</strong><i class="icon-furnished"></i> Yes</span>
								<span class="pool last"><strong>Pool</strong><i class="icon-pool"></i> No</span>
							</div><!-- end boxed_mini_details1 -->
                            
                            <div class="property_desc clearfix">
                            	<p>Lorem Ipsum is simply dummy Lorem Ipsum has been the industry's standard dummy text. Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free.</p>
                                <a class="btn btn-primary btn-xs" href="single-property.html" title="">read more</a>
                            </div>
                        </div><!-- end property_wrapper -->

                    	<div class="property_wrapper boxes clearfix">
							<div class="ImageWrapper boxes_img">
								<img class="img-responsive" src="demos/05_home.png" alt="">
								<div class="ImageOverlayH"></div>
								<div class="Buttons StyleMg">
									<span class="WhiteSquare"><a class="fancybox" href="demos/05_home.png"><i class="fa fa-search"></i></a></span>
									<span class="WhiteSquare"><a href="single-property.html"><i class="fa fa-link"></i></a></span>
								</div><!-- end Buttons -->
								<div class="box_type">$450.000</div>
								<div class="status_type">For Sale</div>
							</div><!-- ImageWrapper -->
                            
							<div class="title clearfix">
                            	<span class="agent_img pull-right"><a data-placement="bottom" data-toggle="tooltip" data-original-title="Jenny ANTHONY" title="" href="single-agent.html"><img width="75" class="img-responsive img-thumbnail" src="demos/04_team.png" alt=""></a></span>
                            	<h3><a href="single-property.html">Creative & Modern Family House</a> 
                                <small class="small_title">120/79 ST Antalya / TURKEI</small>
                                </h3>
							</div><!-- end title -->

							<div class="boxed_mini_details1 clearfix">
								<span class="type first"><strong>Type</strong><a href="agencies.html">House</a></span>
								<span class="sqft"><strong>Area</strong><i class="icon-sqft"></i> 980</span>
								<span class="garage"><strong>Garage</strong><i class="icon-garage"></i> 4</span>
								<span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> 6</span>
								<span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
								<span class="furnished"><strong>Furnish</strong><i class="icon-furnished"></i> No</span>
								<span class="pool last"><strong>Pool</strong><i class="icon-pool"></i> Yes</span>
							</div><!-- end boxed_mini_details1 -->
                            
                            <div class="property_desc clearfix">
                            	<p>Lorem Ipsum is simply dummy Lorem Ipsum has been the industry's standard dummy text. Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free.</p>
                                <a class="btn btn-primary btn-xs" href="single-property.html" title="">read more</a>
                            </div>
                        </div><!-- end property_wrapper -->
                        
						<div class="pagination_wrapper clearfix">
                            <!-- Pagination Normal -->
                            <ul class="pagination">
                              <li><a href="#">«</a></li>
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li class="disabled"><a href="#">»</a></li>
                            </ul>
                        </div>
        
                    </div><!-- end content -->
                    
                    <div id="right_sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 last clearfix">
                    	<div class="widget clearfix">
                        	<div class="search_widget">
                            	<div class="title"><h3><i class="fa fa-search"></i> Search For Property</h3></div>
								<form action="#" id="search_form">
                                 	<input type="text" class="form-control" placeholder="Search by ID or property name...">     
								</form><!-- end search form -->
                            </div><!-- end search_widget -->
                        </div><!-- end widget -->

                    	<div class="widget clearfix">
                        	<div class="agents_widget">
                            	<div class="title"><h3><i class="fa fa-users"></i> Our Agents</h3></div>
								<div class="agent boxes clearfix" data-effect="slide-right">
                                    <div class="image">
                                    	<img class="img-circle img-responsive img-thumbnail" src="demos/01_team.png" alt="">
                                    </div><!-- image -->
                                    <div class="agent_desc">
                                    	<h3 class="title">Mustapha COLLIENS</h3>
										<p><span><i class="fa fa-envelope"></i> info@yoursite.com</span></p>
                                        <p><span><i class="fa fa-phone-square"></i> +90 333 444 55 66</span></p>
                                    </div><!-- agento desc -->
								</div>
								<div class="agent boxes clearfix" data-effect="slide-right">
                                    <div class="image">
                                    	<img class="img-circle img-responsive img-thumbnail" src="demos/02_team.png" alt="">
                                    </div><!-- image -->
                                    <div class="agent_desc">
                                    	<h3 class="title">Stephania JOHNSON</h3>
										<p><span><i class="fa fa-envelope"></i> info@yoursite.com</span></p>
                                        <p><span><i class="fa fa-phone-square"></i> +90 333 444 55 66</span></p>
                                    </div><!-- agento desc -->
								</div>
								<div class="agent boxes clearfix" data-effect="slide-right">
                                    <div class="image">
                                    	<img class="img-circle img-responsive img-thumbnail" src="demos/03_team.png" alt="">
                                    </div><!-- image -->
                                    <div class="agent_desc">
                                    	<h3 class="title">Mark ANTHONY</h3>
										<p><span><i class="fa fa-envelope"></i> info@yoursite.com</span></p>
                                        <p><span><i class="fa fa-phone-square"></i> +90 333 444 55 66</span></p>
                                    </div><!-- agento desc -->
								</div>     
								<div class="agent boxes clearfix" data-effect="slide-right">
                                    <div class="image">
                                    	<img class="img-circle img-responsive img-thumbnail" src="demos/04_team.png" alt="">
                                    </div><!-- image -->
                                    <div class="agent_desc">
                                    	<h3 class="title">Jenny ANTHONY</h3>
										<p><span><i class="fa fa-envelope"></i> info@yoursite.com</span></p>
                                        <p><span><i class="fa fa-phone-square"></i> +90 333 444 55 66</span></p>
                                    </div><!-- agento desc -->
								</div>                          
                            </div><!-- end of agents_widget -->
						</div><!-- end of widget -->
                     	<div class="widget clearfix">
                        	<div class="title"><h3>Banner Ads</h3></div>
							<img data-effect="fade" class="text-center img-thumbnail img-responsive" src="demos/01_banner.png" alt="">
						</div><!-- end of widget -->  
					</div><!-- end sidebar -->
                    
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end generalwrapper -->

        <section class="message_banner dm-shadow">
        	<div class="container">
            	<div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="message">
                        <h2>ESTATE PLUS A <strong>Real Estate</strong> Website Template</h2>
                        </div>
                	</div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="message">
                      		<a class="btn btn-primary btn-block btn-lg" href="#"><i class="fa fa-home"></i> VIEW ALL PROPERTIES</a>
                        </div>
                	</div>
                </div>
            </div>
        </section>
        
        <footer class="footer1">
        	<div class="container">
            	<div class="row">
                	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 first clearfix">
                   		<div class="widget clearfix">
                        	<div class="title"><h3>Site Links</h3><hr></div>
                            <ul class="list">
                            	<li><a title="" href="#">Support</a></li>
                            	<li><a title="" href="#">Get in touch</a></li>
                            	<li><a title="" href="#">About us</a></li>
                            	<li><a title="" href="#">Terms of use</a></li>
                            	<li><a title="" href="#">Copyrights</a></li>
                            	<li><a title="" href="#">Join us</a></li>
                            </ul>
                        </div>
                    </div><!-- end col-lg-3 -->
                	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-xs-12 clearfix">
                   		<div class="widget clearfix">
                        	<div class="title"><h3><i class="fa fa-home"></i> About Estate+</h3><hr></div>
                            	<p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free.</p>
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-info"></i> read more</a>
                        </div>
                    </div><!-- end col-lg-3 -->
                	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-xs-12 clearfix">
                   		<div class="widget clearfix">
                        	<div class="title"><h3>Twitter Stream</h3><hr></div>
                            <ul class="tweet">
                            	<li><a title="" href="#">@support</a> Latin words, combined with sentence structures, to generate Lorem Ipsum which looks reasonable.
                                <small><a href="#">12 Minutes Ago</a></small>
                                </li>
                            	<li><a title="" href="#">@designingmedia</a> To generate Lorem Ipsum which looks reasonable.
                                <small><a href="#">34 Minutes Ago</a></small>
                                </li>
                            </ul>
                        </div>
                    </div><!-- end col-lg-3 -->
                	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 last clearfix">
                   		<div class="widget clearfix">
                        	<div class="title"><h3><i class="fa fa-envelope-o"></i> Newsletter Form</h3><hr></div>
                            <p>Latin words, combined with a handful of model sentence structures, to generate.</p>
                              <form class="form-inline" role="form">
                                <div class="form-group">
                                  <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                                </div>
                                <button type="submit" class="btn btn-primary">SUBSCRIBE</button>
                              </form>
                        </div>
                    </div><!-- end col-lg-4 -->
                </div><!-- row -->
            </div><!-- container -->
        </footer><!-- footer1 -->
        
        <section class="copyright">
        	<div class="container">
            	<div class="row">
                	<div class="col-lg-6 col-sm-6 col-md-6">
                        <p><small>Estate+ a real estate template. Copyright 2014</small></p>
                    </div>
                	<div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="social clearfix pull-right">
                            <span><a data-placement="top" data-toggle="tooltip" data-original-title="Twitter" title="" href="#"><i class="fa fa-twitter"></i></a></span>
                            <span><a data-placement="top" data-toggle="tooltip" data-original-title="Facebook" title="" href="#"><i class="fa fa-facebook"></i></a></span>
                            <span><a data-placement="top" data-toggle="tooltip" data-original-title="Google Plus" title="" href="#"><i class="fa fa-google-plus"></i></a></span>
                            <span><a data-placement="top" data-toggle="tooltip" data-original-title="Linkedin" title="" href="#"><i class="fa fa-linkedin"></i></a></span>
                            <span><a data-placement="top" data-toggle="tooltip" data-original-title="Github" title="" href="#"><i class="fa fa-github"></i></a></span>
                            <span><a data-placement="top" data-toggle="tooltip" data-original-title="Pinterest" title="" href="#"><i class="fa fa-pinterest"></i></a></span>
                            <span><a data-placement="top" data-toggle="tooltip" data-original-title="RSS" title="" href="#"><i class="fa fa-rss"></i></a></span>
                        </div><!-- end social -->
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end copyright -->
        
    
	<!-- Bootstrap core and JavaScript's
    ================================================== -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.parallax.js"></script>
    <script src="js/jquery.fitvids.js"></script>    
	<script src="js/jquery.unveilEffects.js"></script>	
	<script src="js/retina-1.1.0.js"></script>
    <script src="js/fhmm.js"></script>
	<script src="js/bootstrap-select.js"></script>
    <script src="fancyBox/jquery.fancybox.pack.js"></script>
	<script src="js/application.js"></script>
    
	<!-- FlexSlider JavaScript
    ================================================== -->
 	<script src="js/jquery.flexslider.js"></script>
	<script>
        $(window).load(function() {
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: true,
                directionNav: false,
                animationLoop: true,
                slideshow: true,
                itemWidth: 114,
                itemMargin: 0,
                asNavFor: '#slider'
            });
       
            $('#slider').flexslider({
                animation: "fade",
                controlNav: false,
                animationLoop: false,
                slideshow: true,
                sync: "#carousel"
            });
            
            $('#property-slider .flexslider').flexslider({
                animation: "fade",
                slideshowSpeed: 6000,
                animationSpeed:	1300,
                directionNav: true,
                controlNav: false,
                keyboardNav: true
            });
        });
    </script>

</body>
</html>