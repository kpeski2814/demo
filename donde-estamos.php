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
        <a href="http://nutriyachay.demo.simpleinserver.com/index.php"><img class="logoNutriyachay" src="images/LogoNutriyachay.png" width="251" height="165" alt=""/></a>
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
                <li><a href="index.html">Inicio</a></li>
				<li><a href="#">Contacto</a></li>
                <li class="active">¿Dónde estamos?</li>
          </ul>
      </div>
  </div>
  <div class="row">
 
  	<div class="bgWhite padding20">
       <aside id="mensaje">
             <h2>Consultorio Nutricional</h2>
            </aside>
              <div class="clearfix">&nbsp;</div>
        <div class="col-md-12">
            <div class="subTituloInt">
              <h2>CONSULTORIO NUTRICIONAL NUTRIYACHAY</h2>
            </div>
		</div>
		
         <div class="clearfix">&nbsp;</div>
        
        </div>
		  	<div class="bgWhite padding20">

		 <div class="col-md-9">
		 
		 <p>Calle César López 194, Maranga - San Miguel, Lima<br/>
			Altura cuadra 25 de la Av. la Marina, al costado de Metro, frente a la antena de Edelnor<br/>
			<strong>Teléfonos:</strong> 722 2240 - 933 000 770<br/>
			<strong>Horario de atención:</strong> Lunes a Viernes: 9:00am - 1:00pm y de 3:00pm-8:00pm<br/>
			Sábados de 9:00am-1:00pm</p>
			<div class="clearfix">&nbsp;</div>
			<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=nutriyachay&amp;aq=&amp;sll=40.396764,-3.713379&amp;sspn=13.745914,19.753418&amp;vpsrc=6&amp;ie=UTF8&amp;hq=nutriyachay&amp;hnear=&amp;radius=15000&amp;ll=-12.075288,-77.088575&amp;spn=0.008393,0.010707&amp;z=16&amp;output=embed"></iframe>
			</ul>

		</div>
		
		        <div class="col-md-3">
        <div class="btn3-container btn3-left">
        <a href="http://localhost/demo/reservar-cita.php" class="btn3"><i class="fa fa-fw fa-calendar"></i> Reservar cita</a></div>
        </div>

		
		 <div class="clearfix">&nbsp;</div>
		 <div class="clearfix">&nbsp;</div>
		 
		 		</div>

		

		
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
