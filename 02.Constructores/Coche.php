<?php
     class Coche{

        //atributos o propiedades (variables)

        //public: se puede acceder desde cualquier clase
        public $color;

        //protected: desde esta clase o desde sus herederas
        protected $marca;

        //private: solo desde esta clase
        private $modelo;
        public $velocidad;
        public $caballaje;
        public $plazas;

        //metodo constructor

        public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas){
            $this->color = $color;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->velocidad = $velocidad;
            $this->caballaje = $caballaje;
            $this->plazas = $plazas;
        }


        
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

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function mostrarInformacion(Coche $miObjeto){
            
            if(is_object($miObjeto)){
            
                $informacion = "<h1>Información del coche</h1>";
                $informacion .= "<p>";
                $informacion .= "Marca: ".$miObjeto->marca. "<br>";
                $informacion .= "Modelo: ".$miObjeto->modelo. "<br>";
                $informacion .= "Color: ".$miObjeto->color. "<br>";
                $informacion .= "Marca: ".$miObjeto->velocidad. "<br>";
                $informacion .= "</p>";
            }else{
                $informacion = "Tu dato es este: $miObjeto";
            }
            return $informacion;
        }


    }// fin definicion de la clase


?>