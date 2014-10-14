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
$xml .= "<nuroa>";

while ( $fila2=$fila->fetch_array(MYSQL_ASSOC)) {
	$xml.="<property>";
	$xml.="<id><![CDATA[".$fila2['idPropiedad']."]]></id>";
	$xml.="<link><![CDATA[".$url."]]></link>";

	$xml.="<pictures>";
	$xml.="<picture>";
	$xml.="<picture_url><![CDATA[".$imagen."]]></picture_url>";
	$xml.="<picture_title><![CDATA[".$fila2['titulo']."]]></picture_title>";
	$xml.="</picture>";
	$xml.="</pictures>";

	$xml.="<agency_name><![CDATA[ . . . ]]></agency_name>";
	$xml.="<agency_address><![CDATA[ . . . ]]></agency_address> ";

	if ($fila2['EstatusVenta']=='Venta') {
				$strv='buy';
			}elseif ($fila2['EstatusVenta']=='Renta') {
				$strv='rent ';
			}
	$xml.="<ad_type><![CDATA[".$strv."]]></ad_type>";	
	$xml.="<category><![CDATA[".$fila2['idTipo']."]]></category>";

	$xml.="<title><![CDATA[".$fila2['titulo']."]]></title>";
	$xml.="<description><![CDATA[".$fila2['Descripcion']."]]></description>";
	$xml.="<european_energy_class><![CDATA[ . . . ]]></european_energy_class>";
	$xml.="<european_energy_index><![CDATA[ . . . ]]></european_energy_index>";

	$xml.="<rooms><![CDATA[".$fila2['NumeroCuartos']."]]></rooms>";
	$xml.="<bathrooms><![CDATA[".$fila2['NumeroBanios']."]]></bathrooms>";
	$xml.="<square_meters><![CDATA[".$fila2['M2terreno']."]]></square_meters>";
	$xml.="<floor_number><![CDATA[".$fila2['NivelesConstruidos']." ]]></floor_number>";
	$xml.="<condition><![CDATA[".$fila2['EstadoConservacion']."]]></condition>";

	$xml.="<owner><![CDATA[ . . . ]]></owner>";
	$xml.="<bank><![CDATA[ . . . ]]></bank>";


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
	
	
	
	$xml.="<city><![CDATA[".$fila2['Ciudad']."]]></city>";
	$xml.="<country><![CDATA[ México ]]></country>";
	$xml.="<location><![CDATA[".$fila2['Colonia'].", ".$fila2['Municipio']."]]></location>";
	$xml.="<postcode><![CDATA[".$fila2['CP']."]]></postcode>";
	$xml.="<neighbourhood><![CDATA[".$fila2['Estado']."]]></neighbourhood>";

	$xml.="<longitude><![CDATA[ . . . ]]></longitude>";
	$xml.="<latitude><![CDATA[ . . . ]]></latitude>";
	
	$xml.="<insertion_date><![CDATA[" .date('d/m/y') . "]]></insertion_date>";

	$xml.="</property>";
}
$xml .= "</nuroa>";
echo $xml;
$fila2=$prop2->datos();
$fila3=$fila2->fetch_array(MYSQL_ASSOC);
$nombre=$fila3['idcliente'].$fila3['idPropiedad']."propnur";
$archivo=fopen("xml/nuroa/".$nombre.".xml", "w+");
fwrite($archivo, $xml);
fclose($archivo);

 ?>