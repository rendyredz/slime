<?php
/*
 * HomeController only for controller sample
 * @hilmanrdn 18-01-2017
 */

namespace App\Controllers;

use \Interop\Container\ContainerInterface as ContainerInterface;

use Slim\Views\Twig as View;


class HomeController
{
    
       protected $views;
   public function __construct(Interop\Container\ContainerInterface $ci)
   {
       return $this->ci = $ci;
   }

    public function index($request, $response)
    {
       print_r($this->ci);
    }
}
