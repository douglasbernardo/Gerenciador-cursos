<?php

namespace Douglas\Cursos\Controller;

use Douglas\Cursos\Entity\Curso;
use Douglas\Cursos\Infra\EntityManagerCreator;

class Exclusao implements InterfaceControladorRequisicao
{
    /**
     * @var EntityManagerCreator
     */
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())
        ->getEntityManager();  
    }

    public function ProcessaRequisicao(): void
    {
        $id = filter_input(INPUT_GET,
        'id',
        FILTER_VALIDATE_INT);

        if(is_null($id) || $id === false){
            header("Location: /listar-cursos");
            return;
        }

        $curso = $this->entityManager->getReference(Curso::class,$id);
        $this->entityManager->remove($curso);
        $this->entityManager->flush();

        header('Location: /listar-cursos');
    }

}