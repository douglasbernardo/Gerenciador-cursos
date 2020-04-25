<?php

namespace Douglas\Cursos\Controller;

class FormularioInsercao implements InterfaceControladorRequisicao
{

    public function ProcessaRequisicao() : void
    {
        require_once __DIR__ . '/../../view/cursos/Formulario.php';
    }
}