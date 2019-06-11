<?php

    class Persona{
        private $nombre;
        private $apellido;
        private $altura;
        private $edad;


        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        
        public function getApellido(){
            return $this->apellido;
        }

        
        public function setApellido($apellido){
            $this->apellido = $apellido;    
        }

        public function getAltura(){
            return $this->altura;
        }

        public function setAtura($nombre){
            $this->nombre = $nombre;
        }

        public function getEdad(){
            return $this->nombre;
        }

        public function setEdad($nombre){
            $this->nombre = $nombre;
        }

        public function hablar()
        {
            return "Estoy hablando";
        }
        public function caminar()
        {
            return "Estoy caminando";
        }

    }


    class Informatico extends Persona{

        private $lenguajes;
        private $experienciaProgramador;

        public function __construct(){
            $this->lenguajes="HTML, CSS, PHP, JS";
            $this->experienciaProgramador=8;
        }


        public function sabeLenguajes($lenguajes){
            $this->lenguajes=$lenguajes;
        }

        public function programar(){
            return "Soy programador";
        }

        public function repararPC(){
            return "reparando pc";
        }


    }

    class TecnicoRedes extends informatico{

        public $auditarRedes;

        public function __construct(){
            //para heredar del constructor de la clase padre
            parent::__construct();

            $auditarRedes= "experto";
        
        }

        public function auditoria(){
            return "Estoy auditando redes";
        }

    }



?>