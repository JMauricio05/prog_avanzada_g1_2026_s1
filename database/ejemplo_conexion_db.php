<?php
$host_db = "localhost";
$user_db = "root";
$pwd_db = "";
$name_db = "prueba_db";
//$port = "3306";

$conexDB = new mysqli($host_db, $user_db, $pwd_db, $name_db);

if ($conexDB->connect_error) {
    die($conexDB->connect_error);
}

$nombre = "pepe";
$email = "pepe@test.com";

$sql = "insert into estudiantes (nombre, email)value(?,?)";
$stm = $conexDB->prepare($sql);
$stm->bind_param("ss", $nombre, $email);
$result = $stm->execute();
if ($result) {
    echo "Datos guardados";
} else {
    echo "Datos no guardados";
}
$conexDB->close();
