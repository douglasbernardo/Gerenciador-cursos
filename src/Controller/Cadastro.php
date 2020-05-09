<?php 

namespace Douglas\Cursos\Controller;

use Douglas\Cursos\Helper\RenderizadorHtml;

class Cadastro implements InterfaceControladorRequisicao
{
    use RenderizadorHtml;
    
    public function processaRequisicao(): void
    {
        echo $this->renderizahtml('cadastrar/formulario.php',[
            'titulo' => 'Cadastrar'
        ]);
    }
}