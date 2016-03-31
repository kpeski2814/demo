<?php $mn = 1 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galeria de Fotos</title>

  <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
  <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
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
              <a href="#"><img class="logoNutriyachay" src="images/LogoNutriyachay.png" width="251" height="165" alt=""/></a>
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
                <li class="active">Nosotras</li>
          </ul>
            </div>
          </div>
          <div class="row">
           <div class="bgWhite padding20">
             <aside id="mensaje">
             <h2>   Nosotras </h2>
            </aside>
           
            <div class="clearfix">&nbsp;</div>


          </div>

          <div class="bgWhite padding20">

            <div id="blueimp-gallery" class="blueimp-gallery">
              <!-- The container for the modal slides -->
              <div class="slides"></div>
              <!-- Controls for the borderless lightbox -->
              <h3 class="title"></h3>
              <a class="prev">‹</a>
              <a class="next">›</a>
              <a class="close">×</a>
              <a class="play-pause"></a>
              <ol class="indicator"></ol>
              <!-- The modal dialog, which will be used to wrap the lightbox content -->
              <div class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" aria-hidden="true">&times;</button>
                      <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body next"></div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                      </button>
                      <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-9">
              <div class="subTituloInt">
              <h2>Galeria de Fotos</h2>
              </div>



             <center> <p><h1>Fotos de Eventos y Talleres del  Consultorio Nutricional Nutriyachay</h1></p>


              <!--INICIO DE TABLA-->
              <table width="730" border="0" cellspacing="2" cellpadding="0">



                <tbody><tr>

                  <td colspan="2" valign="top"><p><font color="#CC0000">Feria de Salud en la Universidad Privada del Norte (UPN)</font>:</p>

                    <div align="center">

                      <div id="links">
                        <a href="images/galeria/feria-upn-chico.jpg" title="Mesa Nutritiva, explicacion al alumnado sobre la importancia de una buena alimentacion, en especial el desayuno, se detallo las opciones de alimentacion saludable." data-gallery="upn">
                          <img src="images/galeria/feria-upn-chico.jpg" alt="" />
                        </a>
                        <a href="images/galeria/feria-upn-2.jpg" title="Mesa Nutritiva, explicacion al alumnado sobre la importancia de una buena alimentacion, en especial el desayuno, se detallo las opciones de alimentacion saludable." data-gallery="upn"></a>
                        <a href="images/galeria/feria-upn-3.jpg" title="Mesa Nutritiva, explicacion al alumnado sobre la importancia de una buena alimentacion, en especial el desayuno, se detallo las opciones de alimentacion saludable." data-gallery="upn"></a>
                      </div>

                      <blockquote>
                        <p><strong>Mesa Nutritiva, </strong>explicación al alumnado  sobre la importancia de una buena alimentación, en especial el desayuno, se detallo las opciones de alimentacion saludable.</p>
                      </blockquote>

                    </td>

                  </tr>

                  <tr>

                   <td valign="top">&nbsp;</td>

                   <td valign="top">&nbsp;</td>

                 </tr>

                 <tr>

                  <td width="365" valign="top"><p><font color="#CC0000">Nido la Casita de Wojtyla</font>:</p>

                   <div align="center">

                     <div id="links">
                       <a href="images/galeria/CasitaWojtyla-1.jpg" title="Taller de Loncheras nutritivas en el Nido la Casita de Wojtyla, los padres formaron una variedad de loncheras &nbsp;nutritivas &nbsp;demostrando su creatividad cono también absolvieron sus dudas acerca de la alimentación de sus hijos." data-gallery="casita-woj">
                         <img src="images/galeria/CasitaWojtyla-1.jpg" width="300" height="225" alt="" />
                       </a>
                     </div>

                     <br>
                     <blockquote>

                         <p> <strong>Taller de Loncheras nutritivas </strong> en el Nido la Casita de Wojtyla, los padres formaron una variedad de loncheras nutritivas demostrando su creatividad cono también absolvieron sus dudas acerca de la alimentación de sus hijos.</p>
                     </blockquote>
                   </td>

                   <td width="365" valign="top">

                    <p><font color="#CC0000">Nido los Girasoles de Maranga: </font></p>

                    <div align="center">

                      <div id="links">
                        <a href="images/galeria/TallerGirasolesMaranga-1.jpg" data-gallery="TallerGirasoles" title="Taller de Loncheras nutritivas en el Nido los Girasoles de Maranga, los padres aprendieron a elaborar loncheras nutritivas como también
                        aprendieron como solucionar la inapetencia infantil" >
                        <img src="images/galeria/TallerGirasolesMaranga-1.jpg" width="300" height="225" alt="" />
                      </a>
                      <a href="images/galeria/TallerGirasolesMaranga-2.jpg" data-gallery="TallerGirasoles" title="Taller de Loncheras nutritivas en el Nido los Girasoles de Maranga, los padres aprendieron a elaborar loncheras nutritivas como también
                      aprendieron como solucionar la inapetencia infantil" data-gallery="TallerGirasoles">
                    </a>
                  </div>
                  <br>
                </div>


                <blockquote>

                  <p>   <strong>Taller de Loncheras nutritivas</strong> en el Nido los Girasoles de Maranga,los padres aprendieron a &nbsp;elaborar loncheras nutritivas como tambiénaprendieron como solucionar la inapetencia infantil.</p>

                </blockquote></td>

              </tr>

              <tr>

               <td valign="top">&nbsp;</td>

               <td valign="top">&nbsp;</td>

             </tr>

             <tr>

              <td valign="top">



                <p><font color="#CC0000">Champagnat Swimming Club:</font></p>



                <div align="center">

                  <div id="links">
                    <a href="images/galeria/Champagnat-1.jpg" data-gallery="Champagnat" title="Las  madres y nadadores de la selección del club de natación Champagnat Swimming  Club recibiendo asesoría Nutricional en su club. Ganadores del 3er puesto del campeonato Interclubes de Natación 2011.">
                      <img src="images/galeria/Champagnat-1.jpg" width="300" height="225" alt="" />
                    </a>
                    <a href="images/galeria/Champagnat-2.jpg" data-gallery="Champagnat" title="Las  madres y nadadores de la selección del club de natación Champagnat Swimming  Club recibiendo asesoría Nutricional en su club. Ganadores del 3er puesto del campeonato Interclubes de Natación 2011.">
                    </a>
                  </div>

                  <br>


                </div>

                <blockquote>

                  <p>

                    <strong> Las  madres y nadadores de la selección del club de natación Champagnat Swimming  Club recibiendo asesoría Nutricional en su club. Ganadores del 3er puesto del campeonato Interclubes de Natación 2011.</strong><br>

                    <br>

                    Gracias  Champagnat Swimming Club por  haber confiado en nosotros en especial al entrenador Luis (Lucho) Sánchez Silva. </p>

                  </blockquote>

                </td>

                <td valign="top">

                  <p><font color="#CC0000">Club Máster Deep:</font></p>

                  <div align="center">

                    <div id="links">
                      <a href="images/galeria/ClubMasterDeep-1.jpg" data-gallery="ClubMasterDeep" title="La  selección del Club Máster Deep con la Nutricionista Karem Soto Bernal&nbsp;el día del campeonato Interclubes de Natación 2011, en el cual salieron  Subcampeones">
                        <img src="images/galeria/ClubMasterDeep-1.jpg" width="300" height="225" alt="" />
                      </a>
                      <a href="images/galeria/ClubMasterDeep-2.jpg" data-gallery="ClubMasterDeep" title="La  selección del Club Máster Deep con la Nutricionista Karem Soto Bernal&nbsp;el día del campeonato Interclubes de Natación 2011, en el cual salieron  Subcampeones">
                      </a>
                    </div>
                    <br>

                  </div>


                  <blockquote>

                    <p>

                      <strong> La  selección del Club Máster Deep con la Nutricionista Karem Soto Bernal&nbsp;el día del campeonato Interclubes de Natación 2011, en el cual salieron  Subcampeones</strong>. <br>


                      <br>

                      Gracias Club&nbsp;Máster Deep por seguir confiando en nosotros,  en especial al entrenador Richard Canales. </p>

                      <p>Cabe resaltar que en diciembre de 2011   el <strong>Club Master Deep</strong> de Lima Norte <strong>obtuvo el título del campeonato nacional interclubes división II,</strong> torneo realizado en la pileta olímpica del Campo de Marte, con   una destaca actuación de la mayoría de sus nadadores.   El equipo ganador sumó mil 264 puntos, por delante de otras instituciones de Lima y el interior del país. </p>

                      <p><a href="http://www.elperuano.com.pe/edicion/noticia-master-deep-campeon-33267.aspx" target="_blank">&gt;&gt; MAS INFORMACIÓN </a></p>

                    </blockquote></td>

                  </tr>

                  <tr>

                   <td valign="top">&nbsp;</td>

                   <td valign="top">&nbsp;</td>

                 </tr>

                 <tr>

                  <td valign="top">

                    <p><font color="#CC0000">Colegio  La Fe de María</font>:</p>



                    <div align="center">

                      <div id="links">
                        <a href="images/galeria/TallerLoncherasNutritias-abr2012-2.jpg" data-gallery="TallerLoncherasNutritias" title="Los niños de primaria del colegio La Fe de María (La Pascana) aprendieron jugando y cantando como debe ser una lonchera nutritiva en divertidos concursos, leyeron cuentos con moralejas y pintaron.">
                          <img src="images/galeria/TallerLoncherasNutritias-abr2012-2.jpg" width="300" height="225" alt="" />
                        </a>
                        <a href="images/galeria/TallerLoncherasNutritias-abr2012-1.jpg" data-gallery="TallerLoncherasNutritias" title="Los niños de primaria del colegio La Fe de María (La Pascana) aprendieron jugando y cantando como debe ser una lonchera nutritiva en divertidos concursos, leyeron cuentos con moralejas y pintaron."></a>

                      </div>

                      <br>

                    </div>

                    <blockquote>

                      <p>    <strong>Taller Nutrikids: La Lonchera escolar.</strong> Los niños de primaria del colegio La Fe de María (La Pascana) aprendieron jugando y cantando como debe ser una lonchera nutritiva participaron en divertidos concursos, leyeron cuentos con moralejas y pintaron.</p>

                    </blockquote>

                  </td>

                  <td valign="top">

                    <p><font color="#CC0000">Centrum Católica:</font></p>



                    <div align="center">

                      <div id="links">
                        <a href="images/galeria/CentrumCatolica-1.jpg" data-gallery="CentrumCatolica" title="Trabajadores de Centrum Católica recibiendo  una charla sobre Nutrición Alimentación Balanceada.">
                          <img src="images/galeria/CentrumCatolica-1.jpg" width="300" height="225" alt="" />
                        </a>
                        <a href="images/galeria/CentrumCatolica-2.jpg" data-gallery="CentrumCatolica" title="Trabajadores de Centrum Católica recibiendo  una charla sobre Nutrición Alimentación Balanceada."></a>

                      </div>

                      <br>

                    </div>


                    <blockquote>

                      <p>Trabajadores de Centrum Católica recibiendo  una charla sobre Nutrición Alimentación Balanceada.</p>

                    </blockquote></td>

                  </tr>

                  <tr>

                    <td valign="top">&nbsp;</td>

                    <td valign="top">&nbsp;</td>

                  </tr>

                  <tr>

                   <td valign="top">

                     <p><font color="#CC0000">Sala cuna Universidad Católica:</font></p>

                     <div align="center">

                      <div id="links">
                        <a href="images/galeria/SalaCunaCatolica-1.jpg" data-gallery="SalaCunaCatolica" title="Madres trabajadoras de la Universidad Católica  recibiendo una charla de nutrición para niños de 1-3 años.">
                          <img src="images/galeria/SalaCunaCatolica-1.jpg" width="300" height="225" alt="" />
                        </a>
                        <a href="images/galeria/SalaCunaCatolica-2.jpg" data-gallery="SalaCunaCatolica" title="Madres trabajadoras de la Universidad Católica  recibiendo una charla de nutrición para niños de 1-3 años."></a>

                      </div>


                      <br>

                    </div>

                    <blockquote>

                      <p>Madres trabajadoras de la Universidad Católica  recibiendo una charla de nutrición para niños de 1-3 años.</p>
                      <p><a href="http://blog.pucp.edu.pe/item/134578/bienestar-brinda-asesoria-a-mamas-de-la-sala-cuna-pucp" target="_blank">&gt;&gt; MAS INFORMACIÓN </a></p>

                    </blockquote></td>

                    <td valign="top">



                      <p><font color="#CC0000">Región Callao:</font></p>

                      <div align="center">

                        <div id="links">
                          <a href="images/galeria/RegionCallao-1.jpg" data-gallery="RegionCallao" title="Profesores de la Región Callao recibiendo  un taller de nutrición acerca de Educación alimentaria en las escuelas.">
                            <img src="images/galeria/RegionCallao-1.jpg" width="300" height="225" alt="" />
                          </a>
                          <a href="images/galeria/RegionCallao-2.jpg" data-gallery="RegionCallao" title="Profesores de la Región Callao recibiendo  un taller de nutrición acerca de Educación alimentaria en las escuelas."></a>
                          <a href="images/galeria/RegionCallao-3.jpg" data-gallery="RegionCallao" title="Profesores de la Región Callao recibiendo  un taller de nutrición acerca de Educación alimentaria en las escuelas."></a>
                        </div>

                        <br>

                      </div>


                      <blockquote>
                        <p>Profesores de la Región Callao recibiendo  un taller de nutrición acerca de Educación alimentaria en las escuelas.</p>

                      </blockquote>

                    </td>

                  </tr>

                  <tr>

                    <td valign="top">&nbsp;</td>

                    <td valign="top">&nbsp;</td>

                  </tr>

                  <tr>

                    <td valign="top">

                      <p><font color="#CC0000">Pronoei:</font></p>

                      <div align="center">

                        <div id="links">
                          <a href="images/galeria/pronoei-1.jpg" data-gallery="pronoei" title="Taller de loncheras nutritivas para las  coordinadoras de Pronoei de la Región Callao.">
                            <img src="images/galeria/pronoei-1.jpg" width="300" height="225" alt="" />
                          </a>
                        </div>

                        <br>

                        <blockquote>

                          <p>Taller de loncheras nutritivas para las  coordinadoras de Pronoei de la Región Callao.</p>

                        </blockquote></td>

                        <td valign="top">&nbsp;</td>

                      </tr>

                    </tbody>


                  </table>

                  <!--fin de tabla-->


  

 <div class="clearfix">&nbsp;</div>
         <div class="clearfix">&nbsp;</div>
        
        </div>
                <div class="col-md-3">
                  <div class="btn3-container btn3-left">
                    <a href="#" class="btn3"><i class="fa fa-fw fa-download"></i> Nutrición Online</a></div>
                    <div class="btn3-container btn3-left">
                      <a href="#" class="btn3"><i class="fa fa-fw fa-download"></i> Nutrición Corporativa</a></div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
           

            <?php include "includes/footer.inc.php"; ?>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="js/jquery-1.11.2.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
            <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
            <script src="js/bootstrap-image-gallery.min.js"></script>

          </body>
          </html>
