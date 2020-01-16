<?php
    // BASES DE PROGRAMACIÓN ORIENTADA A OBJETOS
   /*  //Ejemplo
   
   class Persona{ // classes siempre con mayuscula

        //declarar las variables que utilizará la clase
        public $nombre;
        public $apellido;
        public $edad;

        //Inicializar el consultor
        // inicia las variables y atributos de la clase para que 
        //puedan ser utiluzadas en el momento de realizar una instancia

        public function __construct($nombre, $apellido, $edad){
            $this ->nombre = $nombre;
            $this ->apellido = $apellido;
            $this ->edad = $edad;
        }

        //Un metodo es una función propia de la clase
        public function saludar(){
            echo "Hola, soy $this->nombre $this->apellido  y tengo $this->edad años";
        }
     }
     // se realiza la instancia con el nombre de la clase en minuscula
     $persona = new Persona("Kamilo", "Munevar", "28");
     $persona ->saludar();*/
/*------------------------ Ejercicio -------------------------------- */
     class Desayuno{ 
        
        public $comida;
        public $instrumento;
        public $instrumento2;
        public $instrumento3;
        public $condimentos;
        public $bebida;

        public function __construct($comida, $bebida, $condimentos, $instrumento, $instrumento2, $instrumento3, $comida2, $comida3){
            $this->comida =$comida;
            $this->comida2 = $comida2;
            $this->comida3 = $comida3;
            $this->bebida = $bebida;
            $this->condimentos = $condimentos;
            $this->instrumento = $instrumento;
            $this->instrumento2 = $instrumento2; 
            $this->instrumento3 = $instrumento3;           
        }
        public function instrumento(){
            echo "Los ingredientes que necesitaras son: $this->comida, $this->bebida, $this->instrumento , $this->comida2, $this->comida3, $this->condimentos 
            $this->instrumento2, $this->instrumento3 .". "<br>"; 
        }
        public function receta(){
            echo "Hola veo que deseas hacer unos $this->comida con $this->bebida , te enseñare como.". "<br>";
        }
        public function hacer(){
            echo "Para hacer los $this->comida , primero tendras una $this->instrumento, la cual colocaras en la estufa, despues romperas los $this->comida en un $this->instrumento2 y le añadiras $this->condimentos y los revolveras con un $this->instrumento3, despues de estar bien 
            batidos los $this->comida, los vertiras en la $this->instrumento y los dejarás cocinar al gusto.". "<br>" ;
        }
        public function liquidos(){
            echo "Para hacer el $this->bebida , tendras que colocar una olleta en la estufa con $this->comida2, despues colocar las $this->comida3, esperas a que hierva y lo revuelves con
            un molinillo.". "<br>";
        }
        public function servir(){
            echo "Para servir el desayuno que ya esta listo, primero los $this->comida los colocaras en un plato, el $this->bebida lo colocaras en un posillo y ya esta listo para comer. ";
        }
     }
     $desayuno = new Desayuno("Huevos", "chocolate", "Sal y pimienta", "Sarten", "Tazón", "Tenedor", "Leche", "Pastillas de chocolate");
     $desayuno ->receta();
     $desayuno ->instrumento();
     $desayuno-> hacer();
     $desayuno->liquidos();
     $desayuno-> servir();
?>