<?php
	require_once("../clases/class.datos.php");
	if (isset($_POST[elegido])) {
		$listar = new Datos($_POST);
		$municipios = $listar->combosCodigoA();
		echo $municipios;
		
	} elseif (isset($_POST[mpo])) {
		$listar2 = new Datos($_POST);
		$estatus = $listar2->combosEstatus();
		echo $estatus;
	}elseif (isset($_POST[estat])) {
		$listar3 = new Datos($_POST);
		$tipo = $listar3->combostipo();
		echo $tipo;
	}elseif (isset($_POST[tipo])) {
		$listar4 = new Datos($_POST);
		$recam = $listar4->combosrecam();
		echo $recam;
	}elseif (isset($_POST[recam])) {
		$listar5 = new Datos($_POST);
		$camaras = $listar5->banos();
		echo $camaras;
	}else {
		echo "nada";
	}

	$avanzada=new Datos($_POST);
	$busqueda=$listar->busquedAvanzada();
	echo $busqueda;

	
?>