<?php require_once __DIR__ . '/../inicio-html.php' ?>
        <a href="/novo-curso" class="btn btn-primary mb-2">
            Novo Curso
        </a>
        <ul class="list-group">
            <?php foreach ($cursos as $curso): ?>
                <li class="list-group-item d-flex justify-content-between">
                    <?= $curso->getDescricao(); ?>
                    <span>
                        <a href="/excluir-curso?id=<?= $curso->getId(); ?>" class="btn btn-danger btn-sm">
                            Excluir
                        </a>
                        <a href="/alterar-curso" class="btn btn-info btn-sm">
                            Alterar
                        </a>
                    </span>
                </li>
            <?php endforeach; ?>
        </ul>
<?php require_once __DIR__ . '/../fim-html.php';