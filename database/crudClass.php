<?php
// require 'dbconClass.php';
class Crud extends Connection {
    
     #Insertar
     public function insertSQL($table, $param) {
        $result = Connection::getConnection()->query("INSERT INTO {$table} VALUES (NULL, {$param})")->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    #Borrar
    public function removeSQL($table, $param) {
    $result = Connection::getConnection()->query("DELETE FROM {$table} WHERE {$param}")->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    #Actualizar
    public function updateSQL($table, $fields, $param) {
    $result = Connection::getConnection()->query("UPDATE {$table} SET {$fields} WHERE {$param}")->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
	
    #Leer, devuelve array asociativo
    public function readSQL($table, $param) {
    $result = $this->getConnection()->query("SELECT * FROM {$table} WHERE {$param}")->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}
?>