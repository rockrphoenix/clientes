<?php 
require_once("../fpdf/fpdf.php");
require_once("class.conexion.php");

/**
* 
*/
class consult extends Conexion 
{
	function __construct()
	{
		$_GET;
		parent::__construct();
	}
	function resultado(){
		
		$res=$this->conexion->query("SELECT * FROM consultapropiedad2 WHERE idPropiedad='$_GET[idProp]' AND idcliente='$this->id' AND Estatus='1' AND publicacion='1'")or die("no hay resultados para le pdf");
		return $res;
		//var_dump($res);
	}
	
}

class Pdf extends FPDF
{
	//Columna actual
   var $col=1;
   //Ordenada de comienzo de la columna
   var $y=0;

	function Header(){
		//Logo
		$this->Image("../logotipo/logo.jpg" , 25 ,8, 35 , 38 , "JPG" );
		$this->SetFont('Arial','',10);
		$this->Text(65,14,'Yet! Inmobiliario',0,'L', 0);
		$this->Ln(30);
		}
		 
	function Footer(){
		$this->SetY(-15);
		$this->SetFont('Arial','B',8);
		$this->Cell(100,10,'COPYRIGHT C 2014 Yet! Inmobiliario.',0,0,'L');
		}
	/*// function SetCol($col)
	// 	{
	// 	    // Establecer la posición de una columna dada
	// 	    $this->col = $col;
	// 	    $x = 10+$col*65;
	// 	    $this->SetLeftMargin($x);
	// 	    $this->SetX($x);
	// 	}

	// 	function AcceptPageBreak()
	// 	{
	// 	    // Método que acepta o no el salto automático de página
	// 	    if($this->col<2)
	// 	    {
	// 	        // Ir a la siguiente columna
	// 	        $this->SetCol($this->col+1);
	// 	        // Establecer la ordenada al principio
	// 	        $this->SetY($this->y);
	// 	        // Seguir en esta página
	// 	        return false;
	// 	    }
	// 	    else
	// 	    {
	// 	        // Volver a la primera columna
	// 	        $this->SetCol(0);
	// 	        // Salto de página
	// 	        return true;
	// 	    }
		}*/

		function ChapterTitle($num, $titulo)
		{
		    // Título
		    $this->SetFont('Arial','',12);
		    $this->SetFillColor(200,220,255);
		    $this->MultiCell(90,5,utf8_decode(utf8_encode($titulo)));
		    $this->Ln(4);
		    // Guardar ordenada
		    $this->y0 = $this->GetY();
		}

		function ChapterBody($descripcion)
		{
		    
		    // Fuente
		    $this->SetFont('Times','',12);
		    // Imprimir texto en una columna de 9 cm de ancho
		    $this->Cell(90,5,utf8_decode('Información de la propiedad'),0,1,C);
		    $this->Ln();
		    $this->MultiCell(90,5,utf8_decode(utf8_encode($descripcion)));
		    $this->Ln();
		    $this->Cell(0,5,'(fin del extracto)');
		    // Cita en itálica
		    $this->SetFont('','I');
		    //$this->Cell(0,5,'(fin del extracto)');
		    // Volver a la primera columna
		    //$this->SetCol(0);
		}

		function PrintInfo($num, $title, $desc)
		{
		    // Añadir capítulo
		    $this->AddPage();
		    $this->ChapterTitle($num,$title);
		    $this->ChapterBody($desc);
		}		
	
}




	
	$qry=new consult($_GET);
	$qry2=$qry->resultado();
	//var_dump($qry2);
	$result=$qry2->fetch_array(MYSQL_ASSOC);
	//var_dump($result) ;


	$pdf=new Pdf('P','mm','Letter');
	$pdf->Open();
	
	$pdf->SetMargins(20,20,20);
	$pdf->Ln(10);
	$pdf->PrintInfo(1,$result[titulo],$result[Descripcion]);
	
	
	$pdf->Output()
 ?>