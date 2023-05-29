<?php
require_once 'C:\xampp\htdocs\PROYECTO_DATOS_NO_ESTRUCTURADOS\vendor\autoload.php';

class MongoDBConnection {
    private $client;
    private $database;

    public function __construct($host, $port, $database) {
        $this->client = new MongoDB\Driver\Manager("mongodb://$host:$port");
        $this->database = $database;
    }

    public function connect() {
        return $this->client;
    }

    public function selectDatabase() {
        return $this->database;
    }

   
}

?>
