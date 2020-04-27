<?php

namespace Douglas\Cursos\Controller;

class ControllerComHtml
{
    public function renderizahtml(string $caminhotemplate, array $dados) : void
    {
        extract($dados);
        require __DIR__ . '/../../view/' . $caminhotemplate;
    }
}