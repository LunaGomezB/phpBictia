<?php
    #Solicitamos la conexión a la BD a través del método require();
    require('conexion.php');

    #Vamos a crear una variable que traiga los datos que el usuario envía 
    #desde el formulario
    #$_GET Es una super variable y obtiene los datos de un name
    $videojuego = $_GET['videojuego'];

    #Crearemos una variable que se va encargar de contener la sentencia sql
    #para guardar los datos en la tabla videojuegos de la BD bictia
    $sql = "INSERT INTO videojuegos (nombre) VALUES('$videojuego')";

    #El método mysqli_query se encarga de enviar los datos
    #necesita la conexión y la sentencia sql
    mysqli_query($conexion, $sql);

    #Direccionamiento de rutas
    #Va a hacer que se muestre el la página
    header('Location: mostrar.php');
?>