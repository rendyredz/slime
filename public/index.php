<?php

require 'vendor/autoload.php';

$app = new Slim\App();

$app->get("/", function(){

	$data =  User::all()->toJson();

	echo '<pre>',print_r(json_decode($data,1),1),'</pre>';
});

$app->run();