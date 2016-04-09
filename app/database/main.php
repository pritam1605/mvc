<?php

	use Illuminate\Database\Capsule\Manager as Capsule;
	$capsule = new Capsule();

	$capsule->addConnection([
		'driver' => 'mysql',
		'host' => 'localhost',
		'username' => 'photo_gallery',
		'password' => 'pritam',
		'database' => 'photo_gallery',
		'charset' => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix' => '',
	]);

	$capsule->bootEloquent();
?>