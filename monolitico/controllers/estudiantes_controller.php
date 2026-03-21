<?php
namespace app\controllers;

use app\models\queries\EstudiantesQuery;

class EstudiantesController {

    function getEstudiantes(){
        $estudiantes = EstudiantesQuery::getAllEstudiantes();
        return $estudiantes;
    }

}
