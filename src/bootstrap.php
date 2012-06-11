<?php

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'   => 'pdo_mysql',
        'host'     => 'localhost',
        'dbname'   => 'diagramma',
        'user'     => 'root',
        'password' => '',
    ),
));

$app->register(
    new Knp\Provider\RepositoryServiceProvider(), array(
        'repository.repositories' => array(
            'ideas' => 'panunu\diagramma\Idea',
        )
    )
);

return $app;