<?php
    //FUNCIONES
    function edadPersona($edadMinima = 18){
        if ($edadMinima >= 18){
            echo "La edad es: $edadMinima <br>" ;
        }else {
            echo "Eres menor de edad, lo siento :c :c <br>";
        }
    }
    edadPersona(35);
    edadPersona();
    edadPersona(70);
    edadPersona(10);
    echo "<hr>";

    // FUNCIÓN CON RETURN
    // en este caso definimos el tipo de dato del parámetro
    //siendo int/ integer = entero
    function sumar(int $x, int $y){
        $z = $x + $y;
        return $z;
    }
        echo "5 + 10 = " . sumar(5,10) . "<br>";  
        echo "7 + 13 = " . sumar(7,13);
/*------------------------ Ejercicio ---------------------- */
    /*
     Crear una función que imprima los numero del 1 al 10 y
     del 101 al 200
    */
    function numeros( $numero = 1){
        if ($numero = 1){
            for($i = 0; $i <=100; $i++){
                echo $i . "<br>";
                if ($i == 100){
                    for ($e = 101; $e <=200; $e++){
                        echo $e ."<br>";
                    }
                }
             }
        } else{
           echo "mal numero";
        }
    }
    echo numeros();
    echo "<hr>";

   // Tablas
   function tabla($num = 1){
       if ($num = 1){
           for($a = 1 ; $a <= 10; $a++){
               echo "<br>";
            for ($num2 = 1 ; $num2 <=10; $num2++) 
               echo $a . " x ". $num2 ." = ". $a* $num2 . "<br>";
           }
       } else {
         echo "mal numero";
       }
   }
   echo tabla();
   echo "<hr>";
   // MULTIPLOS DE 8 
   function multiplos($nume = 8){
       $totalmul = 0;
       $resul = 0;
      while ($totalmul <=500){
          $resul ++;
          $totalmul = $nume * $resul;
          echo $totalmul . "<br>";
      }
   }
   echo multiplos();

?>