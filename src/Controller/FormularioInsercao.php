<?php

namespace Douglas\Cursos\Controller;

use Douglas\Cursos\Helper\RenderizadorHtml;

class FormularioInsercao implements InterfaceControladorRequisicao
{
    use RenderizadorHtml;

    public function processaRequisicao() : void
    {
        $titulo = "Novo Curso";
        echo $this->renderizahtml('cursos/Formulario.php',[
            'titulo' => "Novo Curso"
        ]);
    }
}