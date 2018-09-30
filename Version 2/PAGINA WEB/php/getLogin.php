<?php
session_start();
$servername = "127.0.0.1";
$username = "labbd";
$password = "Hola123456";
$dbname="HBCONCEPT"; 

    $conn=mysql_connect($servername,$username,$password) or die ("No  se establecio la conexion");

	mysql_select_db("HBCONCEPT");
	
	if (isset($_POST['Entrar'])) 
	{
		$usuario = $_POST['correoUsuario'];
		$contra = $_POST['pwdUsuario'];

		$buscarEnBd = mysql_query("SELECT * FROM cuentausuario where Correo='$usuario' AND Password_usuario ='$contra'");

		if (mysql_num_rows($buscarEnBd)>0)
		{
				header("Location:../HTML/ditto.html");
		}
		else
		{
			header("Location:../php/paginaLogin.php");
			echo '<script>alert("El usuario o contrasena incorrecto")</script>';
		}
	
	}
?>