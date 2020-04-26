<?php

namespace Douglas\Cursos\Controller;

use Douglas\Cursos\Controller\InterfaceControladorRequisicao;
use Douglas\Cursos\Entity\Curso;
use Douglas\Cursos\Infra\EntityManagerCreator;

class Alterar implements InterfaceControladorRequisicao
{

    private  $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }



    public function ProcessaRequisicao(): void
    {
        $id = filter_input(INPUT_GET,  //filtrando id
        'id',
        FILTER_VALIDATE_INT);

        if(is_null($id) || $id === false){ //se o id for nulo ou falso volta para listarcursos
            header('Location: /listar-cursos');
        }

        $curso = $this->entityManager->find(Curso::class,$id); 
        $titulo = "Alterando Curso:" . $curso->getDescricao();
        require_once __DIR__ . '/../../view/cursos/Formulario.php';
        $this->entityManager->flush();
    }

}