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
		
		
	}
?>