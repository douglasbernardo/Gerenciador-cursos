<?php

namespace Douglas\Cursos\Controller;

use Douglas\Cursos\Controller\ControllerComHtml;
use Douglas\Cursos\Controller\InterfaceControladorRequisicao;
use Douglas\Cursos\Helper\RenderizadorHtml;

class Login implements InterfaceControladorRequisicao
{
    use RenderizadorHtml;
    
    public function processaRequisicao(): void
    {
        echo $this->renderizahtml('login/formulario.php',[
            'titulo' => 'Login'
        ]);
    }
}