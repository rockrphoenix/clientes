<?php 
require_once('clases/class.conexion.php');
/**
* 
*/
class propiedad extends Conexion
{
	
	function __construct()
	{
		$_GET;
		parent::__construct();
	}

	function datos(){
		$prop=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idcliente='$_GET[idcli]'AND idPropiedad='$_GET[idProp]' AND Estatus='1' AND publicacion='1'")or die("no propxml");
		return $prop;
	}
	function muestraImagenes(){
			
			
					$dir = "../../imagenes_cy/".$_GET['idcli']."/".$_GET['idProp']."";
					//$dir = "http://imagenes.yetinmobiliario.com/".$_GET['idcli']."/".$_GET['idProp']."";
					
					if ($gestor = opendir($dir)) {
						$cont = 1;
					    while (false !== ($entrada = readdir($gestor))) {
					        if ($entrada != "." && $entrada != "..") {
					        	if ($entrada == "principal.jpg") {
					        		$str= "http://imagenes.yetinmobiliario.com/".$_GET['idcli']."/".$_GET['idProp']."/".$entrada."";
					        		
					        	}
					            $cont++;
					        }
					    }
					    closedir($gestor);
					}
					
			
			return $str;	
		}

	function url(){
		$url=$_GET['c'];
		$uri=base64_decode($url);
		
		return $uri;
	}	
}
$prop2=new propiedad();
$fila=$prop2->datos();
$imagen=$prop2->muestraImagenes();
$url=$prop2->url();

header('Content-type:text/xml;  charset=utf-8 ');
$xml = "<?xml version='1.0' encoding='UTF-8' standalone='no'?>"; 
$xml .= "<!DOCTYPE yakaz PUBLIC '' 'http://www.yakaz.com/yakaz.dtd' >"; 
$xml .= "<yakaz version='1.0'>";

