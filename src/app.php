<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap.php';

$app->get('/', function() use ($app) {
    return $app['twig']->render('index.html.twig');
});

$app->get('/{id}/', function($id) use ($app) {
    $idea = $app['ideas']->find($id);
    
    return $app['twig']->render('view.html.twig', array(
        'idea' => $idea['idea']
    ));
});

return $app;