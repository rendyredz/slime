<?php

$container = $app->getContainer();

//Container untuk View
$container['view'] = function ($container) {
       $view = new \Slim\Views\Twig(__DIR__ . '/../resources/views', [
            'cache' => false,
        ]);

        $router = $container->get('router');
        $view->addExtension(new \Slim\Views\TwigExtension(
            $container->router,
            $container->request->getUri()
        ));
        return $view;
};


$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

//Container untuk database
$container['db'] = function ($container) use ($capsule){
    return $capsule;
};
