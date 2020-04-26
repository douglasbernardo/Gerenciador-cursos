<?php

namespace Douglas\Cursos\Controller;

class FormularioInsercao implements InterfaceControladorRequisicao
{

    public function ProcessaRequisicao() : void
    {
        $titulo = "Novo Curso";
        require_once __DIR__ . '/../../view/cursos/Formulario.php';
    }
}