<?php

require 'vendor/autoload.php';

$app = new Slim\App([

	'settings' => [

		'displayErrorDetails' => true
	]

]);

$container = $app->getContainer();

//Container untuk View
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig( __DIR__ . '/../app/views', [
        'cache' => false
    ]);
    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};

$container['MainController'] = function ($c) {
  $view = $c['view'];
  return new \App\Controllers\MainController($view);
};

require 'routes/routes.php';

$app->run();

// $data =  User::all()->toJson();
// echo '<pre>',print_r(json_decode($data,1),1),'</pre>';