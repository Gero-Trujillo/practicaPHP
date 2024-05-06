<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Datos adicionales que deseas agregar al archivo de texto
$informacion_adicional = "Esta es información adicional que quieres agregar al archivo de texto.";
$otro = "hola";
// Ruta donde se encuentra el archivo de texto
$ruta_archivo = 'informacion.txt';

// Intenta agregar los datos al final del archivo
if (file_put_contents($ruta_archivo, $informacion_adicional, FILE_APPEND) !== false) {
    echo "La información adicional se ha agregado correctamente al archivo $ruta_archivo.";
} else {
    echo "Ha ocurrido un error al intentar agregar la información al archivo.";
}
if (file_put_contents($ruta_archivo, $otro, FILE_APPEND) !== false) {
    echo "La información adicional se ha agregado correctamente al archivo $ruta_archivo.";
} else {
    echo "Ha ocurrido un error al intentar agregar la información al archivo.";
}
?>
</body>
</html>