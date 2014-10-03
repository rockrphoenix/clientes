<?php
	require_once("class.conexion.php");
	
	
	//error_reporting(E_ALL ^ E_NOTICE);
	/**
	* por marco izaguirre marco.izag@gmail.com
	*para grupo syse
	*/
	class Listados extends Conexion
	{		
		function __construct()
		{
			$_POST;
			$_GET;
			parent::__construct();
			//$key=$this->conexion->real_escape_string($_POST);
		}
		function inmobiliaria(){
            //echo $this->id;
            $qry="SELECT idInmobiliaria FROM tblinmobiliaria WHERE idcliente = '$this->id'";
            //echo $qry;
            $inmo = $this->conexion->query($qry)or die("No puedo asignar la inmobiliaria");
            
            $arrayInmo = $inmo->fetch_array(MYSQL_ASSOC);
            $this->inmobiliaria = $arrayInmo[idInmobiliaria]; //ponga aquí aquí el id de inmobiliaria
            return $this->inmobiliaria;
        }
		function obtenerConfiguracion(){
			$idinm=$this->inmobiliaria();
			//echo $idinm;
			$conf = $this->conexion->query("SELECT ColorFondo, ColorPrincipal, facebook, twitter FROM tblconfiguracion WHERE idInmobiliaria = '$idinm'")or die("No obtengo la configuración");
			if ($conf->num_rows == 0) {
				return false;
			} else {
				$aConf = $conf->fetch_array(MYSQL_ASSOC);
				return $aConf;
			}
		}
		function oficinas(){
			$ofi = $this->conexion->query("SELECT * FROM tbloficina WHERE idcliente = '$this->id' AND status ='1'")or die("No puedo conectarme a oficinas");
			return $ofi;
			
			$ofi->free();
		}
		function asesores(){
			$ases=$this->conexion->query("SELECT * FROM tblasesores WHERE idcliente='$this->id'AND estatus ='2'")or die("No puedo conectarme a asesores");
			return $ases;
			
			$ases->free();
		}

		function redes(){
			$red=$this->conexion->query("SELECT * FROM consultacliente WHERE idCliente='$this->id'")or die("no se realizo la consulta");
			return $red;
			
			$red->free();
		}
		function seccion(){
			$secc=$this->conexion->query("SELECT * FROM tblseccion WHERE idcliente='$this->id'AND estatus ='1'")or die("No puedo conectarme a asesores");
			return $secc;
			
			$secc->free();
		}
		function seccion2(){
			$secc2=$this->conexion->query("SELECT * FROM tblseccion WHERE idcliente='$this->id'AND estatus ='1' AND idseccion='$_GET[idsecc]'")or die("No puedo conectarme a asesores");
			return $secc2;
			
			$secc2->free();
		}
		/*function datosFacturacion(){
			$datos=$this->conexion->query("SELECT ubi.idubicacion as idubicacion, Estado, Ciudad, Municipio, Colonia, Calle, NumeroExterior, NumeroInterior,CP, nombrers, rfc, tel, email FROM tblubicacion as ubi INNER JOIN tbldatosfact as datosf on datosf.idubicacion=ubi.idubicacion AND idcliente='$this->idcliente'")or die("no se obtuveiron datos");
			return $datos;
			
			$datos->free();
		}*/

		function muestraImagenes(){
			
			
					$dir = "../../imagenes_cy/".$this->id."/".$_GET[id]."";
					//$dir = "http://imagenes.yetinmobiliario.com/".$this->id."/".$_GET[id]."";
					
					/*var_dump($dir);
					$directorio = opendir($dir)or die("no existe"); //ruta actual
					while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
					{
					    if (is_dir($archivo))//verificamos si es o no un directorio
					    {
					        echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
					    }
					    else
					    {
					        echo $archivo . "<br />";
					    }
					}*/


					if ($gestor = opendir($dir)) {
						$cont = 1;
					    while (false !== ($entrada = readdir($gestor))) {
					        if ($entrada != "." && $entrada != "..") {
					        	if ($entrada == "principal.jpg") {
					        		$str.= '<li><img class="img-thumbnail" src="http://imagenes.yetinmobiliario.com/'.$this->id.'/'.$_GET[id].'/'.$entrada.'" width="200" alt=""></li>';
					        		
					        	}else{
					        		$str.= '<li><img class="img-thumbnail" src="http://imagenes.yetinmobiliario.com/'.$this->id.'/'.$_GET[id].'/'.$entrada.'" width="200" alt=""></li>';
					        		
					        	}
					            $cont++;
					        }
					    }
					    closedir($gestor);
					}
					
			
			return $str;	
		}

		function PropiedadesDest(){
			$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id' AND Destaque='1' AND Estatus='1' AND publicacion='1'")or die("no hay rpopiedades destacadas");
			$img=$this->muestraImagenes();
			//echo $img;

					$cont=0;
					while ($fila=$prop->fetch_array(MYSQL_ASSOC)) {
					
						$residuo=$cont%4;
						if ($residuo==0) {
							$box="boxes first";
						}elseif (($residuo%3)==0) {
							$box="boxes last";
						}else{
							$box="boxes";
						}
						if ($fila[PrecioVenta]!=0) {
                                            	$precio= number_format($fila[PrecioVenta]);
                                            } else {
                                            	$precio= number_format($fila[PrecioRenta]);
                                            }  

						if ($fila[Destaque]==1) {
							if ($fila[EstatusVenta]=="Venta-Renta") {
								$rejilla .=' <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="'.$box.'" data-effect="slide-bottom">
                                        <div class="ImageWrapper boxes_img">
                                            <img class="img-responsive" src="http://imagenes.yetinmobiliario.com/'.$this->id.'/'.$fila[idPropiedad].'/principal.jpg">
                                            <!--<img src="../../imagenes_cy/'.$this->id.'/'.$fila[idPropiedad].'/principal.jpg">-->
                                            
                                            <div class="ImageOverlayH"></div>
                                            <div class="Buttons StyleSc">
                                                <span class="WhiteSquare"><a class="fancybox" href=""><i class="fa fa-search"></i></a>
                                                </span>
                                                <!--<span class="WhiteSquare"><a class="fancybox" data-type="iframe" href="http://player.vimeo.com/video/64550407?autoplay=1"><i class="fa fa-video-camera"></i></a>
                                                </span>-->
                                                <span class="WhiteSquare"><a href="single-property.php?id='.$fila[idPropiedad].'"><i class="fa fa-link"></i></a>
                                                </span>
                                            </div>
                                           
                                            <div class="box_type">$'.number_format($fila[PrecioVenta]).' M.N. <br>$'.number_format($fila[PrecioRenta]).' M.N.</div>
                                            <div class="status_type">'. utf8_encode(utf8_decode($fila[EstatusVenta])).'</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.php?id='.$fila[idPropiedad].'"> '.utf8_encode(utf8_decode(substr($fila[titulo], 0,30))).'</a> <small class="small_title">'.$fila[CP].', '.utf8_encode(utf8_decode($fila[Colonia])).', '.utf8_encode(utf8_decode($fila[Municipio])).', '.utf8_encode(utf8_decode($fila[Estado])).'</small></h2>
                                       
                                        <div class="boxed_mini_details1 clearfix">
                                            <span class="sqft last"><strong>C-m2</strong><i class="icon-sqft"></i>'.$fila[M2Construccion].'</span>
                                            <span class="sqft last"><strong>T-m2</strong><i class="icon-sqft"></i>'.$fila[M2terreno].'</span>
                                            <span class="bedrooms"><strong>Hab.</strong><i class="icon-bed"></i>'.$fila[NumeroCuartos].'</span>
                                            <span class="status"><strong>Baños</strong><i class="icon-bath"></i>'.$fila[NumeroBanios].'</span>
                                        </div>
                                        
                                    </div><!-- end boxes -->
                                </div>';
                                $cont++;
							}else{
								$rejilla .=' <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="'.$box.'" data-effect="slide-bottom">
                                        <div class="ImageWrapper boxes_img">
                                            <img class="img-responsive" src="http://imagenes.yetinmobiliario.com/'.$this->id.'/'.$fila[idPropiedad].'/principal.jpg">
                                            <!--<img src="../../imagenes_cy/'.$this->id.'/'.$fila[idPropiedad].'/principal.jpg">-->
                                            
                                            <div class="ImageOverlayH"></div>
                                            <div class="Buttons StyleSc">
                                                <span class="WhiteSquare"><a class="fancybox" href=""><i class="fa fa-search"></i></a>
                                                </span>
                                                <!--<span class="WhiteSquare"><a class="fancybox" data-type="iframe" href="http://player.vimeo.com/video/64550407?autoplay=1"><i class="fa fa-video-camera"></i></a>
                                                </span>-->
                                                <span class="WhiteSquare"><a href="single-property.php?id='.$fila[idPropiedad].'"><i class="fa fa-link"></i></a>
                                                </span>
                                            </div>
                                            <div class="box_type">$'.$precio.' M.N.</div>
                                            <div class="status_type">'. utf8_encode(utf8_decode($fila[EstatusVenta])).'</div>
                                        </div>
                                        <h2 class="title"><a href="single-property.php?id='.$fila[idPropiedad].'"> '.utf8_encode(utf8_decode(substr($fila[titulo], 0,30))).'</a> <small class="small_title">'.$fila[CP].', '.utf8_encode(utf8_decode($fila[Colonia])).', '.utf8_encode(utf8_decode($fila[Municipio])).', '.utf8_encode(utf8_decode($fila[Estado])).'</small></h2>
                                       
                                        <div class="boxed_mini_details1 clearfix">
                                            <span class="sqft last"><strong>C-m2</strong><i class="icon-sqft"></i>'.$fila[M2Construccion].'</span>
                                            <span class="sqft last"><strong>T-m2</strong><i class="icon-sqft"></i>'.$fila[M2terreno].'</span>
                                            <span class="bedrooms"><strong>Hab.</strong><i class="icon-bed"></i>'.$fila[NumeroCuartos].'</span>
                                            <span class="status"><strong>Baños</strong><i class="icon-bath"></i>'.$fila[NumeroBanios].'</span>
                                        </div>
                                        
                                    </div><!-- end boxes -->
                                </div>';
                                $cont++;
							}
							
						}
						
					}
						
			return $rejilla;
		}

		function propDestUp(){
			$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id' AND Destaque ='1' AND Estatus='1' AND publicacion='1'")or die("no hay prodestup");
			
					$cont=0;
					
					while ($fila=$prop->fetch_array(MYSQL_ASSOC)) {
						
						$residuo=$cont%4;
						if ($residuo==0) {
							$box="boxes first";
						}elseif (($residuo%3)==0) {
							$box="boxes last";
						}else{
							$box="boxes";
						}
						if ($fila[PrecioVenta]!=0) {
                                            	$precio= number_format($fila[PrecioVenta]);
                                            } else {
                                            	$precio= number_format($fila[PrecioRenta]);
                                            }  
						if ($fila[Destaque]==1) {
										$rejillaUp.=' <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			                                    <div class="'.$box.'" >
			                                        <div class="ImageWrapper boxes_img">
			                                        <img src="http://imagenes.yetinmobiliario.com/'.$this->id.'/'.$fila[idPropiedad].'/principal.jpg">
			                                            <!--<img src="../../imagenes_cy/'.$this->id.'/'.$fila[idPropiedad].'/principal.jpg">-->
			                                            <div class="ImageOverlayH"></div>
			                                            <div class="Buttons StyleSc">
			                                                <span class="WhiteSquare"><a class="fancybox" href=""><i class="fa fa-search"></i></a>
			                                                </span>
			                                                <!--<span class="WhiteSquare"><a class="fancybox" data-type="iframe" href="http://player.vimeo.com/video/64550407?autoplay=1"><i class="fa fa-video-camera"></i></a>
			                                                </span>-->
			                                                <span class="WhiteSquare"><a href="single-property.php?id='.$fila[idPropiedad].'"><i class="fa fa-link"></i></a>
			                                                </span>
			                                            </div>
			                                            <div class="box_type">$'.$precio.' M.N.</div>
			                                            <div class="status_type">'.utf8_encode(utf8_decode($fila[EstatusVenta])).'</div>
			                                        </div>
			                                        <h2 class="title"><a href="single-property.php?id='.$fila[idPropiedad].'"> '.utf8_encode(utf8_decode(substr($fila[titulo], 0,30))).'</a> <small class="small_title">'.$fila[CP].', '.utf8_encode(utf8_decode($fila[Colonia])).', '.utf8_encode(utf8_decode($fila[Municipio])).', '.utf8_encode(utf8_decode($fila[Estado])).'</small></h2>
			                                       
			                                        <div class="boxed_mini_details1 clearfix">
			                                            <span class="sqft last"><strong>C-m2</strong><i class="icon-sqft"></i>'.$fila[M2Construccion].'</span>
			                                            <span class="sqft last"><strong>T-m2</strong><i class="icon-sqft"></i>'.$fila[M2terreno].'</span>
			                                            <span class="bedrooms"><strong>Hab.</strong><i class="icon-bed"></i>'.$fila[NumeroCuartos].'</span>
			                                            <span class="status"><strong>Baños</strong><i class="icon-bath"></i>'.$fila[NumeroBanios].'</span>
			                                        </div>
			                                    </div><!-- end boxes -->
			                                </div>';
			                                $cont++;
			                            }}
			                           
                return $rejillaUp;
			

		}
		function todasProp(){
			$img=$this->muestraImagenes();
			$tipo=$_GET['t'];
			//var_dump($tipo);
			
			if ($tipo!=0) {
				switch ($tipo) {
				case '1':
					$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND idTipo='Casa' AND (EstatusVenta='Venta'OR'VentaRenta') AND Estatus='1' AND publicacion='1'")or die("no case1");
					break;
				case '2':
					$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND idTipo='Condominio'AND (EstatusVenta='Venta'OR'VentaRenta') AND Estatus='1' AND publicacion='1'")or die("no case2");
					break;
				case '3':
					$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND idTipo='Departamento'AND (EstatusVenta='Venta'OR'VentaRenta') AND Estatus='1' AND publicacion='1'")or die("no case3");
					break;
				case '4':
					$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND idTipo='Edificio'AND (EstatusVenta='Venta'OR'VentaRenta') AND Estatus='1' AND publicacion='1'")or die("no case4");
					break;			
				case '5':
					$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND idTipo='Local'AND (EstatusVenta='Venta'OR'VentaRenta') AND Estatus='1' AND publicacion='1'")or die("no case5");
					break;
				case '6':
					$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND idTipo='Oficina'AND (EstatusVenta='Venta'OR'VentaRenta') AND Estatus='1' AND publicacion='1'")or die("no case6");
					break;
				case '7':
					$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND idTipo='Terreno'AND (EstatusVenta='Venta'OR'VentaRenta') AND Estatus='1' AND publicacion='1'")or die("no case7");
					break;
				case '8':
					$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND idTipo='Bodega'AND (EstatusVenta='Venta'OR'VentaRenta') AND Estatus='1' AND publicacion='1'")or die("no case8");
					break;
				case '9':
					$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND idTipo='Rancho'AND (EstatusVenta='Venta'OR'VentaRenta') AND Estatus='1' AND publicacion='1'")or die("no case9");
					break;
				case '10':
					$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND idTipo='Casa' AND (EstatusVenta='Renta'OR'VentaRenta') AND Estatus='1' AND publicacion='1'")or die("no case10");
					break;
				case '11':
					$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND idTipo='Condominio'AND (EstatusVenta='Renta'OR'VentaRenta') AND Estatus='1' AND publicacion='1'")or die("no case11");
					break;
				case '12':
					$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND idTipo='Departamento'AND (EstatusVenta='Renta'OR'VentaRenta') AND Estatus='1' AND publicacion='1'")or die("no case12");
					break;
				case '13':
					$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND idTipo='Edificio'AND (EstatusVenta='Renta'OR'VentaRenta') AND Estatus='1' AND publicacion='1'")or die("no case13");
					break;			
				case '14':
					$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND idTipo='Local'AND (EstatusVenta='Renta'OR'VentaRenta') AND Estatus='1' AND publicacion='1'")or die("no case14");
					break;
				case '15':
					$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND idTipo='Oficina'AND (EstatusVenta='Renta'OR'VentaRenta') AND Estatus='1' AND publicacion='1'")or die("no case15");
					break;
				case '16':
					$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND idTipo='Terreno'AND (EstatusVenta='Renta'OR'VentaRenta') AND Estatus='1' AND publicacion='1'")or die("no case16");
					break;
				case '17':
					$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND idTipo='Bodega'AND (EstatusVenta='Renta'OR'VentaRenta') AND Estatus='1' AND publicacion='1'")or die("no case17");
					break;
				case '18':
					$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND idTipo='Rancho'AND (EstatusVenta='Renta'OR'VentaRenta') AND Estatus='1' AND publicacion='1'")or die("no case18");
					break;						
				default:
					if ($prop==0) {
						echo"No se han registrado propiedades";
					}
					
					break;}
			}else {
				$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id' AND Estatus='1' AND publicacion='1'")or die("no case");
			}
			
			

					$cont=0;
					while ($fila=$prop->fetch_array(MYSQL_ASSOC)) {
						$residuo=$cont%4;
						if ($residuo==0) {
							$box="boxes first";
						}elseif (($residuo%3)==0) {
							$box="boxes last";
						}else{
							$box="boxes";
						}
						if ($fila[PrecioVenta]!=0) {
                                            	$precio= number_format($fila[PrecioVenta]);
                                            } else {
                                            	$precio= number_format($fila[PrecioRenta]);
                                            }  
            			
            			$todas .='<div class="col-lg-4 col-md-4 col-sm-4">
	                                    <div class="'.$box.'">
	                                        <div class="boxes_img ImageWrapper">
												<a href="single-property.php">
												<img class="img-responsive" src="http://imagenes.yetinmobiliario.com/'.$this->id.'/'.$fila[idPropiedad].'/principal.jpg">
													<!--<img class="img-responsive" src="../../imagenes_cy/'.$this->id.'/'.$fila[idPropiedad].'/principal.jpg">-->
													<div class="PStyleNe"></div>
												</a>
	                                            <div class="box_type">$'.$precio.' M.N.</div>
	                                        </div>
	                                        <h2 class="title"><a href="single-property.php?id='.$fila[idPropiedad].'"> '.utf8_encode(utf8_decode(substr($fila[titulo], 0 ,18))).'</a></h2>
	                                        <div class="boxed_mini_details clearfix">
	                                            <span class="sqft last"><strong>T-m2</strong><i class="icon-sqft"></i>'.$fila[M2terreno].'</span>
	                                            <span class="status"><strong>Baños</strong><i class="icon-bath"></i>'.$fila[NumeroBanios].'</span>
	                                            <span class="bedrooms last"><strong>Hab.</strong><i class="icon-bed"></i>'.$fila[NumeroCuartos].'</span>
	                                        </div>
	                                    </div><!-- end boxes -->
	                                </div>';
	                                 $cont++;
						
						
					}
						
			return $todas;
		}

		function residencial(){
		
		$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND (idTipo='Casa'OR idTipo='Condominio' OR idTipo='Departamento') AND Estatus='1' AND publicacion='1' ")or die("no existen propiedades residenciales");
		$cont=0;
							while ($fila=$prop->fetch_array(MYSQL_ASSOC)) {
								$residuo=$cont%4;
								if ($residuo==0) {
									$box="boxes first";
								}elseif (($residuo%3)==0) {
									$box="boxes last";
								}else{
									$box="boxes";
								}
								if ($fila[PrecioVenta]!=0) {
		                                            	$precio= number_format($fila[PrecioVenta]);
		                                            } else {
		                                            	$precio= number_format($fila[PrecioRenta]);
		                                            }  
		            			
		            			$residencial .='<div class="col-lg-4 col-md-4 col-sm-4">
			                                    <div class="'.$box.'">
			                                        <div class="boxes_img ImageWrapper">
														<a href="single-property.php">
														<img class="img-responsive" src="http://imagenes.yetinmobiliario.com/'.$this->id.'/'.$fila[idPropiedad].'/principal.jpg">
															<!--<img class="img-responsive" src="../../imagenes_cy/'.$this->id.'/'.$fila[idPropiedad].'/principal.jpg">-->
															<div class="PStyleNe"></div>
														</a>
			                                            <div class="box_type">$'.$precio.' M.N.</div>
			                                        </div>
			                                        <h2 class="title"><a href="single-property.php?id='.$fila[idPropiedad].'"> '.utf8_encode(utf8_decode(substr($fila[titulo], 0 ,18))).'</a></h2>
			                                        <div class="boxed_mini_details clearfix">
			                                            <span class="sqft last"><strong>T-m2</strong><i class="icon-sqft"></i>'.$fila[M2terreno].'</span>
			                                            <span class="status"><strong>Baños</strong><i class="icon-bath"></i>'.$fila[NumeroBanios].'</span>
			                                            <span class="bedrooms last"><strong>Hab.</strong><i class="icon-bed"></i>'.$fila[NumeroCuartos].'</span>
			                                        </div>
			                                    </div><!-- end boxes -->
			                                </div>';
			                                 $cont++;
							}
								
					return $residencial;
		}
		function comercial(){
		
		$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND (idTipo='Edificio'OR idTipo='Local' OR idTipo='Oficina' OR idTipo='Bodega') AND Estatus='1' AND publicacion='1' ")or die("no existen propiedades comerciales");
		$cont=0;
							while ($fila=$prop->fetch_array(MYSQL_ASSOC)) {
								$residuo=$cont%4;
								if ($residuo==0) {
									$box="boxes first";
								}elseif (($residuo%3)==0) {
									$box="boxes last";
								}else{
									$box="boxes";
								}
								if ($fila[PrecioVenta]!=0) {
		                                            	$precio= number_format($fila[PrecioVenta]);
		                                            } else {
		                                            	$precio= number_format($fila[PrecioRenta]);
		                                            }  
		            			
		            			$comer .='<div class="col-lg-4 col-md-4 col-sm-4">
			                                    <div class="'.$box.'">
			                                        <div class="boxes_img ImageWrapper">
														<a href="single-property.php">
														<img class="img-responsive" src="http://imagenes.yetinmobiliario.com/'.$this->id.'/'.$fila[idPropiedad].'/principal.jpg">
															<!--<img class="img-responsive" src="../../imagenes_cy/'.$this->id.'/'.$fila[idPropiedad].'/principal.jpg">-->
															<div class="PStyleNe"></div>
														</a>
			                                            <div class="box_type">$'.$precio.' M.N.</div>
			                                        </div>
			                                        <h2 class="title"><a href="single-property.php?id='.$fila[idPropiedad].'"> '.utf8_encode(utf8_decode(substr($fila[titulo], 0 ,18))).'</a></h2>
			                                        <div class="boxed_mini_details clearfix">
			                                            <span class="sqft last"><strong>T-m2</strong><i class="icon-sqft"></i>'.$fila[M2terreno].'</span>
			                                            <span class="status"><strong>Baños</strong><i class="icon-bath"></i>'.$fila[NumeroBanios].'</span>
			                                            <span class="bedrooms last"><strong>Hab.</strong><i class="icon-bed"></i>'.$fila[NumeroCuartos].'</span>
			                                        </div>
			                                    </div><!-- end boxes -->
			                                </div>';
			                                 $cont++;
							}
								
					return $comer;
		}

		function terrenos(){
		
		$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND (idTipo='Terreno'OR idTipo='Rancho' ) AND Estatus='1' AND publicacion='1' ")or die("no existen Terrenos");
		$cont=0;
							while ($fila=$prop->fetch_array(MYSQL_ASSOC)) {
								$residuo=$cont%4;
								if ($residuo==0) {
									$box="boxes first";
								}elseif (($residuo%3)==0) {
									$box="boxes last";
								}else{
									$box="boxes";
								}
								if ($fila[PrecioVenta]!=0) {
		                                            	$precio= number_format($fila[PrecioVenta]);
		                                            } else {
		                                            	$precio= number_format($fila[PrecioRenta]);
		                                            }  
		            			
		            			$terreno .='<div class="col-lg-4 col-md-4 col-sm-4">
			                                    <div class="'.$box.'">
			                                        <div class="boxes_img ImageWrapper">
														<a href="single-property.php">
														<img class="img-responsive" src="http://imagenes.yetinmobiliario.com/'.$this->id.'/'.$fila[idPropiedad].'/principal.jpg">
															<!--<img class="img-responsive" src="../../imagenes_cy/'.$this->id.'/'.$fila[idPropiedad].'/principal.jpg">-->
															<div class="PStyleNe"></div>
														</a>
			                                            <div class="box_type">$'.$precio.' M.N.</div>
			                                        </div>
			                                        <h2 class="title"><a href="single-property.php?id='.$fila[idPropiedad].'"> '.utf8_encode(utf8_decode(substr($fila[titulo], 0 ,18))).'</a></h2>
			                                        <div class="boxed_mini_details clearfix">
			                                            <span class="sqft last"><strong>T-m2</strong><i class="icon-sqft"></i>'.$fila[M2terreno].'</span>
			                                            <span class="status"><strong>Baños</strong><i class="icon-bath"></i>'.$fila[NumeroBanios].'</span>
			                                            <span class="bedrooms last"><strong>Hab.</strong><i class="icon-bed"></i>'.$fila[NumeroCuartos].'</span>
			                                        </div>
			                                    </div><!-- end boxes -->
			                                </div>';
			                                 $cont++;
							}
								
					return $terreno;
		}

		function Estados(){
       		$lista=$this->conexion->query("SELECT DISTINCT Estado FROM consultapropiedad2 WHERE idcliente='$this->id' AND Estatus='1' AND publicacion='1'")or die("no estados");
       		if ($lista->num_rows>0) {
       			while ($row=$lista->fetch_array(MYSQL_ASSOC)) {
       				$dato.='<option value="'.utf8_encode(utf8_decode($row[Estado])).'">'.utf8_encode(utf8_decode($row[Estado])).'</option>';
       			}
       		}
       		return $dato;
       	}

       	function busquedAvanzada(){
			$estado=$this->conexion->real_escape_string($_POST['select_estado']);
			$municipio=$this->conexion->real_escape_string($_POST['select_municipio']);
			$estatus=$this->conexion->real_escape_string($_POST['select_status']);
			$tipo=$this->conexion->real_escape_string($_POST['select_tipo']);
			$recamaras=$this->conexion->real_escape_string($_POST['recamaras']);
			$banos=$this->conexion->real_escape_string($_POST['banos']);
			$preciomin=$this->conexion->real_escape_string($_POST['preciomin']);
			$preciomax=$this->conexion->real_escape_string($_POST['preciomax']);
			

			$qry= "SELECT * FROM consultapropiedad2 WHERE publicacion='1' AND Estatus='1' AND idcliente='$this->id' ";
			if ($estado!= "seleccione") {
				$qry.="AND Estado='".$estado."' ";
			}else{
				$qry.="";
			}
			if ($municipio!="seleccione") {
				$qry.="AND Municipio='".$municipio."' ";
			}else{
				$qry.="";
			}
			if ($estatus!="seleccione") {
				$qry.="AND EstatusVenta='".$estatus."' ";
			}else{
				$qry.="";
			}
			if ($tipo != "seleccione") {
				$qry.="AND idTipo='".$tipo."' ";
			}else{
				$qry.="";
			}
			if ($recamaras!="seleccione") {
				$qry.="AND NumeroCuartos='".$recamaras."' ";
			}else{
				$qry.="";
			}
			if ($banos!="seleccione") {
				$qry.="AND NumeroBanios='".$banos."' ";
			}else{
				$qry.="";
			}
			if ($preciomin!="seleccione") {
				if ($estatus == "Venta") {
					$qry.="AND PrecioVenta >='".$preciomin."' ";
				}else{
				$qry.="";
				}
				if ($estatus == "Renta") {
					$qry.="AND PrecioRenta >='".$preciomin."' ";
				}else{
				$qry.="";
				}
				if ($estatus == "Venta-Renta") {
					$qry.="AND PrecioRenta >='".$preciomin."' AND PrecioVenta >='".$preciomin."' ";
				}else{
				$qry.="";
				}
				if ($estatus == "Traspaso") {
					$qry.="AND PrecioVenta >='".$preciomin."' ";
				}else{
				$qry.="";
				}
				if ($estatus == "seleccione") {
					$qry.="AND (PrecioVenta >='".$preciomin."' AND PrecioVenta <='".$preciomax."') ";
				}else{
				$qry.="";
				}
				

			}
			if ($preciomax!="seleccione") {
				if ($estatus == "Venta") {
					$qry.="AND PrecioVenta <= '".$preciomax."' ";
				}else{
				$qry.="";
				}
				if ($estatus == "Renta") {
					$qry.="AND PrecioRenta <= '".$preciomax."' ";
				}else{
				$qry.="";
				}
				if ($estatus == "Venta-Renta") {
					$qry.="AND PrecioRenta <='".$preciomax."' AND PrecioVenta <='".$preciomax."' ";
				}else{
				$qry.="";
				}
				if ($estatus == "Traspaso") {
					$qry.="AND PrecioVenta <='".$preciomax."' ";
				}else{
				$qry.="";
				}
				
			}
			//echo $qry;
			$result=$this->conexion->query($qry)or die(" no hay resultado");
			while ($res=$result->fetch_array(MYSQL_ASSOC)) {
				if ($res[PrecioVenta]!=0) {
                    	$precio= number_format($res[PrecioVenta]);
                    } else {
                    	$precio= number_format($res[PrecioRenta]);
                    } 

                if ($res[idTipo]=="Departamento") {
                   	$tipe="Depto.";
                   }else{
                   	$tipe=$res[idTipo];
                   }   
				
				$str.='<div class="property_wrapper boxes clearfix">
							<div class="ImageWrapper boxes_img">
								<img class="img-responsive" src="http://imagenes.yetinmobiliario.com/'.$this->id.'/'.$res[idPropiedad].'/principal.jpg">
								<!--<img class="img-responsive" src="../../imagenes_cy/'.$this->id.'/'.$res[idPropiedad].'/principal.jpg" alt="">-->
								<div class="ImageOverlayH"></div>
								<div class="Buttons StyleMg">
									<span class="WhiteSquare"><a class="fancybox" href="http://imagenes.yetinmobiliario.com/'.$this->id.'/'.$res[idPropiedad].'/principal.jpg"><i class="fa fa-search"></i></a></span>
									<!--<span class="WhiteSquare"><a class="fancybox" href="../../imagenes_cy/'.$this->id.'/'.$res[idPropiedad].'/principal.jpg"><i class="fa fa-search"></i></a></span>-->
									<span class="WhiteSquare"><a href="single-property.php?id='.$res[idPropiedad].'"><i class="fa fa-link"></i></a></span>
								</div><!-- end Buttons -->
								<div class="box_type">$ '.$precio.' M.N.</div>
								<div class="status_type">'.utf8_encode(utf8_decode($res[EstatusVenta])).'</div>
							</div><!-- ImageWrapper -->
                            
							<!--<div class="title clearfix">
                            	<span class="agent_img pull-right"><a data-placement="bottom" data-toggle="tooltip" data-original-title="Mark ANTHONY" title="" href="single-agent.html"><img width="75" class="img-responsive img-thumbnail" src="demos/03_team.png" alt=""></a></span>
                            	<h3><a href="single-property.html"> A Family Home for all your needs</a> 
                                <small class="small_title">890 Istanbul / Maslak</small>
                                </h3>
							</div>--><!-- end title -->

							<div class="boxed_mini_details1 clearfix">
								<span class="type first"><strong>Tipo</strong><a href="single-property.php?id='.$res[idPropiedad].'">'.$tipe.'</a></span>
								<span class="sqft"><strong>M2T</strong><i class="icon-sqft"></i> '.$res[M2terreno].'</span>
								<span class="garage"><strong>Garage</strong><i class="icon-garage"></i> '.$res[NumeroCocherasDescubiertas].'</span>
								<span class="bedrooms"><strong>Hab.</strong><i class="icon-bed"></i> '.$res[NumeroCuartos].'</span>
								<span class="status"><strong>Baños</strong><i class="icon-bath"></i> '.$res[NumeroBanios].'</span>
								<!--<span class="furnished"><strong>Furnish</strong><i class="icon-furnished"></i> Yes</span>
								<span class="pool last"><strong>Pool</strong><i class="icon-pool"></i> Yes</span>-->
							</div><!-- end boxed_mini_details1 -->
                            
                            <div class="property_desc clearfix">
                            	<p>'.nl2br(utf8_encode(utf8_decode(substr($res[Descripcion], 0,250)))) .'</p>
                                <a class="btn btn-primary btn-xs" href="single-property.php?id='.$res[idPropiedad].'" title="">Leer más</a>
                            </div>
                        </div><!-- end property_wrapper -->';
			}
			return $str;

		}
       	
	}


