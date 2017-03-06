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

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <div class="row center">
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
            <div class="center col s2 m2">
            </div>
		      	<div class="center col s8 m8">
		        	<div class="icon-block"> 
			        	<div id="form-login">
			        		<form action="registro.php" method="POST" name="form">
			        			<div class="row">
				            		<div class="col s12 teal blue-grey darken-4">
				              			<h5 class="center login-title">Registro</h5>
				            		</div>
				            	</div>	
				 				<div class="row">
						            <div class="input-field col s12">
						            	<i class="material-icons prefix">account_circle</i>
						            	<label for="name">Nombre</label>
						            	<input type="text" name="Nombre" id="name" value="">
						        	</div>
						        </div>
								<div class="row">	
						       		<div class="input-field col s12">
								        <i class="material-icons prefix">vpn_key</i>
								        <input id="password" type="password" name="Contraseña">
								        <label for="password">Contraseña</label>
						    		</div>
						    	</div>
						    	<div class="row">	
						       		<div class="input-field col s12">
								        <i class="material-icons prefix">vpn_key</i>
								        <input id="password" type="password" name="ReContraseña">
								        <label for="password">Repite la Contraseña</label>
						    		</div>
						    	</div>
						    	<div class="row">	
							        <div class="input-field col s12">
								        <i class="material-icons prefix">account_circle</i>
								        <input id="icon_prefix" type="text" name="Apellido1"/>
								        <label for="icon_prefix">Primer apellido</label>
							        </div>
							    </div>
							    <div class="row">    
							         <div class="input-field col s12">
							        	<i class="material-icons prefix">account_circle</i>
							        	<input id="icon_prefix" type="text" name="Apellido2"/>
							        	<label for="icon_prefix">Segundo apellido</label>
							        </div>
							    </div>
							    <div class="row">    
							        <div class="input-field col s12">
							          <i class="material-icons prefix">today</i>
							          <input id="icon_prefix" type="text" name="Fecha_Nacimiento"/>
							          <label for="icon_prefix">Fecha de nacimiento</label>
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
							          <i class="material-icons prefix">contact_phone</i>
							          <input id="contact_phone" type="text" name="Telefono"/>
							          <label for="contact_phone">Telefono</label>
							        </div>
							    </div>    
							        <br><br>
								<div class="center col s12">
						            <input type="submit" class="btn center-align teal blue-grey darken-4" name ="Registrarse" value="Registrarse">
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
<?php
	include("conexion_db.php");
	if(isset($_POST["Registrarse"])){
			if (!empty($_POST['Nombre']) && !empty($_POST['Contraseña']) &&!empty($_POST['Contraseña'])  && !empty($_POST['Apellido1']) && !empty($_POST['Apellido2']) && !empty($_POST['Apellido2']) && !empty($_POST['Fecha_Nacimiento']) && !empty($_POST['Correo']) && !empty($_POST['Telefono'])){
				if (($_POST['Contraseña']) == ($_POST['ReContraseña'])){
					$Nombre= $_POST ['Nombre'];
					$Contraseña= $_POST ['Contraseña'];
					$Apellido1= $_POST ['Apellido1'];
					$Apellido2= $_POST ['Apellido2'];
					$Fecha_Nacimiento= $_POST ['Fecha_Nacimiento'];
					$Correo=$_POST ['Correo'];
					$Telefono= $_POST ['Telefono'];
					$consulta="insert into usuarios(nombre,password,apellido1,apellido2,fechaNacimiento,correo,telefono) values ('$Nombre','$Contraseña','$Apellido1','$Apellido2','$Fecha_Nacimiento','$Correo','$Telefono')";
					$query=$conexion->prepare($consulta);
			        if ($query->execute()==true){
			        	echo '<script language="javascript">alert("Bienvenido ya estas registrado");</script>';  
			        }
			    }else{
			    	echo '<script language="javascript">alert("Introduce todos los campos");</script>';  
		    	}
			}else{
				echo '<script language="javascript">alert("Contraseñas no iguales");</script>';  
			}
	}	
?>	



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
          <h5 class="white-text">Configurador Online</h5>
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