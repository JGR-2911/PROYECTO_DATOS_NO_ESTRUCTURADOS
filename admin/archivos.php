<?php
require_once(__DIR__."/controllers/archivo.php");
include("views/header.php");
include("views/menu.php");
$action = (isset($_GET['action'])) ? $_GET['action'] : "getAll";
$id = (isset($_GET['id'])) ? $_GET['id'] : null;
switch ($action) {
    case 'getAll':
    default:
        $data = $archivos->get(null);
        include("views/sequia/archivos.php");
}
include("views/footer.php");
?>