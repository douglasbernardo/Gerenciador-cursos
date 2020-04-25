<?php

require __DIR__ . '/../vendor/autoload.php';
// fazer log de todas as requisições

use Douglas\Cursos\Controller\FormularioInsercao;
use Douglas\Cursos\Controller\ListarCursos;

switch ($_SERVER['PATH_INFO']){
    case '/listar-cursos': //caso essa requisição estiver na url da require da pasta listar-cursos.php
        $controlador = new ListarCursos();
        $controlador->ProcessaRequisicao();
        break;
    case '/novo-curso': //caso essa requisição estiver na url da require da pasta formulario-novo-curso.php
       $controlador = new FormularioInsercao();
       $controlador->ProcessaRequisicao();
        break;
    default:
        http_response_code(404);
        break;
}

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