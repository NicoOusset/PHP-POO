<?php

    //definicion de clase

    class Coche{

        //atributos o propiedades (variables)
        public $color = "rojo";
        public $marca = "ferrari";
        public $modelo = "aventador";
        public $velocidad = 30;
        
        //metodos, acciones (antes eran funciones)
        public function getColor(){
            //this es en esta clase
            return $this->color;
        }

        public function setColor($color){
            $this->color = $color;
        }

        public function acelerar(){
            $this->velocidad++;
        }

        public function frenar(){
            $this->velocidad--;
        }

        public function getVelocidad(){
           return $this->velocidad;
        }


    }// fin definicion de la clase


    //crear un objeto o instanciar una clase

    $coche1 = new Coche();

    //usar los metodos
    echo $coche1->getVelocidad()."<br>" ;

    $coche1->setColor("amarillo");
    echo "el color del coche es: ".$coche1->getColor();

    echo "<br>";
    $coche1->acelerar();
    $coche1->acelerar();
    $coche1->acelerar();
    $coche1->frenar();

    echo $coche1->getVelocidad()."<br>" ;

    $coche2 = new Coche();

    $coche2->setColor("verde");
    echo "el color del coche 2 es: ".$coche2->getColor();


?>