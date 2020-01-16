<?php
    require("conexion.php");
    $sql = "SELECT * FROM videojuegos ";
    $resultado = mysqli_query($conexion, $sql);
    $videojuegos = mysqli_fetch_all($resultado);
    $queryUpdate = "UPDATE $videojuegos SET nombre"
    $resultado = mysqli_query($conexion, $sql); 
?>