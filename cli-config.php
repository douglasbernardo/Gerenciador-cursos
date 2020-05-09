<?php

use Douglas\Cursos\Infra\EntityManagerCreator;

require_once __DIR__ . '/vendor/autoload.php';

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet(
    (new EntityManagerCreator())->getEntityManager()
);
