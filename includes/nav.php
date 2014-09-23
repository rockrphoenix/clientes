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
                                                <form id="advanced_search_module" class="clearfix" action="resultadosBusqueda.php" name="advanced_search_module" method="post">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <label for="select_estado">Estado</label>
                                                        <select name="select_estado" id="select_estado" class="form-control">
                                                        <option value="seleccione" selected="yes">Seleccione</option>
                                                            <?php $estate=$muestra->Estados(); echo $estate; ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <label for="select_municipio">Delegación/Municipio</label>
                                                        <select name="select_municipio" id="select_municipio" class="form-control">
                                                        <option value="seleccione" selected="yes">Seleccione</option>
                                                           
                                                        </select>
                                                    </div>                                               
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="select_status">Estatus</label>
                                                        <select name="select_status" id="select_status" class="form-control">
                                                        <option value="seleccione" selected="yes">Seleccione</option>
                                                            <!--<option value="rent">On Rent</option>
                                                            <option value="sale">On Sale</option>-->
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="select_tipo">Tipo de propiedad</label>
                                                        <select name="select_tipo" id="select_tipo" class="form-control">
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
                                                        <select name="recamaras" id="recamaras" class="form-control">
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
                                                        <select name="banos" id="banos" class="form-control">
                                                        <option value="seleccione" selected="yes">Seleccione</option>
                                                            <!--<option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>-->
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="preciomin">Precio Mínimo</label>
                                                        <select name="preciomin" id="preciomin" class="form-control">
                                                        <option value="seleccione" selected="yes">Seleccione</option>
                                                            <option value="0">$0.00</option>
                                                            <option value="500000">$500,000.00</option>
                                                            <option value="1000000">$1,000,000.00</option>
                                                            <option value="5000000">$5,000,000.00</option>
                                                            <option value="10000000">$10,000,000.00</option>
                                                            <option value="25000000">$25,000,000.00</option>
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="preciomax">Precion Máximo</label>
                                                        <select name="preciomax" id="preciomax" class="form-control">
                                                        <option value="seleccione" selected="yes">Seleccione</option>
                                                            <option value="500000">$500,000.00</option>
                                                            <option value="1000000">$1,000,000.00</option>
                                                            <option value="5000000">$5,000,000.00</option>
                                                            <option value="10000000">$10,000,000.00</option>
                                                            <option value="25000000">$25,000,000.00</option>
                                                            <option value="50000000">$50,000,000.00</option>
                                                        </select>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <hr>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <p>Para resultados más rápidos, por favor utilice el formulario de arriba, si desea contactarnos para obtener resultados confidenciales, <a href="contact.html">póngase en contacto </a> con nosotros.</p>  
                                                        
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <input type="hidden" name="action" value="avanzada1">
                                                        <input type="submit" class="btn btn-primary btn-block" value="BUSCAR"> 
                                                    </div>
                                                         
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