class SliderPrincipal extends Conexion
    {
        
        public function slider(){
            $sliders = $this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id' AND Destaque='1' AND Estatus='1' AND publicacion='1'")or die("Falló query del slider");
            while ($slide = $sliders->fetch_array(MYSQL_ASSOC)){
            	if ($slide[PrecioVenta]!=0) {
	                	$precio= number_format($slide[PrecioVenta]);
	                } else {
	                	$precio= number_format($slide[PrecioRenta]);
	                }
               	
                $grid .= '
                    <li>
                        <div class="desc">
                            <div class="ps-desc">
                                <h3><a href="single-property.php?id='.$slide[idPropiedad].'">'.utf8_encode(utf8_decode($slide[titulo])).'</a></h3>
                                <p>'.nl2br(utf8_encode(utf8_decode(substr($slide[Descripcion], 0,140)))) .' <a href="single-property.php?id='.$slide[idPropiedad].'">Leer Más</a></p>
                                <span class="type">Casa</span>
                                <span class="price">$'.$precio.' M.N.</span>
                                <a href="single-property.php?id='.$slide[idPropiedad].'" class="status">'.utf8_encode(utf8_decode($slide[EstatusVenta])).'</a>
                            </div>
                        </div>
                        <a href="#"><img src="http://imagenes.yetinmobiliario.com/'.$this->id.'/'.$slide[idPropiedad].'/principal.jpg"></a>
                        <!--<a href="#"><img src="../../imagenes_cy/'.$this->id.'/'.$slide[idPropiedad].'/principal.jpg"></a>-->
                    </li>
                ';
            }
            return $grid;
        }
    }	

