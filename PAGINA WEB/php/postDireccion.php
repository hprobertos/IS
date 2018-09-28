<?php
	$servername="127.0.0.1";
	$username="root";
	$password="---";
	$dbname="HBCONCEPT"; 

	//Se crea una conexion
	$conn=new mysqli($servername,$username,$password,$dbname);

	//Se revisa la conexion
	if($conn->connect_error){
		die("La conexion fallo: ".$conn->connect_error);
	}else{        
        $sql="INSERT INTO informacionUsuario(Nombre_1,Nombre_2,Apellido_paterno,Apellido_materno,Correo,Password,Fraccionamiento,Colonia,N_casa)
				VALUES('".$_POST['primerNombre']
							."','".$_POST['segundoNombre']
							."','".$_POST['apellidoPaterno']
							."','".$_POST['apellidoMaterno']
							."','".$_POST['correoElectronico']
							."','".$_POST['pwd']
							."','".$_POST['fracDireccion']
							."','".$_POST['coloniaDireccion']
							."','".$_POST['numCasa']
							."')";

		if($conn->query($sql1)===TRUE){
			echo "Se ha registrado al nuevo cliente, de manera exitosa";
		}else{
			echo "Error: ".$sql1."<br>".$conn->error;
		}
	}
	//cerrar la conexion
	$conn->close();
	header("Location: ../html/registroDireccion.html");
?>