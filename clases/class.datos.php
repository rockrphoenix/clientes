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
			
		}


		function combosCodigoA(){
			$mun = $this->conexion->query("SELECT DISTINCT Municipio FROM consultapropiedad2 WHERE Estado='$_POST[elegido]' AND idcliente='$this->id' AND Estatus='1' AND publicacion='1'")or die("no encuentro el municipio");
			$str="<option value='seleccione' selected='yes'>Seleccione</option>";
			while ($aMunicipio = $mun->fetch_array(MYSQL_ASSOC)) {

				$str .= '<option value="'.$aMunicipio['Municipio'].'">'.utf8_encode(utf8_decode($aMunicipio['Municipio'])).'</option>';
			}
			return $str;
		}

		function combosEstatus(){
			$est=$this->conexion->query("SELECT DISTINCT EstatusVenta FROM consultapropiedad2 WHERE Municipio='$_POST[mpo]' AND idcliente='$this->id' AND Estatus='1' AND publicacion='1'")or die("no se obtuvo el estatus");
			$str="<option value='seleccione' selected='yes'>Seleccione</option>";
			while ($status=$est->fetch_array(MYSQL_ASSOC)){
				$str.='<option value="'.$status['EstatusVenta'].'">'.utf8_encode(utf8_decode($status['EstatusVenta'])).'</option>';
			}
			return $str;
		}

		function combostipo(){
			$type=$this->conexion->query("SELECT DISTINCT idTipo FROM consultapropiedad2 WHERE EstatusVenta='$_POST[estat]' AND idcliente='$this->id' AND Estatus='1' AND publicacion='1'")or die("no se obtuvo el tipo");
			$str="<option value='seleccione' selected='yes'>Seleccione</option>";
			while ($tipo=$type->fetch_array(MYSQL_ASSOC)){
				$str.='<option value="'.$tipo['idTipo'].'">'.utf8_encode(utf8_decode($tipo['idTipo'])).'</option>';
			}
			return $str;
		}
		function combosrecam(){
			$rec=$this->conexion->query("SELECT DISTINCT NumeroCuartos FROM consultapropiedad2 WHERE idTipo='$_POST[tipo]' AND idcliente='$this->id' AND Estatus='1' AND publicacion='1'")or die("no se obtuvo el numero de cuartos");
			$str="<option value='seleccione' selected='yes'>Seleccione</option>";
			while ($cuartos=$rec->fetch_array(MYSQL_ASSOC)){
				$str.='<option value="'.$cuartos['NumeroCuartos'].'">'.$cuartos['NumeroCuartos'].'</option>';
			}
			return $str;
		}
		function banos(){
			$bano=$this->conexion->query("SELECT DISTINCT NumeroBanios FROM consultapropiedad2 WHERE NumeroCuartos='$_POST[recam]' AND idcliente='$this->id' AND Estatus='1' AND publicacion='1'")or die("no se obtuvo el numero de banos");
			$str="<option value='seleccione' selected='yes'>Seleccione</option>";
			while ($banos=$bano->fetch_array(MYSQL_ASSOC)){
				$str.='<option value="'.$banos['NumeroBanios'].'">'.$banos['NumeroBanios'].'</option>';
			}
			return $str;
			
		}
		
		
	}
?>