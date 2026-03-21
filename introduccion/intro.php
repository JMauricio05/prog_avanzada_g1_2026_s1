<?php
echo 'Hola mundo!!!!';

$nombre = null;
$nombre = 'Pepe'; //string
$apellido = "Gomez"; //string

echo "\n" . $nombre . ' ' . $apellido . "\n";
echo "\n $nombre $apellido \n";
//echo '\n $nombre $apellido \n';

$estado = true; //false
$edad = 30; // int
$promedio = 32.25; //float
$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

/**
 * If y switch
 */
$categoria = 1;
if ($categoria == 1) {
    //codigo
} else if ($categoria == 2) {
    //codigo
} elseif ($categoria == 3) {
    //codigo
} else {
    //codigo
}
/**
 * && and
 * || or
 * ! negacion
 * == igual
 * != diferente
 * < menor que
 * <= menor o igual que
 * > mayor que
 * >= mayor o igual que
 */

switch ($categoria) {
    case 1:
        // codigo
        break;
    case 2:
        // codigo
        break;
    case 3:
        // codigo
        break;
    default:
        // codigo
        break;
}

/**
 * ciclos....
 */
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for ($i = 0; $i < count($numeros); $i++) {
    $num = $numeros[$i];
    if (($num % 2) == 0) {
        echo "$num es par\n";
    } else {
        echo "$num es impar\n";
    }
}

echo "\nwhile\n";
$i = 0;
while ($i < count($numeros)) {
    $num = $numeros[$i];
    if (($num % 2) == 0) {
        echo "$num es par\n";
    } else {
        echo "$num es impar\n";
    }
    $i++;
}

echo "\ndo while\n";
$i = 0;
do {
    $num = $numeros[$i];
    if (($num % 2) == 0) {
        echo "$num es par\n";
    } else {
        echo "$num es impar\n";
    }
    $i++;
} while ($i < count($numeros));

echo "\nforeach\n";
foreach($numeros as $valor){
    if (($valor % 2) == 0) {
        echo "$valor es par\n";
    } else {
        echo "$valor es impar\n";
    }
}

foreach($numeros as $pos => $valor){
    if (($valor % 2) == 0) {
        echo "$pos: $valor es par\n";
        //break; //finaliza el cliclo
    } else {
        //continue; //salta ciclo
        echo "$pos: $valor es impar\n";
    }
}

function saludar($nombre, $apellido="Perez"){
    echo "\nHola $nombre $apellido\n";
}
saludar("Juan","Gomez");
saludar("Ana");

function saludar2($nombre, $apellido="Perez"){
    return "\nHola $nombre $apellido\n";
}
echo saludar2("Pedro","A");
echo saludar2("Pepe");
$nombreCompleto = "";
$nombre_completo = "";

echo "\n". (1 == '1' ? 'true': 'false') ;
echo "\n". (1 === '1' ? 'true': 'false');