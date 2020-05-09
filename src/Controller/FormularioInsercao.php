<?php

namespace Douglas\Cursos\Controller;       

class FormularioInsercao extends ControllerComHtml implements InterfaceControladorRequisicao
{

    public function processaRequisicao() : void
    {
        $titulo = "Novo Curso";
        echo $this->renderizahtml('cursos/Formulario.php',[
            'titulo' => "Novo Curso"
        ]);
    }
}