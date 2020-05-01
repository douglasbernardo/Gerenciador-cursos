<?php

namespace Douglas\Cursos\Controller;

class Deslogar implements InterfaceControladorRequisicao
{
    public function ProcessaRequisicao(): void
    {
        session_destroy();
        header('location: /login');
    }

}