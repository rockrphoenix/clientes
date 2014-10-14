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

header('Content-type:text/xml;  charset=utf-8');
$xml = "<?xml version='1.0' encoding='UTF-8'?>"; 
$xml .= "<locanto>";

while ( $fila2=$fila->fetch_array(MYSQL_ASSOC)) {
	$xml.="<ad>";
	$xml.="<id><![CDATA[".$fila2['idPropiedad']."]]></id>";
	$xml.="<title><![CDATA[".$fila2['titulo']."]]></title>";
	$xml.="<description><![CDATA[".$fila2['Descripcion']."]]></description>";
	$xml.="<image_url><![CDATA[".$imagen."]]></image_url>";
	$xml.="<image_title><![CDATA[".$fila2['titulo']."]]></image_title>";
	$xml.="<url><![CDATA[".$url."]]></url>";
	$xml.="<city_area><![CDATA[".$fila2['Colonia']."]]></city_area>";
	$xml.="<zip><![CDATA[".$fila2['CP']."]]></zip>";
	$xml.="<city><![CDATA[".$fila2['Ciudad']."]]></city>";
	$xml.="<estate><![CDATA[".$fila2['Estado']."]]></estate>";
	$xml.="<country><![CDATA[ MXN ]]></country>";
	$xml.="<longitude><![CDATA[ . . . ]]></longitude>";
	$xml.="<latitude><![CDATA[ . . . ]]></latitude>";

	switch ($fila2['idTipo']) {
			case 'Casa':
				if ($fila2['EstatusVenta']=="Renta") {
					$tiprop="2";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tiprop="2";
				}
				break;
			case 'Condominio':
				if ($fila2['EstatusVenta']=="Renta") {
					$tiprop="2";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tiprop="2";
				}
				break;
			case 'Departamento':
				if ($fila2['EstatusVenta']=="Renta") {
					$tiprop="2";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tiprop="2";
				}
				break;
			case 'Rancho':
				if ($fila2['EstatusVenta']=="Renta") {
					$tiprop="2";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tiprop="2";
				}
				break;
			case 'Edificio':
				if ($fila2['EstatusVenta']=="Renta") {
					$tiprop="2";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tiprop="2";
				}
				break;
			case 'Oficina':
				if ($fila2['EstatusVenta']=="Renta") {
					$tiprop="2";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tiprop="2";
				}
				break;
			case 'Local':
				if ($fila2['EstatusVenta']=="Renta") {
					$tiprop="2";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tiprop="2";
				}
				break;
			case 'Bodega':
				if ($fila2['EstatusVenta']=="Renta") {
					$tiprop="2";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tiprop="2";
				}
				break;
			case 'Terreno':
				if ($fila2['EstatusVenta']=="Renta") {
					$tiprop="2";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tiprop="2";
				}
				break;	
			
			default:
				# code...
				break;
		}

	$xml.="<property><![CDATA[".$tiprop."]]></property>";
	$xml.="<property_type><![CDATA[".$fila2['idTipo']."]]></property_type>";
	$xml.="<property_area><![CDATA[".$fila2['M2terreno']."]]></property_area>";
	$xml.="<plot_area><![CDATA[".$fila2['M2Construccion']."]]></plot_area>";
	$xml.="<rooms><![CDATA[".$fila2['NumeroCuartos']."]]></rooms>";
	$xml.="<bathrooms><![CDATA[".$fila2['NumeroBanios']."]]></bathrooms>";

	if ($fila2['PrecioVenta']!=0) {
		$precio= $fila2['PrecioVenta'];
	} else {
		$precio= $fila2['PrecioRenta'];
	} 
	if ($fila2['EstatusVenta']=='Renta') {
		$xml.="<price><![CDATA[".$precio."]]></price>";
		$xml.="<currency><![CDATA[MXN]]></currency>";
	}else{
		$xml.="<price><![CDATA[".$precio."]]></price>";
		$xml.="<currency><![CDATA[MXN]]></currency>";
	}

	$xml.="<type><![CDATA[1]]></type>";
	$xml.="<advertiser><![CDATA[1]]></advertiser>";

	$xml.="</ad>";
}
$xml .= "</locanto>";
echo $xml;
$fila2=$prop2->datos();
$fila3=$fila2->fetch_array(MYSQL_ASSOC);
$nombre=$fila3['idcliente'].$fila3['idPropiedad']."proplocanto";
$archivo=fopen("xml/locanto/".$nombre.".xml", "w+");
fwrite($archivo, $xml);
fclose($archivo);

 ?>
