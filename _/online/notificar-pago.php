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
        <li class="active">Notif&iacute;canos tu dep&oacute;sito</li>
      </ul>
    </div>
  </div>
  <div class="row bloqueTresPasos">
    <div class="col-md-9">
      <div class="subTituloInt">
        <h2>Notif&iacute;canos tu dep&oacute;sito</h2>
      </div>
      <p>Estimado usuario, si ha realizado el pago, ingrese los datos en el siguiente formulario a fin de procesar la orden. </p>
      <p>Por favor, <u>verifique que los datos proporcionados sean correctos</u>. </p>
      <div class="row">
        <div class="col-md-11">
          <form class="form-horizontal" action="notificar-pago-post.php" name="fcontacto" method="post" enctype="multipart/form-data">
            <div class="panel panel-primary">
            <div class="panel-heading">Datos del depósito</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-4 control-label"for="datos"><strong>Nombre(s) y Apellidos:</strong></label>
                        <div class="col-md-7">
                          <input class="form-control" name="datos" type="text" id="datos" size="50" />
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-4 control-label"for="email"><strong>Correo electr&oacute;nico:</strong></label>
                    <div class="col-md-7">
                      <input class="form-control" name="email" type="text" size="50" id="email" />
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-4 control-label"for="telefono"><strong>Tel&eacute;fono:</strong></label>
                    <div class="col-md-7">
                      <input class="form-control" name="telefono" type="text" id="telefono" size="10" />
                    </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label"for="asunto"><strong>Entidad Bancaria:</strong></label>
                      <div class="col-md-7">
                      <select class="form-control" size="1" name="forma" id="forma" >
                        <option selected="selected" value="">Indique d&oacute;nde realiz&oacute; el pago</option>
                        <option value="Tarjeta de credito - PAYPAL">Tarjeta de credito - PAYPAL</option>
                        <option value="Banco de Cr&eacute;dito del Per&uacute;">Banco de Cr&eacute;dito del Per&uacute; - BCP</option>
                        <option value="Western Union">Western Union</option>
                        <option value="Moneygram">Moneygram</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-4 control-label"for="telefono"><strong>&iquest;Cu&aacute;ndo realiz&oacute; el pago?:</strong></label>
                    <div class="col-md-5">
                        <div class="input-group">
                      <input class="form-control" name="fecha" type="text" id="fecha" size="20" />
                      <span class="input-group-addon">(dia/mes/a&ntilde;o)</span>
                      </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-4 control-label"for="telefono"><strong>Nro. de Recibo o Transacci&oacute;n:</strong> </label>
                    <div class="col-md-5">
                      <input class="form-control" name="codigo" type="text" id="codigo" size="10" />
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-4 control-label"for="telefono"><strong>Monto depositado:</strong> </label>
                    <div class="col-md-2">
                    <select class="form-control" size="1" name="moneda" id="moneda" >
                      <option value="S/." selected="selected">S/. </option>
                      <option value="US $">US $</option>
                    </select>
                    </div>
                    <div class="col-md-3">
                      <input class="form-control" name="monto" type="text" id="monto" size="10" placeholder="monto" />
                    </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label"for="mensaje"><strong>Observaciones:</strong></label>
                      <div class="col-md-7">
                      <textarea class="form-control" name="observaciones" cols="48" rows="10" id="observaciones"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-4 control-label"for="userfile"><strong>Comprobante de pago</strong> </label>
                    <div class="col-md-7">
                      <input class="form-control" name="userfile" type="file" id="userfile" size="35" />
                      <small>(voucher scaneado - opcional)</small> 
                     </div>
                     </div>
                    <div class="form-group">
                      <div class=" col-md-4 col-md-offset-4">
                          <input  class="btn btn-primary btn-block" name="Boton" type="button" value="Enviar"  onClick="validar_pago()" />
                        </div>
                        <div class="col-md-3">
                            <input  class="btn btn-danger btn-block" name="Restablecer" type="reset" value="Borrar"  />
                          </div>
                        </div>
                </div>
       		 </div>
          </form>
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