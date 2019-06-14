<?php
    class Usuario{

        public $nombre;
        public $email;

        public function __construct(){
            $this->nombre="Nicolas";
            $this->email="nico@gmail.com";
    
        }

        public function __toString(){
            return "Hola, {$this->nombre}, estas registrado con {$this->email}";

        }

        public function __destruct(){
            echo "<br> Destruyendo el objeto";
        }



    }
    
    $usuario = new Usuario();

    /*for ($i=0; $i<20; $i++){
        echo "$i <br>";
    }*/

    echo $usuario;

?>


