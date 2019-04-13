<?php
// require 'dbconClass.php';
class Crud extends Connection {
    
     #Insertar
     public function insertSQL($table, $param) {
        try {
            $result = Connection::getConnection()->query("INSERT INTO {$table} VALUES (NULL, {$param})")->fetchAll(PDO::FETCH_ASSOC);
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    #Borrar
    public function removeSQL($table, $param) {
        try {
            $result = Connection::getConnection()->query("DELETE FROM {$table} WHERE {$param}")->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    #Actualizar
    public function updateSQL($table, $fields, $param) {
        try {
            $result = Connection::getConnection()->query("UPDATE {$table} SET {$fields} WHERE {$param}")->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function readSQL($table, $param) {
        try {
            $result = Connection::getConnection()->query("SELECT * FROM {$table} WHERE ${param}")->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
	
    #Ejemplo para evitar SQL Injections con prepare
    public function avoidSQLInjection($param) {
        $stm = $this->getConnection()->prepare("SELECT * FROM pruebas WHERE nombre=:param");
        try {
            $stm->execute(array(':param' => $param));
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

}
?>