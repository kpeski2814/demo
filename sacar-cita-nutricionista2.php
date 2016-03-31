

				 

<?php



// verificar que haya ingresao todos los datos y que no este vacil, sino emitir mensaje de alerta



$datos = $_GET["datos"];

$email = $_GET["email"];

$fijo = $_GET["fijo"];

$celular = $_GET["celular"];

$fecha = $_GET["fecha"];

$hora = $_GET["hora"];

$comentario = $_GET["comentario"];



$a="nutriyachay@gmail.com,nutriyachay.secretaria@gmail.com"; 

$asunto = "nutriyachay.com - cita en San Miguel - ".$datos;



$mensaje="\n<b>NUTRIYACHAY - CITA EN SAN MIGUEL</b><br><br>";

$mensaje.="\n<b><u>PACIENTE:</u></b><br><br>";

$mensaje.="\n<b>Nombres y Apellidos:</b> $datos <br>";

$mensaje.="\n<b>Telefono casa:</b> $fijo <br>";

$mensaje.="\n<b>Telefono celular:</b> $celular <br>";

$mensaje.="\n<b>Email:</b> $email <br><br>";

$mensaje.="\n<b><u>CITA:</u></b><br><br>";

$mensaje.="\n<b>Fecha:</b> $fecha <br>";

$mensaje.="\n<b>Hora:</b> $hora <br>";

$mensaje.="\n<b>Comentarios:</b> $comentario <br><br>";

$mensaje.="\n<u>Agendar la Cita en el calendario y llamar para confirmar el mismo dia en la mañana</u> ";



$headers = "MIME-Version: 1.0\r\n"; 

$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";  

$headers .= "From: Nutriyachay.com <consultas@nutriyachay.com>\r\n"; 

$headers .= "Bcc: eliasr99@gmail.com" . "\r\n";



if( mail($a,$asunto,$mensaje,$headers) )

{?>

 <p> <strong><font size="3">&iexcl;Datos recibidos con &eacute;xito! </font></strong></p>

<p><br />

Estimado(a) <?php echo $datos; ?>,

<p>Hemos recibido sus datos, su cita ha sido pre-reservada para el <?php echo $fecha; ?> a las <?php echo $hora; ?> en nuestro Consultorio Nutricional (Calle César López 194, altura cuadra 25 de la Av. la Marina, exactamente al costado de Metro, frente a la Antena de Edelnor, San Miguel).

<p>Esta cita será confirmada cuando le enviemos la confirmación por correo o nos contactemos con usted. via telefónica. 
<p>Hasta luego. 

<p><strong>Lic. Karem Soto<br />

  C.N.P.: 3965 </strong></p>

<p>&nbsp; </p>

<?php }

else 

{?>

  ...Sus datos no han podido ser enviados! </p>

<p><br />

  <strong>&nbsp;Disculpe las molestias, agradecer&iacute;amos <a href="reservar-cita.php">volverlo a intentar</a></strong></p>  

  <?php 

 } 

?>



<p>&nbsp;</p>







			        