<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>HB CONCEPT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!-- CSS -->
        <link href="../css/styleLogin.css" rel='stylesheet' type='text/css'/>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    </head>
    
<body>
    <div class="layer">
        <h1 style="font-family:'Poppins',sans-serif">PARA REALIZAR TU COMPRA PRIMERO DEBES...</h1>
        
        <!-- INICIO DE SESION -->
        <div class="main-agile1">
            <div class="w3layouts-main">
            <span class="icons i1"><i class="fas fa-user-circle"></i></span>
            <h2 style="margin-bottom: 10px;font-family:'Poppins',sans-serif">INICIAR SESIÓN</h2>			
            <p style="color:white;font-family:'Poppins',sans-serif">Accede a tu cuenta</p>
                <form action="getLogin.php" method="POST">
                    <div class="email">
                        <input placeholder="Correo Electronico" maxlength="25" name="correoUsuario" type="email" required>
                        <span class="icons i1"><i class="far fa-envelope"></i></span>
                    </div>
                    <div class="email">
                        <input placeholder="Contraseña" maxlength="8" name="pwdUsuario" type="password" required>
                        <span class="icons i2"><i class="fas fa-key"></i></span>
                    </div>
                    <p style="color:gray;font-family:'Poppins',sans-serif"> ¿Olvidaste tu <a style="color:lightgray" href="#">contraseña</a>?</p>
                    <input type="submit" name="Entrar" value="Entrar">
                </form>
            </div>
            
            <!-- REGISTRO -->
            <div class="main-agile">
                <div class="content-wthree">
                    <h2 style="font-family:'Poppins',sans-serif">REGISTRARTE</h2>
                    <p style="font-family:'Poppins',sans-serif">¿Quieres crear una cuenta?</p>
					<form action="paginaRegistro.php">
						<input type="submit" href="../php/Direccion.php" value="¡Si!">
					</form>
                </div>
            </div>
            <p style="color:lightgray;font-family:'Poppins',sans-serif">Volver a la pagina de <a style="color:white" href="../index.php">inicio</a></p>
            <div class="clear"></div>
        </div>
        
        <div class="footer-w3l">
            <p class="agileinfo" style="font-family:'Poppins',sans-serif"> &copy; 2018 Todos los derechos reservados | Proyecto hecho por <a href="#">FCQI</a></p>
        </div>
    </div>
</body>
</html>