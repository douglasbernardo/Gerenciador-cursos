<?php

namespace Douglas\Cursos\Controller;

use Douglas\Cursos\Entity\Usuario;
use Douglas\Cursos\Infra\EntityManagerCreator;

class RealizarCadastro implements InterfaceControladorRequisicao
{

    private $email;
    private $senha;
    private $entityManager;

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

    }

    public function Cadastrar()
    {
        $classeUsuario = Usuario::class;
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $dql = "INSERT INTO usuarios(email,senha) values ($this->email,$this->senha)";
        $query = $entityManager->createQuery($dql);

        return $query->getResult();

         
        header('Location: /login',true,302);
    }
    //pegar dados do formulario
    //montar modelo de curso
    //inserir no banco 
}