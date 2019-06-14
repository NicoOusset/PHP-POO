<?php
  
 // require_once 'usuario.php';
    require_once 'autoload.php';
  

    //$usuario = new usuario();
   // echo $usuario->nombre;
    echo "<br>";


    // Espacios de Nombres y paquetes
    use MisClases\usuario;
    use MisClases\categoria;
    use MisClases\entrada;

    class Principal{
        public $usuario;
        public $categoria;
        public $entrada;

        public function __construct(){
            $this->usuario = new usuario();
        }


    }

    $clase = class_exists('usuario');

    if($clase){
        $principal = new Principal();
        var_dump($principal->usuario);
    }else{
        echo "la clase no existe";
    }

   




?>