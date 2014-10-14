<?php 
require_once("clases/class.conexion.php");

$estado=$_POST['estado'];
echo $estado;
				

function mostrar(){
	$lista=$this->conexion->query("SELECT * FROM consultaavanzada WHERE idcliente='$this->id'AND Estado='$estado'")or die("no se obtuvieron datos");
	if ($lista->num_rows>0) {
       			while ($row=$lista->fetch_array(MYSQL_ASSOC)) {
       				$datos.='<option value="'.utf8_encode($row['Municipio']).'">'.utf8_encode($row['Municipio']).'</option>';
       			}
       		}
     return $datos;
}

 ?>