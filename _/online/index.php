<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nutrici&oacute;n Online Nutriyachay, Nutricionista Online, Atenci&oacute;n Nutricional por Internet</title>
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

</head>
<body>
<?php include_once("analyticstracking.php") ?>
<?php include "lib/topSocial.php"; ?>

<div class="container">
  <div class="cabeceraLogo">
   <?php include "lib/cabecera.php"; ?>
  </div>
  <?php include "lib/menu.php"; ?>
  
  <div class="row videoProgramas">
    <div class="col-md-5 videoSpacio">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/AxZcQjRPfHs" allowfullscreen=""></iframe>
      </div>
    </div>
    <div class="col-md-7">
      <div class="panel panel-default">
        <div class="panel-body"> 
          <iframe src="programas.html" scrolling="yes" frameborder="0" height="210" width="100%"></iframe>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row bloqueTresPasos">
  	<div class="col-md-12">
    	<h2 class="tresPasos"><span>¡Empieza tu tratamiento Nutricional</span> OnLine en solo 3 pasos!</h2>
    </div>
  </div>
  
  <div class="row bloqueTresPasos">
  	<div class="col-md-4">
    	<div class="panel panel-paso1">
        <div class="panel-heading">&nbsp;</div>
        <div class="panel-body paso1">
	        <p class="text-center"><a href="#"><img src="images/paso1.jpg" width="271" height="162" class="img-responsive" alt="Ingresa tu historia nutricional"/></a></p>
        </div>
        </div>
    </div>
    <div class="col-md-4">
    	<div class="panel panel-paso2">
        <div class="panel-heading">&nbsp;</div>
        <div class="panel-body paso2">
        	<p class="text-center"><a href="#"><img src="images/paso2.jpg" width="271" height="162" class="img-responsive" alt="Vereficamos y confirmamos el proceso"/></a></p>
        </div>
        </div>
    	
    </div>
    <div class="col-md-4">
    	<div class="panel panel-paso3">
        <div class="panel-heading">&nbsp;</div>
        <div class="panel-body paso3">
        	<p class="text-center"><img src="images/paso3.jpg" width="271" height="162" class="img-responsive" alt="Tomamos contacto para iniciar el tratamiento"/></p>
        </div>
        </div>
    	
    </div>
  </div>
  
  
  <?php include "lib/servicios-online.php"; ?>
    <?php include "lib/pie.php"; ?>
    <?php include "lib/pie2.php"; ?>
</div>
<?php include "lib/scripts.php"?>
</body>
</html>