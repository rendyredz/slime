<?php
/*
 * Routing System
 * @hilmanrdn 18-01-2017
 */

//$app->get('/', '\App\Controllers\HomeController:index');

$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'home.twig', []);
})->setName('profile');

$app->post('/mahasiswa', Mahasiswa::class . ":addMaha");