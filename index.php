<?php $mn=1;?>
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
      <span class="navbar-brand">Bienvenidos a Nutriyachay</span> 
    </div>
    
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
        <div class="lnksMenuBlco"> <em class="fa fa-calendar"></em> <a href="sacar-cita-nutricionista.php">SACAR UNA CITA</a> &nbsp; / &nbsp; <em class="fa fa-phone-square"></em> 933 000 770
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
    <div class="col-lg-12">
  	 <div id="carousel1" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel1" data-slide-to="1"></li>
            <li data-target="#carousel1" data-slide-to="2"></li>
            <li data-target="#carousel1" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active"><img src="images/slider1.jpg" alt="First slide image" class="center-block">
              
            </div>
            <div class="item"><img src="images/slider2.jpg" alt="Second slide image" class="center-block">
              
            </div>
            <div class="item"><img src="images/slider3.jpg" alt="Third slide image" class="center-block">
              
            </div>
            <div class="item"><img src="images/slider4.jpg" alt="Second slide image" class="center-block">
              
            </div>
          </div>
          <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Anterior</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Siguiente</span></a>
      </div>
	</div>
  </div>
</div>
<div class="container">
  <div class="row">
  <div class="bgWhite lineaBase">
    <div class="col-md-4">
      <h2 class="subtituloHome"> <em class="fa fa-fw fa-comments-o"></em>Testimonios</h2>
      	<div class="testimoniosLista">
            <div class="testimonio">
                <div class="testimonioImg"><a href="#"><img src="images/nutriyachay-testimonio.png" alt="Testimonio Nutriyachay" title="Testimonio nutriyachay"></a></div>
                    <p class="testimonioTexto"><a href="#">Muy buenas tardes, mi nombre es Pilar Minaya Mendoza  y soy madre de un pequeñito de dos años y medio; quién al empezar el tratamiento nutricional con Ustedes era muy inapetente y se mostraba irascible a la hora de almorzar o cenar...</a></p>
                    <p class="testimonioFirma"><em class="fa fa-fw fa-file-text-o"></em> Pilar Minaya, Lima - Perú</p>
            </div>
            <div class="testimonio">
                <div class="testimonioImg"><a href="#"><img src="images/nutriyachay-testimonio.png" alt="Testimonio Nutriyachay" title="Testimonio nutriyachay"></a></div>
                    <p class="testimonioTexto"><a href="#">Hola, mi nombre es Susana Bardales Sirlupú y soy mamá de un niño de 8 años. Llegué a Nutriyachay después de una búsqueda incesante de un nutricionista especialista en niños que me de confianza y que me ayude ...</a></p>
                    <p class="testimonioFirma"><em class="fa fa-fw fa-file-text-o"></em> Susana Bardales, Lima - Perú</p>
            </div>
          </div>
    </div>
    <div class="col-md-4">
      <h2 class="subtituloHome"><em class="fa fa-fw fa-bullhorn"></em>Promoción del mes</h2>
      <p class="testimonioTexto">Aprovecha nuestras ofertas especiales y aliméntate sano.</p>
      <img src="images/promocion-mes.jpg" class="img-responsive" alt=""/> </div>
    <div class="col-md-4">
    	<div class="ultimPublicaciones">
    		
        <h2 class="subtituloHome"><em class="fa fa-fw fa-newspaper-o"></em>Últimas Publicaciones</h2>
        <?php
error_reporting(0);
$xItems = ( isset($_GET['items']) && is_numeric($_GET['items'])) ? $_GET['items'] : 1; 



$xml = 'http://www.nutriyachay.com/blog/feed/';
$foto = new SimpleXMLElement($xml, null, true);




$xmlDoc = new DOMDocument();

$xmlDoc->load($xml);



//get elements from "<channel>"

$channel=$xmlDoc->getElementsByTagName('channel')->item(0);

$channel_title = $channel->getElementsByTagName('title')

->item(0)->childNodes->item(0)->nodeValue;

$channel_link = $channel->getElementsByTagName('link')

->item(0)->childNodes->item(0)->nodeValue;

$channel_desc = $channel->getElementsByTagName('description')

->item(0)->childNodes->item(0)->nodeValue;

$channel_fecha = $channel->getElementsByTagName('pubDate')

->item(0)->childNodes->item(0)->nodeValue;

//output elements from "<channel>"
 
