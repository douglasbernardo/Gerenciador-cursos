<?php

namespace Douglas\Cursos\Controller;

use Douglas\Cursos\Controller\ControllerComHtml;
use Douglas\Cursos\Controller\InterfaceControladorRequisicao;

class Login extends ControllerComHtml implements InterfaceControladorRequisicao
{
    public function ProcessaRequisicao(): void
    {
        echo $this->renderizahtml('login/formulario.php',[
            'titulo' => 'Login'
        ]);
    }
}