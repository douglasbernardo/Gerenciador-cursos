<?php

use Douglas\Cursos\Controller\FormularioInsercao;
use Douglas\Cursos\Controller\ListarCursos;
use Douglas\Cursos\Controller\Persistencia;

$routes = [

    '/listar-cursos' : ListarCursos::class,
    '/novo-curso' -> FormulioInsercao::class,
    '/salvar-curso' -> Persistencia::class
];

return $routes;