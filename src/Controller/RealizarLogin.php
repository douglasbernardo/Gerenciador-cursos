<?php

namespace Douglas\Cursos\Controller;

use Douglas\Cursos\Entity\Usuario;
use Douglas\Cursos\Infra\EntityManagerCreator;

class RealizarLogin implements InterfaceControladorRequisicao
{
     /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeCursos = $entityManager->getRepository(Usuario::class);
    }
    public function ProcessaRequisicao(): void
    {
        $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);

        if (is_null($email) || $email === false){
            echo "Erro E-mail não encontrado";
            return;
        }

        if (is_null($senha)){
            echo "Digite sua senha";
        }

        $usuario = $this->repositorioDeCursos->findOneBy(['email' => $email]);

        if(is_null($usuario) || $usuario->senhaEstaCorreta($senha)){
            echo "E-mail ou senha invalidos";
            return;
        }
        session_start();
        $_SESSION['logado'] = true;

        header('location: /listar-cursos');
    }
}