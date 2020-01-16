<?php # inicializar todo esto es php, lo que esta adentro
      /* 
       TEORIA
        ¿Qué es PHP?
        PHP: Hypertext Preprocessor
      */

    //ARRAYS
    $colores = array("Rojo", "Verde", "Azul", "Amarillo");
    foreach ($colores as $valores) {
        echo "$valores <br>";
        
    }
    echo count($colores); //longitud de un arreglo
    echo "<hr>";
    // otro recorrido de arreglo

    $autos = array("Ferrari", "Lamborghini", "Audi");

    $longitudArreglo = count($autos);
    for ($i= 0; $i < $longitudArreglo; $i++ ){
        echo $autos[$i]. "<br>";
    }
    echo "<hr>";
    
    //ARREGLOS ASOCIATIVOS

    $persona = array("Luna" =>"18", "Fernando"=>"20", "Fabian L." =>"31");
    /*Otra forma de hacerlo pero no es optimo
    $persona ['Luna'] = "18";
    $persona ['Fernando'] = "20";
    $persona ['Fabian L.'] = "31";
     */
    //Accedemos al arreglo asociativo e imprimimos el valor através de la Clave
    echo "Luna tiene " . $persona ['Luna'] . " años. ";
    echo "<hr>";

    //RECORRERS UN ARREGLOS ASOCIATIVO
    foreach ($persona as $nombre => $nombre_edad){
        echo "Clave: ". $nombre . " , Valor: ". $nombre_edad . "<br>";
    }
    echo "<hr>";

    // ARREGLO MULTIDIMENSIONAL
    $productos = [
        [ 
            'nombre' => 'Empanada',
            'precio' => 1000,
            'cantidad' => 12
        ],
        [
            'nombre' => 'Pedazo de pizza',
            'precio' => 5000,
            'cantidad' => 5
        ]
    ];
    $total = 0;
    foreach($productos as $producto){
        $total += $producto['precio']* $producto['cantidad']; // + concatena valores
        echo $producto['nombre'] .": $" . $producto['precio'] . " x " . $producto ['cantidad'] . "<br>";
    }
    echo "Total: " . $total;
    echo "<hr>";
   
    //OTRA FORMA
    $productos = array
    (
        array("Lechona", 50000, 2),
        array("Galletas", 600, 10),
        array("Gaseosas", 1500, 7)
    );

    echo $productos[0][0] .  " precio: ". $productos[0][1] . " cantidad: " .$productos[0][2];

    /*
    Crear un areglo que contenga asociacion por clave y valor de peliculas
    de la siguiente forma
    nombre pelicula
    director
    Año
    personaje principal.

    Se debe imprimir en el HTML el nombre pelicula como Título, director negrilla
    año subrayado, personaje principal cursiva
    */
    $peliculas = [
        [ 'Nombre'=>'Joker', 
          'Director' => 'Todd Phillips',
          'Año' => 2019,
          'Actor Principal'=>'Joaquin Phoenix'
        ],
        [ 'Nombre'=>'Memento', 
        'Director' => 'Christopher Nolan',
        'Año' => 2000,
        'Actor Principal'=>'Guy Pearce' 
        ],
        [ 'Nombre'=>'El experimento', 
        'Director' => 'Paul Scheuring',
        'Año' => 2010,
        'Actor Principal'=>'Adrien Brody' 
        ],
        [ 'Nombre'=>'La naranja mecánica', 
        'Director' => 'Stanley Kubrick',
        'Año' => 1917,
        'Actor Principal'=>'Malcolm McDowell' 
        ],
        ['Nombre'=>'El experimento de Stanford', 
        'Director' => 'Kyle Patrick Alvarez',
        'Año' => 2015,
        'Actor Principal'=>'Ki Hong Lee'
        ]
    ];
    foreach($peliculas as $pelicula => $pelicula_valor){
        echo '<h1>'. $pelicula_valor['Nombre']. '</h1>'. '<br>'
        . '<b>'. $pelicula_valor['Director']. '</b>'. '<br>'
        . '<u>'. $pelicula_valor['Año'] . '</u>'. '<br>'
        . '<i>'. $pelicula_valor['Actor Principal'] . '</i>'. "<br>";
    }
    
?>