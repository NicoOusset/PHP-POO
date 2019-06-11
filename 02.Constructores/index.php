<?php
    require_once 'Coche.php';

    $coche = new Coche("Lila", "Fiat", "Uno", 120, 300, 5);
    $coche1 = new Coche("Verde", "Seat", "Panda", 231, 300, 5);
    $coche2= new Coche("Rojo", "Chevrolet", "Classic", 111, 300, 2);
    $coche3 = new Coche("Azul", "Mercedes", "Clase A", 95, 300, 3);
    
    // var_dump($coche);
    // var_dump($coche1);
    // var_dump($coche2);
    // var_dump($coche3);

    echo $coche->mostrarInformacion($coche1);
    echo $coche->mostrarInformacion("hola mundo");
?>