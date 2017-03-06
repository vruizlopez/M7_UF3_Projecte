<?php
		try {
        $hostname = "localhost";
        $dbname = "ConfiguradorOnline";
        $username = "root";
        $password = "12345v";
        $conexion = new PDO ("mysql:host=$hostname;dbname=$dbname","$username","$password");
        //Propiedades de la conexion
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      	}
      //En caso de que no pueda conectar en la base de datos   
      catch (PDOException $e) {
        //Matar cualquier proceso
        die ("Error: ". $e->getMessage);
        //echo "Failed to get DB handle: " . $e->getMessage() . "\n";
        //header('Location: http://www.example.com/');
      }
?>