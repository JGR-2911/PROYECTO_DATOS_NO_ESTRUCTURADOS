<!DOCTYPE html>
<html>
<head>
  <title>Tu página web</title>
</head>
<body>
  <h1>Mi página web</h1>

<?php
// Ruta al archivo R
$rScript = "C:/Users/gonza/Downloads/DATOS_NO_ESTRUCUTRADOS/server3.R";

// Comando para ejecutar el archivo R
$command = "Rscript {$rScript}";

// Ejecutar el comando y capturar la salida
$output = exec($command);

// Imprimir la salida del script R
echo $output;
?>


</body>
</html>