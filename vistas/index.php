<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <title>Cafeta Unimag</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="./img/Logo.jpg" type="image/x-icon">
</head>
<body>
    <header class="caja-encabezado">
        <div class="caja-encabezado-nav">
            <a href="index.php">
                <div>
                    <img src="./img/Logo.jpg" alt="">
                    <h1>Cafeta Unimag</h1>
                </div>
            </a>
        <nav class="navegacion">
			<ul class="menu">
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Nosotros</a></li>
				<li><a href="#">Servicios</a>
					<ul class="submenu">
						<li><a href="comidas.php">comestibles</a></li>
						<li><a href="#">papeleria</a></li>
					</ul>
				</li>
				<li><a href="#">Contacto</a></li>
			</ul>
		</nav>
        <div class="botones">
            <a class="inicio" href="SigIn.php">Ingresar</a>
            <a class="registro" href="Registrarse.php">Registrarse</a>
            <h3><?php echo $_SESSION['username'];  ?></h3>
            <a id="cerrarSesion" class="dropdown-item" href="../controlador/acciones/logout_usuario.php">Cerrar sesion</a>
        </div>
        
    </header>
    <div class="caja-cuerpo">
        <div class="informacion">
            
            
        </div>
    </div>
</body>
</html>