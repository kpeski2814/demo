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
          <p>Escr&iacute;banos y responderemos su consulta en corto tiempo. Porfavor, <strong>complete el formulario.</strong></p>
          <p>Nuestros tel&eacute;fonos: (511) 5385727, (511) 7222240 , celular: (511) 9961-32272 </p>
          <p>Nuestro correo electr&oacute;nico: nutriyachay.online@gmail.com</p>
          <p>&nbsp;</p>
          <div id="registro">
            <form action="contactenos-post.php" method="post" name="fcontacto" class="form-horizontal">
              
              <!--<fieldset>--> 
              
              <!--<legend>Ingrese sus datos...</legend><br />-->
              
              <div class="form-group">
                <label for="datos" class="col-md-4 control-label"><strong>Nombre(s) y Apellidos:</strong></label>
                <div class="col-md-8">
                <input name="datos" type="text" id="datos" class="form-control" size="50" />
                </div>
              </div>
               <div class="form-group">
                <label for="email" class="col-md-4 control-label"><strong>Correo electr&oacute;nico:</strong></label>
                 <div class="col-md-8">
                <input name="email" type="text" size="50" id="email" class="form-control" />
                </div>
              </div>
               <div class="form-group">
                <label for="telefono" class="col-md-4 control-label"><strong>Tel&eacute;fono:</strong></label>
                 <div class="col-md-8">
                <input name="telefono" type="text" id="telefono" size="10" class="form-control" />
                </div>
              </div>
                <div class="form-group">
                <label for="asunto" class="col-md-4 control-label"><strong>Asunto:</strong></label>
                 <div class="col-md-8">
                <select size="1" name="asunto" id="asunto" class="form-control" >
                  <option value="Consultar sobre el servicio" selected="selected">Consultar sobre el servicio</option>
                  <option value="Solicitar mayor información">Solicitar mayor información </option>
                  <option value="Sobre la pagina web">Sobre la pagina web</option>
                  <option value="Realizar una sugerencia">Realizar una sugerencia</option>
                  <option value="Otros">Otros</option>
                </select>
                </div>
              </div>
                <div class="form-group">
                <label for="mensaje" class="col-md-4 control-label"><strong>Mensaje:</strong></label>
                 <div class="col-md-8">
                <textarea name="mensaje" rows="5" id="mensaje" class="form-control"></textarea>
                </div>
              </div>
                <div class="form-group">
              <div class="col-md-8 col-md-offset-4">
                
                  <input name="Boton" type="button" value="      Enviar informaci&oacute;n     " class="btn btn-primary" onClick="validar_contactenos()" />
                  <input name="Restablecer" type="reset" value="     Borrar     " class="btn btn-primary"  />
                
              </div>
              </div>
              
              <!--</fieldset>-->
              
            </form>
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