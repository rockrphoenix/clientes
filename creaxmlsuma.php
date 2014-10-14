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
$xml .= "<ads>";

while ( $fila2=$fila->fetch_array(MYSQL_ASSOC)) {
	$xml.="<ad>";
	$xml.="<url ><![CDATA[".$url."]]></url >";
	$xml.="<id><![CDATA[".$fila2['idPropiedad']."]]></id>";
	$xml.="<title><![CDATA[".$fila2['titulo']."]]></title>";
	$xml.="<content><![CDATA[".$fila2['Descripcion']."]]></content>";
	$xml.="<region><![CDATA[".$fila2['Estado']."]]></region>";

	if ($fila2['PrecioVenta']!=0) {
		$precio= $fila2['PrecioVenta'];
	} else {
		$precio= $fila2['PrecioRenta'];
	} 
	if ($fila2['EstatusVenta']=='Renta') {
		$xml.="<price currency='MXN' ><![CDATA[".$precio."]]></price>";
	}else{
		$xml.="<price currency='MXN'><![CDATA[".$precio."]]></price>";

	}

	$xml.="<date><![CDATA[" .date('d/m/y') . "]]></date>";
	$xml.="<city><![CDATA[".$fila2['Ciudad']."]]></city>";
	$xml.="<city_area><![CDATA[".$fila2['Colonia']."]]></city_area>";
	$xml.="<postcode><![CDATA[".$fila2['CP']."]]></postcode>";

	$xml.="<features>";
	$xml.="<feature>";
	$xml.="</feature>";
	$xml.="</features>";

	$xml.="<pictures>";
	$xml.="<picture>";
	$xml.="<picture_url><![CDATA[".$imagen."]]></picture_url>";
	$xml.="<picture_title><![CDATA[".$fila2['titulo']."]]></picture_title>";
	$xml.="</picture>";
	$xml.="</pictures>";

	switch ($fila2['idTipo']) {
			case 'Casa':
				if ($fila2['EstatusVenta']=="Renta") {
					$tipo="for rent";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tipo="for sale";
				}
				$tiprop="house";

				break;
			case 'Condominio':
				if ($fila2['EstatusVenta']=="Renta") {
					$tipo="for rent";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tipo="for sale";
				}
				$tiprop="house";

				break;
			case 'Departamento':
				if ($fila2['EstatusVenta']=="Renta") {
					$tipo="for rent";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tipo="for sale";
				}
				$tiprop="apartment";

				break;
			case 'Rancho':
				if ($fila2['EstatusVenta']=="Renta") {
					$tipo="for rent";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tipo="for sale";
				}
				$tiprop="farm";

				break;
			case 'Edificio':
				if ($fila2['EstatusVenta']=="Renta") {
					$tipo="for rent";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tipo="for sale";
				}
				$tiprop="building";

				break;
			case 'Oficina':
				if ($fila2['EstatusVenta']=="Renta") {
					$tipo="office for rent";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tipo="office for sale";
				}
				$tiprop="office";

				break;
			case 'Local':
				if ($fila2['EstatusVenta']=="Renta") {
					$tipo="for rent local";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tipo="for sale local";
				}
				$tiprop="other";

				break;
			case 'Bodega':
				if ($fila2['EstatusVenta']=="Renta") {
					$tipo="warehouse for rent";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tipo="warehouse for sale";
				}
				$tiprop="other";

				break;
			case 'Terreno':
				if ($fila2['EstatusVenta']=="Renta") {
					$tipo="land for sale";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tipo="land for sale";
				}
				$tiprop="other";

				break;	
			
			default:
				# code...
				break;
		}
	
	$xml.="<type><![CDATA[".$tipo."]]></type>";	
	$xml.="<address><![CDATA[".$fila2['Colonia'].", ".$fila2['Municipio']."]]></address>";
	$xml.="<longitude><![CDATA[ . . . ]]></longitude>";
	$xml.="<latitude><![CDATA[ . . . ]]></latitude>";
	$xml.="<floor_number><![CDATA[".$fila2['NivelesConstruidos']." ]]></floor_number>";
	$xml.="<rooms><![CDATA[".$fila2['NumeroCuartos']."]]></rooms>";
	$xml.="<bathrooms><![CDATA[".$fila2['NumeroBanios']."]]></bathrooms>";
	$xml.="<property_type><![CDATA[".$tiprop."]]></property_type>";

	$xml.="<floor_area><![CDATA[".$fila2['M2Construccion']."]]></floor_area>";
	$xml.="<plot_area><![CDATA[".$fila2['M2terreno']."]]></plot_area>";

	$xml.="</ad>";
}
$xml .= "</ads>";
echo $xml;
$fila2=$prop2->datos();
$fila3=$fila2->fetch_array(MYSQL_ASSOC);
$nombre=$fila3['idcliente'].$fila3['idPropiedad']."propsuma";
$archivo=fopen("xml/sumavisos/".$nombre.".xml", "w+");
fwrite($archivo, $xml);
fclose($archivo);

 ?>