<?php

namespace Douglas\Cursos\Controller;

use Douglas\Cursos\Entity\Usuario;
use Douglas\Cursos\Infra\EntityManagerCreator;

class RealizarCadastro implements InterfaceControladorRequisicao
{
    /**
     * @var \Doctrine\Orm\EntityManagerInterface
     */
    private $entityManager;


    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

    
    public function ProcessaRequisicao() : void
    {
     //post
        $email = filter_input(INPUT_POST,
        'email',
        FILTER_VALIDATE_EMAIL);

        $senha = filter_input(INPUT_POST,
        'senha',
        FILTER_SANITIZE_STRING);

        $usuario = new Usuario();
        $usuario->setEmail($email);
        $usuario->setSenha($senha);

    
        $this->entityManager->persist($usuario);  //criar novo curso
       
        $this->entityManager->flush();

        if(is_null($usuario)){
            echo "Usuario nulo pqp";
        }else{
            header('Location: /login',true,302);
        }
    }

    //pegar dados do formulario
    //montar modelo de curso
    //inserir no banco 
}