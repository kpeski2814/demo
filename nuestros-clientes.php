<?php $mn=2;?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Consultorio Nutricional en Lima: Centro y Asesor&iacute;a Nutricional Nutriyachay</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="css/font-awesome.min.css"-->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300,100' rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <span class="navbar-brand">Bienvenidos a Nutriyachay</span></div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
	<?php include "includes/socialnetworks.inc.php"; ?>   
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container">
<div class="cabeceraLogo">
    <div class="logosIzq col-lg-3 col-md-3 col-xs-12"> 
        <a href="http://nutriyachay.demo.simpleinserver.com"><img class="logoNutriyachay" src="images/LogoNutriyachay.png" width="251" height="165" alt=""/></a>
    </div>
    
    <div class="col-lg-7 col-lg-offset-2 col-md-7 col-md-offset-2  col-xs-12 text-left fndCabeceraDerecha">
        <div class="lnksMenuBlco"> <em class="fa fa-calendar"></em> <a href="#">SACAR UNA CITA</a> &nbsp; / &nbsp; <em class="fa fa-phone-square"></em> 933 000 770
        </div>
        <div class="clearfix"></div>
    </div>
  </div>
<nav class="navbar navbar-default menuPrincipal">
  <div class="container-fluid noMrgLeft"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-2"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <span class="navbar-brand visible-xs">Menú Principal</span> 
    </div>
    
<?php include "includes/menu.inc.php"; ?> 
   
  </div>
  <!-- /.container-fluid --> 
</nav>
  <div class="row">
      <div class="bgWhite">
          <ul class="breadcrumb">
                <li><a href="index.php">Inicio</a></li>
				<li><a href="nosotras.php">Nosotras</a></li>
                <li class="active">Nuestros clientes</li>
          </ul>
      </div>
  </div>
  <div class="row">
  	<div class="bgWhite padding20">
           <aside id="mensaje">
             <h2>Consultorio Nutricional</h2>
            </aside>
        <div class="clearfix">&nbsp;</div>

		 
     </div>
 
  	<div class="bgWhite padding20">
        <div class="col-md-9">
            <div class="subTituloInt">
              <h2>EMPRESAS CON QUIEN TRABAJAMOS</h2>
            </div>

<div class="col-md-4">
          <img src="images/clientes/pucp.jpg">
        </div>
        
        <div class="col-md-4">
          <img src="images/clientes/pucp_centrum.jpg">
        </div>

    <div class="col-md-2">
          <img src="images/clientes/gobierno_region_callao.jpg">
        </div>

        <div class="col-md-4">
          <img src="images/clientes/natacion_master_deep.jpg">
        </div>

        <div class="col-md-4">
          <img src="images/clientes/colegio_champagnat.jpg">
        </div>

        <div class="col-md-4">
          <img src="images/clientes/colegio_la_reparacion.jpg" width="300px">
        </div>
 
         <div class="clearfix">&nbsp;</div>
         <div class="clearfix">&nbsp;</div>
        

		</div>
        
       
       
		
       <div class="col-md-3">
        <div class="btn3-container btn3-left">
        <a href="#" class="btn3"><i class="fa fa-fw fa-download"></i> Nutrición Online</a></div>
        <div class="btn3-container btn3-left">
        <a href="#" class="btn3"><i class="fa fa-fw fa-download"></i> Nutrición Corporativa</a></div>
        </div>

       <div class="col-md-12"> <strong>Y cientos de personas más...</strong><br><br><br></div>
    <div class="clearfix"></div>
    </div>
  </div>
  </div>
</div>

<?php include "includes/footer.inc.php"; ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.2.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
