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
        <li class="active"> Historia Nutricional  - Ni&ntilde;os y Adolescentes</li>
      </ul>
    </div>
  </div>
  <div class="row bloqueTresPasos">
    <div class="col-md-9">
      <div class="subTituloInt">
        <h2>Historia Nutricional  - Ni&ntilde;os y Adolescentes</h2>
      </div>
      <p>Estimado usuario, por favor, <strong>complete todo el formulario</strong> (*)</p>
      <div class="row">
        <div class="col-md-11">
          <div id="registrop">
            <form class="form-horizontal" action="historia-nutricional-ninos-post.php" method="post" enctype="multipart/form-data" name="fcontacto">
              <fieldset>
                <div class="panel panel-primary">
                  <div class="panel-heading">Datos del Apoderado</div>
                  <div class="panel-body">
                    <div class="form-group">
                      <label class="control-label col-md-4" for="apoderado"><strong>Nombre y Apellidos:</strong></label>
                      <div class="col-md-8">
                        <input class="form-control" name="apoderado" type="text" id="apoderado" placeholder="Del padre, madre o apoderado" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4" for="email"><strong>Correo electr&oacute;nico:</strong></label>
                      <div class="col-md-8">
                        <input class="form-control" name="email" type="text" size="48" id="email" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label  class="control-label col-md-4" for="fijo"><strong>Tel&eacute;fono fijo:</strong></label>
                      <div class="col-md-5">
                        <input class="form-control" name="fijo" type="text" id="fijo" size="10" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4" for="celular"><strong>Tel&eacute;fono celular:</strong></label>
                      <div class="col-md-5">
                        <input class="form-control" name="celular" type="text" id="celular" size="10" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-primary">
                  <div class="panel-heading">Datos del Paciente</div>
                  <div class="panel-body">
                    <div class="form-group">
                      <label class="control-label col-md-4" for="paciente"><strong>Nombre y Apellidos:</strong></label>
                      <div class="col-md-8">
                        <input class="form-control" name="paciente" type="text" id="paciente" size="48" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4" for="email"><strong>Sexo:</strong></label>
                      <div class="col-md-5">
                        <select class="form-control" size="1" name="sexo" id="sexo" >
                          <option selected="selected" value="">Elija una opci&oacute;n</option>
                          <option value="Masculino">Masculino</option>
                          <option value="Femenino">Femenino</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-primary">
                  <div class="panel-heading">Historia</div>
                  <div class="panel-body">
                  	<div class="form-group">
                        <label class="col-md-3 control-label" for="motivo"><strong>&iquest;Motivo de la consulta?:</strong></label>
                        <div class="col-md-6">
                        <select class="form-control" size="1" name="motivo" id="motivo" >
                          <option selected="selected" value="">Elija una opci&oacute;n</option>
                          <option value="Sobrepeso infantil">Sobrepeso infantil</option>
                          <option value="Subir de peso - inapetencia">Subir de peso - inapetencia</option>
                          <option value="Deportista de Competencia">Deportista de Competencia</option>
                          <option value="Talla baja">Talla baja</option>
                          <option value="Mejorar su alimentacion">Mejorar su alimentacion</option>
                          <option value="Otro">Otro</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="nacimiento"><strong>Fecha de Nacimiento:</strong></label>
                        <div class="col-md-3">
                        <input class="form-control" name="nacimiento" type="text" id="nacimiento" size="15" placeholder="(dd/mm/aaaa)" />
                        </div>
                        <label class="col-md-3 control-label" for="nacimiento"><strong>Edad:</strong></label>
                        <div class="col-md-3">
                        <div class="input-group">
                    	<input class="form-control" name="edad" type="text" id="edad" size="5" />
                    	<span class="input-group-addon">&nbsp;a&ntilde;os</span>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"  for="peso"><strong>Peso actual :</strong></label>
                        <div class="col-md-3">
                        <div class="input-group">
                        <input class="form-control" name="peso" type="text" size="10" id="peso" />
                        <span class="input-group-addon">&nbsp;kg. </span>
                        </div>
                        </div>
                        <label class="col-md-3 control-label"  for="actividad_fisica"><strong>Talla actual:</strong></label>
                         <div class="col-md-3">
                        <input class="form-control" name="talla" type="text" id="talla" size="10" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="sexo"><strong>Horarios del colegio:</strong></label>
                        <div class="col-md-3">
                        <select class="form-control" size="1" name="horarios" id="horarios" >
                          <option selected="selected" value="">Elija una opci&oacute;n</option>
                          <option value="8:00am - 12m.">8:00am - 12m.</option>
                          <option value="8:00am - 1:00p.m.">8:00am - 1:00p.m.</option>
                          <option value="8:00am - 2:00p.m.">8:00am - 2:00p.m.</option>
                          <option value="8:00am - 3:00p.m.">8:00am - 3:00p.m.</option>
                          <option value="8:00am - 4:00p.m.">8:00am - 4:00p.m.</option>
                          <option value="8:00am - 5:00p.m.">8:00am - 5:00p.m.</option>
                        </select>
                        </div>
                        <label class="col-md-3 control-label" for="actividad"><strong>Actividad f&iacute;sica :</strong></label>
                         <div class="col-md-3">
                        <select class="form-control" size="1" name="actividad" id="actividad" >
                          <option selected="selected" value="">Elija una opci&oacute;n</option>
                          <option value="No practica">No practica</option>
                          <option value="1 vez a la semana">1 vez a la semana</option>
                          <option value="3 veces por semana">3 veces por semana</option>
                          <option value="5 a 6 veces por semana">5 a 6 veces por semana</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="actividad_fisica"><strong>Qu&eacute; deporte practica:</strong></label>
                        <div class="col-md-6">
                        <input class="form-control" name="actividad_fisica" type="text" id="actividad_fisica" size="48" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="enfermedad"><strong>&iquest;Tiene alguna enfermedad, 
                          ex&aacute;menes de laboratorio o  endocrinol&oacute;gicos?</strong></label>
                        <div class="col-md-9">
                        <textarea class="form-control" name="enfermedad" cols="48" rows="5" id="enfermedad"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                    	<label class="col-md-3 control-label" for="enfermedad"><strong>&iquest;Consume  suplementos, vitaminas o pastillas?</strong></label>
                       	<div class="col-md-9">
                    		<textarea class="form-control" name="suplementos" cols="48" rows="5" id="suplementos"></textarea>
                       </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="comedor"><strong>&iquest;Almuerza comida de casa o compra men&uacute; en el comedor escolar?</strong></label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="comedor" cols="48" rows="3" id="comedor"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="desayuno"><strong>&iquest;Qu&eacute;  tomo de desayuno ayer?, &iquest;A qu&eacute; hora?</strong></label>
                        <div class="col-md-9">
                        <textarea class="form-control" name="desayuno" cols="48" rows="3" id="desayuno"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="mediamanana"><strong>&iquest;Qu&eacute;  comi&oacute; ayer&nbsp; entre  desayuno y el  almuerzo?, &iquest;A qu&eacute; hora?</strong></label>
                        <div class="col-md-9">
                        <textarea class="form-control" name="mediamanana" cols="48" rows="3" id="mediamanana"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="mediamanana"><strong>&iquest;Qu&eacute;  comi&oacute; ayer&nbsp; en su almuerzo?, &iquest;A qu&eacute; hora?</strong></label>
                        <div class="col-md-9">
                        <textarea class="form-control" name="almuerzo" cols="48" rows="3" id="almuerzo"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="mediamanana"><strong>&iquest;Qu&eacute;  comi&oacute; ayer entre su almuerzo y su cena? , &iquest;A qu&eacute; hora</strong>?</label>
                        <div class="col-md-9">
                        <textarea class="form-control" name="mediatarde" cols="48" rows="3" id="mediatarde"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="mediamanana"><strong>&iquest;Qu&eacute; comi&oacute; ayer en la cena? &iquest;A qu&eacute; hora?</strong> </label>
                        <div class="col-md-9">
                        <textarea class="form-control" name="cena" cols="48" rows="3" id="cena"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="lonchera"><strong>&iquest;Qu&eacute;  l&aacute;cteos consume?&nbsp; (Leche y sus derivados) </strong></label>
                        <div class="col-md-9">
                        <textarea class="form-control" name="lacteos" cols="48" rows="3" id="lacteos"></textarea>
                        <small class="leyenda">Ejemplo:  queso,  yogurt, leche light, leche sin lactosa. </small> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="lonchera"><strong>&iquest;Qu&eacute; frutas consume?</strong> </label>
                         <div class="col-md-9">
                        <textarea class="form-control" name="frutas" cols="48" rows="3" id="frutas"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="ensaladas"><strong>&iquest;Consume  ensaladas?  &iquest;Qu&eacute; verduras consume en ellas?</strong></label>
                         <div class="col-md-9">
                        <textarea class="form-control" name="ensaladas" cols="48" rows="3" id="ensaladas"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="carnes">
                         <strong> Qu&eacute;  alimentos c&aacute;rnicos consume?&nbsp;&nbsp; </strong></label>
                          <div class="col-md-9">
                        <textarea class="form-control" name="carnes" cols="48" rows="4" id="carnes"></textarea>
                        <small class="leyenda">Ejemplo:  pescado,  huevo, carne,   chancho, pollo, etc. </small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="mediamanana"><strong>&iquest;Qu&eacute; tub&eacute;rculos, cereales y menestras consume?</strong></label>
                         <div class="col-md-9">
                        <textarea class="form-control" name="tuberculos" cols="48" rows="3" id="tuberculos"></textarea>
                        <small class="leyenda">Tub&eacute;rculos: papa, yuca, camote, olluco
                        *Cereales: pan, arroz, avena, fideos, galletas
                        *Menestras: Lentejas, frejoles, pallares, pallares, garbanzos 
                        </small>
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-3 control-label" for="mediamanana"><strong>Vasos de agua que consume al d&iacute;a: </strong></label>
                     <div class="col-md-3">
                    <input class="form-control" name="agua" type="text" id="agua" value="" size="10" />
                    </div>
                    </div>
                    
                    <h4 for="alimentos_come">&iquest;Con qu&eacute; frecuencia come estos productos?</h4>
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="come1"><strong>Bebidas con az&uacute;car o miel</strong> </label>
                         <div class="col-md-8">
                        <select class="form-control" size="1" name="come1" id="come1" >
                          <option selected="selected" value="">Elija una opci&oacute;n</option>
                          <option value="1 vez por semana">1 vez por semana</option>
                          <option value="2 a 3 veces por semana">2 a 3 veces por semana</option>
                          <option value="4 a 5 veces por semana">4 a 5 veces por semana</option>
                          <option value="Todos los dias">Todos los dias</option>
                          <option value="Nunca">Nunca</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="come2"><strong>Compromisos con comida y bebidas</strong></label>
                        <div class="col-md-8">
                        <select class="form-control" size="1" name="come2" id="come2" >
                          <option selected="selected" value="">Elija una opci&oacute;n</option>
                          <option value="1 vez por semana">1 vez por semana</option>
                          <option value="2 a 3 veces por semana">2 a 3 veces por semana</option>
                          <option value="4 a 5 veces por semana">4 a 5 veces por semana</option>
                          <option value="Todos los dias">Todos los dias</option>
                          <option value="Nunca">Nunca</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="come3"><strong>Postres, chocolates </strong></label>
                        <div class="col-md-8">
                        <select class="form-control" size="1" name="come3" id="come3" >
                          <option selected="selected" value="">Elija una opci&oacute;n</option>
                          <option value="1 vez por semana">1 vez por semana</option>
                          <option value="2 a 3 veces por semana">2 a 3 veces por semana</option>
                          <option value="4 a 5 veces por semana">4 a 5 veces por semana</option>
                          <option value="Todos los dias">Todos los dias</option>
                          <option value="Nunca">Nunca</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="come4"><strong>Snacks</strong></label>
                        <div class="col-md-8">
                        <select class="form-control" size="1" name="come4" id="come4" >
                          <option selected="selected" value="">Elija una opci&oacute;n</option>
                          <option value="1 vez por semana">1 vez por semana</option>
                          <option value="2 a 3 veces por semana">2 a 3 veces por semana</option>
                          <option value="4 a 5 veces por semana">4 a 5 veces por semana</option>
                          <option value="Todos los dias">Todos los dias</option>
                          <option value="Nunca">Nunca</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="come5"><strong>C&oacute;midas r&aacute;pidas</strong> </label>
                        <div class="col-md-8">
                        <select class="form-control" size="1" name="come5" id="come5" >
                          <option selected="selected" value="">Elija una opci&oacute;n</option>
                          <option value="1 vez por semana">1 vez por semana</option>
                          <option value="2 a 3 veces por semana">2 a 3 veces por semana</option>
                          <option value="4 a 5 veces por semana">4 a 5 veces por semana</option>
                          <option value="Todos los dias">Todos los dias</option>
                          <option value="Nunca">Nunca</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="come6"><strong>Galletas</strong></label>
                        <div class="col-md-8">
                        <select class="form-control" size="1" name="come6" id="come6" >
                          <option selected="selected" value="">Elija una opci&oacute;n</option>
                          <option value="1 vez por semana">1 vez por semana</option>
                          <option value="2 a 3 veces por semana">2 a 3 veces por semana</option>
                          <option value="4 a 5 veces por semana">4 a 5 veces por semana</option>
                          <option value="Todos los dias">Todos los dias</option>
                          <option value="Nunca">Nunca</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="come7"><strong>Frituras</strong></label>
                        <div class="col-md-8">
                        <select class="form-control" size="1" name="come7" id="come7" >
                          <option selected="selected" value="">Elija una opci&oacute;n</option>
                          <option value="1 vez por semana">1 vez por semana</option>
                          <option value="2 a 3 veces por semana">2 a 3 veces por semana</option>
                          <option value="4 a 5 veces por semana">4 a 5 veces por semana</option>
                          <option value="Todos los dias">Todos los dias</option>
                          <option value="Nunca">Nunca</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="come8"><strong>Mermelada</strong></label>
                        <div class="col-md-8">
                        <select class="form-control" size="1" name="come8" id="come8" >
                          <option selected="selected" value="">Elija una opci&oacute;n</option>
                          <option value="1 vez por semana">1 vez por semana</option>
                          <option value="2 a 3 veces por semana">2 a 3 veces por semana</option>
                          <option value="4 a 5 veces por semana">4 a 5 veces por semana</option>
                          <option value="Todos los dias">Todos los dias</option>
                          <option value="Nunca">Nunca</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="come9"><strong>Embutidos</strong></label>
                        <div class="col-md-8">
                        <select class="form-control" size="1" name="come9" id="come9" >
                          <option selected="selected" value="">Elija una opci&oacute;n</option>
                          <option value="1 vez por semana">1 vez por semana</option>
                          <option value="2 a 3 veces por semana">2 a 3 veces por semana</option>
                          <option value="4 a 5 veces por semana">4 a 5 veces por semana</option>
                          <option value="Todos los dias">Todos los dias</option>
                          <option value="Nunca">Nunca</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="come10"><strong>Mantequilla</strong></label>
                        <div class="col-md-8">
                        <select class="form-control" size="1" name="come10" id="come10" >
                          <option selected="selected" value="">Elija una opci&oacute;n</option>
                          <option value="1 vez por semana">1 vez por semana</option>
                          <option value="2 a 3 veces por semana">2 a 3 veces por semana</option>
                          <option value="4 a 5 veces por semana">4 a 5 veces por semana</option>
                          <option value="Todos los dias">Todos los dias</option>
                          <option value="Nunca">Nunca</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="come11"><strong>Quesos grasosos</strong> </label>
                        <div class="col-md-8">
                        <select class="form-control" size="1" name="come11" id="come11" >
                          <option selected="selected" value="">Elija una opci&oacute;n</option>
                          <option value="1 vez por semana">1 vez por semana</option>
                          <option value="2 a 3 veces por semana">2 a 3 veces por semana</option>
                          <option value="4 a 5 veces por semana">4 a 5 veces por semana</option>
                          <option value="Todos los dias">Todos los dias</option>
                          <option value="Nunca">Nunca</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class=" col-md-4 col-md-offset-4">
                        <input class="btn btn-primary btn-block" name="Boton" type="button" value="Enviar Historia Nutricional"  onClick="validar_historia_adulto_mujer()" />
                      </div>
                      <div class="col-md-4">
                        <input class="btn btn-danger btn-block" name="Restablecer" type="reset" value="Borrar"  />
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
            <p> (*) Toda la informaci&oacute;n ingresada no ser&aacute; difundida ni replicada a terceros, esta ser&aacute; utilizada &uacute;nicamente para la historia nutricional del paciente.</p>
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