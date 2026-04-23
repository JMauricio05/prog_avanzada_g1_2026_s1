<?php

use App\Presentation\Repositories\ContactosRepository;
use App\Presentation\Repositories\TestRepository;
use Slim\App;

return function (App $app) {
    $app->get('/', [TestRepository::class, 'default']);
    $app->get('/suma', [TestRepository::class, 'sumar1']);
    $app->post('/suma', [TestRepository::class, 'sumar2']);
    $app->post('/dividir', [TestRepository::class, 'dividir']);

    $app->get('/contactos', [ContactosRepository::class, 'list']);
    $app->post('/contacto', [ContactosRepository::class, 'create']);
};