/* DESACTIVO CAMBIO 3 echo("<p><a href='" . $channel_link

  . "'>" . $channel_title . "</a>");

echo("<br>");

echo($channel_desc . "</p>");

echo("<br>");*/





//get and output "<item>" elements

$x=$xmlDoc->getElementsByTagName('item');

for ($i=0; $i<$xItems; $i++) {

  if(!$x->item($i)){

    break;

  }
  
  $item_title=$x->item($i)->getElementsByTagName('title')

  ->item(0)->childNodes->item(0)->nodeValue;

  $item_link=$x->item($i)->getElementsByTagName('link')

  ->item(0)->childNodes->item(0)->nodeValue;

  $item_desc=$x->item($i)->getElementsByTagName('description')

  ->item(0)->childNodes->item(0)->nodeValue;

    $item_fecha=$x->item($i)->getElementsByTagName('pubDate')

  ->item(0)->childNodes->item(0)->nodeValue;
  
function  imprimir($row) {
 
   
    $mystring = ( $row->children('content', true) );

    $ini = strpos($mystring, '<img');
    $end = strpos($mystring, '</p>');

   $fila= substr($mystring, $ini, $end-$ini+3);
   
echo "<td class='size'><img width='333px' height='120px'   alt='titulo de la publicacion' src=".$fila."></img></td>";

}


foreach($foto->channel->item as $boo) // loop through our books
{
    imprimir($boo);

    break;

}

}

?>
        
          <div class="tituloPublicacion"><?php  echo ("<p><a href='" . $item_link

  . "'>" . $item_title . "</a>"); ?></div>
            <p class="ultimPubTexto"><a href="#"><?php   echo(substr($item_desc,0,-1800). "</p>");?></a></p>
            <div class="pieUltPubliccion">
              <div class="ultimPubComments"><em class="fa fa-fw fa-comments-o"></em>1</div>
                <div class="ultimPubFecha"><em class="fa fa-fw fa-clock-o"></em><?php echo(substr($item_fecha,4,-14)); ?></div>
                <a href="#"><?php  echo ("<p><a href='" . $item_link. "'>" . "Leer Nota >" . "</a>");?></a>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
 
  </div>
  </div>
  
   <div class="row">
  <div class="bgWhite">
    <div class="col-md-4">
      <h2 class="subtituloHome"><em class="fa fa-fw fa-shopping-basket"></em>Kiosko Nutritivo</h2>
      <div class="kioskobox row">
      		<div class="kioskoBox1 col-md-6 col-md-offset-1"> 
           	  <div class="kioskoTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus  egestas pretium lorem non vestibulum. 
Donec sapien  massa, varius et arcu Vivamus  egestas pretium lorem non vestibulum. Donec sapien  massa, varius et arcu  ...</div>
				<div class="btnKiosko"><a href="#">Comprar</a></div>
			</div>
            <div class="kioskoBox2 col-md-4"><img src="images/producto-kiosko.jpg" width="127" height="194" alt="Nutriyachay"/></div>
      </div>
    </div>
    <div class="col-md-4">
      <h2 class="tituBoletin"><span>Inscríbete a nuestro</span> Boletín Nutricional</h2>
      	<div class="boxBoletin">
      		<img src="images/img-boletin.jpg"  class="img-responsive" alt="Inscríbete a nuestro boletin nutricional"/>
            <div class="formBoletin">
            	<p>Recibe las mejores recetas y tips para una
buena nutrición, en tu email.</p>
<br>
<form class="form-inline">
<div class="row">
<label for="emailBoletin" class="col-md-2" style="color:#fff;">Correo</label>
<div class="col-md-7">
<input id="emailBoletin" class="form-control" name="emailBoletin" type="text" placeholder="Ingresar email" >
</div>
<div class="col-md-3"><button class="btn btn-warning">Enviar</button></div>
</div>



</form>
			</div>
         </div>
     </div>
    <div class="col-md-4">
    <h2 class="subtituloHome"><em class="fa fa-fw fa-tv"></em>Nutriyachay en la TV </h2>
    <p class="testimonioTexto">Hemos participado en  diversos programas de la televisión</p>
    <div class="videoWrapper">
    	<iframe width="350" height="242" src="https://www.youtube.com/embed/AsSfw5n4Dqc" frameborder="0" allowfullscreen=""></iframe>
    </div>
    </div>
<div class="clearfix"><p>&nbsp;</p></div>
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
