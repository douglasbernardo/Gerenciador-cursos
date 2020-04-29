<?php 

namespace Douglas\Cursos\Controller;

class Cadastro extends ControllerComHtml implements InterfaceControladorRequisicao
{
    public function ProcessaRequisicao(): void
    {
        echo $this->renderizahtml('cadastrar/formulario.php',[
            'titulo' => 'Cadastrar'
        ]);
    }
}