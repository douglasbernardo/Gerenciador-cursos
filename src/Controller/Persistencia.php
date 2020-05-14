<?php

namespace Douglas\Cursos\Controller;

use Douglas\Cursos\Entity\Curso;
use Douglas\Cursos\Helper\FlashMessageTrait;
use Douglas\Cursos\Infra\EntityManagerCreator;

class Persistencia implements InterfaceControladorRequisicao
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
        $descricao = filter_input(INPUT_POST,
        'descricao',
        FILTER_SANITIZE_STRING);

        $curso = new curso();
        $curso->setDescricao($descricao);

        $id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);

        $tipo = "success";

        if(!is_null($id) && $id !== false){
            $curso->setId($id);
            $this->entityManager->merge($curso);  //atualizar curso
            $this->defineMensagem('$tipo','Curso atualizado com sucesso');
        }
        else{
            $this->entityManager->persist($curso);  //criar novo curso[]
            $this->defineMensagem('$tipo','Curso Inserido com sucesso');
        }
        $_SESSION['tipo_mensagem'] = 'success';
        $this->entityManager->flush();
        sleep(2);
        header('Location: /listar-cursos',true,302);
    }

    //pegar dados do formulario
    //montar modelo de curso
    //inserir no banco 
}