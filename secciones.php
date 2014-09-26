<?php 
require_once("clases/class.listar.php");
    
    $resecc = new Listados($_GET);
    $secc2=$resecc->seccion2();
    $section2=$secc2->fetch_array(MYSQL_ASSOC);

     $muestra = new Listados($_POST);
    $prop=$muestra->PropiedadesDest();
    $prop2=$muestra->propDestUp();
    $prop3=$muestra->todasProp();
    $red = $muestra->redes();
    
    $redes = $red->fetch_array(MYSQL_ASSOC);
    $secc=$muestra->seccion();
   
    while ( $section = $secc->fetch_array(MYSQL_ASSOC)) {
        $str.= "<li><a  href='secciones.php?idsecc=".$section[idseccion]."'>".$section[titulo]."</a></li>";

    }
    $aConf = $muestra->obtenerConfiguracion();
    $estilos = file_get_contents('style.css');
    $estilos = str_replace('[{color_a}]','#'.$aConf[ColorFondo],$estilos);
    $estilos = str_replace('[{color_b}]','#'.$aConf[ColorPrincipal],$estilos);
    $nvoEstilo = fopen('prueba.css', 'w+');
    fwrite($nvoEstilo, $estilos);
    fclose($nvoEstilo);


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
    <link href="prueba.css" rel="stylesheet">
    
    
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
                            <span><i class="fa fa-envelope"></i> <?php echo $redes['correocontacto']?></span>
                            <span><i class="fa fa-phone-square"></i> <?php echo $redes['telprinc'] ?></span>
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
                                <a href="index.php" title="Home">
                                    <img src="logotipo/logo.jpg" alt="Estate">
                                </a>
                            </div><!-- /.site-name -->
                        </div><!-- /.logo-wrapper -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                    </div>      
                    <div class="col-lg-5 col-md-5 col-sm-12  pull-right">
                        <div class="social clearfix pull-right">
                        
                            <span><a data-placement="bottom" data-toggle="tooltip" data-original-title="Twitter" title="" target="_blank" <?php echo "href='".$redes['twitter']."'" ?>><i class="fa fa-twitter"></i></a></span>
                            <span><a data-placement="bottom" data-toggle="tooltip" data-original-title="Facebook" title="" target="_blank" <?php echo "href='".$redes['facebook']."'" ?>><i class="fa fa-facebook"></i></a></span>
                        </div><!-- end social -->
                    </div>     
                </div><!-- end row -->
                </div></header>       

        <?php require_once("includes/nav.php") ?>
        <!--<section class="post-wrapper-top dm-shadow clearfix">
            <div class="container">
                <div class="post-wrapper-top-shadow">
                    <span class="s1"></span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Single Gallery</li>
                    </ul>
                    <h2>Single Gallery</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        
                </div>
            </div>
        </section>--><!-- end post-wrapper-top -->
    
        <section class="generalwrapper dm-shadow clearfix">
        	<div class="container">
				<div class="row">
                	<div id="left_sidebar" class="col-lg-2 col-md-3 col-sm-3 col-xs-12 first clearfix">
              			<!--<div class="widget clearfix">
                        	<div class="title"><h3>Banner Ads</h3></div>
							<a href="#"><img src="demos/03_banner.png" alt="" class="img-thumbnail img-responsive"></a>
                        </div>--><!-- end widget -->
                        
              			<div class="widget clearfix">
                            <div class="title"><h3>Secciones</h3></div>
                            <ul class="list">
                            <?php 
                             echo $str;   

                             ?>
                                <!--<li><a title="" href="#">Support</a></li>
                                <li><a title="" href="#">Get in touch</a></li>
                                <li><a title="" href="#">About us</a></li>
                                <li><a title="" href="#">Terms of use</a></li>
                                <li><a title="" href="#">Copyrights</a></li>
                                <li><a title="" href="#">Join us</a></li>-->
                            </ul>
                        </div>
                                                       
                    	<!--<div class="widget cats_widget clearfix">
							<div class="title"><h3><i class="icon-sale"></i> For Sale</h3></div>
                			<ul class="real-estate-cats-widget">
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
                        </div>--><!-- end widget -->
                        
                    	<!--<div class="widget clearfix">
							<div class="title"><h3><i class="icon-rent"></i> For Rent</h3></div>
                			<ul class="real-estate-cats-widget">
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
                        </div>--><!-- end widget -->
                    </div><!-- #left_sidebar -->
                    
                	<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
                    	<div class="property_wrapper boxes clearfix">
							<!--<div class="boxes_img">
                                <div id="slider" class="flexslider clearfix">
                                    <ul class="slides">
                                        <li><img class="img-thumbnail" src="demos/01_home.jpg" alt=""></li>
                                        <li><img class="img-thumbnail" src="demos/02_home.jpg" alt=""></li>
                                        <li><img class="img-thumbnail" src="demos/03_home.jpg" alt=""></li>
                                        <li><img class="img-thumbnail" src="demos/04_home.jpg" alt=""></li>
                                        <li><img class="img-thumbnail" src="demos/05_home.png" alt=""></li>
                                        <li><img class="img-thumbnail" src="demos/06_home.png" alt=""></li>
                                        <li><img class="img-thumbnail" src="demos/07_home.png" alt=""></li>
                                        <li><img class="img-thumbnail" src="demos/08_home.png" alt=""></li>  
                                    </ul>
                                </div>
							</div>--><!-- boxes_img -->
                            
                            <hr>
                            
							<div class="title clearfix">
                            	<h3><?php echo $section2[titulo]; ?>
                                <small class="small_title"><mark><?php echo $section2[titulo]; ?></mark></small>
                                </h3>
							</div><!-- end title -->

                            <div class="property_desc clearfix">

                                <p><?php echo nl2br($section2[descripcion]); ?></p>
                                
                            </div>
                        </div><!-- end property_wrapper -->
                    </div><!-- end content -->
                    
                    <div id="right_sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 last clearfix">
                    	<div class="widget clearfix">
                        	<!--<div class="search_widget">
                            	<div class="title"><h3><i class="fa fa-search"></i> Search For Property</h3></div>
								<form action="#" id="search_form">
                                 	<input type="text" class="form-control" placeholder="Search by ID or property name...">     
								</form>--><!-- end search form -->
                            <!--</div>--><!-- end search_widget -->
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

        
        <?php require_once("includes/footer.php"); ?> 
    
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
            $('#slider').flexslider({
                animation: "fade",
                controlNav: false,
                animationLoop: false,
                slideshow: true,
                sync: "#carousel"
            });
        });
    </script>
  
</body>
</html>