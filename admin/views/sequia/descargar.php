<?php

// Configuración de conexión a MongoDB
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$databaseName = "sequia";
$collectionName = "archivos";

// ID del documento que contiene el archivo a descargar
$documentoId = new MongoDB\BSON\ObjectID($_GET['_id']);


// Crea una consulta para obtener el documento con el archivo
$query = new MongoDB\Driver\Query(['_id' => $documentoId]);

// Ejecuta la consulta y obtiene el cursor de resultados
$cursor = $manager->executeQuery("$databaseName.$collectionName", $query);

// Obtiene el primer documento del cursor
$documento = current($cursor->toArray());

// Verifica si se encontró el documento
if ($documento) {
    // Obtiene el contenido binario del archivo
    $contenido = $documento->contenido;

    // Nombre original del archivo
    $nombreArchivo = $documento->nombre;

    // Encabezados para la descarga
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $nombreArchivo . '"');

    // Imprime el contenido binario en la salida
    echo $contenido->getData();
} else {
    echo "No se encontró el archivo en la base de datos.";
}
?>