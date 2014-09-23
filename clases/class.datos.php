<?php
	require_once("../clases/class.conexion.php");
	/**
	* por marco izaguirre
	*/
	class Datos extends Conexion
	{
		
		function __construct()
		{
			$_POST;
			parent::__construct();
			foreach ($_POST as $key) {
				$key=real_escape_string($key);
			}
		}


		function combosCodigoA(){
			$mun = $this->conexion->query("SELECT DISTINCT Municipio FROM consultapropiedad2 WHERE Estado='$_POST[elegido]' AND idcliente='$this->id'")or die("no encuentro el municipio");
			while ($aMunicipio = $mun->fetch_array(MYSQL_ASSOC)) {

				$str .= '<option value="'.$aMunicipio[Municipio].'">'.utf8_encode($aMunicipio[Municipio]).'</option>';
			}
			return $str;
		}

		function combosEstatus(){
			$est=$this->conexion->query("SELECT DISTINCT EstatusVenta FROM consultapropiedad2 WHERE Municipio='$_POST[mpo]' AND idcliente='$this->id'")or die("no se obtuvo el estatus");
			while ($status=$est->fetch_array(MYSQL_ASSOC)){
				$str.='<option value="'.$status[EstatusVenta].'">'.$status[EstatusVenta].'</option>';
			}
			return $str;
		}

		function combostipo(){
			$type=$this->conexion->query("SELECT DISTINCT idTipo FROM consultapropiedad2 WHERE EstatusVenta='$_POST[estat]' AND idcliente='$this->id'")or die("no se obtuvo el tipo");
			while ($tipo=$type->fetch_array(MYSQL_ASSOC)){
				$str.='<option value="'.$tipo[idTipo].'">'.$tipo[idTipo].'</option>';
			}
			return $str;
		}
		function combosrecam(){
			$rec=$this->conexion->query("SELECT DISTINCT NumeroCuartos FROM consultapropiedad2 WHERE idTipo='$_POST[tipo]' AND idcliente='$this->id'")or die("no se obtuvo el numero de cuartos");
			while ($cuartos=$rec->fetch_array(MYSQL_ASSOC)){
				$str.='<option value="'.$cuartos[NumeroCuartos].'">'.$cuartos[NumeroCuartos].'</option>';
			}
			return $str;
		}
		function banos(){
			$bano=$this->conexion->query("SELECT DISTINCT NumeroBanios FROM consultapropiedad2 WHERE NumeroCuartos='$_POST[recam]' AND idcliente='$this->id'")or die("no se obtuvo el numero de banos");
			while ($banos=$bano->fetch_array(MYSQL_ASSOC)){
				$str.='<option value="'.$banos[NumeroBanios].'">'.$banos[NumeroBanios].'</option>';
			}
			return $str;
			
		}
		function busquedAvanzada(){
			$estado=$_POST[select_estado];
			$municipio=$_POST[select_municipio];
			$estatus=$_POST[select_status];
			$tipo=$_POST[select_tipo];
			$recamaras=$_POST[recamaras];
			$banos=$_POST[banos];
			$preciomin=$_POST[preciomin];
			$preciomax=$_POST[preciomax];
			
			$query= "SELECT * FROM consultapropiedad2 WHERE";
			if ($estado!= "") {
				$query.="Estado='$estado'";
			}elseif ($municipio!="") {
				$query.="AND Municipio='$municipio'";
			}elseif ($estatus!="") {
				$query.="AND EstatusVenta='$estatus'";
			}elseif ($tipo != "") {
				$query.="AND idTipo='$tipo'";
			}elseif ($recamaras!="") {
				$query.="AND NumeroCuartos='$recamaras'";
			}elseif ($banos!="") {
				$query.="AND NumeroBanios='$banos'";
			}elseif ($preciomin!="") {
				if ($tipo == "Venta") {
					$query.="AND PrecioVenta>='$preciomin'";
				}elseif ($tipo == "Renta") {
					$query.="AND PrecioRenta>='$preciomin'";
				}elseif ($tipo == "Venta-Renta") {
					$query.="AND PrecioRenta>='$preciomin' AND PrecioVenta>='$preciomin'";
				}elseif ($tipo == "Traspaso") {
					$query.="AND PrecioVenta>='$preciomin'";
				}		
			}elseif ($preciomax!="") {
				if ($tipo == "Venta") {
					$query.="AND PrecioVenta<='$preciomax'";
				}elseif ($tipo == "Renta") {
					$query.="AND PrecioRenta<='$preciomax'";
				}elseif ($tipo == "Venta-Renta") {
					$query.="AND PrecioRenta<='$preciomax' AND PrecioVenta<='$preciomax'";
				}elseif ($tipo == "Traspaso") {
					$query.="AND PrecioVenta<='$preciomax'";
				}	
			}


			
			
			while ($res=$result->fetch_array(MYSQL_ASSOC)) {
				if ($res[PrecioVenta]!=0) {
                    	$precio= $fila[PrecioVenta];
                    } else {
                    	$precio= $fila[PrecioRenta];
                    } 
				if ($precio ) {
					# code...
				}
				$str.='<div class="ImageWrapper boxes_img">
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
                        </div>'
			}

		}
		
	}
?>