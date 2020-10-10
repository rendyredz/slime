<?php
/*
 * HomeController only for controller sample
 * @hilmanrdn 18-01-2017
 */

namespace App\Controllers;
use App\models\Mahamodel;

class Mahasiswa
{
   public function addMaha($request, $response){

    $create = Mahamodel::create([
            'user_nama' => $_POST['nama'],
            'user_nim' => $_POST['nim'],
            'user_jurusan' => $_POST['jurusan'],
            'user_created_at' => date('Y-m-d H:i:s')
    ]);
    
    echo '<pre>',print_r($create,1),'</pre>';

   }
}
