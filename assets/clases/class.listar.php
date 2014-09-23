<?php
	require_once("class.conexion.php");
	/**
	* por marco izaguirre marco.izag@gmail.com
	*para grupo syse
	*/
	class Listados extends Conexion
	{		
		function __construct()
		{
			parent::__construct();
		}
		function obtenerConfiguracion(){
			$conf = $this->conexion->query("SELECT ColorFondo, ColorPrincipal, facebook, twitter FROM tblconfiguracion WHERE idinmobiliaria = '$this->inmobiliaria'")or die("No obtengo la configuración");
			if ($conf->num_rows == 0) {
				return false;
			} else {
				$aConf = $conf->fetch_array(MYSQL_ASSOC);
				return $aConf;
			}
		}
		function oficinas(){
			$ofi = $this->conexion->query("SELECT * FROM tbloficina WHERE idcliente = '$this->id'")or die("No puedo conectarme a oficinas");
			return $ofi;
			$this->conexion->close();
			$ofi->free();
		}
	}
?>