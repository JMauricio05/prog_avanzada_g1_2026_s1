<?php
$msg = "Hola mundo!!!";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio Php</title>
</head>
<body>
    <h1><?php echo $msg; ?></h1>
    <br>
    <form action="validar_numeros.php" method="get">
        <input type="number" min="1" name="num" require>
        <button type="submit">Validar</button>
    </form>
</body>
</html>