/**
    * 
    */
    class listaProp extends Conexion
    {
    	
    	function __construct()
    	{
    		$_GET;


    		parent::__construct();
    	}
    	function PropXId(){

    		$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id'AND idPropiedad='$_GET[id]' AND Estatus='1' AND publicacion='1'")or die("no propxid");
    		
    		return $prop;
    		
    	}
    	function comunes(){
			$prop=$this->conexion->query("SELECT idTipo,EstatusVenta FROM consultapropiedad2 WHERE idcliente='$this->id'AND idPropiedad='$_GET[id]' AND Estatus='1' AND publicacion='1'")or die("no comun");
    		$prop1=$prop->fetch_array(MYSQL_ASSOC);

    		$comunes=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$this->id' AND idTipo ='$prop1[idTipo]' AND EstatusVenta ='$prop1[EstatusVenta]' AND idPropiedad<>'$_GET[id]' AND Estatus='1' AND publicacion='1'")or die("no hay propiedades comunes");
    		$cont=0;
							while ($fila=$comunes->fetch_array(MYSQL_ASSOC)) {
								$residuo=$cont%4;
								if ($residuo==0) {
									$box="boxes first";
								}elseif (($residuo%3)==0) {
									$box="boxes last";
								}else{
									$box="boxes";
								}
								if ($fila[PrecioVenta]!=0) {
		                                            	$precio= number_format($fila[PrecioVenta]);
		                                            } else {
		                                            	$precio= number_format($fila[PrecioRenta]);
		                                            }  
		            			
		            			$comun .='<div class="col-lg-4 col-md-4 col-sm-4">
			                                    <div class="'.$box.'">
			                                        <div class="boxes_img ImageWrapper">
														<a href="single-property.php">
														<img class="img-responsive" src="http://imagenes.yetinmobiliario.com/'.$this->id.'/'.$fila[idPropiedad].'/principal.jpg">
															<!--<img class="img-responsive" src="../../imagenes_cy/'.$this->id.'/'.$fila[idPropiedad].'/principal.jpg">-->
															<div class="PStyleNe"></div>
														</a>
			                                            <div class="box_type">$'.$precio.' M.N.</div>
			                                        </div>
			                                        <h2 class="title"><a href="single-property.php?id='.$fila[idPropiedad].'"> '.utf8_encode(utf8_decode(substr($fila[titulo], 0 ,18))).'</a></h2>
			                                        <div class="boxed_mini_details clearfix">
			                                            <span class="sqft last"><strong>T-m2</strong><i class="icon-sqft"></i>'.$fila[M2terreno].'</span>
			                                            <span class="status"><strong>Baños</strong><i class="icon-bath"></i>'.$fila[NumeroBanios].'</span>
			                                            <span class="bedrooms last"><strong>Hab.</strong><i class="icon-bed"></i>'.$fila[NumeroCuartos].'</span>
			                                        </div>
			                                    </div><!-- end boxes -->
			                                </div>';
			                                 $cont++;
							}
								
					return $comun;
		}
    } 


   
