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
        <form method="post" action="../controlador/acciones/nuevo_producto.php">
            <div class="title-form">
                <h2>Iniciar sesión </h2>   <br><br>
            </div>
            <div class="info">
                <label for="">nombre</label>
                <input type="text" placeholder="nombre producto" name="nombre" ><br>
                <label for="">clase_producto</label>
                <input type="text"  maxlength="10" placeholder="comestible o papeleria" name="clase_producto">
                <label for="">id_categoria</label>
                <input type="text"  maxlength="10" placeholder="1:comestible o 2:papeleria" name="id_categoria">
            </div>
            <br>
            <div class="opciones">
            <input class="botonn" type="submit" value="registrar" name="inicio">
                <a href="">¿Se te olvidó tu contraseña?</a><br>
                <a href="Registrarse.html">Registrarse</a>
            <div>
        </form>
    </div>
</div>

</body>
</html>
