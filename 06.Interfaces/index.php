<?php

    interface Ordenador{

        public function encender();
        public function apagar();
        public function reiniciar();
        public function desfragmentar();
        public function desactivarUSB();

    }
    
    class iMac implements Ordenador{
        public $modelo;

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($modelo){
            $this->modelo=$modelo;
        }

        public function encender(){

        }

        public function apagar(){

        }

        public function reiniciar(){

        }

        public function desfragmentar(){

        }

        public function desactivarUSB(){
            
        }

    }


    $maquintos = new iMac();
    $maquintos->setModelo("Macbook 2019");
    echo $maquintos->getModelo();


?>