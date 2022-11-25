
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafeta Unimag</title>
    <link rel="stylesheet" href="css/SigInEstilos.css">
    <link rel="shorcut icon" type="image/x-icon" href="favicon-16x16.png">
    <script src="https://kit.fontawesome.com/fe3385c387.js" crossorigin="anonymous"></script>

</head>
<body>
    
    <a href="../index.php">
        <img class="logo" src="img/Logo.jpg">
    </a>
            <nav>
                <li class="menu"><i class="fa-solid fa-house icon"></i><a href="../index.php">Inicio</a></li>
                <li class="menu"> <i class="fa-solid fa-circle-info icon"></i> <a href="">Consultar</a></li>
                <li class="menu"><i class="fa-solid fa-circle-info icon"></i><a href="">Ayuda</a></li>
                <li class="menu"><i class="fa-solid fa-users icon"></i><a href="">Nosotros</a></li>
     </nav>



<div class="container-form">
    <div class="cajaInicio">
        <form method="post" action="../controlador/acciones/login_usuario.php">
            <div class="title-form">
                <h2>Iniciar sesión </h2>   <br><br>
            </div>
            <div class="info">
                <label for="">username</label>
                <input type="text" name="username" ><br>
                <label for="">Clave</label>
                <input type="password"  maxlength="10" name="password">
            </div>
            <br>
            <div class="opciones">
            <input class="botonn" type="submit" value="iniciar sesión" name="inicio">
                <a href="">¿Se te olvidó tu contraseña?</a><br>
                <a href="Registrarse.html">Registrarse</a>
            <div>
        </form>
    </div>
</div>

</body>
</html>
