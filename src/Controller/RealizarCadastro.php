<?php

namespace Douglas\Cursos\Controller;

use Douglas\Cursos\Entity\Usuario;
use Douglas\Cursos\Helper\FlashMessageTrait;
use Douglas\Cursos\Infra\EntityManagerCreator;

class RealizarCadastro implements InterfaceControladorRequisicao
{
    use FlashMessageTrait;

    /**
     * @var \Doctrine\Orm\EntityManagerInterface
     */
    private $entityManager;


    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }
    
    public function processaRequisicao() : void
    {
     //post
        $email = filter_input(INPUT_POST,
        'email',
        FILTER_VALIDATE_EMAIL);

        $senha = filter_input(INPUT_POST,
        'senha',
        FILTER_SANITIZE_STRING);

        if (is_null($email) || $email === false || is_null($senha)){
            $this->defineMensagem('danger','Preencha os dados corretamente');
            header('location: /cadastro');
            return;
        }

        if (is_null($senha)){
            $this->defineMensagem('danger','Digite sua senha');
            header('location: /cadastro');
        }

        $usuario = new Usuario();
        $usuario->setEmail($email);
        $usuario->setSenha($senha);
        

        if(is_null($usuario) || $usuario === false){
            $this->defineMensagem('danger','Os dados não foram preenchidos');
            header('location: /cadastro');
            return;
        }else{
            $this->entityManager->persist($usuario);
            $this->entityManager->flush();
            
            header('Location: /login',true,302);
        }

    }

    //pegar dados do formulario
    //montar modelo de curso
    //inserir no banco 
}