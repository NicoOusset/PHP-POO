<?php
    require_once 'clases.php';

    $persona = new Persona();

    $persona->setNombre("Nico");
    var_dump($persona);

    $programador = new Informatico();

    $programador->setApellido("algoooo");
    
    var_dump($programador);

    $tecnico = new TecnicoRedes();

    var_dump($tecnico);



?>