<?php

use Douglas\Cursos\Controller\Alterar;
use Douglas\Cursos\Controller\Exclusao;
use Douglas\Cursos\Controller\FormularioInsercao;
use Douglas\Cursos\Controller\ListarCursos;
use Douglas\Cursos\Controller\Persistencia;
use Douglas\Cursos\Controller\Login;
use Douglas\Cursos\Controller\RealizarLogin;

$routes = [

    '/salvar-curso' => Persistencia::class,
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioInsercao::class,
    '/excluir-curso' => Exclusao::class,
    '/alterar-curso' => Alterar::class,
    '/login' => Login::class,
    '/realizar-login' => RealizarLogin::class
];

return $routes;