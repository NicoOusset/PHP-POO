<?php


    try {

        if (isset($_GET['id'])) {
            echo "<h1>El parametro es ".$_GET['id']."</h1>";
        }else{
            throw new Exception('Faltan parametros en la url');
        }
        

    } catch (Exception $e) {
        echo "Ha habido un error: ".$e->getMessage();
    
    } finally{
        echo "<br> Esto esta en el finally";
    }



    













?>