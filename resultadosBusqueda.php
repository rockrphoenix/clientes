<?php 
require_once("clases/class.listar.php");
$ava=new Listados($_POST);
$bus=$ava->busquedAvanzada();
        
 ?>

<?php require_once("includes/header.php") ?>
<?php require_once("includes/nav.php") ?>
        <section class="post-wrapper-top dm-shadow clearfix">
            <div class="container">
                <div class="post-wrapper-top-shadow">
                    <span class="s1"></span>
                </div>
                <!--<div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li>Property Category: Villa</li>
                    </ul>
                    <h2>Property Category: Villa</h2>
                </div>-->
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
                        
              			<div class="widget clearfix">
                        	<!--<div class="title"><h3>Site Links</h3></div>
                            <ul class="list">
                            	<li><a title="" href="#">Support</a></li>
                            	<li><a title="" href="#">Get in touch</a></li>
                            	<li><a title="" href="#">About us</a></li>
                            	<li><a title="" href="#">Terms of use</a></li>
                            	<li><a title="" href="#">Copyrights</a></li>
                            	<li><a title="" href="#">Join us</a></li>
                            </ul>-->
                        </div>
                                                       
                    	<div class="widget cats_widget clearfix">
							<!--<div class="title"><h3><i class="icon-sale"></i> For Sale</h3></div>
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
                            </ul>-->
                        </div><!-- end widget -->
                        
                    	<div class="widget clearfix">
							<!--<div class="title"><h3><i class="icon-rent"></i> For Rent</h3></div>
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
                            </ul>-->
                        </div><!-- end widget -->
                    </div><!-- #left_sidebar -->
                    
                	<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
                    	<?php 
                            echo $bus;
                         ?>
        
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
                     	<!--<div class="widget clearfix">
                        	<div class="title"><h3>Banner Ads</h3></div>
							<img data-effect="fade" class="text-center img-thumbnail img-responsive" src="demos/01_banner.png" alt="">
						</div>--><!-- end of widget -->  
					</div><!-- end sidebar -->
                    
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end generalwrapper -->
<?php require_once("includes/footer.php") ?>
        
    
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