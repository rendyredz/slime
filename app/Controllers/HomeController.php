<?php
/*
 * HomeController only for controller sample
 * @hilmanrdn 18-01-2017
 */

namespace App\Controllers;

class HomeController
{
   public function maha( $request,  $response) {
       return $response->write($_POST['nama']);
   }
}
