<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
    protected $table = 'users';
    protected $primeryKey = 'user_id';

}