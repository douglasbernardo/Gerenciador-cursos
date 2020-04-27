<?php

namespace Douglas\Cursos\Controller;       

class FormularioInsercao extends ControllerComHtml implements InterfaceControladorRequisicao
{

    public function ProcessaRequisicao() : void
    {
        $titulo = "Novo Curso";
        echo $this->renderizahtml('cursos/Formulario.php',[
            'titulo' => "Novo Curso"
        ]);
    }
}