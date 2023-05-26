<?php

class MongoDBConnection {
    private $host;
    private $port;
    private $database;

    public function __construct($host, $port, $database) {
        $this->host = $host;
        $this->port = $port;
        $this->database = $database;
    }

    public function connect() {
        try {
            date_default_timezone_set("Europe/Lisbon");
            $mongoClient = new MongoClient("mongodb://{$this->host}:{$this->port}");
            $db = $mongoClient->{$this->database};
            return $db;
        } catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e) {
            die("Error al conectar a la base de datos: " . $e->getMessage());
        }
    }
}
?>
