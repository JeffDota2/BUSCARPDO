<?php
require_once "Modelo/Conexion.php";
require_once "Modelo/DataBase.php";
require_once "Controlador/cargar.php";


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ver Productos</title>
</head>
<body>
    <h1>LISTA DE PRODUCTOS</h1>
    <h2>JEFFERSON CUELLO</h2>
    <div>
        <form method="get" >
            <input type="text" name="buscar">
            <input type="submit" value="buscar">
        </form>
    </div><br>
    <?php 

    if(isset($_GET['buscar'])){
        buscar($_GET['buscar']);
    }else{
    
        cargar(); 

    }
    ?>
    <div><br><a href = "insertar.html">Regresar</a></div> 

</body>
</html>
