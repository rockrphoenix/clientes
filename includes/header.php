<?php 

    require_once("clases/class.listar.php");
    
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
	<link href="style.php" rel="stylesheet">
    
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
                        
                            <span><a data-placement="bottom" data-toggle="tooltip" data-original-title="Twitter" title="" <?php echo "href='".$redes['twitter']."'" ?>><i class="fa fa-twitter"></i></a></span>
                            <span><a data-placement="bottom" data-toggle="tooltip" data-original-title="Facebook" title="" <?php echo "href='".$redes['facebook']."'" ?>><i class="fa fa-facebook"></i></a></span>
                        </div><!-- end social -->
                    </div>     
                </div><!-- end row -->
                </div></header>