//codigo crear vista propiedades	
/*CREATE ALGORITHM = UNDEFINED VIEW `consultaPropiedad2` (idPropiedad,idcliente,titulo, idPersonalizado,idTipo,Descripcion, PrecioVenta, PrecioRenta,ComisionVenta,ComisionREnta, Destaque, EstatusVenta,EstatusPropiedad, Estatus,publicacion, M2terreno, M2Construccion, M2Jardin, Mfondo, Mfrente, NumeroCuartos, NumeroBanios, NumeroMediosBanios, NumeroCocheras, NumeroCocherasDescubiertas, NumeroCocherasVisitas, EstadoConservacion, CuartoServicio, NivelesConstruidos, NivelUbicacion, TipoDpto, NumeroPrivados, idClasificacionEdificio, nunidades, nnounidades, FormaTerreno, UsoSuelo, ConcentracionIndustrial, Ferrocarril, TransporteMultimodal, M2Oficina, m2bodega, AreaManiobras, TipoTecho, Andenes, AlturaLibre,CargaPisoToneladas, Hectareas, SistemaRiego, AbiertoVisitantes, RioCercano, SuperficiePastizal, TipoRancho, VistaPanoramica, LagunaCercana, Establo, SuperficieAgricola, SuperficieHabitable, NumeroPozos, NumeroCasas,bdescripcion,descripcionr,Estado,Ciudad,Municipio,Colonia,Calle,NumeroExterior,NumeroInterior,CP) 
												AS SELECT prop.idPropiedad,idcliente,titulo,idPersonalizado,idTipo,prop.Descripcion,PrecioVenta,PrecioRenta,ComisionVenta,ComisionREnta, Destaque, EstatusVenta,EstatusPropiedad, Estatus,publicacion, M2terreno, M2Construccion, M2Jardin, Mfondo, Mfrente, NumeroCuartos, NumeroBanios, NumeroMediosBanios, NumeroCocheras, NumeroCocherasDescubiertas, NumeroCocherasVisitas, EstadoConservacion, CuartoServicio, NivelesConstruidos, NivelUbicacion, TipoDpto, NumeroPrivados, idClasificacionEdificio, nunidades, nnounidades, FormaTerreno, UsoSuelo, ConcentracionIndustrial, Ferrocarril, TransporteMultimodal, M2Oficina, m2bodega, AreaManiobras, TipoTecho, Andenes, AlturaLibre,CargaPisoToneladas, Hectareas, SistemaRiego, AbiertoVisitantes, RioCercano, SuperficiePastizal, TipoRancho, VistaPanoramica, LagunaCercana, Establo, SuperficieAgricola, SuperficieHabitable, NumeroPozos, NumeroCasas,bdescripcion,descripcionr,Estado,Ciudad,Municipio,Colonia,Calle,NumeroExterior,NumeroInterior,CP FROM tblpropiedad prop,tblcaracteristicas carac,tblubicacion ubi WHERE prop.idcaracteristicas=carac.idcaracteristicas AND ubi.idUbicacion=prop.idUbicacion*/
//crear vista consulta cliente
/*CREATE ALGORITHM = UNDEFINED VIEW `consultacliente` (idCliente,Email,Tel,Cel,facebook,twitter,youtube,telprinc,telsec,correocontacto) AS SELECT inm.idCliente,dat.Email,Tel,Cel,facebook,twitter,youtube,telprinc,telsec,correocontacto FROM tbldatos dat,tblconfiguracion conf,tblinmobiliaria inm WHERE inm.idCliente=dat.iddatos AND conf.idInmobiliaria=inm.idInmobiliaria */										
?>

