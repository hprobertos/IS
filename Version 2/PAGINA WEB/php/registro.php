<?php
	$servername="127.0.0.1";
	$username="labbd";
	$password="Hola123456";
	$dbname="HBCONCEPT"; 

	//Se crea una conexion
	$conn=new mysqli($servername,$username,$password,$dbname);

	//Se revisa la conexion
	if($conn->connect_error){
		die("La conexion fallo: ".$conn->connect_error);
	}else{        
        $sql="INSERT INTO cuentausuario(Nombre_1,Nombre_2,Apellido_paterno,Apellido_materno,Correo,Password_usuario,Fraccionamiento,Colonia,N_casa)
				VALUES( '".$_POST['primerNombre']."',
						'".$_POST['segundoNombre']."',
						'".$_POST['apellidoPaterno']."',
						'".$_POST['apellidoMaterno']."',
						'".$_POST['correoElectronico']."',
						'".$_POST['pwd']."',
						'".$_POST['fracDireccion']."',
						'".$_POST['coloniaDireccion']."',
						'".$_POST['numCasa']."')";

		if($conn->query($sql)===TRUE){
			echo "Se ha registrado al nuevo cliente, de manera exitosa";
		}else{
			echo "Error: ".$sql."<br>".$conn->error;
		}
	}
	//cerrar la conexion
	$conn->close();
	header("Location: paginaLogin.php");
?>