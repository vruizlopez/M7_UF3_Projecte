<?php
session_start();

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
    
    <div class="container">
    	<div class="section">
    <!--   Icon Section   -->
		    <div class="row">
        <div class="center col s2 m2">
        </div>
		      	<div class="center col s8 m8">
		        	<div class="icon-block"> 
			        	<div id="form-login">
			        		<form action="proceso_iniciar_sesion.php" method="POST" name="form">
			        			<div class="row">
				            		<div class="col s12 teal blue-grey darken-4">
				              			<h5 class="center login-title">Iniciar Sesión</h5>
				            		</div>
				            	</div>
                      <div class="row">    
                        <div class="input-field col s12">
                          <i class="material-icons prefix">email</i>
                          <input id="icon_prefix" type="text" name="Correo"/>
                          <label for="email" data-error="wrong" data-success="right">Correo electrónico</label>
                        </div>
                      </div>	
    								<div class="row">	
    						      <div class="input-field col s12">
    								    <i class="material-icons prefix">vpn_key</i>
    								    <input id="password" type="password" name="Contrasena">
    								    <label for="password">Contraseña</label>
    						    	</div>
    						    </div>
							        <br><br>
								<div class="center col s12">
						            <input type="submit" class="btn center-align teal blue-grey darken-4" value="Iniciar">
						    </div><br><br>
                <div class="center col s12">
                        <input type="submit" class="btn center-align teal blue-grey darken-4" value="¿Has olvidado la contraseña?">
                </div>      
					    	</form>
					    </div>
					</div>
				</div>
        <div class="center col s2 m2">
        </div>
			</div>
		</div>
	</div>

 <!--  
<?php

    /*
		try {
        $hostname = "localhost";
        $dbname = "ConfiguradorOnline";
        $username = "root";
        $password = "12345v";
        $conexion = new PDO ("mysql:host=$hostname;dbname=$dbname","$username","$password");
      	} 
      catch (PDOException $e) {
        echo "Failed to get DB handle: " . $e->getMessage() . "\n";
        header('Location: http://www.example.com/');
        exit;
      }
    */ 

  /*
		if ($conexion && isset($_POST['Correo']) && isset($_POST['Contraseña'])){
			echo "conexion exitosa. <br />";
      $Correo=$_POST ['Correo'];
			$Contraseña= $_POST ['Contraseña'];
      
			$consulta="select * from usuarios where password='$Contraseña' and correo='$Correo'";
			echo "Hola<br/>";
      //select password,correo from usuarios where password='12345v' and correo='as@gmail.com';

			$query=$conexion->prepare($consulta);
	        if ($query->execute()==true){
	        	echo '<script language="javascript">alert("Bienvenido ya estas registrado");</script>';  
	        }
    */

	   /*Provoca un error -- sintaxis SQL falsa 
			$stmt = $conexion->prepare('bogus sql');
			if (!$stmt) {
			    echo "\nPDO::errorInfo():\n";
			    print_r($conexion->errorInfo());
			}
			
		}
    */
?>	
 --> 
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

  <footer class="page-footer teal blue-grey darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Configurador online</h5>
        </div>
        <div class="col l3 s12">
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
