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

	function cliente(){
		$res2=$this->conexion->query("SELECT * FROM consultacliente WHERE idCliente='$this->id'")or die("no se encontro el cliente");
		return $res2;
		//var_dump($res2);
	}
	function obtenImagenes(){
			
			
					$dir = "../../../imagenes_cy/".$this->id."/".$_GET[idProp]."";
					//$dir = "http://imagenes.yetinmobiliario.com/".$this->id."/".$_GET[idProp]."/";
					
					//var_dump($dir);
					/*$directorio = opendir($dir)or die("no existe"); //ruta actual
					while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
					{
					    if (is_dir($archivo))//verificamos si es o no un directorio
					    {
					        echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
					    }
					    else
					    {
					        echo $archivo . "<br />";
					    }
					}*/


					if ($gestor = opendir($dir)) {
						$cont = 1;
					    while (false !== ($entrada = readdir($gestor))) {
					        if ($entrada != "." && $entrada != "..") {
					        	if ($entrada == "principal.jpg") {
					        		$str[0]= 'http://imagenes.yetinmobiliario.com/'.$this->id.'/'.$_GET[idProp].'/'.$entrada.'';
					        		
					        	}else{
					        		$str[]= 'http://imagenes.yetinmobiliario.com/'.$this->id.'/'.$_GET[idProp].'/'.$entrada.'';
					        		
					        	}
					            $cont++;
					        }
					    }
					    closedir($gestor);
					}
					
			
			return $str;	

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
		$this->Image("../logotipo/logo.jpg" , 25 ,18, 57.15,26.458333333, "JPG" );
		
		$this->Ln(25);
		}
		 
	function Footer(){
		$this->SetY(-15);
		$this->SetFont('Arial','B',8);
		$this->Cell(100,10,utf8_decode('Powered by Yet! Inmobiliario.'),0,0,'L',0);

		}

		function muetraimagenes(){
			$str=new consult($_GET);
			$string=$str->obtenImagenes();
			//var_dump($string) ;
			$this->Image($string[0] , 120 ,35, 75 , 50 , "JPG" );
			shuffle($string);

			switch (count($string)) {
				case '1':
					$this->Image($string[0] , 120 ,100, 35 , 25 , "JPG" );
					break;
				case '2':
					$this->Image($string[0] , 120 ,100, 35 , 25 , "JPG" );
					$this->Image($string[1] , 160 ,100, 35 , 25 , "JPG" );
					break;
				case '3':
					$this->Image($string[0] , 120 ,100, 35 , 25 , "JPG" );
					$this->Image($string[1] , 160 ,100, 35 , 25 , "JPG" );
					$this->Image($string[2] , 120 ,130, 35 , 25 , "JPG" );
					break;	
				default:
					$this->Image($string[0] , 120 ,100, 35 , 25 , "JPG" );
					$this->Image($string[1] , 160 ,100, 35 , 25 , "JPG" );
					$this->Image($string[2] , 120 ,130, 35 , 25 , "JPG" );
					$this->Image($string[3] , 160 ,130, 35 , 25 , "JPG" );
					break;
			}
			
			
						
		}
		function cuadro(){
			$this->SetFont('Arial','',11);
			$this->Text(125,170,'Comentarios :');
			$this->SetLineWidth(1);
			$this->Rect(120,165,75,85);
			$this->SetLineWidth(.5);
			$this->Line(125,180,190,180);
			$this->SetLineWidth(.5);
			$this->Line(125,190,190,190);
			$this->SetLineWidth(.5);
			$this->Line(125,200,190,200);
			$this->SetLineWidth(.5);
			$this->Line(125,210,190,210);
			$this->SetLineWidth(.5);
			$this->Line(125,220,190,220);
			$this->SetLineWidth(.5);
			$this->Line(125,230,190,230);
			$this->SetLineWidth(.5);
			$this->Line(125,240,190,240);
		}
		function Cliente($telprin,$telsec,$correocontacto){
			$this->SetFont('Arial','',11);
			$this->SetTextColor(220,50,50);
		    $this->Cell(90,5,utf8_decode('Datos de contacto'),0,1,C);
		    $this->Ln(2);
		    $this->SetTextColor(0,0,0);
			$this->Cell(0,5,'Tel (1): '.$telprin);
			$this->Ln();
			$this->Cell(0,5,'Tel (2): '.$telsec);
			$this->Ln();
			$this->Cell(0,5,'Correo : '.$correocontacto);
		}
		

		function ChapterTitle($num, $titulo, $precio)
		{
		    // Título
		    $this->SetFont('Arial','',12);
		    $this->SetTextColor(220,50,50);
		    $this->Cell(90,5,utf8_decode('Información de la propiedad'),0,1,C);
		    $this->Ln(2);
		    $this->SetTextColor(0,0,0);
		    $this->SetFont('Arial','B',12);
		    $this->MultiCell(90,5,utf8_decode($titulo));
		    $this->Ln(1);
		    $this->Cell(0,5,'Precio: $'.$precio.' M.N.');
		    $this->Ln();

		    // Guardar ordenada
		    $this->y0 = $this->GetY();
		}

		function ChapterBody($descripcion,$tipo,$estV,$idpers,$norecam,$nobanos,$mterreno,$mconst,$del,$est,$col,$cp,$cuartoserv,$nivelescons,$m2jardin,$cocherasdesc,$tipodpto,$numcocheras,$cochevisit,$edocons,$unidadeshab,$unidadesnohab,$mfrente,$mfondo,$nivelubic,$numpriv,$formater,$usosuelo,$concInd,$ferrocarril,$transpmulti,$m2bodega,$m2oficina,$andenes,$areamani,$altural,$tipotecho,$cargasop,$hectareas,$tiporanch,$sistrieg,$vistapan,$abvisit,$lago,$rio,$establo,$supagric,$suppast,$suphab,$pozos,$nocasas)
		{
		    
		    // Fuente
		    $this->SetFont('Arial','B',10);
		    // Imprimir texto en una columna de 9 cm de ancho
		    
		    $this->SetTextColor(0,0,0);
		    $this->Cell(0,5,$estV);
		    $this->Ln();
		    $this->Cell(0,5,'Tipo: '.$tipo);
		    $this->Ln();
		    $this->SetFont('Arial','I',10);
		    $this->MultiCell(90,5,utf8_decode(substr($descripcion, 0,520)));
		    $this->Ln();
		    $this->SetFont('Arial','B',10);
		    $this->Cell(0,5,utf8_decode('Clave: ').$idpers);
		    $this->Ln();
		    $this->Cell(0,5,utf8_decode('Área del terreno: ').$mterreno.' m2');
		    $this->Ln();
		    $this->Cell(0,5,utf8_decode('Área de construcción: ').$mconst.' m2');
		    $this->Ln(6);
		    $this->SetFont('Arial','B',10);
		    $this->SetTextColor(220,50,50);
		    $this->Cell(90,5,utf8_decode('Ubicación'),0,1,C);
		    $this->Ln(2);
		    $this->SetFont('Arial','',9);
		    $this->SetTextColor(0,0,0);
		    $this->Cell(0,5,utf8_decode($del).", ".utf8_decode($est));
		    $this->Ln();
		    $this->Cell(0,5,utf8_decode('Colonia: '.$col));
		    $this->Ln();
		    $this->Cell(0,5,utf8_decode('Código postal: '.$cp));
		    $this->Ln(6);
		    $this->SetFont('Arial','B',10);
		    $this->SetTextColor(220,50,50);
		    $this->Cell(90,5,utf8_decode('Más información'),0,1,C);
		    $this->Ln(2);
		    $this->SetFont('Arial','',9);
		    $this->SetTextColor(0,0,0);
		    switch ($tipo) {
		    	case 'Casa':
		    		$this->Cell(0,5,utf8_decode('Número de recámaras: ').$norecam);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Número de baños: ').$nobanos);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Cuarto de servicio: ').$cuartoserv);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Niveles contruidos: ').$nivelescons);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Área de jardín: ').$m2jardin);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Número de cocheras: ').$cocherasdesc);
				    $this->Ln();
		    		break;
		    	case 'Condominio':
		    		$this->Cell(0,5,utf8_decode('Número de recámaras: ').$norecam);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Número de baños: ').$nobanos);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Cuarto de servicio: ').$cuartoserv);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Niveles contruidos: ').$nivelescons);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Área de jardín: ').$m2jardin);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Número de cocheras: ').$cocherasdesc);
				    $this->Ln();
		    		break;	
		    	case 'Departamento':
		    		$this->Cell(0,5,utf8_decode('Tipo de depto.: ').$tipodpto);
				    $this->Ln();
		    		$this->Cell(0,5,utf8_decode('Número de recámaras: ').$norecam);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Número de baños: ').$nobanos);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Cuarto de servicio: ').$cuartoserv);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Niveles contruidos: ').$nivelescons);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Área de jardín: ').$m2jardin);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Número de cocheras: ').$cocherasdesc);
				    $this->Ln();
		    		break;	
		    	case 'Edificio':
		    			$this->Cell(0,5,utf8_decode('Número de unidades habitacionales.: ').$unidadeshab);
					    $this->Ln();
			    		$this->Cell(0,5,utf8_decode('Número de unidades no habitacionales: ').$unidadesnohab);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Número de cocheras cubiertas: ').$numcocheras);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Número de cocheras descubiertas: ').$cocherasdesc);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Número de cocheras para visitas: ').$cochevisit);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Niveles contruidos: ').$nivelescons);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Estado de conservación: ').$edocons);
					    $this->Ln();
					    
		    		break;
		    	case 'Local':
		    			$this->Cell(0,5,utf8_decode('Metros de frente: ').$mfrente);
					    $this->Ln();
			    		$this->Cell(0,5,utf8_decode('Metros de fondo: ').$mfondo);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Número de baños: ').$nobanos);
				   		$this->Ln();
					    $this->Cell(0,5,utf8_decode('Número de cocheras descubiertas: ').$numcocheras);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Niveles contruidos: ').$nivelescons);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Nivel de ubicación: ').$nivelubic);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Estado de conservación: ').$edocons);
					    $this->Ln();
		    		break;
		    	case 'Oficina':
		    			$this->Cell(0,5,utf8_decode('Número de privados: ').$numpriv);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Número de baños: ').$nobanos);
				   		$this->Ln();
					    $this->Cell(0,5,utf8_decode('Número de cocheras cubiertas: ').$numcocheras);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Número de cocheras descubiertas: ').$cocherasdesc);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Número de cocheras para visitas: ').$cochevisit);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Niveles contruidos: ').$nivelescons);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Nivel de ubicación: ').$nivelubic);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Estado de conservación: ').$edocons);
		    		break;
		    	case 'Terreno':
		    			$this->Cell(0,5,utf8_decode('Metros de frente: ').$mfrente);
					    $this->Ln();
			    		$this->Cell(0,5,utf8_decode('Metros de fondo: ').$mfondo);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Forma del terreno: ').$formater);
					    $this->Ln();
			    		$this->Cell(0,5,utf8_decode('Uso de suelo: ').$usosuelo);
					    $this->Ln();
		    		break;
		    	case 'Bodega':
		    			$this->Cell(0,5,utf8_decode('Metros de frente: ').$mfrente);
					    $this->Ln();
			    		$this->Cell(0,5,utf8_decode('Metros de fondo: ').$mfondo);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Concentración industrial: ').$concInd);
					    $this->Ln();
			    		$this->Cell(0,5,utf8_decode('Ferrocarril: ').$ferrocarril);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Transporte multimodal: ').$transpmulti);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Metros cuadrados de bodega: ').$m2bodega);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Metros cuadrados de oficina: ').$m2oficina);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Andenes: ').$andenes);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Área de maniobras: ').$areamani);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Altura libre: ').$altural);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Tipo de techo: ').$tipotecho);
					    $this->Ln();
					    $this->Cell(0,5,utf8_decode('Carga soportada en toneladas: ').$cargasop);
					    $this->Ln();
		    		break;
		    	case 'Rancho':
		    		$this->Cell(0,5,utf8_decode('Área de jardín: ').$m2jardin);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Hectareas: ').$hectareas);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Tipo de rancho: ').$tiporanch);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Sistema de riego: ').$sistrieg);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Vista panorámica: ').$vistapan);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Abierto a visitas: ').$abvisit);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Lago cercano: ').$lago);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Río cercano: ').$rio);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Establo: ').$establo);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Superficie agrícola: ').$supagric);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Superficie de pastizal: ').$suppast);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Superficie habitable: ').$suphab);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Número de pozos: ').$pozos);
				    $this->Ln();
				    $this->Cell(0,5,utf8_decode('Número de casas: ').$nocasas);
				    $this->Ln();
		    		break;						
		    	
		    	default:
		    		# code...
		    		break;
		    }
		    
		
		}

		function PrintInfo($num, $title, $desc,$tipo,$estV,$precio,$idpers,$norecam,$nobanos,$mterreno,$mconst,$del,$est,$col,$cp,$cuartoserv,$nivelescons,$m2jardin,$cocherasdesc,$tipodpto,$numcocheras,$cochevisit,$edocons,$unidadeshab,$unidadesnohab,$mfrente,$mfondo,$nivelubic,$numpriv,$formater,$usosuelo,$concInd,$ferrocarril,$transpmulti,$m2bodega,$m2oficina,$andenes,$areamani,$altural,$tipotecho,$cargasop,$hectareas,$tiporanch,$sistrieg,$vistapan,$abvisit,$lago,$rio,$establo,$supagric,$suppast,$suphab,$pozos,$nocasas,$telprin,$telsec,$correocontacto)
		{
		    
		    $this->AddPage();
		    $this->muetraimagenes();
		    $this->cuadro();
		    $this->Cliente($telprin,$telsec,$correocontacto);
		    $this->Ln(8);
		    $this->ChapterTitle($num,$title,$precio);
		    $this->Ln();
		    $this->ChapterBody($desc,$tipo,$estV,$idpers,$norecam,$nobanos,$mterreno,$mconst,$del,$est,$col,$cp,$cuartoserv,$nivelescons,$m2jardin,$cocherasdesc,$tipodpto,$numcocheras,$cochevisit,$edocons,$unidadeshab,$unidadesnohab,$mfrente,$mfondo,$nivelubic,$numpriv,$formater,$usosuelo,$concInd,$ferrocarril,$transpmulti,$m2bodega,$m2oficina,$andenes,$areamani,$altural,$tipotecho,$cargasop,$hectareas,$tiporanch,$sistrieg,$vistapan,$abvisit,$lago,$rio,$establo,$supagric,$suppast,$suphab,$pozos,$nocasas);
		    
		}		
	
}




	
	$qry=new consult($_GET);
	$qry2=$qry->resultado();
	$qry3=$qry->cliente();
	//var_dump($qry3);

	$result=$qry2->fetch_array(MYSQL_ASSOC);
	$result2=$qry3->fetch_array(MYSQL_ASSOC);
	//var_dump($result2) ;


	$pdf=new Pdf('P','mm','Letter');
	$pdf->Open();
	
	$pdf->SetMargins(20,20,20);
	$pdf->Ln(10);
	if ($result[PrecioVenta]!=0) {
	                	$precio= number_format($result[PrecioVenta]);
	                } else {
	                	$precio= number_format($result[PrecioRenta]);
	                }
	              
	$pdf->PrintInfo(1,$result[titulo],$result[Descripcion],$result[idTipo],$result[EstatusVenta],$precio,$result[idPersonalizado],$result[NumeroCuartos],$result[NumeroBanios],$result[M2terreno],$result[M2Construccion],$result[Municipio],$result[Estado],$result[Colonia],$result[CP],$result[CuartoServicio],$result[NivelesConstruidos],$result[M2Jardin],$result[NumeroCocherasDescubiertas],$result[TipoDpto],$result[NumeroCocheras],$result[NumeroCocherasVisitas],$result[EstadoConservacion],$result[nunidades],$result[nnounidades],$result[Mfondo],$result[Mfrente],$result[NivelUbicacion],$result[NumeroPrivados],$result[FormaTerreno],$result[UsoSuelo],$result[ConcentracionIndustrial],$result[Ferrocarril],$result[TransporteMultimodal],$result[M2Oficina],$result[m2bodega],$result[Andenes],$result[AreaManiobras],$result[AlturaLibre],$result[TipoTecho],$result[CargaPisoToneladas],$result[Hectareas],$result[TipoRancho],$result[SistemaRiego],$result[VistaPanoramica],$result[AbiertoVisitantes],$result[LagunaCercana],$result[RioCercano],$result[Establo],$result[SuperficieAgricola],$result[SuperficiePastizal],$result[SuperficieHabitable],$result[NumeroPozos],$result[NumeroCasas],$result2[telprinc],$result2[telsec],$result2[correocontacto]);
	$link=$pdf->AddLink();
	$pdf->Link(38,265,36,7,'http://yetinmobiliario.com/');
	
	$pdf->Output();
 ?>