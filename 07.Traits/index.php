<?php

    trait Utilidades{
        public function mostrarNombre(){
            echo "<h1>El nombre es ". $this->nombre."</h1>";
        }

    }

    class Coche{
        public $nombre = "Classic";
        public $marca;

        use Utilidades;
    }

    class Persona{
        public $nombre;
        public $apellidos;

        use Utilidades;
    }

    class VideoJuego{
        public $nombre;
        public $anio;

        use Utilidades;
    }

    $coche = new Coche();
    $persona = new Persona();
    $video= new VideoJuego();


    $coche->mostrarNombre();




?>