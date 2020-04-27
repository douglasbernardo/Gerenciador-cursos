<?php

namespace Douglas\Cursos\Controller;

use Douglas\Cursos\Entity\Curso;
use Douglas\Cursos\Infra\EntityManagerCreator;

class Persistencia implements InterfaceControladorRequisicao
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
        $descricao = filter_input(INPUT_POST,
        'descricao',
        FILTER_SANITIZE_STRING);

        $curso = new curso();
        $curso->setDescricao($descricao);

        $id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);

        if(!is_null($id) && $id !== false){
            $curso->setId($id);
            $this->entityManager->merge($curso);  //atualizar curso
        }
        else{
            $this->entityManager->persist($curso);  //criar novo curso
        }
        $this->entityManager->flush();
        sleep(2);
        header('Location: /listar-cursos',true,302);
    }

    //pegar dados do formulario
    //montar modelo de curso
    //inserir no banco 
}