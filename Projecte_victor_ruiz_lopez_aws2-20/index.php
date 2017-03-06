<?php
if(isset($_POST["cerrar"])){
  session_destroy();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
	<div class="row">
		<h2 class="center">CONFIGURADOR ONLINE <img src="imagenes/logo.png" width="80" height="80"></h2>
	</div>
   	<nav class="teal blue-grey darken-4" role="navigation" >
	    <div class="nav-wrapper container">
	    	<ul>
	    		<li><a href="index.php">Inicio</a></li>
		    	<li><a href="iniciar.php">Iniciar Sesión</a></li>
				<li><a href="registro.php">Registrarse</a></li>
			    <li><a href="#">Contacto</a></li>
			</ul>
	    </div>
	  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light"></h5>
        </div>
        <div class="row center">
          
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">REGISTRATE Y EMPIEZA</h5>

            <p class="light">Configura el vehiculo a tu gusto: acabado,color,motorizacion,llantas,accesorios, etc...</p>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">¿AÚN NO HAS CONFIGURADO EL VECHICULO DE TUS SUEÑOS?</h5>

            <p class="light">Configura tu Vehiculo ahora y guárdalo en MiVehiculo. También puedes consultar el completo Manual de Usuario de tu Vechiulo en la sección “Mis vehículos” una vez registrado en MiVehiculo</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">El mejor configurador de confianza, cuidamos tu coche hasta la salida</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Alarga la vida de tu coche</h4>
          <p class="left-align light">Toma papel y boli o anota en la lista de favoritos de tu navegador esta noticia porque vamos a enumerar 15 trucos para alargar la vida de tu coche. 1.Protege la pintura. 2.Hazte con un accesorio protector del frontal. 3.Revisa las 'tripas' del coche. 4.Repasa las juntas de goma. 5.Lávalo con frecuencia. 6.Vigila el nivel de aceite. 7.Sustituye la correo de distribución. 8.Atento a la presión de los neumaticos. 9.Climatizador. 10.No estaimes en recambios. 11.Trata de no recorrer tramos cortos. 12.Cuidado con los golpes a bordillos. 13.Espera a que se caliente el motor. 14.Procura hacer cambios de marcha fluidos. 15.Olvida las maniobras bruscas</p>
        </div>
      </div>

    </div>
  </div>

  <footer class="page-footer teal blue-grey darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Configurador Online</h5>
        </div>
        <div class="col l6 s12">
          <h5 class="white-text">Información</h5>
           <ul>
	           <li><a class="white-text" href="mailto: victor.ruizlopez2@gmail.com">victor.ruizlopez2@gmail.com</a></li>
	           <li><a class="white-text" href="tel: 658222794">658 222 794</a></li>
	           <li><a class="white-text" href="http://www.iesesteveterradas.cat">victor.ruiz.com</a></li>
	           <li><a class="white-text" href="https://es.linkedin.com/in/victor-ruiz-lopez-b73835101">linkedin.com/in/victor-ruiz</a></li>
	           <li><a class="white-text" href="https://github.com/vruizlopez"> github.com/vruizlopez</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Dissenyat per<a class="brown-text text-lighten-3" href="http://materializecss.com"> Victor Ruiz Lopez alumne de Desenvolupament d'Aplicacions Web Copyright 1994-2016 - All Rights Reserved - Legal </a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
