<?php
class Connection {
    
    #Atributos
    protected static $pdo;
    private $_dbhost = 'localhost';
    private $_dbname = 'pruebas';
    private $_dbusername = 'root';
    private $_dbpassword = '';
    
    #Connect
    public function __construct() {        
        try {
            self::$pdo = new PDO('mysql:host='.$this->_dbhost.';dbname='.$this->_dbname, $this->_dbusername, $this->_dbpassword);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Conexión fallida: {$e->getMessage()}';
        }
    }
	
    #Devuelve la conexión mysql
    protected function getConnection() {
    	if (!self::$pdo) {
            new Connection();
        } else {
            return self::$pdo;
        }
    }

}

?>