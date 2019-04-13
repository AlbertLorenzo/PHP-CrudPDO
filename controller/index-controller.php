<?php

    if (!isset($_POST)) {
    
        // Vista principal
        require(__DIR__ . '/../views/index.php');

    } else {
        
        // Modelo index
        // require(__DIR__ . "/../model/index-model.php");

        // Instancia clase Crud
        $connection = new Crud;

        // Ejemplo consulta CRUD
        $regularPDOQuery = $connection->readSQL('pruesabas', '1 = 1');
        print_r($regularPDOQuery);
  
        echo '<br>';

        // Ejemplo consuta PREPARE
        $antiSQLInjectionQuery = $connection->avoidSQLInjection("albert");
        print_r($antiSQLInjectionQuery);

        // Después del modelo

        }

?>