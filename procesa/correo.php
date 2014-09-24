<?php 
require_once('../clases/class.phpmailer.php');
require_once('../clases/class.smtp.php');

$action = $_POST['action'];
switch ($action) {
	case 'contactUser':
			$mail = new PHPMailer();
			    $mail->IsSMTP();
			    $mail->SMTPAuth = true;
			    $mail->SMTPSecure = "tsl";
			    $mail->Host = "smtp.1and1.com";
			    $mail->Port = 25;
			    $mail->Username = "setup@yetinmobiliario.com";
			    $mail->Password = "4lt4Yet!";
			    $mail->From = "setup@yetinmobiliario.com";
			    $mail->FromName = "Yet Inmobiliario";
			    $mail->AddAddress('soporte@gruposyse.com');
			    $mail->IsHTML(true);
			    $mail->SMTPDebug = 0;
			    $mail->Subject = "Contacto";
			    $mail->MsgHTML('<!doctype html>
				<html>
				<head>
					<meta charset="utf-8">
					<style type="text/css">
					table {
						width: 800px;
						margin: 0 auto 0 auto;
					}
					tr:last-child{
						background-color: #CE7034;
						color: #fff;
					}
					td{
						padding: 20px;
					}
					</style>
				</head>
				<body>
				<table>
					<tr>
						<td>
							<img src="http://pruebas.gruposyse.com/mail/imagenes/logo01.jpg">
						</td>
					</tr>
					<tr>
						<td>
							<h3>Correo enviado desde yetinmobiliario.com</h3>
							El usuario <b>'.$_POST[name].'</b> ha dejado un mensaje:<br>
							'.$_POST[subject].'<br>
							Puedes responder a este mensaje al correo: '.$_POST[email].'<br>
							Puedes responder a este mensaje en el télefono: '.$_POST[phone].'<br>
						</td>
					</tr>
					<tr>
						<td align="right">
							<img src="http://pruebas.gruposyse.com/mail/imagenes/watermark_logo.jpg">
						</td>
					</tr>
					<tr>
						<td>
							<img src="http://pruebas.gruposyse.com/mail/imagenes/bottom.jpg">
						</td>
					</tr>
				</table>
					
				</body>
				</html>	');
				if(!$mail->Send()){
					echo 0;//no envie el mail
				} else {
					echo 1;//todo bien se envio correcto
				}
		break;
	
	default:
		# code...
		break;
}

 ?>