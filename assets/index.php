<?php
    require_once("clases/class.listar.php");
    $muestra = new Listados();
    $aConf = $muestra->obtenerConfiguracion();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Cliente - Prueba</title>

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
                    
            	</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end topbar -->        <header class="header1">
			<div class="container">
            	<div class="row header-row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                       <div class="logo-wrapper clearfix">
							<div class="logo">
								<a href="index.html" title="Home">
									<img src="logotipo/logo.jpg" alt="Estate">
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
                                
                                <!-- list elements -->
                                <li class="dropdown fhmm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">BÚSQUEDA AVANZADA <b class="caret"></b></a>
                                    <ul class="dropdown-menu half">
                                        <li class="fhmm-content withoutdesc">
                                            <div class="row">
                                                <form id="advanced_search_module" class="clearfix" action="#" name="advanced_search_module" method="post">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <label for="country">Estado</label>
                                                        <select id="advanced_search_module_country" class="form-control">
                                                            <option value="usa">United States</option>
                                                            <option value="turkei">Turkei</option>
                                                            <option value="germany">Germany</option>
                                                            <option value="israel">Israel</option>
                                                            <option value="holland">Holland</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <label for="location">Delegación/Municipio</label>
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
                                                        <label for="status">Estatus</label>
                                                        <select id="advanced_search_module_status" class="form-control">
                                                            <option value="rent">On Rent</option>
                                                            <option value="sale">On Sale</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="type">Tipo</label>
                                                        <select id="advanced_search_module_type" class="form-control">
                                                            <option value="apertment">Apertment</option>
                                                            <option value="condo">Condo</option>
                                                            <option value="villa">Villa</option>
                                                            <option value="cottage">Cottage</option>
                                                            <option value="house">House</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="bedrooms">Recámaras</label>
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
                                                        <label for="baths">Baños</label>
                                                        <select id="advanced_search_module_baths" class="form-control">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="min_price">Precio Mínimo</label>
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
                                                        <label for="max_price">Precion Máximo</label>
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
                                                        <p>Para resultados más rápidos, por favor utilice el formulario de arriba, si desea contactarnos para obtener resultados confidenciales, <a href="contact.html">póngase en contacto </a> con nosotros.</p>  
                                                        
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <a href="#" class="btn btn-primary btn-block"><i class="fa fa-search"></i> BUSCAR</a>                                                </div> 
                                                </form>
                                            </div>
                                        </li><!-- end grid demo -->
                                    </ul><!-- end drop down menu -->
                                </li><!-- end list elements -->
                                <!-- list elements -->
                                <li class="dropdown fhmm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">PROPIEDADES DESTACADAS <b class="caret"></b></a>
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
                                                        <h2 class="title"><a href="single-property.html"> Casa</a> <small class="small_title">2307 New York City</small></h2>
                                                       
                                                        <div class="boxed_mini_details1 clearfix">
                                                            <span class="garage first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                                            <span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> 4</span>
                                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                                            <span class="sqft last"><strong>Area</strong><i class="icon-sqft"></i> 325</span>
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
                                <li><a href="list-property.html">CONTACTO</a></li>
                            </ul><!-- end nav navbar-nav -->
                        </div><!-- end #navbar-collapse-1 -->
                     </div><!-- end dm_container -->
                </nav><!-- end navbar navbar-default fhmm -->
            </div><!-- end container -->
        </header><!-- end header -->
        
		<section id="one-parallax" class="parallax" style="background-image: url('demos/01_parallax.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
		<div class="mapandslider">
        	<div class="overlay1 dm-shadow">
			<div class="container">
				<div class="row">
                	<div class="col-lg-8 col-md-8 col-sm-12">
                        <div id="property-slider" class="clearfix">
                            <div class="flexslider">
                                <ul class="slides">
									<li>
                                        <div class="desc">
                                            <div class="ps-desc">
                                                <h3><a href="#">Sea view duplex villa</a></h3>
                                                <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free. <a href="#">read more</a></p>
                                                <span class="type">Villa</span>
                                                <span class="price">€3 200 000</span>
                                                <a href="#" class="status">On Sale</a>
                                            </div>
                                        </div>
                                        <a href="#"><img src="demos/02_slider.png" alt=""></a>
									</li>
									<li>
                                        <div class="desc">
                                            <div class="ps-desc">
                                                <h3><a href="#">Home of your dreams</a></h3>
                                                <p>Model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free. <a href="#">read more</a></p>
                                                <span class="type">Family Home</span>
                                                <span class="price">€1 112 000</span>
                                                <a href="#" class="status">On Sale</a>
                                            </div>
                                        </div>
                                        <a href="#"><img src="demos/01_slider.png" alt=""></a>
									</li>  
									<li>
                                        <div class="desc">
                                            <div class="ps-desc">
                                                <h3><a href="#">Modern house interior</a></h3>
                                                <p>Lo generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free. <a href="#">read more</a></p>
                                                <span class="type">Family Home</span>
                                                <span class="price">€1 300</span>
                                                <a href="#" class="status">On Rent</a>
                                            </div>
                                        </div>
                                        <a href="#"><img src="demos/03_slider.png" alt=""></a>
									</li>
								</ul><!-- end slides -->
                            </div><!-- end flexslider -->
                        </div><!-- end property-slider -->
    				</div><!-- end col-lg-8 -->
                    
					<div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="searchmodule clearfix" data-effect="slide-right">
                        <form id="advanced_search" action="#" class="clearfix" name="advanced_search" method="post">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label for="country">Estado</label>
								<select id="country" class="show-menu-arrow selectpicker">
									<option value="usa">United States</option>
									<option value="turkei">Turkei</option>
									<option value="germany">Germany</option>
									<option value="israel">Israel</option>
									<option value="holland">Holland</option>
								</select>                                     
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label for="location">Delegación/Municipio</label>
                                <select id="location" class="show-menu-arrow selectpicker">
                                    <option value="miami">Miami</option>
                                    <option value="antalya">Antalya</option>
                                    <option value="bodrum">Bodrum</option>
                                    <option value="hanue">Hanue</option>
                                    <option value="aksa">Aksa</option>
                                    <option value="amsterdam">Amsterdam</option>
                                </select>
                            </div>                                               
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label for="status">Estatus</label>
                                <select id="status" class="show-menu-arrow selectpicker">
                                    <option value="rent">On Rent</option>
                                    <option value="sale">On Sale</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label for="type">Tipo</label>
                                <select id="type" class="show-menu-arrow selectpicker">
                                    <option value="apertment">Apertment</option>
                                    <option value="condo">Condo</option>
                                    <option value="villa">Villa</option>
                                    <option value="cottage">Cottage</option>
                                    <option value="house">House</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label for="bedrooms">Recámaras</label>
                                <select id="bedrooms" class="show-menu-arrow selectpicker">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label for="baths">Baños</label>
                                <select id="baths" class="show-menu-arrow selectpicker">
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label for="min_price">Precio Mínimo</label>
                                <select id="min_price" class="show-menu-arrow selectpicker">
                                    <option value="0">$0</option>
                                    <option value="1000">$1000</option>
                                    <option value="5000">$5000</option>
                                    <option value="10000">$10000</option>
                                    <option value="25000">$25000</option>
                                    <option value="50000+">$50000+</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label for="max_price">Precio Máximo</label>
                                <select id="max_price" class="show-menu-arrow selectpicker">
                                    <option value="1000">$1000</option>
                                    <option value="5000">$5000</option>
                                    <option value="15000">$15000</option>
                                    <option value="25000">$25000</option>
                                    <option value="50000">$50000</option>
                                    <option value="100000+">$100000+</option>
                                </select>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <a href="#" class="btn btn-inverse btn-block"><i class="fa fa-search"></i> BUSCAR PROPIEDAD</a>
                            </div>
						</form>
                        </div><!-- end search module -->
					</div><!-- end col-lg-4 --> 
				</div><!-- end row -->
			</div><!-- end dm_container -->
            </div>
            </div>
		</section><!-- end mapandslider -->

        

		<section id="three-parallax" class="parallax" style="background-image: url('demos/02_parallax.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
            <div class="threewrapper">
                <div class="overlay1 dm-shadow">
                    <div class="container">
                    	<div class="row">
                        	<div class="text-center clearfix">
								<h3 class="big_title">Propiedades</h3>
                            </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="boxes first" data-effect="slide-bottom">
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
                                        <h2 class="title"><a href="single-property.html"> La casa de tu sueños</a> <small class="small_title">2307 New York City</small></h2>
                                       
                                        <div class="boxed_mini_details1 clearfix">
                                            <span class="garage first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> 4</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                            <span class="sqft last"><strong>Area</strong><i class="icon-sqft"></i> 325</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="boxes" data-effect="slide-bottom">
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
                                    <div class="boxes" data-effect="slide-bottom">
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
                                    <div class="boxes last" data-effect="slide-bottom">
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

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="boxes first" data-effect="slide-bottom">
                                        <div class="ImageWrapper boxes_img">
                                            <img class="img-responsive" src="demos/06_home.png" alt="">
                                            <div class="ImageOverlayH"></div>
                                            <div class="Buttons StyleMg">
                                                <span class="WhiteSquare"><a class="fancybox" href="demos/06_home.png"><i class="fa fa-search"></i></a>
                                                </span>
                                                <span class="WhiteSquare"><a href="single-property.html"><i class="fa fa-link"></i></a>
                                                </span>
                                            </div>
                                            <div class="box_type">$2.100.00</div>
                                            <div class="status_type">For Sale</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Sea & Sun and A House</a> <small class="small_title">2307 New York City</small></h2>
                                       
                                        <div class="boxed_mini_details1 clearfix">
                                            <span class="garage first"><strong>Garage</strong><i class="icon-garage"></i> 3</span>
                                            <span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> 4</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                            <span class="sqft last"><strong>Area</strong><i class="icon-sqft"></i> 445</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="boxes" data-effect="slide-bottom">
                                        <div class="ImageWrapper boxes_img">
                                            <img class="img-responsive" src="demos/07_home.png" alt="">
                                            <div class="ImageOverlayH"></div>
                                            <div class="Buttons StyleMg">
                                                <span class="WhiteSquare"><a class="fancybox" href="demos/07_home.png"><i class="fa fa-search"></i></a>
                                                </span>
                                                <span class="WhiteSquare"><a href="single-property.html"><i class="fa fa-link"></i></a>
                                                </span>
                                            </div>
                                            <div class="box_type">$3650</div>
                                            <div class="status_type">For Rent</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Creative & Modern Family House</a> <small class="small_title">120/79 ST Antalya / TURKEI</small></h2>
                                       
                                        <div class="boxed_mini_details1 clearfix">
                                            <span class="garage first"><strong>Garage</strong><i class="icon-garage"></i> 2</span>
                                            <span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> 3</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 6</span>
                                            <span class="sqft last"><strong>Area</strong><i class="icon-sqft"></i> 240</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="boxes" data-effect="slide-bottom">
                                        <div class="ImageWrapper boxes_img">
                                            <img class="img-responsive" src="demos/08_home.png" alt="">
                                            <div class="ImageOverlayH"></div>
                                            <div class="Buttons StyleMg">
                                                <span class="WhiteSquare"><a class="fancybox" href="demos/08_home.png"><i class="fa fa-search"></i></a>
                                                </span>
                                                <span class="WhiteSquare"><a href="single-property.html"><i class="fa fa-link"></i></a>
                                                </span>
                                            </div>
                                            <div class="box_type">$5200</div>
                                            <div class="status_type">For Rent</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> 2 Week Holland Travel</a> <small class="small_title">21/22 Hanue / Germany</small></h2>
                                       
                                        <div class="boxed_mini_details1 clearfix">
                                            <span class="garage first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 4</span>
                                            <span class="sqft last"><strong>Area</strong><i class="icon-sqft"></i> 200</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="boxes last" data-effect="slide-bottom">
                                        <div class="ImageWrapper boxes_img">
                                            <img class="img-responsive" src="demos/09_home.png" alt="">
                                            <div class="ImageOverlayH"></div>
                                            <div class="Buttons StyleSc">
                                                <span class="WhiteSquare"><a class="fancybox" href="demos/09_home.png"><i class="fa fa-search"></i></a>
                                                </span>
                                                <span class="WhiteSquare"><a class="fancybox" data-type="iframe" href="http://player.vimeo.com/video/64550407?autoplay=1"><i class="fa fa-video-camera"></i></a>
                                                </span>
                                                <span class="WhiteSquare"><a href="single-property.html"><i class="fa fa-link"></i></a>
                                                </span>
                                            </div>
                                            <div class="box_type">$2 200 000</div>
                                            <div class="status_type">For Sale</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> House in New York City</a> <small class="small_title">980 Roterdam / Holland</small></h2>
                                       
                                        <div class="boxed_mini_details1 clearfix">
                                            <span class="garage first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> 5</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                            <span class="sqft last"><strong>Area</strong><i class="icon-sqft"></i> 360</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                                   
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end overlay1 -->
            </div><!-- end threewrapper -->
        </section><!-- end parallax -->
                  
        <section class="generalwrapper dm-shadow clearfix">
        	<div class="container">
				<div class="row">
                	<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 first clearfix">
                    	<div class="widget cats_widget clearfix">
							<div class="title"><h3><i class="icon-sale"></i> Venta</h3></div>
                			<ul class="real-estate-cats-widget" data-effect="slide-left">
                                <li><a href="#">Hogares</a>
                                    <ul>
                                        <li><a href="#">Casa</a></li>
                                        <li><a href="#">Casa en Condominio</a></li>
                                        <li><a href="#">Departamento</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Trabajos</a>
                                    <ul>
                                        <li><a href="#">Edificio</a></li>
                                        <li><a href="#">Local</a></li>
                                        <li><a href="#">Oficina</a></li>
                                        <li><a href="#">Bodega</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Otros</a>
                                    <ul>
                                        <li><a href="#">Terrenos</a></li>
                                        <li><a href="#">Ranchos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- end widget -->
                        
                    	<div class="widget clearfix">
							<div class="title"><h3><i class="icon-rent"></i> Renta</h3></div>
                			<ul class="real-estate-cats-widget" data-effect="slide-left">
                                <li><a href="#">Hogares</a>
                                    <ul>
                                        <li><a href="#">Casa</a></li>
                                        <li><a href="#">Casa en Condominio</a></li>
                                        <li><a href="#">Departamento</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Trabajos</a>
                                    <ul>
                                        <li><a href="#">Edificio</a></li>
                                        <li><a href="#">Local</a></li>
                                        <li><a href="#">Oficina</a></li>
                                        <li><a href="#">Bodega</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Otros</a>
                                    <ul>
                                        <li><a href="#">Terrenos</a></li>
                                        <li><a href="#">Ranchos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- end widget -->
                    </div>
                    
                	<div class="col-lg-7 col-md-9 col-sm-9 col-xs-12 clearfix">
                        <div id="tabbed_widget" class="tabbable clearfix" data-effect="slide-bottom"> 
                          <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab" data-toggle="tab">Hogar</a></li>
                            <li><a href="#tab2" data-toggle="tab">Terreno</a></li>
                            <li><a href="#tab3" data-toggle="tab">Trabajo</a></li>
                          </ul>
                          <div class="tab-content tabbed_widget clearfix">
                            <div class="tab-pane active" id="tab">
                                <div class="col-lg-4 col-md-4 col-sm-4 first">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/01_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$3.000.00</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Home of your dreams</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 4</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/02_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$2.332.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Sea view duplex villa</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 2</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 4</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                                           
                                <div class="col-lg-4 col-md-4 col-sm-4 last">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/03_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$189.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Country side house exterior</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                
                                <div class="col-lg-4 col-md-4 col-sm-4 first">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/04_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$345.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Executive Home</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 5</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/05_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$4.200.00</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Ottoman Style Triplex</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                
                                <div class="col-lg-4 col-md-4 col-sm-4 last">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/06_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$2000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Two Week on Miami </a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
    
                                <div class="col-lg-4 col-md-4 col-sm-4 first">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/07_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$1.210.00</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Wooden Style Family Hose</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 3</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 5</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                                    
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/08_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$3.100.00</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Modern Family House</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 3</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
    
                                <div class="col-lg-4 col-md-4 col-sm-4 last">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/09_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$2200</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> One Week Istanbul Holiday</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 7</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                            </div><!-- tab pane-->
                            
                            <div class="tab-pane" id="tab2">

                                <div class="col-lg-4 col-md-4 col-sm-4 first">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/09_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$1.655.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> One Week Istanbul Holiday</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 4</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/03_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$1.600.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Country side house exterior</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 7</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                
                               <div class="col-lg-4 col-md-4 col-sm-4 last">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/01_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$1.000.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Home of your dreams</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 5</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                 
                                <div class="col-lg-4 col-md-4 col-sm-4 first">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/02_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$3.100.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Sea view duplex villa</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 4</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                      
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/04_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$1.200.100</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Executive Home</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 2</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                
                                <div class="col-lg-4 col-md-4 col-sm-4 last">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/05_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$11.200.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Ottoman Style Triplex</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 3</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                
                                <div class="col-lg-4 col-md-4 col-sm-4 first">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/06_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$2000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Two Week Holiday on Miami </a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
    
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/09_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$5.500.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Wooden Style Family Hose</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                                    
                                <div class="col-lg-4 col-md-4 col-sm-4 last">
                                    <div class="boxes"> 
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/08_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$5.100.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Modern Family House</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                            </div><!-- tab pane -->
                            
                            <div class="tab-pane" id="tab3">
                                <div class="col-lg-4 col-md-4 col-sm-4 first">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/05_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$14.200.100</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Ottoman Style Triplex</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/06_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$6000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Two Week Holiday on Miami </a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 7</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 12</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
    
                                <div class="col-lg-4 col-md-4 col-sm-4 last">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/07_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$123.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Wooden Style Family Hose</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                            
                                <div class="col-lg-4 col-md-4 col-sm-4 first">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/09_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$2400</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> One Week Istanbul Holiday</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                                                 
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/02_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$1.222.100</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Sea view duplex villa</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                      
                                <div class="col-lg-4 col-md-4 col-sm-4 last">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/04_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$2.200.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Executive Home</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 first">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/03_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$4.200.00</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Country side house exterior</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                
                               <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/01_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$1.200.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Home of your dreams</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                
                                <div class="col-lg-4 col-md-4 col-sm-4 last">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/08_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$380.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Modern Family House</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                            </div><!-- tab pane -->
                            
                            <div class="tab-pane" id="tab4">
                            
                               <div class="col-lg-4 col-md-4 col-sm-4 first">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/07_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$124.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Wooden Style Family Hose</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                            
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/09_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$340.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> One Week Istanbul Holiday</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                                                 
                                <div class="col-lg-4 col-md-4 col-sm-4 last">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/02_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$1.200.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Sea view duplex villa</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 2</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 11</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                      
                                <div class="col-lg-4 col-md-4 col-sm-4 first">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/04_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$3.200.500</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Executive Home</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 3</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/05_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$1.500.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Ottoman Style Triplex</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                
                                <div class="col-lg-4 col-md-4 col-sm-4 last">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/06_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$2.200.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Two Week Holiday on Miami </a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 4</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 3</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                                                
                              <div class="col-lg-4 col-md-4 col-sm-4 first">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/03_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$189.900</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Country side house exterior</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 3</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                
                               <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/01_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$1.200.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Home of your dreams</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                
                                <div class="col-lg-4 col-md-4 col-sm-4 last">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/08_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$555.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Modern Family House</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>            
                            </div><!-- tab pane -->
                            
                            <div class="tab-pane" id="tab5">
                                <div class="col-lg-4 col-md-4 col-sm-4 first">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/06_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$200.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Two Week Holiday on Miami </a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                
                                  <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/04_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$1.200.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Executive Home</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                
                              	<div class="col-lg-4 col-md-4 col-sm-4 last">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/03_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$2.200.500</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Country side house exterior</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 3</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                
                               <div class="col-lg-4 col-md-4 col-sm-4 first">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/05_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$1.200.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Ottoman Style Triplex</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                     
                               <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/01_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$3.200.100</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Home of your dreams</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                
                                <div class="col-lg-4 col-md-4 col-sm-4 last">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/08_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$880.000</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Modern Family House</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Area:</strong> 250m²</span>
                                            <span class="status"><strong>Status:</strong> On Sale</span>
                                            <span class="bedrooms last"><strong>Beds:</strong> 5</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                            
                                <div class="col-lg-4 col-md-4 col-sm-4 first">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/07_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$134.999</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> Wooden Style Family Hose</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 1</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                            
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/09_home.png" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$4200</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.html"> One Week Istanbul Holiday</a></h2>
                                        <div class="boxed_mini_details clearfix">
                                            <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> 2</span>
                                            <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 1</span>
                                        </div>
                                    </div><!-- end boxes -->
                                </div>
                                                                 
                                	<div class="col-lg-4 col-md-4 col-sm-4 last">
                                        <div class="boxes">
                                        <div class="boxes_img ImageWrapper">
											<a href="single-property.html">
												<img class="img-responsive" src="demos/02_home.jpg" alt="">
												<div class="PStyleNe"></div>
											</a>
                                            <div class="box_type">$4.200.00</div>
                                        </div>
                                            <h2 class="title"><a href="single-property.html"> Sea view duplex villa</a></h2>
                                            <div class="boxed_mini_details clearfix">
                                            	<span class="area first"><strong>Garage</strong><i class="icon-garage"></i> 1</span>
                                            	<span class="status"><strong>Baths</strong><i class="icon-bath"></i> 3</span>
                                            	<span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> 2</span>
                                            </div>
                                        </div><!-- end boxes -->
                            		</div><!-- tab pane -->
                                </div><!-- tabbed_widget -->
							</div><!-- tab-content -->
						</div> <!-- widget -->  
					</div><!-- end col-lg-7 -->

 					<div class="col-lg-3 col-md-6 col-sm-9 col-xs-12 last clearfix">
                    	<div class="widget clearfix">
                     	<div class="widget text-center clearfix">
							<img data-effect="fade" class="img-thumbnail img-responsive" src="demos/01_banner.png" alt="">
						</div><!-- end of widget -->  
					</div><!-- end col-lg-4 --> 
				</div><!-- end row -->
            </div><!-- end dm_container -->  
        </section><!-- end generalwrapper -->
  
		

        <section id="four-parallax" class="parallax" style="background-image: url('demos/04_parallax.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
            <div class="overlay1 dm-shadow">
            	<div class="container">
                	<div class="row">
                        <div class="text-center clearfix">
                            <h3 class="big_title">Oficinas</h3>
                            
                        </div>
                        
                            <?php
                                $oficinas = $muestra->oficinas();
                                while ($ofi = $oficinas->fetch_array(MYSQL_ASSOC)) {
                                    echo '
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="boxes agencies_widget first" data-effect="slide-bottom"> 
                                                <div class="col-lg-3">
                                                    <div class="image">
                                                        <img class="img-responsive img-thumbnail" src="demos/agencies_logo.png" alt="">
                                                    </div><!-- end agencies img -->
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="agencies_desc">
                                                        <h3 class="title">'.$ofi['nombre'].'</h3>
                                                        <p>'.$ofi['calle'].' #'.$ofi['numero'].', '.$ofi['no_int'].'<br>
                                                        '.$ofi['colonia'].'<br>
                                                        '.$ofi['delegacion'].'<br>
                                                        '.$ofi['estado'].'<br></p>
                                                        <a href="#" class="btn btn-primary btn-sm">Detalles</a>
                                                        
                                                    </div><!-- agencies_desc -->
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="agencies_meta">
                                                    <span><i class="fa fa-envelope"></i> <a href="mailto:support@sitename.com">support@sitename.com</a></span>
                                                    <span><i class="fa fa-phone-square"></i> '.$ofi[telefono].'</span>
                                                </div><!-- end agencies_meta -->
                                            </div><!-- end boxes -->
                                        </div><!-- end col-6 -->
                                    ';
                                }
                            ?>
              		</div><!-- end row -->
            	</div><!-- end dm_container -->
            </div><!-- end overlay -->
        </section>  
            
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