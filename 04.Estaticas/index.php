<?php
    require_once 'configuracion.php';

    Configuracion::setColor("blue");
    Configuracion::setEntorno("localhost");
    Configuracion::setNewsletter(true);

    echo Configuracion::$color."<br>";
    echo Configuracion::$entorno."<br>";
    echo Configuracion::$newsletter."<br>";

    echo Configuracion::numeroConstante."<br>";

?>