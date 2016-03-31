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
<script src="js/validar.js" type="text/javascript"></script>
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
        <li class="active">Contáctenos</li>
      </ul>
    </div>
  </div>
  <div class="row bloqueTresPasos">
    <div class="col-md-9">
      <div class="subTituloInt">
        <h2> &iquest;Consultas?, escr&iacute;benos</h2>
      </div>
      <div class="row">
        <div class="col-md-9 col-md-offset-1">
          <div class="flow">
            
                  <p>
		           <?php

$a= "nutriyachay@gmail.com,nutriyachay.online@gmail.com";
$asunto =$_POST['asunto'];
$asunto2 = "Nutriyachay Online - ".$asunto;

$datos =$_POST['datos'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$contenido=$_POST['mensaje'];

$mensaje="\n<b>Datos Personales :</b> $datos <br>";
$mensaje.="\n<b>Telefono :</b> $telefono <br>";
$mensaje.="\n<b>Email :</b> $email <br>";
$mensaje.="\n<b>Asunto : </b> $asunto <br>";
$mensaje.="\n<b>Contenido :</b> $contenido";

$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//$headers .= "From:".$datos."<".$email.">" . "\r\n"; // al parecer hay errores, poner correo estatico
$headers .= "From: Nutriyachay.com <consultas@nutriyachay.com>\r\n"; 
$headers .= "Bcc: eliasr99@gmail.com" . "\r\n";

if( mail($a,$asunto2,$mensaje,$headers) )
{?>
  ¡Su mensaje ha sido enviado con &eacute;xito! </p>
                  <p><strong>En breve le responderemos</strong>.                 
                    
                    <?php }
else 
{?>
                  Ha ocurrido algun error </p>
                  <p><strong>Disculpe las molestias, agradecer&iacute;amos <a href="contactenos.php">volverlo a intentar</a></strong>
                    
                    <?php 
}
?>
                    
                    
                  </p>
          </div>
          
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