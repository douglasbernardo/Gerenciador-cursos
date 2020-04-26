<?php

use Douglas\Cursos\Controller\Alterar;
use Douglas\Cursos\Controller\Exclusao;
use Douglas\Cursos\Controller\FormularioInsercao;
use Douglas\Cursos\Controller\ListarCursos;
use Douglas\Cursos\Controller\Persistencia;



$routes = [

    '/salvar-curso' => Persistencia::class,
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioInsercao::class,
    '/excluir-curso' => Exclusao::class,
    '/alterar-curso' => Alterar::class
];

return $routes;