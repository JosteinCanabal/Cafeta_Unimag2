<?php
require_once("../modelo/dao/database2.php");
$database2 = new database2();
$data_table = $database2->ejecutarConsulta("SELECT * FROM producto", NULL);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/comidas.css">
</head>
<body>
    <nav>
        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">papeleria</a></li>
            <li><a href="registrar_comida.php">Registar Producto</a></li>
        </ul>
    </nav>
     
    <div class="container">
    <?php  foreach($data_table as $row) { ?>
        <div class="card">
            <?php 
            $id_product=$row['id_product'];
            $imagen="img/productos/". $id_product ."/principal.jpg";
            if(!file_exists($imagen)){
                $imagen="img/no-photo.jpg";
            }
            ?>
            <img src="<?php echo $imagen; ?>">
            <h4><?php echo $row['nombre']; ?></h4>
            <p><?php echo $row['clase_producto']; ?></p>
            
        </div>
    <?php } ?>
    </div>    

</body>
</html>