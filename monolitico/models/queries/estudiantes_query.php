<?php
namespace app\models\queries;

use app\models\config\ConnectionDB;
use app\models\entities\Estudiante;

class EstudiantesQuery {

    static function getAllEstudiantes(){
        $sql = "select * from estudiantes";
        $conexBD = new ConnectionDB();
        $result = $conexBD->execute($sql);
        $lista = [];
        while($row = $result->fetch_assoc()){
            $estudiante = new Estudiante($row['id'], $row['nombre'], $row['email']);
            array_push($lista, $estudiante);
        }
        $conexBD->close();
        return $lista;
    }

}