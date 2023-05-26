<?php
include("views/header.php");
include("views/menu.php");
//include("views/sequia/form.php");
include("views/footer.php");
//CLASE NUEVA
include("php/basedatos.php");

// Configuración de la conexión
$host = 'localhost';
$port = 27017;
$database = 'sequia';

// Crear una instancia de la clase MongoDBConnection
$connection = new MongoDBConnection($host, $port, $database);

// Conectar a la base de datos
$db = $connection->connect();


?>