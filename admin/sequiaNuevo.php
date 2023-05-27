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
$collection = 'reporte';

$connection = new MongoDBConnection($host, $port, $database);
$client = $connection->connect();

if ($client) {
  

} else {
    echo "Error al conectar a MongoDB";
}
?>