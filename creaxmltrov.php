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
$xml .= "<trovit>";

while ( $fila2=$fila->fetch_array(MYSQL_ASSOC)) {
	$xml.="<ad>";
	$xml.="<id><![CDATA[".$fila2['idPropiedad']."]]></id>";
	
	$xml.="<url><![CDATA[".$url."]]></url>";
	$xml.="<title><![CDATA[".$fila2['titulo']."]]></title>";

	switch ($fila2['idTipo']) {
		case 'Casa':
			if ($fila2['EstatusVenta']=='Venta') {
				$strv='For Sale';
			}elseif ($fila2['EstatusVenta']=='Renta') {
				$strv='For Rent';
			}
			break;
		case 'Condominio':
			if ($fila2['EstatusVenta']=='Venta') {
				$strv='For Sale';
			}elseif ($fila2['EstatusVenta']=='Renta') {
				$strv='For Rent';
			}
			break;
		case 'Departamento':
			if ($fila2['EstatusVenta']=='Venta') {
				$strv='For Sale';
			}elseif ($fila2['EstatusVenta']=='Renta') {
				$strv='For Rent';
			}
			break;
		case 'Rancho':
			if ($fila2['EstatusVenta']=='Venta') {
				$strv='For Sale';
			}elseif ($fila2['EstatusVenta']=='Renta') {
				$strv='For Rent';
			}
			break;
		case 'Edificio':
			if ($fila2['EstatusVenta']=='Venta') {
				$strv='For Sale';
			}elseif ($fila2['EstatusVenta']=='Renta') {
				$strv='For Rent';
			}
			break;
		case 'Oficina':
			if ($fila2['EstatusVenta']=='Venta') {
				$strv='Office For Sale';
			}elseif ($fila2['EstatusVenta']=='Renta') {
				$strv='Office For Rent';
			}
			break;
		case 'Local':
			if ($fila2['EstatusVenta']=='Venta') {
				$strv='For Sale Local';
			}elseif ($fila2['EstatusVenta']=='Renta') {
				$strv='For Rent Local';
			}
			break;
		case 'Bodega':
			if ($fila2['EstatusVenta']=='Venta') {
				$strv='Warehouse For Sale';
			}elseif ($fila2['EstatusVenta']=='Renta') {
				$strv='Warehouse For Rent';
			}
			break;
		case 'Terreno':
			if ($fila2['EstatusVenta']=='Venta') {
				$strv='Land For Sale';
			}elseif ($fila2['EstatusVenta']=='Renta') {
				$strv='Land For Sale';
			}
			break;							
		default:
			# code...
			break;
	}
		
	$xml.="<type><![CDATA[".$strv."]]></type>";
	$xml.="<content><![CDATA[".$fila2['Descripcion']."]]></content>";


	if ($fila2['PrecioVenta']!=0) {
		$precio= $fila2['PrecioVenta'];
	} else {
		$precio= $fila2['PrecioRenta'];
	} 
	if ($fila2['EstatusVenta']=='Renta') {
		$xml.="<price period='weekly' currency='MXN'><![CDATA[".$precio."]]></price>";
	}else{
		$xml.="<price currency='MXN'><![CDATA[".$precio."]]></price>";
	}
	
	$xml.="<property_type><![CDATA[".$fila2['idTipo']."]]></property_type>";
	$xml.="<address><![CDATA[".$fila2['Colonia'].", ".$fila2['Municipio']."]]></address>";
	$xml.="<city><![CDATA[".$fila2['Ciudad']."]]></city>";
	$xml.="<region><![CDATA[".$fila2['Estado']."]]></region>";
	$xml.="<postcode><![CDATA[".$fila2['CP']."]]></postcode>";
	$xml.="<floor_area unit='meters'><![CDATA[".$fila2['M2terreno']."]]></floor_area>";
	$xml.="<plot_area unit='meters'><![CDATA[".$fila2['M2Construccion']."]]></plot_area>";

	$xml.="<rooms><![CDATA[".$fila2['NumeroCuartos']."]]></rooms>";
	$xml.="<bathrooms><![CDATA[".$fila2['NumeroBanios']."]]></bathrooms>";
	$xml.="<condition><![CDATA[".$fila2['EstadoConservacion']."]]></condition>";

	$xml.="<pictures>";
	$xml.="<picture featured='true'>";
	$xml.="<picture_url><![CDATA[".$imagen."]]></picture_url>";
	$xml.="<picture_title><![CDATA[".$fila2['titulo']."]]></picture_title>";
	$xml.="</picture>";
	$xml.="</pictures>";

	$xml.="</ad>";
}
$xml .= "</trovit>";
echo $xml;
$fila2=$prop2->datos();
$fila3=$fila2->fetch_array(MYSQL_ASSOC);
$nombre=$fila3['idcliente'].$fila3['idPropiedad']."proptrov";
$archivo=fopen("xml/trovit/".$nombre.".xml", "w+");
fwrite($archivo, $xml);
fclose($archivo);

 ?>