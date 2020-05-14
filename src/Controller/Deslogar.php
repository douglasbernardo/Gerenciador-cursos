<?php

namespace Douglas\Cursos\Controller;

class Deslogar implements InterfaceControladorRequisicao
{
    public function processaRequisicao(): void
    {
        session_destroy();
        header('location: /login');
    }

}