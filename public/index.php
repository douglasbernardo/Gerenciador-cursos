<?php

require __DIR__ . '/../vendor/autoload.php';
// fazer log de todas as requisições

$caminho = $_SERVER['PATH_INFO'];
$routes = require_once __DIR__ . '/../config/routes.php';

if(!array_key_exists($caminho,$routes)){ //existe caminho->listar-cursos ou outro nas minhas rotas
    http_response_code(404);
    exit();
}

session_start();

$rotaLogin = stripos($caminho,'login');  //procurar a string login no caminho

if(!isset($_SESSION['logado']) && $rotaLogin === false){
    header('location: /login');
    exit();
}

/** @var $controlador */
$classeControladora = $routes[$caminho];
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