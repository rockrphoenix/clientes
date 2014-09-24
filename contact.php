

		
<?php require_once("includes/header.php") ?>
<?php require_once("includes/nav.php") ?>   

<script src="js/jquery.validate.min.js" type="text/javascript"></script> <!-- form validation -->
<script src="js/validaContacto.js" type="text/javascript"></script> <!-- form validation -->     
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
                    </div><!-- #left_sidebar -->
                    
                	<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
                    	<div class="modal-body clearfix">
                        <h3 class="big_title">¿Tiene alguna pregunta? <small>No se preocupe, nosotros estamos para ayudarlo.</small></h3>
                        	
                            <hr>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="ImageWrapper boxes_img">
                            		<img src="logotipo/logo.jpg" class="img-responsive" alt="">
									<div class="ImageOverlayH"></div>
										<div class="Buttons StyleSc">
											<span class="WhiteSquare"><a <?php echo "href='".$redes['facebook']."'" ?>><i class="fa fa-facebook"></i></a></span>
                                            <!--<span class="WhiteSquare"><a href="#"><i class="fa fa-google-plus"></i></a></span>-->
											<span class="WhiteSquare"><a <?php echo "href='".$redes['twitter']."'" ?>><i class="fa fa-twitter"></i></a></span>
											
										</div>
								</div>
                                <div class="servicetitle"><h3>Detalles de contacto</h3></div>
                                <ul>
                                    <!--<li><i class="fa fa-external-link"></i> www.yoursite.com</li>-->
                                    <li><i class="fa fa-envelope"></i> <?php echo $redes['Email']?></li>
                            		<li><i class="fa fa-phone-square"></i> <?php echo $redes['Tel'] ?></li>
                            		<li><i class="fa fa-phone-square"></i> <?php echo $redes['Cel'] ?></li>
                                </ul>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <form id="contact" class="row" action="procesa/correo.php" name="contactform" method="post">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre"> 
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Correo electrónico"> 
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Teléfono">
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Asunto"> 
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Escriba su mensaje…"></textarea>
                                    <input type="hidden" name="action" value="contactUser">
                                    <input type="submit" class="btn btn-primary" value="ENVIAR">
                                </form>
                                <div id="alertaRegistro" style="display:none"></div>
                                <div class="alert alert-success" style="display: none;" id="respuestaAltaV">
                                    <a class="alert-link" href="#"> Correo enviado satisfactoriamente </a>
                                </div>
                                <div class="alert alert-danger" style="display: none;" id="respuestaAltaFalso">
                                    <a class="alert-link" href="#"> No se pudo enviar el correo </a>
                                </div>
                            </div>
                        </div>
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
                     	<div class="widget clearfix">
                        	<!--<div class="title"><h3>Banner Ads</h3></div>
							<img data-effect="fade" class="text-center img-thumbnail img-responsive" src="demos/01_banner.png" alt="">-->
						</div><!-- end of widget -->  
					</div><!-- end sidebar -->
                    
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end generalwrapper -->

       <?php require_once("includes/footer.php"); ?> 
        
    
	<!-- Bootstrap core and JavaScript's
    ================================================== -->
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
   
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.parallax.js"></script>
    <script src="js/jquery.fitvids.js"></script>    
	<script src="js/jquery.unveilEffects.js"></script>	
	<script src="js/retina-1.1.0.js"></script>
    <script src="js/fhmm.js"></script>
	<script src="js/bootstrap-select.js"></script>
    <script src="fancyBox/jquery.fancybox.pack.js"></script>
	<script src="js/application.js"></script>
    

 
  
</body>
</html>