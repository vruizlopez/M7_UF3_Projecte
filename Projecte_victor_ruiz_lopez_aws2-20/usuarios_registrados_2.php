<?php
  session_start();
  if (!isset($_SESSION['usuario'])){
    header("Location: proceso_iniciar_sesion.php");
  }
	include("conexion_db.php");
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
          <form action="index.php" method="POST">
            <li class="right hide-on-med-and-down">
              <input class="btn center-align green lighten-4" type ="submit" name="cerrar_sesion" value="Cerrar Sesion"></input>
            </li>
          </form>
          <li class="right hide-on-med-and-down"><a href="perfil.php">Perfil</a></li>
          <li class="right hide-on-med-and-down"><a href="contacto.html" align="right">
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
          <h4 class="center teal green lighten-4">COLOR</h4>
          <div class="col s2 m2">
              <div class="icon-block" align="center">
                <h5 class="center">Rojo Emoción</h5>
                <img src="imagenes/rojo.jpeg" width="140" height="90">
                <p class="center">200 €</p>
                <p>
                  <input name="group1" type="radio" id="test1" />
                  <label for="test1"></label>
                </p>                
              </div>
          </div>
          <div class="col s2 m2">
              <div class="icon-block" align="center">
                <h5 class="center">Azul Mediterráneo</h5>
                <img src="imagenes/azulMedi.jpeg" width="140" height="90">
                <p class="center">SIN COSTE</p>
                <p>
                  <input name="group1" type="radio" id="test2" />
                  <label for="test2"></label>
                </p>                
              </div>
          </div>
          <div class="col s2 m2">
              <div class="icon-block" align="center">
                <h5 class="center">Gris Pireneos</h5>
                <img src="imagenes/grisPiri.jpeg" width="140" height="90">
                <p class="center">500 €</p>
                <p>
                  <input name="group1" type="radio" id="test3" />
                  <label for="test3"></label>
                </p>                
              </div>
          </div>
          <div class="col s2 m2">
              <div class="icon-block" align="center">
                <h5 class="center">Plata Estrella</h5>
                <img src="imagenes/plataEstrella.jpeg" width="140" height="90">
                <p class="center">550 €</p>
                <p>
                  <input name="group1" type="radio" id="test4" />
                  <label for="test4"></label>
                </p>                
              </div>
          </div>
          <div class="col s2 m2">
              <div class="icon-block" align="center">
                <h5 class="center">Blanco Nevada</h5>
                <img src="imagenes/blancoNevada.jpeg" width="140" height="90">
                <p class="center">550 €</p>
                <p>
                  <input name="group1" type="radio" id="test5" />
                  <label for="test5"></label>
                </p>                
              </div>
          </div>
          <div class="col s2 m2">
              <div class="icon-block" align="center">
                <h5 class="center">Gris Técnico</h5><br>
                <img src="imagenes/grisTecnico.jpeg" width="140" height="90">
                <p class="center">550 €</p>
                <p>
                  <input name="group1" type="radio" id="test6" />
                  <label for="test6"></label>
                </p>                
              </div>
          </div>
        </div>
        <div class="col s12 m12" align="center">
            <div class="col s2 m2">
              <div class="icon-block" align="center">
                <h5 class="center">Negro Midnight</h5>
                <img src="imagenes/negroMignight.jpeg" width="140" height="90">
                <p class="center">550 €</p>
                <p>
                  <input name="group1" type="radio" id="test7" />
                  <label for="test7"></label>
                </p>                
              </div>
            </div>
            <div class="col s2 m2">
              <div class="icon-block" align="center">
                <h5 class="center">Morado Boheme</h5>
                <img src="imagenes/Morado.jpeg" width="140" height="90">
                <p class="center">550 €</p>
                <p>
                  <input name="group1" type="radio" id="test8" />
                  <label for="test8"></label>
                </p>                
              </div>
            </div>
            <div class="col s2 m2">
              <div class="icon-block" align="center">
                <h5 class="center">Azul Mistery</h5><br>
                <img src="imagenes/azulMistery.jpeg" width="140" height="90">
                <p class="center">550 €</p>
                <p>
                  <input name="group1" type="radio" id="test9" />
                  <label for="test9"></label>
                </p>
              </div>
            </div>
            <div class="col s2 m2">
              <div class="icon-block" align="center">
                <h5 class="center">Rojo Desire</h5><br>
                <img src="imagenes/rojoDesire.jpeg" width="140" height="90">
                <p class="center">750 €</p>
                <p>
                  <input name="group1" type="radio" id="test10" />
                  <label for="test10"></label>
                </p>                
              </div>
            </div>
            <div class="center col s12">
              <input type="submit" name="Siguiente" class="btn center-align green lighten-4" value="Siguiente>">
            </div>  
            <div class="center col s12">
              <?php
                if(isset($_POST["Siguiente"])){
                  $sql = "select * from vehiculos where vehiculoid = ".$_POST["group1"];
                  $resultado = $conexion->prepare($sql);
                  $resultado->execute();
                  $vehiculo = $resultado->fetch();
                  $_SESSION["modelo"]=$vehiculo["modelo"];
                  $_SESSION["version"]=$vehiculo["version"];
                  $_SESSION["motor"]=$vehiculo["motor"];
                  $_SESSION["precio"]=$vehiculo["precio"];
                }          
              ?>
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
                  echo '<tr>
                    <td>'.$_SESSION["modelo"].'</td>
                    <td>'.$_SESSION["version"].'</td>
                    <td>'.$_SESSION["motor"].'</td>
                    <td>'.$_SESSION["precio"].'€</td>
                  </tr>';
                ?>
              </table>
            </div>  
            
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