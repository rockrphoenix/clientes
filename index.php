<?php
    require_once("clases/class.listar.php");
    
    $muestra = new Listados($_POST);
    $prop=$muestra->PropiedadesDest();
    $prop2=$muestra->propDestUp();
    $prop3=$muestra->todasProp();
    $red = $muestra->redes();
    
    $redes = $red->fetch_array(MYSQL_ASSOC);
    $aConf = $muestra->obtenerConfiguracion();

     //var_dump($prop);
      //var_dump($prop2);
       //var_dump($prop3);
    
   
	
    
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
     <script src="assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/combos.js"></script>
    <!-- Termina combos dependientes-->
  
    

</head>
<body>
<input type="hidden" name="color_A" id="color_A" <?php echo 'value="#'.$aConf[ColorFondo].'"'; ?> >
    <input type="hidden" name="color_B" id="color_B" <?php echo 'value="#'.$aConf[ColorPrincipal].'"'; ?> >
        <!--<div class="toolbar-wrapp">
            <div class="sticky-toolbar">
                <ul>
                    <li id="support"><a title="Support Menu" title="" href="#" ><i class="fa fa-link"></i></a></li>
                    <li id="help"><a href="#ContactFormModal" data-toggle="modal" title="Ask a question"><i class="fa fa-question"></i></a></li>
                    <li id="accountlogin"><a title="Login account" href="#" ><i class="fa fa-lock"></i></a></li>
                </ul>
            </div>--><!--/ sticky-toolbar-->
                
            <!--<div class="popup">
                <ul>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="forum.html">Support</a></li>
                    <li><a href="ticket.html">Open Ticket</a></li>
                </ul>
            </div>--><!--/ popup-->
        
            <!--<div class="loginpopup">
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
            </div>--><!--/ login-popup-->
        <!--</div>--><!--/ toolbar-wrapp-->

		<!--<div class="modal fade" id="ContactFormModal" tabindex="-1" role="dialog" aria-labelledby="ContactFormModalLabel" aria-hidden="true">
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
				</div>--><!-- /.modal-content -->
			<!--</div>--><!-- /.modal-dialog -->
		<!--</div>--><!-- /.modal -->
        
		<div class="topbar clearfix">
        	<div class="container">
            	<div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="callus">
                            <p>
                            <span><i class="fa fa-envelope"></i> <?php echo $redes['Email']?></span>
                            <span><i class="fa fa-phone-square"></i> <?php echo $redes['Cel'] ?></span>
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
                        
                            <span><a data-placement="bottom" data-toggle="tooltip" data-original-title="Twitter" title="" <?php echo "href='".$redes['twitter']."'" ?>><i class="fa fa-twitter"></i></a></span>
                            <span><a data-placement="bottom" data-toggle="tooltip" data-original-title="Facebook" title="" <?php echo "href='".$redes['facebook']."'" ?>><i class="fa fa-facebook"></i></a></span>
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
                                <li class="dropdown fhmm-fw active"><a href="index.php"><i class="fa fa-home"></i> INICIO</a></li><!-- mega menu -->
                                <!-- list elements -->
                                
                                <!-- list elements -->
                                <li class="dropdown fhmm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">BÚSQUEDA AVANZADA <b class="caret"></b></a>
                                    <ul class="dropdown-menu half">
                                        <li class="fhmm-content withoutdesc">
                                            <div class="row">
                                                <form id="advanced_search_module" class="clearfix" action="procesa/busqueda.php" name="advanced_search_module" method="post">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <label for="select_estado">Estado</label>
                                                        <select id="select_estado" class="form-control">
                                                        <option value="seleccione" selected="yes">Seleccione</option>
                                                            <?php $estate=$muestra->Estados(); echo $estate; ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <label for="select_municipio">Delegación/Municipio</label>
                                                        <select id="select_municipio" class="form-control">
                                                        <option value="seleccione" selected="yes">Seleccione</option>
                                                           
                                                        </select>
                                                    </div>                                               
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="select_status">Estatus</label>
                                                        <select id="select_status" class="form-control">
                                                        <option value="seleccione" selected="yes">Seleccione</option>
                                                            <!--<option value="rent">On Rent</option>
                                                            <option value="sale">On Sale</option>-->
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="select_tipo">Tipo de propiedad</label>
                                                        <select id="select_tipo" class="form-control">
                                                        <option value="seleccione" selected="yes">Seleccione</option>
                                                            <!--<option value="apertment">Apertment</option>
                                                            <option value="condo">Condo</option>
                                                            <option value="villa">Villa</option>
                                                            <option value="cottage">Cottage</option>
                                                            <option value="house">House</option>-->
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="recamaras">Recámaras</label>
                                                        <select id="recamaras" class="form-control">
                                                        <option value="seleccione" selected="yes">Seleccione</option>
                                                            <!--<option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>-->
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="banos">Baños</label>
                                                        <select id="banos" class="form-control">
                                                        <option value="seleccione" selected="yes">Seleccione</option>
                                                            <!--<option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>-->
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="preciomin">Precio Mínimo</label>
                                                        <select id="preciomin" class="form-control">
                                                        <option value="seleccione" selected="yes">Seleccione</option>
                                                            <option value="500000">- $500,000.00</option>
                                                            <option value="1000000">$1,000,000.00</option>
                                                            <option value="5000000">$5,000,000.00</option>
                                                            <option value="10000000">$10,000,000.00</option>
                                                            <option value="25000000">$25,000,000.00</option>
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="preciomax">Precion Máximo</label>
                                                        <select id="preciomax" class="form-control">
                                                        <option value="seleccione" selected="yes">Seleccione</option>
                                                            
                                                            <option value="1000000">$1,000,000.00</option>
                                                            <option value="5000000">$5,000,000.00</option>
                                                            <option value="10000000">$10,000,000.00</option>
                                                            <option value="25000000">$25,000,000.00</option>
                                                            <option value="50000000">$50,000,000.00 +</option>
                                                        </select>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <hr>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <p>Para resultados más rápidos, por favor utilice el formulario de arriba, si desea contactarnos para obtener resultados confidenciales, <a href="contact.html">póngase en contacto </a> con nosotros.</p>  
                                                        
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <a href="#" class="btn btn-primary btn-block"><i class="fa fa-search"></i> BUSCAR</a></div> 
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
                                                <?php 
                                    
                                                    echo $prop2;
                                                 ?>
                                               
                        
                                            </div><!-- end row -->
                                        </li><!-- end grid demo -->
                                    </ul><!-- end drop down menu -->
                                </li><!-- end list elements -->
                                <!-- standard drop down -->
                                <li><a href="contact.php">CONTACTO</a></li>
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
                                    <?php
                                        $grid = new SliderPrincipal();
                                        echo $grid->slider();
                                    ?> 
                                </ul><!-- end slides -->
                            </div><!-- end flexslider -->
                        </div><!-- end property-slider -->
                    </div><!-- end col-lg-8 -->
                    
					<div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="searchmodule clearfix" data-effect="slide-right">
                        <form id="advanced_search" action="procesa/busqueda.php" class="clearfix" name="advanced_search" method="post">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label for="select_estado2">Estado</label>
								<select id="select_estado2">
                                <option value="seleccione" selected="yes">Seleccione</option>
									<?php echo $estate; ?>
								</select>                                     
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label for="select_municipio2">Delegación/Municipio</label>
                                <select id="select_municipio2">
                                <option value="seleccione" selected="yes">Seleccione</option>
                                    
                                </select>
                            </div>                                               
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label for="select_status2">Estatus</label>
                                <select id="select_status2" >
                                <option value="seleccione" selected="yes">Seleccione</option>
                                    <!--<option value="rent">On Rent</option>
                                    <option value="sale">On Sale</option>-->
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label for="select_tipo2">Tipo</label>
                                <select id="select_tipo2" >
                                <option value="seleccione" selected="yes">Seleccione</option>
                                   <!-- <option value="apertment">Apertment</option>
                                    <option value="condo">Condo</option>
                                    <option value="villa">Villa</option>
                                    <option value="cottage">Cottage</option>
                                    <option value="house">House</option>-->
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label for="recamaras2">Recámaras</label>
                                <select id="recamaras2" >
                                <option value="seleccione" selected="yes">Seleccione</option>
                                    <!--<option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>-->
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label for="banos2">Baños</label>
                                <select id="banos2">
                                <option value="seleccione" selected="yes">Seleccione</option>
                                    <!--<option value="1">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>-->
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label for="min_price">Precio Mínimo</label>
                                <select id="min_price" >
                                    <option value="0">- $500,000.00</option>
                                                            <option value="1">$1,000,000.00</option>
                                                            <option value="5">$5,000,000.00</option>
                                                            <option value="10">$10,000,000.00</option>
                                                            <option value="25">$25,000,000.00</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label for="max_price">Precio Máximo</label>
                                <select id="max_price" >
                                   <option value="1">$1,000,000.00</option>
                                                            <option value="5">$5,000,000.00</option>
                                                            <option value="10">$10,000,000.00</option>
                                                            <option value="25">$25,000,000.00</option>
                                                            <option value="50">$50,000,000.00 +</option>
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
                                <?php 
                                    
                                    echo $prop;
                                 ?>                       
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
                                <li>Residencial
                                    <ul>
                                        <li><a href="index.php?t=1">Casa</a></li>
                                        <li><a href="index.php?t=2">Casa en Condominio</a></li>
                                        <li><a href="index.php?t=3">Departamento</a></li>
                                    </ul>
                                </li>
                                <li>Servicios
                                    <ul>
                                        <li><a href="index.php?t=4">Edificio</a></li>
                                        <li><a href="index.php?t=5">Local</a></li>
                                        <li><a href="index.php?t=6">Oficina</a></li>
                                        <li><a href="index.php?t=7">Bodega</a></li>
                                    </ul>
                                </li>
                                <li>Terrenos
                                    <ul>
                                        <li><a href="index.php?t=8">Terrenos</a></li>
                                        <li><a href="index.php?t=9">Ranchos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- end widget -->
                        
                    	<div class="widget clearfix">
							<div class="title"><h3><i class="icon-rent"></i> Renta</h3></div>
                			<ul class="real-estate-cats-widget" data-effect="slide-left">
                                <li>Residencial
                                    <ul>
                                        <li><a href="index.php?t=10">Casa</a></li>
                                        <li><a href="index.php?t=11">Casa en Condominio</a></li>
                                        <li><a href="index.php?t=12">Departamento</a></li>
                                    </ul>
                                </li>
                                <li>Servicios
                                    <ul>
                                        <li><a href="index.php?t=13">Edificio</a></li>
                                        <li><a href="index.php?t=14">Local</a></li>
                                        <li><a href="index.php?t=15">Oficina</a></li>
                                        <li><a href="index.php?t=16">Bodega</a></li>
                                    </ul>
                                </li>
                                <li>Terrenos
                                    <ul>
                                        <li><a href="index.php?t=17">Terrenos</a></li>
                                        <li><a href="index.php?t=18">Ranchos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- end widget -->
                    </div>
                    
                	<div class="col-lg-7 col-md-9 col-sm-9 col-xs-12 clearfix">
                        <div id="tabbed_widget" class="tabbable clearfix" data-effect="slide-bottom"> 
                          <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab" data-toggle="tab">Residencial</a></li>
                            <li><a href="#tab2" data-toggle="tab">Terreno</a></li>
                            <li><a href="#tab3" data-toggle="tab">Servicios</a></li>
                          </ul>
                          <div class="tab-content tabbed_widget clearfix">
                            <div class="tab-pane active" id="tab">
                               <?php 
                                    
                                    echo $prop3;
                                 ?> 

                                </div><!-- tabbed_widget -->
							</div><!-- tab-content -->
						</div> <!-- widget -->  
					</div><!-- end col-lg-7 -->
                    
                    <div class="col-lg-3 col-md-6 col-sm-9 col-xs-12 last clearfix">
                                            <div class="widget clearfix">
                                                <div class="agents_widget">
                                                    <div class="title"><h3><i class="fa fa-users"></i> Nuestros asesores</h3></div>
                    <?php 
                        $asesores = $muestra->asesores();
                                while ($as = $asesores->fetch_array(MYSQL_ASSOC)) {
                                    echo'<div class="agent boxes clearfix" data-effect="slide-right">
                                            <div class="image">
                                                <img class="img-circle img-responsive img-thumbnail" src="demos/asesor.png" alt="">
                                            </div><!-- image -->
                                            <div class="agent_desc">
                                                <h3 class="title">'.$as['nombres'].'</h3>
                                                <p><span><i class="fa fa-envelope"></i>'.$as['email'].'</span></p>
                                                <p><span><i class="fa fa-phone-square"></i>'.$as['tel'].'</span></p>
                                                <p><span><i class="fa fa-phone-square"></i>'.$as['cel'].'</span></p>
                                            </div><!-- agento desc -->
                                        </div>'; }?>
                     </div><!-- end of agents_widget -->
                    </div><!-- end of widget -->
                     <div class="widget text-center clearfix"></div>
                     </div>

 					<!--<div class="col-lg-3 col-md-6 col-sm-9 col-xs-12 last clearfix">
                    	<div class="widget clearfix">
                     	<div class="widget text-center clearfix">
							<img data-effect="fade" class="img-thumbnail img-responsive" src="demos/01_banner.png" alt="">
						</div>--><!-- end of widget -->  
					<!--</div>--><!-- end col-lg-4 --> 
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
                                                    
                                                    <span><i class="fa fa-phone-square"></i> '.$ofi['telefono'].'</span>
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
            
        <!--<section class="message_banner dm-shadow">
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
        </section>-->
        
        <!--<footer class="footer1">
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
                    </div>--><!-- end col-lg-3 -->
                	<!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-xs-12 clearfix">
                   		<div class="widget clearfix">
                        	<div class="title"><h3><i class="fa fa-home"></i> About Estate+</h3><hr></div>
                            	<p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free.</p>
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-info"></i> read more</a>
                        </div>
                    </div>--><!-- end col-lg-3 -->
                	<!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-xs-12 clearfix">
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
                    </div>--><!-- end col-lg-3 -->
                	<!--<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 last clearfix">
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
                    </div>--><!-- end col-lg-4 -->
                <!--</div>--><!-- row -->
           <!--</div>--><!-- container -->
        <!--</footer>--><!-- footer1 -->
        
        <section class="copyright">
        	<div class="container">
            	<div class="row">
                	<div class="col-lg-6 col-sm-6 col-md-6">
                        <p><small>Copyright &copy; 2014 Yet! Inmobiliario. Creado por <a href="http://www.gruposyse.com" target="_blank">Grupo SYSE</a>.</small></p>
                    </div>
                	<div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="social clearfix pull-right">
                            <span><a data-placement="top" data-toggle="tooltip" data-original-title="Twitter" title=""  <?php echo "href='".$redes['twitter']."'" ?>><i class="fa fa-twitter"></i></a></span>
                            <span><a data-placement="top" data-toggle="tooltip" data-original-title="Facebook" title="" <?php echo "href='".$redes['facebook']."'" ?>><i class="fa fa-facebook"></i></a></span>
                            <!--<span><a data-placement="top" data-toggle="tooltip" data-original-title="Google Plus" title="" href="#"><i class="fa fa-google-plus"></i></a></span>
                            <span><a data-placement="top" data-toggle="tooltip" data-original-title="Linkedin" title="" href="#"><i class="fa fa-linkedin"></i></a></span>
                            <span><a data-placement="top" data-toggle="tooltip" data-original-title="Github" title="" href="#"><i class="fa fa-github"></i></a></span>
                            <span><a data-placement="top" data-toggle="tooltip" data-original-title="Pinterest" title="" href="#"><i class="fa fa-pinterest"></i></a></span>
                            <span><a data-placement="top" data-toggle="tooltip" data-original-title="RSS" title="" href="#"><i class="fa fa-rss"></i></a></span>-->
                        </div><!-- end social -->
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end copyright -->
        
    
	<!-- Bootstrap core and JavaScript's
    ================================================== -->
   
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