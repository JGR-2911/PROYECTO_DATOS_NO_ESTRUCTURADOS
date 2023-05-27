<?php

/*class MongoDBConnection {
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
            
            $mongoClient = new MongoDB\Client("mongodb://{$this->host}:{$this->port}");
            $db = $mongoClient->{$this->database};
            return $db;
        } catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e) {
            die("Error al conectar a la base de datos: " . $e->getMessage());
        }
    }
} */

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
