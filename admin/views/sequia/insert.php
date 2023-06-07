<?php
require_once "../../php/basedatos.php";
include "submenu.php";
//MOSTRAR LOS DATOS DEL FORMULIO PARA INSERTAR EN LA BD
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //VARIABLES DONDE SE DEPOSITAN LOS DATYOS DEL FORMULARIO
    $lestado = $_POST['estado'];
    $lcultivos = intval ($_POST['cultivos']);
    $lincendios = intval ($_POST['incendios']);
    $lrestriccion = intval ($_POST['restriccion']);

    $promedio = ($lcultivos + $lincendios + $lrestriccion)/3;
    $promediod = floatval(number_format($promedio, 1));
    // CONECTAR CON LA DB Y HACER LA INSERCION
    //DATOS DE LA CONEXION
    $host = 'localhost';
    $port = 27017;
    $database = 'sequia';
    $collection = 'reporte';
    $db = (new MongoDB\Client)->$database;

    $bucket = $db->selectGridFSBucket();
    //CONEXION A LA BD LLAMANDO A LA CLASE DB
    $connection = new MongoDBConnection($host, $port, $database);
    $client = $connection->connect();
    $bucket = new MongoDB\GridFS\Bucket($client,$database);
    //PREPARACION DEL DOCUMENTO PARA LA INSERCION 
    $document = [
        'estado' => $lestado,
        'cultivos' => $lcultivos,
        'incendios' => $lincendios,
        'restriccion' => $lrestriccion,
        'promedio' => $promediod
    ];
    // Crear el objeto de inserción
    $insertOne = new MongoDB\Driver\BulkWrite();
    $insertOne->insert($document);
    // Especificar la base de datos y la colección
    $namespace = "$database.$collection";

    // Ejecutar la inserción
    $result = $client->executeBulkWrite($namespace, $insertOne);

    // Verificar el resultado
    if ($result->getInsertedCount() > 0) {
        //echo "Registro insertado exitosamente";
        //CERRAR LA CONEXION PARA EVITAR CONSUMO DE RECURSOS
        unset($client);
    } else {
    }
}
?>
