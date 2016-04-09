<?php

	use Illuminate\Database\Eloquent\Model as Eloquent;

	class User extends Eloquent {

		public $a;
		protected $table = 'user';
		protected  $fillable = ['username', 'password', 'first_name', 'last_name'];
		public $timestamps = [];
	}
?>