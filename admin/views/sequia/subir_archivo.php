<?PHP
require_once "../../php/basedatos.php";
$host = 'localhost';
    $port = 27017;
    $database = 'sequia';
    $collection = 'archivos';
    $db = (new MongoDB\Client)->$database;
    $connection = new MongoDBConnection($host, $port, $database);
    $client = $connection->connect();
if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
    // Configuración de conexión a MongoDB
    $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
    $database = $mongoClient->sequia;
    $collection = $database->archivos;
    
    // Ruta temporal del archivo subido
    $rutaTempArchivo = $_FILES['archivo']['tmp_name'];
    
    // Nombre original del archivo
    $nombreArchivo = $_FILES['archivo']['name'];
    
    // Lee el contenido del archivo
    $contenido = file_get_contents($rutaTempArchivo);
    
    // Crea un nuevo documento con el contenido del archivo
    $documento = array(
        "nombre" => $nombreArchivo,
        "contenido" => new MongoDB\BSON\Binary($contenido, MongoDB\BSON\Binary::TYPE_GENERIC)
    );
    
    // Inserta el documento en la colección
    $resultado = $collection->insertOne($documento);
    
    // Verifica si la inserción fue exitosa
    if ($resultado->getInsertedCount() > 0) {
        include "submenu.php";
    } else {
        echo "Error al subir el archivo.";
    }
}
?>