while ( $fila2=$fila->fetch_array(MYSQL_ASSOC)) {
	switch ($fila2['idTipo']) {
			case 'Casa':
				if ($fila2['EstatusVenta']=="Renta") {
					$tipo="housing:rentals";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tipo="housing:sales";
				}
				$xml.="<ad-housing category='".$tipo."'>";
				$xml.="<what>";
				$xml.="<title><![CDATA[".$fila2['titulo']."]]></title>";
				$xml.="<description><![CDATA[".$fila2['Descripcion']."]]></description>";
				$xml.="<ad-url><![CDATA[".$url."]]></ad-url>";
				$xml.="<picture-url><![CDATA[".$imagen."]]></picture-url>";

				if ($fila2['PrecioVenta']!=0) {
					$precio= $fila2['PrecioVenta'];
				} else {
					$precio= $fila2['PrecioRenta'];
				} 
				$xml.="<price unit='peso'><![CDATA[".$precio."]]></price>";
				$xml.="<rooms><![CDATA[".$fila2['NumeroCuartos']."]]></rooms>";
				$xml.="<bedrooms><![CDATA[".$fila2['NumeroCuartos']."]]></bedrooms>";
				$xml.="<bathrooms><![CDATA[".$fila2['NumeroBanios']."]]></bathrooms>";
				$xml.="<surface unit='m2'><![CDATA[".$fila2['M2terreno']."]]></surface>";
				$xml.="</what>";
				$xml.="<where>";
				$xml.="<street-address display-address='no'><![CDATA[".$fila2['Calle'].", ".$fila2['NumeroExterior']."]]></street-address>";
				$xml.="<city-name><![CDATA[".$fila2['Ciudad']."]]></city-name>";
				$xml.="<zip-code><![CDATA[".$fila2['CP']."]]></zip-code>";
				$xml.="<country><![CDATA['MX']]></country>";
				$xml.="</where>";
				$xml.="</ad-housing>";
				break;
			case 'Condominio':
				if ($fila2['EstatusVenta']=="Renta") {
					$tipo="housing:rentals";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tipo="housing:sales";
				}
				$xml.="<ad-housing category='".$tipo."'>";
				$xml.="<what>";
				$xml.="<title><![CDATA[".$fila2['titulo']."]]></title>";
				$xml.="<description><![CDATA[".$fila2['Descripcion']."]]></description>";
				$xml.="<ad-url><![CDATA[".$url."]]></ad-url>";
				$xml.="<picture-url><![CDATA[".$imagen."]]></picture-url>";

				if ($fila2['PrecioVenta']!=0) {
					$precio= $fila2['PrecioVenta'];
				} else {
					$precio= $fila2['PrecioRenta'];
				} 
				$xml.="<price unit='peso'><![CDATA[".$precio."]]></price>";
				$xml.="<rooms><![CDATA[".$fila2['NumeroCuartos']."]]></rooms>";
				$xml.="<bedrooms><![CDATA[".$fila2['NumeroCuartos']."]]></bedrooms>";
				$xml.="<bathrooms><![CDATA[".$fila2['NumeroBanios']."]]></bathrooms>";
				$xml.="<surface unit='m2'><![CDATA[".$fila2['M2terreno']."]]></surface>";
				$xml.="</what>";
				$xml.="<where>";
				$xml.="<street-address display-address='no'><![CDATA[".$fila2['Calle'].", ".$fila2['NumeroExterior']."]]></street-address>";
				$xml.="<city-name><![CDATA[".$fila2['Ciudad']."]]></city-name>";
				$xml.="<zip-code><![CDATA[".$fila2['CP']."]]></zip-code>";
				$xml.="<country><![CDATA['MX']]></country>";
				$xml.="</where>";
				$xml.="</ad-housing>";
				break;
			case 'Departamento':
				if ($fila2['EstatusVenta']=="Renta") {
					$tipo="housing:rentals";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tipo="housing:sales";
				}
				$xml.="<ad-housing category='".$tipo."'>";
				$xml.="<what>";
				$xml.="<title><![CDATA[".$fila2['titulo']."]]></title>";
				$xml.="<description><![CDATA[".$fila2['Descripcion']."]]></description>";
				$xml.="<ad-url><![CDATA[".$url."]]></ad-url>";
				$xml.="<picture-url><![CDATA[".$imagen."]]></picture-url>";

				if ($fila2['PrecioVenta']!=0) {
					$precio= $fila2['PrecioVenta'];
				} else {
					$precio= $fila2['PrecioRenta'];
				} 
				$xml.="<price unit='peso'><![CDATA[".$precio."]]></price>";
				$xml.="<rooms><![CDATA[".$fila2['NumeroCuartos']."]]></rooms>";
				$xml.="<bedrooms><![CDATA[".$fila2['NumeroCuartos']."]]></bedrooms>";
				$xml.="<bathrooms><![CDATA[".$fila2['NumeroBanios']."]]></bathrooms>";
				$xml.="<surface unit='m2'><![CDATA[".$fila2['M2terreno']."]]></surface>";
				$xml.="</what>";
				$xml.="<where>";
				$xml.="<street-address display-address='no'><![CDATA[".$fila2['Calle'].", ".$fila2['NumeroExterior']."]]></street-address>";
				$xml.="<city-name><![CDATA[".$fila2['Ciudad']."]]></city-name>";
				$xml.="<zip-code><![CDATA[".$fila2['CP']."]]></zip-code>";
				$xml.="<country><![CDATA['MX']]></country>";
				$xml.="</where>";
				$xml.="</ad-housing>";
				break;
			case 'Rancho':
				if ($fila2['EstatusVenta']=="Renta") {
					$tipo="housing:rentals";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tipo="housing:sales";
				}
				$xml.="<ad-housing category='".$tipo."'>";
				$xml.="<what>";
				$xml.="<title><![CDATA[".$fila2['titulo']."]]></title>";
				$xml.="<description><![CDATA[".$fila2['Descripcion']."]]></description>";
				$xml.="<ad-url><![CDATA[".$url."]]></ad-url>";
				$xml.="<picture-url><![CDATA[".$imagen."]]></picture-url>";

				if ($fila2['PrecioVenta']!=0) {
					$precio= $fila2['PrecioVenta'];
				} else {
					$precio= $fila2['PrecioRenta'];
				} 
				$xml.="<price unit='peso'><![CDATA[".$precio."]]></price>";
				$xml.="<rooms><![CDATA[".$fila2['NumeroCuartos']."]]></rooms>";
				$xml.="<bedrooms><![CDATA[".$fila2['NumeroCuartos']."]]></bedrooms>";
				$xml.="<bathrooms><![CDATA[".$fila2['NumeroBanios']."]]></bathrooms>";
				$xml.="<surface unit='m2'><![CDATA[".$fila2['M2terreno']."]]></surface>";
				$xml.="</what>";
				$xml.="<where>";
				$xml.="<street-address display-address='no'><![CDATA[".$fila2['Calle'].", ".$fila2['NumeroExterior']."]]></street-address>";
				$xml.="<city-name><![CDATA[".$fila2['Ciudad']."]]></city-name>";
				$xml.="<zip-code><![CDATA[".$fila2['CP']."]]></zip-code>";
				$xml.="<country><![CDATA['MX']]></country>";
				$xml.="</where>";
				$xml.="</ad-housing>";
				break;
			case 'Edificio':
				if ($fila2['EstatusVenta']=="Renta") {
					$tipo="housing:commercials";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tipo="housing:commercials";
				}
				$xml.="<ad-housing category='".$tipo."'>";
				$xml.="<what>";
				$xml.="<title><![CDATA[".$fila2['titulo']."]]></title>";
				$xml.="<description><![CDATA[".$fila2['Descripcion']."]]></description>";
				$xml.="<ad-url><![CDATA[".$url."]]></ad-url>";
				$xml.="<picture-url><![CDATA[".$imagen."]]></picture-url>";

				if ($fila2['PrecioVenta']!=0) {
					$precio= $fila2['PrecioVenta'];
				} else {
					$precio= $fila2['PrecioRenta'];
				} 
				$xml.="<price unit='peso'><![CDATA[".$precio."]]></price>";
				$xml.="<rooms><![CDATA[".$fila2['NumeroCuartos']."]]></rooms>";
				$xml.="<bedrooms><![CDATA[".$fila2['NumeroCuartos']."]]></bedrooms>";
				$xml.="<bathrooms><![CDATA[".$fila2['NumeroBanios']."]]></bathrooms>";
				$xml.="<surface unit='m2'><![CDATA[".$fila2['M2terreno']."]]></surface>";
				$xml.="</what>";
				$xml.="<where>";
				$xml.="<street-address display-address='no'><![CDATA[".$fila2['Calle'].", ".$fila2['NumeroExterior']."]]></street-address>";
				$xml.="<city-name><![CDATA[".$fila2['Ciudad']."]]></city-name>";
				$xml.="<zip-code><![CDATA[".$fila2['CP']."]]></zip-code>";
				$xml.="<country><![CDATA['MX']]></country>";
				$xml.="</where>";
				$xml.="</ad-housing>";
				break;
			case 'Oficina':
				if ($fila2['EstatusVenta']=="Renta") {
					$tipo="housing:commercials";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tipo="housing:commercials";
				}
				$xml.="<ad-housing category='".$tipo."'>";
				$xml.="<what>";
				$xml.="<title><![CDATA[".$fila2['titulo']."]]></title>";
				$xml.="<description><![CDATA[".$fila2['Descripcion']."]]></description>";
				$xml.="<ad-url><![CDATA[".$url."]]></ad-url>";
				$xml.="<picture-url><![CDATA[".$imagen."]]></picture-url>";

				if ($fila2['PrecioVenta']!=0) {
					$precio= $fila2['PrecioVenta'];
				} else {
					$precio= $fila2['PrecioRenta'];
				} 
				$xml.="<price unit='peso'><![CDATA[".$precio."]]></price>";
				$xml.="<rooms><![CDATA[".$fila2['NumeroCuartos']."]]></rooms>";
				$xml.="<bedrooms><![CDATA[".$fila2['NumeroCuartos']."]]></bedrooms>";
				$xml.="<bathrooms><![CDATA[".$fila2['NumeroBanios']."]]></bathrooms>";
				$xml.="<surface unit='m2'><![CDATA[".$fila2['M2terreno']."]]></surface>";
				$xml.="</what>";
				$xml.="<where>";
				$xml.="<street-address display-address='no'><![CDATA[".$fila2['Calle'].", ".$fila2['NumeroExterior']."]]></street-address>";
				$xml.="<city-name><![CDATA[".$fila2['Ciudad']."]]></city-name>";
				$xml.="<zip-code><![CDATA[".$fila2['CP']."]]></zip-code>";
				$xml.="<country><![CDATA['MX']]></country>";
				$xml.="</where>";
				$xml.="</ad-housing>";
				break;
			case 'Local':
				if ($fila2['EstatusVenta']=="Renta") {
					$tipo="housing:commercials";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tipo="housing:commercials";
				}
				$xml.="<ad-housing category='".$tipo."'>";
				$xml.="<what>";
				$xml.="<title><![CDATA[".$fila2['titulo']."]]></title>";
				$xml.="<description><![CDATA[".$fila2['Descripcion']."]]></description>";
				$xml.="<ad-url><![CDATA[".$url."]]></ad-url>";
				$xml.="<picture-url><![CDATA[".$imagen."]]></picture-url>";

				if ($fila2['PrecioVenta']!=0) {
					$precio= $fila2['PrecioVenta'];
				} else {
					$precio= $fila2['PrecioRenta'];
				} 
				$xml.="<price unit='peso'><![CDATA[".$precio."]]></price>";
				$xml.="<rooms><![CDATA[".$fila2['NumeroCuartos']."]]></rooms>";
				$xml.="<bedrooms><![CDATA[".$fila2['NumeroCuartos']."]]></bedrooms>";
				$xml.="<bathrooms><![CDATA[".$fila2['NumeroBanios']."]]></bathrooms>";
				$xml.="<surface unit='m2'><![CDATA[".$fila2['M2terreno']."]]></surface>";
				$xml.="</what>";
				$xml.="<where>";
				$xml.="<street-address display-address='no'><![CDATA[".$fila2['Calle'].", ".$fila2['NumeroExterior']."]]></street-address>";
				$xml.="<city-name><![CDATA[".$fila2['Ciudad']."]]></city-name>";
				$xml.="<zip-code><![CDATA[".$fila2['CP']."]]></zip-code>";
				$xml.="<country><![CDATA['MX']]></country>";
				$xml.="</where>";
				$xml.="</ad-housing>";
				break;
			case 'Bodega':
				if ($fila2['EstatusVenta']=="Renta") {
					$tipo="housing:commercials";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tipo="housing:commercials";
				}
				$xml.="<ad-housing category='".$tipo."'>";
				$xml.="<what>";
				$xml.="<title><![CDATA[".$fila2['titulo']."]]></title>";
				$xml.="<description><![CDATA[".$fila2['Descripcion']."]]></description>";
				$xml.="<ad-url><![CDATA[".$url."]]></ad-url>";
				$xml.="<picture-url><![CDATA[".$imagen."]]></picture-url>";

				if ($fila2['PrecioVenta']!=0) {
					$precio= $fila2['PrecioVenta'];
				} else {
					$precio= $fila2['PrecioRenta'];
				} 
				$xml.="<price unit='peso'><![CDATA[".$precio."]]></price>";
				$xml.="<rooms><![CDATA[".$fila2['NumeroCuartos']."]]></rooms>";
				$xml.="<bedrooms><![CDATA[".$fila2['NumeroCuartos']."]]></bedrooms>";
				$xml.="<bathrooms><![CDATA[".$fila2['NumeroBanios']."]]></bathrooms>";
				$xml.="<surface unit='m2'><![CDATA[".$fila2['M2terreno']."]]></surface>";
				$xml.="</what>";
				$xml.="<where>";
				$xml.="<street-address display-address='no'><![CDATA[".$fila2['Calle'].", ".$fila2['NumeroExterior']."]]></street-address>";
				$xml.="<city-name><![CDATA[".$fila2['Ciudad']."]]></city-name>";
				$xml.="<zip-code><![CDATA[".$fila2['CP']."]]></zip-code>";
				$xml.="<country><![CDATA['MX']]></country>";
				$xml.="</where>";
				$xml.="</ad-housing>";
				break;
			case 'Terreno':
				if ($fila2['EstatusVenta']=="Renta") {
					$tipo="housing:rentals";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tipo="housing:sales";
				}
				$xml.="<ad-housing category='".$tipo."'>";
				$xml.="<what>";
				$xml.="<title><![CDATA[".$fila2['titulo']."]]></title>";
				$xml.="<description><![CDATA[".$fila2['Descripcion']."]]></description>";
				$xml.="<ad-url><![CDATA[".$url."]]></ad-url>";
				$xml.="<picture-url><![CDATA[".$imagen."]]></picture-url>";

				if ($fila2['PrecioVenta']!=0) {
					$precio= $fila2['PrecioVenta'];
				} else {
					$precio= $fila2['PrecioRenta'];
				} 
				$xml.="<price unit='peso'><![CDATA[".$precio."]]></price>";
				$xml.="<rooms><![CDATA[".$fila2['NumeroCuartos']."]]></rooms>";
				$xml.="<bedrooms><![CDATA[".$fila2['NumeroCuartos']."]]></bedrooms>";
				$xml.="<bathrooms><![CDATA[".$fila2['NumeroBanios']."]]></bathrooms>";
				$xml.="<surface unit='m2'><![CDATA[".$fila2['M2terreno']."]]></surface>";
				$xml.="</what>";
				$xml.="<where>";
				$xml.="<street-address display-address='no'><![CDATA[".$fila2['Calle'].", ".$fila2['NumeroExterior']."]]></street-address>";
				$xml.="<city-name><![CDATA[".$fila2['Ciudad']."]]></city-name>";
				$xml.="<zip-code><![CDATA[".$fila2['CP']."]]></zip-code>";
				$xml.="<country><![CDATA['MX']]></country>";
				$xml.="</where>";
				$xml.="</ad-housing>";
				break;	
			
			default:
				# code...
				break;
		}	
		
		
}
$xml .= "</yakaz>";
echo $xml;
$fila2=$prop2->datos();
$fila3=$fila2->fetch_array(MYSQL_ASSOC);
$nombre=$fila3['idcliente'].$fila3['idPropiedad']."propyak";
$archivo=fopen("xml/yakaz/".$nombre.".xml", "w+");
fwrite($archivo, $xml);
fclose($archivo);

 ?>