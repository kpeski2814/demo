<?php 
require("lib/class.phpmailer.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nutrici&oacute;n Online Nutriyachay, Nutricionista Online, Atenci&oacute;n Nutricional por Internet</title>
<meta name="subject"  content="Nutriyachay - Nutricion Online, Atencion Nutricional por Internet" />
<meta name="Description" content="Nutriyachay - Nutricion Online, Atencion Nutricional por Internet, te atendemos desde tu casa via Internet" />
<meta name="Keywords"  content="Nutricion online, Dietista Online, nutricion por internet, dietas por internet, dietas en linea, dietas online, consultorio nutricional virtual, bajar de peso por internet, atencion nutricional por internet " />
<meta name="Geography" content="Peru" />
<meta name="Language" content="Spanish" />
<meta http-equiv="expires" content="never" />
<meta name="Designer"  content="www.tecperu.com" />
<meta name="Publisher"  content="www.tecperu.com" />
<meta name="Revisit-After" content="1" />
<meta name="distribution" content="Global" />
<meta name="Robots" content="all,index,follow" />
<meta name="country" content="Peru" />
<!-- Bootstrap -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/estilos.css">
<link rel="stylesheet" href="css/estilosNutriOnline.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300,100' rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<?php include "lib/topSocial.php"; ?>
<div class="container">
  <div class="cabeceraLogo">
    <?php include "lib/cabecera.php"; ?>
  </div>
  <?php include "lib/menu.php"; ?>
  <div class="row">
    <div class="bgWhite">
      <ul class="breadcrumb">
        <li><a href="http://www.nutriyachay.com">Inicio</a></li>
        <li><a href="http://www.nutriyachay.com/online/">Online</a></li>
        <li class="active">Notif&iacute;canos tu dep&oacute;sito</li>
      </ul>
    </div>
  </div>
  <div class="row bloqueTresPasos">
    <div class="col-md-9">
      <div class="subTituloInt">
        <h2>Notif&iacute;canos tu dep&oacute;sito</h2>
      </div>
      <div class="row">
        <div class="col-md-11">
          <?php

$datos =$_POST['datos'];

$email=$_POST['email'];

$telefono=$_POST['telefono'];

$forma=$_POST['forma'];

$fecha=$_POST['fecha'];

$codigo =$_POST['codigo'];

$moneda=$_POST['moneda'];

$monto=$_POST['monto'];

$observaciones=$_POST['observaciones'];

//----
		$correo_destino = "nutriyachay@gmail.com,eliasr99@gmail.com,nutriyachay.online@gmail.com"; 
		$dir=getcwd(); // getcwd() ---> Captura la direccion correcta
		$path=$dir."/upload/";
		$nombre_archivo = $_FILES['userfile']['name'];
		$mail = new PHPMailer();
		$mail->Host = "localhost";
		$mail->From = "consultas@nutriyachay.com";
		$mail->FromName = "Nutriyachay.com";
		$mail->Subject = "Nutriyachay Online - Notificacion de Pago Nro: ".$codigo;
		//$mail->bcc="eliasr99@gmail.com";
		$mail->AddAddress($correo_destino);				
		$body="\n<b>NUTRIYACHAY ONLINE - NOTIFICACION DE PAGO</b><br><br>";
		$body.="\n<b>Nombre(s) y Apellido(s): </b> $datos <br>";
		$body.="\n<b>Email: </b> $email <br>";
		$body.="\n<b>Telefono: </b> $telefono <br>";
		$body.="\n<b>Entidad Bancaria: </b> $forma <br>";		
		$body.="\n<b>Fecha del pago: </b> $fecha <br>";
		$body.="\n<b>Nro de Recibo u Transaccion: </b> $codigo <br>";
		$body.="\n<b>Monto depositado: </b> $moneda $monto <br>"; //$moneda
		$body.="\n<b>Observaciones: </b> $observaciones <br>";		

			if (!empty($nombre_archivo)) 
			{	
				if (move_uploaded_file($_FILES['userfile']['tmp_name'], $path.$_FILES['userfile']['name']))
				{
					$body.="\n\n<b>Archivo Adjunto: </b> http://www.nutriyachay.com/online/upload/$nombre_archivo <br>";	
				}
			}						
			else
			{
				$body.="\n\n<b>Archivo Adjunto: </b> No adjunto (verificar con los datos enviados, llamando al Banco) <br>";	
			}

		$mail->Body = $body;
		$mail->IsHTML(true);
		//$mail->Send();
		if ($mail -> Send ())
		{
			$msg ="Estimado(a): usuario(a)<br /><br />";
			$msg.="<p><strong>Hemos  recibido correctamente la informaci&oacute;n ingresada.</strong></p>";
			$msg.="<p>Inmediatamente procederemos a verificar el pago por el Programa Nutricional Online. </p>";
			$msg.="<p>En  las pr&oacute;ximas horas recibir&aacute; una llamada telef&oacute;nica para iniciar su tratamiento</p>";
/*			$msg.="<p>Una nutricionista lo atender&aacute; de forma personalizada env&iacute;andole en l&iacute;nea su plan de alimentaci&oacute;n por 7 d&iacute;as.</p>";
			$msg.="<p>Le recordamos que para completar su tratamiento nutricional es necesario cancelar el monto restante. Para mayor informaci&oacute;n puede revisar la secci&oacute;n <a href='index.php'>como funciona la atenci&oacute;n Nutricional Online</a>. </p>";
*/
			$msg.="<p>&nbsp;</p><p>Que tenga un buen d&iacute;a.</p>";
			$msg.="<p>&nbsp;</p><p>Nuestros tel&eacute;fonos: (511) 7222240 , (511) 5385727, celular: (511) 996132272</p><p>Correo: nutriyachay.online@gmail.com</p>";
		}
		else //(!$mail -> Send ())
		{
			$msg ="<p>Su mensaje no pudo ser enviado... </p>";
			$msg.="<p><br /><strong>&nbsp;Disculpe las molestias, agradecer&iacute;amos <a href='notificar-pago.php'>volverlo a intentar</a></strong></p>";
			$msg.="<p>&nbsp;</p><p>Nuestros tel&eacute;fonos: (511) 7222240 , (511) 5385727, celular: (511) 996132272</p><p>Correo: nutriyachay.online@gmail.com</p><p>&nbsp;</p>";
		}
//----
?>
          <?php echo $msg; ?> 
         </div>
      </div>
    </div>
    <div class="col-md-3">
      <?php include "lib/banners.php"; ?>
    </div>
    <div class="clearfix">&nbsp;</div>
    <br>
  </div>
  <?php include "lib/servicios-online.php"; ?>
  <?php include "lib/pie.php"; ?>
    <?php include "lib/pie2.php"; ?>
</div>
<?php include "lib/scripts.php"?>
</body>
</html>