<?php require_once __DIR__ . '/../inicio-html.php' ?>
        <a href="/novo-curso" class="btn btn-primary mb-2">
            Novo Curso
        </a>
        <ul class="list-group">
            <?php foreach ($curso as $cursos): ?>
                <li class="list-group-item d-flex justify-content-between">
                    <?= $cursos->getDescricao(); ?>
                    <span>
                        <a href="/excluir-curso?id=<?= $cursos->getId(); ?>" class="btn btn-danger btn-sm">
                            Excluir
                        </a>
                        <a href="/alterar-curso?id=<?= $cursos->getId(); ?>" class="btn btn-info btn-sm">
                            Alterar
                        </a>
                    </span>
                </li>
            <?php endforeach; ?>
        </ul>
<?php require_once __DIR__ . '/../fim-html.php';