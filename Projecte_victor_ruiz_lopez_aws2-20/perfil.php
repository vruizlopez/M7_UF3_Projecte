<?php
  session_start();
  if (!isset($_SESSION['usuario'])){
    header("Location: proceso_iniciar_sesion.php");
  }
	include("conexion_db.php");
  $usuario=$_SESSION['usuario'];
  $sql = "SELECT * FROM usuarios where correo='".$_SESSION["usuario"]."'";
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
    <h2 class="center">CONFIGURADOR ONLINE <img src="logo-coche.jpg" width="80" height="80"></h2>
  </div>
    <nav class="teal blue-grey darken-4" role="navigation" >
      <div class="nav-wrapper container">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="iniciar.php">Iniciar Sesión</a></li>
          <li><a href="registro.php">Registrarse</a></li>
          <li><a href="#">Contacto</a></li>
          <li class="right hide-on-med-and-down"><a href="" align="right">
          <li class="right hide-on-med-and-down"><a href="cerrar_sesion.php">Cerrar Sesion</a></li>
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
            <h4 class="center teal green lighten-4">VEHICULO</h4>
            <h5>Seleciona el modelo</h5>
        <table  class="striped">
        	<thead>
	        	<tr>
	        		<th>Nombre</th>
	        		<th>Apellido1</th>
	        		<th>Apellido2</th>
              <th>Fecha de nacimiento</th>
              <th>Correo</th>
              <th>Telefono</th>
	        	</tr>
	        </thead>	
        	<?php
        		while ($datos = $resultado->fetch()){
        		echo '<tr>
              <td>'.$datos['nombre'].'</td>
        			<td>'.$datos['apellido1'].'</td>
        			<td>'.$datos['apellido2'].'</td>
        			<td>'.$datos['fechaNacimiento'].'</td>
              <td>'.$datos['correo'].'</td>
              <td>'.$datos['telefono'].'</td>
        		</tr>';	
        		}
            ?>
        </table>
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
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>