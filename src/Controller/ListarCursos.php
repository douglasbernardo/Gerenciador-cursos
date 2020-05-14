<?php 

namespace Douglas\Cursos\Controller;
use Douglas\Cursos\Infra\EntityManagerCreator;
use Douglas\Cursos\Entity\Curso;
use Douglas\Cursos\Helper\RenderizadorHtml;

class ListarCursos implements InterfaceControladorRequisicao
{
    use RenderizadorHtml;

    private $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeCursos = $entityManager
        ->getRepository(Curso::class);
    }

    public function processaRequisicao():void //Metodo que processa a requisição
    { //Buscar todos os Cursos
        echo $this->renderizahtml('cursos/listar-cursos.php',[
            'curso' => $this->repositorioDeCursos->findAll(),
            'titulo' => "Listar Cursos"
        ]);
         //todas as variaves que estão aqui passa para a view
        //Trazendo a view do arquivo listar-cursos.php
    }
}