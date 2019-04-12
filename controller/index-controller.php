<?php

    if (!isset($_POST)) {
    
        // Vista principal
        require(__DIR__ . '/../views/index.php');

    } else {
        
        // Modelo index
        // require(__DIR__ . "/../model/index-model.php");

        // Ejemplo
        echo 'hola!';
        $connection = new Crud;
        $result = $connection->readSQL('pruebas', '1=1');
        var_dump($result);
        
        // Después del modelo

        }

?>