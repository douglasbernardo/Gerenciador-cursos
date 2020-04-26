<?php

require __DIR__ . '/../vendor/autoload.php';
// fazer log de todas as requisições

use Douglas\Cursos\Controller\FormularioInsercao;
use Douglas\Cursos\Controller\ListarCursos;
use Douglas\Cursos\Controller\Persistencia;

$caminho = $_SERVER['PATH_INFO'];
$routes = require_once __DIR__ . '/../config/routes.php';

if(!array_key_exists($caminho,$rotas)){ //existe caminho->listar-cursos ou outro nas minhas rotas
    echo "Erro 404";
    exit();
}

/** @var $controlador */
$classeControladora = $rotas[$caminho];
$controlador = new $classeControladora();
$controlador->ProcessaRequisicao();

/*if ($_SERVER['PATH_INFO'] === '/listar-cursos'){
    require 'listar-cursos.php';
}
elseif($_SERVER['PATH_INFO'] === '/novo-curso'){
    require 'novo-curso.php';
}
else{
    http_response_code(404);
}
*/