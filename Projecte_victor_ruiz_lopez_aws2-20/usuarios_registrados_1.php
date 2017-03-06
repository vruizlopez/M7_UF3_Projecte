<?php
  session_start();
  if (!isset($_SESSION['usuario'])){
    header("Location: proceso_iniciar_sesion.php");
  }
	include("conexion_db.php");
    $sql = "SELECT * FROM vehiculos";
	//Consulta preparada con marcadores
	$resultado=$conexion->prepare($sql);
	$resultado->execute();
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
          <li class="right hide-on-med-and-down"><a href="" align="right">
		  <form action="index.php" method="POST">
          	<li class="right hide-on-med-and-down">
          		<input class="btn center-align teal blue-grey darken-4" type ="submit" name="cerrar_sesion" value="Cerrar Sesion"></input>
          	</li>
          </form>

          <li class="right hide-on-med-and-down"><a href="perfil.php">Perfil</a></li>
          <li class="right hide-on-med-and-down"><a href="" align="right">
          <?php
            echo $_SESSION["usuario"] . "<br>";
          ?>
          </a></li>
      </ul>
      </div>
    </nav>
    <div class="container">
    	<div class="section">
        <div class="row">
        <div class="col s12 m12" align="center">
            <h4 class="center teal blue-grey darken-4">VEHICULO</h4>
            <h5>Seleciona el modelo</h5>
        <form name="formulario" action="usuarios_registrados_2.php" method="post">
        <table  class="striped">
        	<thead>
	        	<tr>
	        		<th>Modelo</th>
	        		<th>Version</th>
	        		<th>Motor</th>
	        		<th>Precio</th>

	        	</tr>
	        </thead>	
        	<?php
        		while ($vehiculos = $resultado->fetch()){
        		echo '<tr>
        			<td>'.$vehiculos['modelo'].'</td>
        			<td>'.$vehiculos['version'].'</td>
        			<td>'.$vehiculos['motor'].'</td>
        			<td>'.$vehiculos['precio'].'€</td>
        			<td> <input name="group1" type="radio" value="'.$vehiculos['vehiculoid'].'"  id="'.$vehiculos['vehiculoid'].'" />
			      <label for="'.$vehiculos['vehiculoid'].'"></label> </td>
        		</tr>';	
        		}
        	?>
        </table>
        <div class="center col s12">
			<input type="submit" name="Siguiente" class="btn center-align teal blue-grey darken-4" value="Siguiente">
		</div>
		</form>
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