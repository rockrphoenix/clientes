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
$xml .= "<ADS>";

while ( $fila2=$fila->fetch_array(MYSQL_ASSOC)) {
	$xml.="<AD>";
	$xml.="<ID><![CDATA[".$fila2['idPropiedad']."]]></ID>";
	$xml.="<TITLE><![CDATA[".$fila2['titulo']."]]></TITLE>";
	$xml.="<DESCRIPTION><![CDATA[".$fila2['Descripcion']."]]></DESCRIPTION>";
	$xml.="<DATE><![CDATA[" .date('y/m/d') . "]]></DATE>";
	$xml.="<LOCATION_COUNTRY><![CDATA[".$fila2['Estado']."]]></LOCATION_COUNTRY>";
	$xml.="<LOCATION_STATE><![CDATA[ . . . ]]></LOCATION_STATE>";//integrar el codigo de estadocuando nos sea enviado
	$xml.="<LOCATION_CITY ><![CDATA[".$fila2['Ciudad']."]]></LOCATION_CITY >";
	$xml.="<ZIP_CODE ><![CDATA[".$fila2['CP']."]]></ZIP_CODE >";
	$xml.="<ADDRESS ><![CDATA[".$fila2['Colonia'].", ".$fila2['Municipio']."]]></ADDRESS >";
	switch ($fila2['idTipo']) {
			case 'Casa':
				if ($fila2['EstatusVenta']=="Renta") {
					$tiprop="363";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tiprop="367";
				}
				break;
			case 'Condominio':
				if ($fila2['EstatusVenta']=="Renta") {
					$tiprop="363";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tiprop="367";
				}
				break;
			case 'Departamento':
				if ($fila2['EstatusVenta']=="Renta") {
					$tiprop="363";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tiprop="367";
				}
				break;
			case 'Rancho':
				$tiprop="410";
				break;
			case 'Edificio':
				if ($fila2['EstatusVenta']=="Renta") {
					$tiprop="363";
				}elseif ($fila2['EstatusVenta']=="Venta") {
					$tiprop="367";
				}
				break;
			case 'Oficina':
				$tiprop="368";
				break;
			case 'Local':
				$tiprop="415";
				break;
			case 'Bodega':
				$tiprop="415";
				break;
			case 'Terreno':
				$tiprop="410";
				break;	
			
			default:
				# code...
				break;
		}

	$xml.="<CATEGORY><![CDATA[".$tiprop."]]></CATEGORY>";
	$xml.="<IMAGE_URL><![CDATA[".$imagen."]]></IMAGE_URL>";

	if ($fila2['PrecioVenta']!=0) {
		$precio= $fila2['PrecioVenta'];
	} else {
		$precio= $fila2['PrecioRenta'];
	} 
	if ($fila2['EstatusVenta']=='Renta') {
		$xml.="<PRICE><![CDATA[".$precio."]]></PRICE>";
		$xml.="<CURRENCY><![CDATA[MXN]]></CURRENCY>";
	}else{
		$xml.="<PRICE><![CDATA[".$precio."]]></PRICE>";
		$xml.="<CURRENCY><![CDATA[MXN]]></CURRENCY>";
	}

	$xml.="</AD>";
}
$xml .= "</ADS>";
echo $xml;
$fila2=$prop2->datos();
$fila3=$fila2->fetch_array(MYSQL_ASSOC);
$nombre=$fila3['idcliente'].$fila3['idPropiedad']."propolx";
$archivo=fopen("xml/olx/".$nombre.".xml", "w+");
fwrite($archivo, $xml);
fclose($archivo);

 ?>