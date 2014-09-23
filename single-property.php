<?php
    require_once("clases/class.listar.php");
    $muestra = new Listados();
    $prop2=$muestra->propDestUp();
    $prop3=$muestra->todasProp();
    $muestra2 = new listaProp($_GET);
    $propSelect=$muestra2->PropXId();
    $red = $muestra->redes();
    $redes = $red->fetch_array(MYSQL_ASSOC);
    $slider=$muestra->muestraImagenes();
    
    $aConf = $muestra->obtenerConfiguracion();
    $unica = $propSelect->fetch_array(MYSQL_ASSOC);
    if ($unica[PrecioVenta]!=0) {
        $precio= $unica[PrecioVenta];
    } else {
        $precio= $unica[PrecioRenta];
    }
       

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Cliente prueba</title>

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
<input type="hidden" name="color_A" id="color_A" <?php echo 'value="#'.$aConf[ColorFondo].'"'; ?> >
    <input type="hidden" name="color_B" id="color_B" <?php echo 'value="#'.$aConf[ColorPrincipal].'"'; ?> >
        <!--<div class="toolbar-wrapp">-->
            <!--<div class="sticky-toolbar">
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
                            <span><i class="fa fa-phone-square"></i><?php echo $redes['Cel'] ?></span>
                            </p>
                        </div><!-- end callus-->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <!--<div class="marketing">
                            <ul class="topflags pull-right">
                                <li><a data-placement="bottom" data-toggle="tooltip" data-original-title="German" title="" href="#"><img alt="de" src="images/flags/de.png"></a></li>
                                <li><a data-placement="bottom" data-toggle="tooltip" data-original-title="Turkish" title="" href="#"><img alt="tr" src="images/flags/tr.png"></a></li>
                                <li><a data-placement="bottom" data-toggle="tooltip" data-original-title="Geek" title="" href="#"><img alt="gr" src="images/flags/gr.png"></a></li>
                            </ul>--><!-- end flags -->
                            <!--<ul class="topmenu pull-right">
                                <li><a href="login.html"><i class="fa fa-lock"></i> Login / Register</a></li>
                            </ul>--><!-- topmenu -->
                        <!--</div>--><!-- end marketing -->
                    </div><!-- end col-lg-6 -->
            	</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end topbar -->        <header class="header1">
			<div class="container">
            	<div class="row header-row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                       <div class="logo-wrapper clearfix">
							<div class="logo">
								<a href="index.php" title="Inicio">
									<img src="images/logo.png" alt="Estate">
								</a>
							</div><!-- /.site-name -->
						</div><!-- /.logo-wrapper -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                    </div>      
                    <div class="col-lg-5 col-md-5 col-sm-12  pull-right">
                        <div class="social clearfix pull-right">
                        <?php 
                            $red = $muestra->redes();
                            $redes = $red->fetch_array(MYSQL_ASSOC);
                        ?>
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
                                                        <label for="type">Tipo de propiedad</label>
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

        <section class="post-wrapper-top dm-shadow clearfix">
            <div class="container">
                <div class="post-wrapper-top-shadow">
                    <span class="s1"></span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Inicio</a></li>
                        <li><?php echo utf8_encode($unica[titulo]); ?></li>
                    </ul>
                    <h2><?php echo utf8_encode($unica[titulo]); ?></h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        
                </div>
            </div>
        </section><!-- end post-wrapper-top -->
    
        <section class="generalwrapper dm-shadow clearfix">
        	<div class="container">
				<div class="row">
                	<div id="left_sidebar" class="col-lg-2 col-md-3 col-sm-3 col-xs-12 first clearfix">
              			<!--<div class="widget clearfix">
                        	<div class="title"><h3>Banner Ads</h3></div>
							<a href="#"><img src="demos/03_banner.png" alt="" class="img-thumbnail img-responsive"></a>
                        </div>--><!-- end widget -->
                        
              			<!--<div class="widget cats_widget clearfix">
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
                        </div>--><!-- end widget -->
                        
                    	<!--<div class="widget clearfix">
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
                        </div>--><!-- end widget -->
                    </div><!-- #left_sidebar -->
                    
                	<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
                    	<div class="property_wrapper boxes clearfix">
							<div class="boxes_img">
                                <div id="slider" class="flexslider clearfix">
                                    <ul class="slides">
                                        <?php echo $slider; ?> 
                                    </ul>
                                </div>
                                <div id="carousel" class="flexslider clearfix">
                                    <ul class="slides">
                                        <?php echo $slider; ?>
                                    </ul>
                                </div>  
							</div><!-- boxes_img -->
                            
                            <hr>
                            
							<div class="title clearfix">
                            	<!--<span class="agent_img pull-right"><a data-placement="bottom" data-toggle="tooltip" data-original-title="Mark ANTHONY" title="" href="single-agent.html"><img width="75" class="img-responsive img-thumbnail" src="demos/03_team.png" alt=""></a></span>-->
                            	<h3><?php echo utf8_encode($unica[titulo]); ?>
                                <small class="small_title"><?php echo $unica[CP].", ".utf8_encode($unica[Colonia]).", ".utf8_encode($unica[Municipio]).", ".utf8_encode($unica[Estado]); ?> <mark>$<?php echo $precio; ?></mark></small>
                                </h3>
							</div><!-- end title -->

							<div class="boxed_mini_details1 clearfix">
								<span class="type first"><strong>Tipo</strong><a href="agencies.html"><?php echo utf8_encode($unica[idTipo]); ?></a></span>
								<span class="sqft"><strong>C-m2</strong><i class="icon-sqft"></i> <?php echo $unica[M2Construccion] ;?></span>
                                <span class="sqft"><strong>T-m2</strong><i class="icon-sqft"></i> <?php echo $unica[M2terreno] ;?></span>
								<span class="garage"><strong>Cochera</strong><i class="icon-garage"></i> <?php echo $unica[NumeroCocheras] ;?></span>
								<span class="bedrooms"><strong>Hab.</strong><i class="icon-bed"></i> <?php echo $unica[NumeroCuartos] ;?></span>
								<span class="status"><strong>Baños</strong><i class="icon-bath"></i> <?php echo $unica[NumeroBanios] ;?></span>
								<!--<span class="furnished"><strong>Furnish</strong><i class="icon-furnished"></i> Yes</span>
								<span class="pool last"><strong>Pool</strong><i class="icon-pool"></i> Yes</span>-->
							</div><!-- end boxed_mini_details1 -->
                            
                            <div class="property_desc clearfix">
                                <p><strong><?php echo utf8_encode($unica[Descripcion]); ?></strong></p>
                                <p><strong>Clave personalizada: <?php echo utf8_encode($unica[idPersonalizado]); ?></strong></p>
                                 <p><strong>Estatus: <?php echo utf8_encode($unica[EstatusVenta]); ?></strong></p>

                                <?php switch ($unica[idTipo]) {
                                    case 'Casa':
                                        echo " <p>Metros cuadrados de terreno: ".$unica[M2terreno]."</p>
                                            <p>Metros cuadrados de construcción: ".$unica[M2Construccion]."</p>
                                            <p>Metros cuadrados de jardín: ".$unica[M2Jardin]."</p>
                                            <p>Número de recámaras: ".$unica[NumeroCuartos]."</p>
                                            <p>Número de baños: ".$unica[NumeroBanios]."</p>
                                            <p>Número de medios baños: ".$unica[NumeroMediosBanios]."</p>
                                            <p>Número de cocheras: ".$unica[NumeroCocheras]."</p>
                                            <p>Cuartos de servicio: ".$unica[CuartoServicio]."</p>";
                                        break;
                                    case 'Condominio':
                                        echo " <p>Metros cuadrados de terreno: ".$unica[M2terreno]."</p>
                                            <p>Metros cuadrados de construcción: ".$unica[M2Construccion]."</p>
                                            <p>Metros cuadrados de jardín: ".$unica[M2Jardin]."</p>
                                            <p>Número de recámaras: ".$unica[NumeroCuartos]."</p>
                                            <p>Número de baños: ".$unica[NumeroBanios]."</p>
                                            <p>Número de medios baños: ".$unica[NumeroMediosBanios]."</p>
                                            <p>Número de cocheras: ".$unica[NumeroCocheras]."</p>
                                            <p>Cuartos de servicio: ".$unica[CuartoServicio]."</p>";
                                        break;    
                                    case 'Departamento':
                                        echo " <p>Metros cuadrados de terreno: ".$unica[M2terreno]."</p>
                                            <p>Metros cuadrados de construcción: ".$unica[M2Construccion]."</p>
                                            <p>Metros cuadrados de jardín: ".$unica[M2Jardin]."</p>
                                            <p>Número de recámaras: ".$unica[NumeroCuartos]."</p>
                                            <p>Número de baños: ".$unica[NumeroBanios]."</p>
                                            <p>Número de medios baños: ".$unica[NumeroMediosBanios]."</p>
                                            <p>Número de cocheras: ".$unica[NumeroCocheras]."</p>
                                            <p>Cuartos de servicio: ".$unica[CuartoServicio]."</p>
                                            <p>Niveles construidos: ".$unica[NivelesConstruidos]."</p>
                                            <p>Nivel de ubicación: ".$unica[NivelUbicacion]."</p>";
                                            break;  
                                    case 'Edificio':
                                        echo " <p>Metros cuadrados de terreno: ".$unica[M2terreno]."</p>
                                            <p>Metros cuadrados de construcción: ".$unica[M2Construccion]."</p>
                                            <p>Número de unidades habitacionales: ".$unica[nunidades]."</p>
                                            <p>Número de unidades no habitacionales: ".$unica[nnounidades]."</p>
                                            <p>Número de cocheras descubiertas: ".$unica[NumeroCocheras]."</p>
                                            <p>Número de cocheras cubiertas: ".$unica[NumeroCocherasDescubiertas]."</p>
                                            <p>Número de cocheras para visitas: ".$unica[NumeroCocherasVisitas]."</p>
                                            <p>Niveles del edificio: ".$unica[NivelesConstruidos]."</p>
                                            <p>Clasificación del edificio: ".$unica[idClasificacionEdificio]."</p>
                                            <p>Estado de conservacion: ".$unica[EstadoConservacion]."</p>";
                                            break; 
                                    case 'Local':
                                        echo " <p>Metros cuadrados de terreno: ".$unica[M2terreno]."</p>
                                            <p>Metros cuadrados de construcción: ".$unica[M2Construccion]."</p>
                                            <p>Metros de frente: ".$unica[Mfrente]."</p>
                                            <p>Metros de fondo: ".$unica[Mfondo]."</p>
                                            <p>Ubicacion: ".$unica[Ubicacion]."</p>
                                            <p>Número de baños: ".$unica[NumeroBanios]."</p>
                                            <p>Niveles construidos: ".$unica[NivelesConstruidos]."</p>
                                            <p>Nivele de ubicacion: ".$unica[NivelUbicacion]."</p>
                                            <p>Número de cocheras: ".$unica[NumeroCocheras]."</p>
                                            <p>Estado de conservacion: ".$unica[EstadoConservacion]."</p>";
                                            break; 
                                    case 'Oficina':
                                        echo " <p>Metros cuadrados de terreno: ".$unica[M2terreno]."</p>
                                            <p>Metros cuadrados de construcción: ".$unica[M2Construccion]."</p>
                                            <p>Número de privados: ".$unica[NumeroPrivados]."</p>
                                            <p>Número baños: ".$unica[NumeroBanios]."</p>
                                            <p>Número de cocheras descubiertas: ".$unica[NumeroCocherasDescubiertas]."</p>
                                            <p>Número de cocheras cubiertas: ".$unica[NumeroCocheras]."</p>
                                            <p>Número de cocheras para visitas: ".$unica[NumeroCocherasVisitas]."</p>
                                            <p>Niveles construidos: ".$unica[NivelesConstruidos]."</p>
                                            <p>Ubicación de la oficina: ".$unica[NivelUbicacion]."</p>
                                            <p>Estado de conservacion: ".$unica[EstadoConservacion]."</p>";
                                            break; 
                                    case 'Terreno':
                                        echo " <p>Metros cuadrados de terreno: ".$unica[M2terreno]."</p>
                                            <p>Metros cuadrados de construcción: ".$unica[M2Construccion]."</p>
                                            <p>Metros de frente: ".$unica[Mfrente]."</p>
                                            <p>Metros de fondo: ".$unica[Mfondo]."</p>
                                            
                                            <p>Forma del terreno: ".$unica[FormaTerreno]."</p>
                                            <p>Uso de suelo: ".$unica[UsoSuelo]."</p>";
                                            break; 
                                    case 'Bodega':
                                        echo " <p>Metros cuadrados de terreno: ".$unica[M2terreno]."</p>
                                            <p>Metros cuadrados de construcción: ".$unica[M2Construccion]."</p>
                                            <p>Metros de frente: ".$unica[Mfrente]."</p>
                                            <p>Metros de fondo: ".$unica[Mfondo]."</p>
                                            <p>Concentración industrial: ".$unica[ConcentracionIndustrial]."</p>
                                            <p>Ferrocarril: ".$unica[Ferrocarril]."</p>
                                            <p>Transporte multimodal: ".$unica[TransporteMultimodal]."</p>
                                            <p>Metros cuadrados de bodega: ".$unica[m2bodega]."</p>
                                            <p>Metros cuadrados de oficina: ".$unica[M2Oficina]."</p>
                                            <p>andenes: ".$unica[Andenes]."</p>
                                            <p>Área de maniobras: ".$unica[AreaManiobras]."</p>
                                            <p>Altura libre del inmueble (metros): ".$unica[AlturaLibre]."</p>
                                            <p>Tipo de techo: ".$unica[TipoTecho]."</p>
                                            <p>Carga soportada en toneladas: ".$unica[CargaPisoToneladas]."</p>";
                                            break;                                            
                                    case 'Rancho':
                                        echo " <p>Metros cuadrados de terreno: ".$unica[M2terreno]."</p>
                                            <p>Metros cuadrados de construcción: ".$unica[M2Construccion]."</p>
                                            <p>Hectáreas: ".$unica[Hectareas]."</p>
                                            <p>Sistema de riego: ".$unica[SistemaRiego]."</p>
                                            <p>Vista panorámica: ".$unica[VistaPannoramica]."</p>
                                            <p>Abierto a visitantes: ".$unica[AbiertoVisitantes]."</p>
                                            <p>Río cercano: ".$unica[RioCercano]."</p>
                                            <p>Establo o caballeriza: ".$unica[Establo]."</p>
                                            <p>Metros cuadrados de jardín: ".$unica[M2Jardin]."</p>
                                            <p>Superficie agrícola: ".$unica[SuperficieAgricola]."</p>
                                            <p>Superficie de pastizal: ".$unica[superficiePastizal]."</p>
                                            <p>Superficie habitable: ".$unica[SuperficieHabitable]."</p>
                                            <p>Número de pozos: ".$unica[NumeroPozos]."</p>
                                            <p>número de casas: ".$unica[NumeroCasas]."</p>";
                                            break;
                                    default:
                                        # code...
                                        break;
                                } {
                                    # code...
                                } ?>
                               

                                
                                
                                
                            </div>
                            
                            <hr>
                            
                            <!--<div class="property_video clearfix">
                            	 <h3 class="big_title">Property Video<small>See the details of the house on the video</small></h3>
                                 <iframe src="http://player.vimeo.com/video/73221098?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                                                   
                            <hr>
                            
                            <div class="property_map clearfix">
                            	<h3 class="big_title">Property Map<small>See the address of the house on the map</small></h3>
                             	<div class="map">
									<div id="map"></div>
								</div>
                            </div>-->
                        <!--</div>--><!-- end property_wrapper -->

						<!--<div class="agent_boxes boxes clearfix">
                        	<div class="agent_details clearfix">
                            	<div class="col-lg-7 col-md-7 col-sm-12">
                                	<div class="agents_widget">
                                		<h3 class="big_title">Mark ANTHONY<small>Total (36) pieces of property</small></h3>
                                        <div class="agencies_widget row"> 
                                            <div class="col-lg-5 clearfix">
                                                <img class="img-thumbnail img-responsive" src="demos/03_team.png" alt="">
                                            </div>--><!-- end col-lg-5 -->
                                            <!--<div class="col-lg-7 clearfix">
                                                <div class="agencies_meta clearfix">
                                                    <span><i class="fa fa-envelope"></i> <a href="mailto:support@sitename.com">support@sitename.com</a></span>
                                                    <span><i class="fa fa-link"></i> <a href="#">www.sitename.com</a></span>
                                                    <span><i class="fa fa-phone-square"></i> +1 232 444 55 66</span>
                                                    <span><i class="fa fa-print"></i> +1 232 444 55 66</span>
                                                    <span><i class="fa fa-facebook-square"></i> <a href="#">facebook.com/tagline</a></span>
                                                    <span><i class="fa fa-twitter-square"></i> <a href="#">twitter.com/tagline</a></span>
                                                    <span><i class="fa fa-linkedin-square"></i> <a href="#">linkedin.com/tagline</a></span>
                                                </div>--><!-- end agencies_meta -->
                                                
                                            <!--</div>--><!-- end col-lg-7 -->
                                            
                                            <!--<div class="clearfix"></div>
                                            
                                            <hr>
                                            
                                            <div class="col-lg-12">
                                            	<p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.. Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free.</p>
                                            </div>
                                        </div>--><!-- end agencies_widget -->
                                    <!--</div>--><!-- agents_widget -->
                                <!--</div>--><!-- end col-lg-7 -->
                                
                  				<!--<div class="col-lg-5 col-md-5 col-sm-12">
                                	<h3 class="big_title">Contact Agent<small>Have a Question? Ask this Agent</small></h3>
                                    <form action="#" id="agent_form">
                                        <input type="text" class="form-control" placeholder="Name">     
                                        <input type="text" class="form-control" placeholder="Email">     
                                        <input type="text" class="form-control" placeholder="Phone">     
                                        <input type="text" class="form-control" placeholder="Subject">     
                                        <textarea class="form-control" rows="5" placeholder="Message goes here..."></textarea>
                                        <button class="btn btn-primary">Send Message</button>   
                                    </form>--><!-- end search form -->
                                    
                                <!--</div>--><!-- end col-lg-6 -->
                           <!-- </div>--><!-- end agent_details -->
                        <!--</div>--><!-- end agent_boxes -->
                        
						<div class="property_wrapper boxes clearfix">
							<h3 class="big_title">Propiedades</h3>
                     		<div class="row">
                                 <?php 
                                    
                                    echo $prop3;
                                 ?>
                            </div><!-- end row -->
						</div>   
                        </div>                     
                    </div><!-- end content -->
                    
                    <div id="right_sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 last clearfix">
                    	<div class="widget clearfix">
                        	<div class="search_widget">
                            	<div class="title"><h3><i class="fa fa-search"></i> Encuentre su propiedad</h3></div>
								<form action="#" id="search_form">
                                 	<input type="text" class="form-control" placeholder="Busque por clave personalizada">     
								</form><!-- end search form -->
                            </div><!-- end search_widget -->
                        </div><!-- end widget -->

                    	<div class="widget clearfix">
                                                <div class="agents_widget">
                                                    <div class="title"><h3><i class="fa fa-users"></i> Nuestros agentes</h3></div>
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
                                                                             </div>';}?>
                                                </div><!-- end of agents_widget -->
                        </div><!-- end of widget -->
                     	<!--<div class="widget clearfix">
                        	<div class="title"><h3>Banner Ads</h3></div>
							<img data-effect="fade" class="text-center img-thumbnail img-responsive" src="demos/01_banner.png" alt="">
						</div>--><!-- end of widget -->  
					</div><!-- end sidebar -->
                    
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end generalwrapper -->

       <!-- <section class="message_banner dm-shadow">
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
        
        <footer class="footer1">
        	<!--<div class="container">
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
                            <span><a data-placement="top" data-toggle="tooltip" data-original-title="Twitter" title="" <?php echo "href='".$redes['twitter']."'" ?>><i class="fa fa-twitter"></i></a></span>
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
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/jquery-1.10.2.min.js"></script>
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
                controlNav: false,
                directionNav: false,
                animationLoop: true,
                slideshow: true,
                itemWidth: 122,
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
        });
    </script>

 <script type="text/javascript">
 
    var locations = [
	['<div class="infobox agents_widget"><div class="agent clearfix"><div class="image"><img class="img-thumbnail img-responsive" src="demos/01_home.jpg" alt=""></div><div class="agent_desc"><h3 class="title"><a href="single-property.html">Home of your dreams</a></h3><span>890 Istanbul / Maslak</span></p></div></div></div>', -33.950198, 151.259302, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
	    scrollwheel: false,
    	navigationControl: true,
		mapTypeControl: false,
		scaleControl: false,
		draggable: true,
		styles: [ { "stylers": [ { "hue": "#19B8DF" }, { "gamma": 1 } ] } ],
		center: new google.maps.LatLng(-33.92, 151.25),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
  
		marker = new google.maps.Marker({ 
		position: new google.maps.LatLng(locations[i][1], locations[i][2]), 
		map: map ,
		icon: 'images/marker.png'
		});


      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
  
</body>
</html>