<?php

namespace Douglas\Cursos\Controller;

abstract class ControllerComHtml
{
    public function renderizahtml(string $caminhotemplate, array $dados) : string
    {
        extract($dados);
        ob_start(); //inicialize o buffer de saida comece a guardar tudo que vai ser exibido
        require __DIR__ . '/../../view/' . $caminhotemplate;
        $html = ob_get_clean(); //retorna os dados que estão no buffer

        return $html;
    }
}