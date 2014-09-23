<?php 
require_once("clases/class.listar.php");
$resultados=new Listados();
$oficinas=$resultados->oficinas();
$asesores=$resultados->asesores();
$redes=$resultados->redes();
$seccion=$resultados->seccion();
$datosFact=$resultados->datosFacturacion();
$propiedades=$resultados->Propiedades();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<div id="propiedades"></div>
	<br>
	<div id="asesores">
		<table>
			<thead>
				<tr><th>Asesores</th></tr>
			</thead>
			<tbody>
				<?php while ($resAses=$asesores->fetch_array(MYSQL_ASSOC)) {
					echo "<tr><td>".$resAses['nombres']."</td><td>".$resAses['paterno']."</td><td>".$resAses['materno']."</td><td>".$resAses['email']."</td><td>".$resAses['tel']."</td><td>".$resAses['cel']."</td></tr>";
							}
				 ?>
			</tbody>					
		</table>
	</div>
	<br>
	<div id="redes">
		<table>
			<thead>
				<tr><th>Redes</th></tr>
			</thead>
			<tbody>
				<?php while ($resRedes=$redes->fetch_array(MYSQL_ASSOC)) {
			echo "<tr><td>".$resRedes['facebook']."</td><td>".$resRedes['twitter']."</td><td>".$resRedes['email']."</td></tr>";
						}
		 ?>
			</tbody>		
		</table>
	</div>
	<br>
	<div id="secciones">
		<table>
			<thead>
				<tr><th>Secciones</th></tr>
			</thead>
			<tbody>
				<?php while ($resSecc=$seccion->fetch_array(MYSQL_ASSOC)) {
					echo "<tr><td>".$resSecc['titulo']."</td><td>".$resSecc['descripcion']."</td></tr>";
								}
				 ?>
			</tbody>		
		</table>
	</div>
	<br>
	<div id="datosFact">
		<table>
			<thead>
				<tr><th>Datos de facturación</th></tr>
			</thead>
			<tbody>
				<?php while ($resFact=$datosFact->fetch_array(MYSQL_ASSOC)) {
					echo "<tr><td>".$resFact['nombrers']."</td><td>".$resFact['rfc']."</td><td>".$resFact['tel']."</td><td>".$resFact['email']."</td><td>".$resFact['Colonia']."</td><td>".$resFact['Municipio']."</td><td>".$resFact['Estado']."</td><td>".$resFact['Ciudad']."</td><td>".$resFact['Calle']."</td><td>".$resFact['NumeroExterior']."</td><td>".$resFact['NumeroInterior']."</td></tr>";
								}
				 ?>
			</tbody>		
		</table>
	</div>
	<br>
	<div id="oficinas">
		<table>
			<thead>
				<tr><th>Oficinas</th></tr>
			</thead>
			<tbody>
				<?php while ($resOfice=$oficinas->fetch_array(MYSQL_ASSOC)) {
					echo "<tr><td>".$resOfice['nombre']."</td><td>".$resOfice['calle']."</td><td>".$resOfice['numero']."</td><td>".$resOfice['no_int']."</td><td>".$resOfice['colonia']."</td><td>".$resOfice['delegacion']."</td><td>".$resOfice['estado']."</td><td>".$resOfice['ciudad']."</td><td>".$resOfice['telefono']."</td></tr>";
								}
				 ?>
			</tbody>		
		</table>
	</div>
	<div id="propiedades">
		<table>
			<thead>
				<tr><th>propiedades</th></tr>
			</thead>
			<tbody>
				<?php while ($resProp=$propiedades->fetch_array(MYSQL_ASSOC)) {
					echo "<tr><td>idPropiedad</td><td>idcliente</td><td>titulo</td><td>idPersonalizado</td><td>idTipo</td><td>Descripcion</td><td>PrecioVenta</td><td>PrecioRenta</td><td>Destaque</td><td>EstatusVenta</td><td>publicacion</td><td>M2terreno</td><td>M2Construccion</td><td>M2Jardin</td><td>Mfondo</td><td>Mfrente</td><td>NumeroCuartos</td><td>NumeroBanios</td><td>NumeroMediosBanios</td><td>NumeroCocheras</td><td>NumeroCocherasDescubiertas</td><td>NumeroCocherasVistas</td><td>EstadoConservacion</td><td>CuartoServicio</td><td>NivelesConstruidos</td><td>NivelUbicacion</td><td>".$resProp['TipoDpto']."</td><td>".$resProp['NumeroPrivados']."</td><td>".$resProp['idClasificacionEdificio']."</td><td>".$resProp['nunidades']."</td><td>".$resProp['nnounidades']."</td><td>".$resProp['FormaTerreno']."</td><td>".$resProp['UsoSuelo']."</td><td>".$resProp['ConcentracionIndustrial']."</td><td>".$resProp['Ferrocarril']."</td><td>".$resProp['TransporteMultimodal']."</td><td>".$resProp['M2Oficina']."</td><td>".$resProp['m2bodega']."</td><td>".$resProp['AreaManiobras']."</td><td>".$resProp['TipoTecho']."</td><td>".$resProp['Andenes']."</td><td>".$resProp['AlturaLibre']."</td><td>".$resProp['CargaPisoToneladas']."</td><td>".$resProp['Hectareas']."</td><td>".$resProp['SistemaRiego']."</td><td>".$resProp['AbiertoVisitantes']."</td><td>".$resProp['RioCercano']."</td><td>".$resProp['SuperficiePastizal']."</td><td>".$resProp['TipoRancho']."</td><td>".$resProp['VistaPanoramica']."</td><td>".$resProp['LagunaCercana']."</td><td>".$resProp['Establo']."</td><td>".$resProp['SuperficieAgricola']."</td><td>".$resProp['SuperficieHabitable']."</td><td>".$resProp['NumeroPozos']."</td><td>".$resProp['NumeroCasas']."</td><td>".$resProp['bdescripcion']."</td><td>".$resProp['descripcionr']."</td>
							<tr><td>".$resProp['idPropiedad']."</td><td>".$resProp['idcliente']."</td><td>".$resProp['titulo']."</td><td>".$resProp['idPersonalizado']."</td><td>".$resProp['idTipo']."</td><td>".$resProp['Descripcion']."</td><td>".$resProp['PrecioVenta']."</td><td>".$resProp['PrecioRenta']."</td><td>".$resProp['Destaque']."</td><td>".$resProp['EstatusVenta']."</td><td>".$resProp['publicacion']."</td><td>".$resProp['M2terreno']."</td><td>".$resProp['M2Construccion']."</td><td>".$resProp['M2Jardin']."</td><td>".$resProp['Mfondo']."</td><td>".$resProp['Mfrente']."</td><td>".$resProp['NumeroCuartos']."</td><td>".$resProp['NumeroBanios']."</td><td>".$resProp['NumeroMediosBanios']."</td><td>".$resProp['NumeroCocheras']."</td><td>".$resProp['NumeroCocherasDescubiertas']."</td><td>".$resProp['NumeroCocherasVistas']."</td><td>".$resProp['EstadoConservacion']."</td><td>".$resProp['CuartoServicio']."</td><td>".$resProp['NivelesConstruidos']."</td><td>".$resProp['NivelUbicacion']."</td><td>".$resProp['TipoDpto']."</td><td>".$resProp['NumeroPrivados']."</td><td>".$resProp['idClasificacionEdificio']."</td><td>".$resProp['nunidades']."</td><td>".$resProp['nnounidades']."</td><td>".$resProp['FormaTerreno']."</td><td>".$resProp['UsoSuelo']."</td><td>".$resProp['ConcentracionIndustrial']."</td><td>".$resProp['Ferrocarril']."</td><td>".$resProp['TransporteMultimodal']."</td><td>".$resProp['M2Oficina']."</td><td>".$resProp['m2bodega']."</td><td>".$resProp['AreaManiobras']."</td><td>".$resProp['TipoTecho']."</td><td>".$resProp['Andenes']."</td><td>".$resProp['AlturaLibre']."</td><td>".$resProp['CargaPisoToneladas']."</td><td>".$resProp['Hectareas']."</td><td>".$resProp['SistemaRiego']."</td><td>".$resProp['AbiertoVisitantes']."</td><td>".$resProp['RioCercano']."</td><td>".$resProp['SuperficiePastizal']."</td><td>".$resProp['TipoRancho']."</td><td>".$resProp['VistaPanoramica']."</td><td>".$resProp['LagunaCercana']."</td><td>".$resProp['Establo']."</td><td>".$resProp['SuperficieAgricola']."</td><td>".$resProp['SuperficieHabitable']."</td><td>".$resProp['NumeroPozos']."</td><td>".$resProp['NumeroCasas']."</td><td>".$resProp['bdescripcion']."</td><td>".$resProp['descripcionr']."</td><td>".$resProp['imagen']."</td><td>".$resProp['principal']."</td>";
								}
				 ?>
			</tbody>		
		</table>
	</div>

	
</body>
</html>