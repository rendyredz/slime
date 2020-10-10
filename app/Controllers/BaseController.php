<?php
/*
 * Other Controller that using Container
 * should extends this BaseController
 */

namespace App\Controllers;


class BaseController
{
   protected $ci;

    public function __construct(ContainerInterface $ci) {
        $this->ci = $ci;
    }
    
}
