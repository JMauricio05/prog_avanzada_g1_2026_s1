<?php
$numero = $_GET['num'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar numeros</title>
</head>

<body>
    <h1>Validar números</h1>
    <p><?php
        if (($numero % 2) == 0) {
            echo "El número $numero es par";
        } else {
            echo "El número $numero es impar";
        }
        ?></p>
</body>

</html>


1. PHP Superglobals
2. include vs require (include_once vs require_once)