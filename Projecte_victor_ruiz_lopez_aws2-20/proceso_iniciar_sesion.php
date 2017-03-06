<?php
if(isset($_POST['Correo']) && isset ($_POST['Contrasena'])){
	include("conexion_db.php");
	//Setencia sql con marcadores(password,correo)
	$sql = "SELECT * FROM usuarios WHERE password= :Contrasena AND correo= :Correo";
	//Consulta preparada con marcadores
	$resultado=$conexion->prepare($sql);
	//Rescatar el correo y el password que el usuario ha introducido en el formulario
	//Funcion htmlentities (Convertir cualquier simbolo en html(,_))
	//Funcion addslashes (Escapar cualquier caracter de este tipo para que no se tenga en cuenta('/;:))(Evitar inyeccion sql)
	$Correo=htmlentities(addslashes($_POST['Correo']));
	$Contrasena=htmlentities(addslashes($_POST['Contrasena']));
	//Funcion bindValue (Marcadores)
	$resultado->bindValue(":Correo", $Correo);
	$resultado->bindValue(":Contrasena", $Contrasena);
	$resultado->execute();
	//Funcion rowCount, numero de registros que devuelve la consulta
	//En el caso que exista el usuario devolvera una fila
	$numero_registro=$resultado->rowCount();
	//Si el usuario existe
	if ($numero_registro!=0){
		session_start();
		$_SESSION['usuario']=$_POST['Correo'];
		//Redirigir a la pagina de usuarios_registrados
		header("location: usuarios_registrados_1.php");
	}
	//Bucle infinito, redirigir a la propia pagina de login
	else{
		header("location: iniciar.php");
	}
}
?>