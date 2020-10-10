<?php
/*
 * Sample Model only for Model sample
 * @hilmanrdn 18-01-2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Mahamodel extends Eloquent
{
  protected $table = "users";
  protected $primaryKey = "user_id";
  public $timestamps = false;

  protected $fillable = [
		'user_nama', 'user_nim','user_jurusan', 'user_created_at'
  ];
  
}
