<?php

return [
	'fetch' => PDO::FETCH_OBJ,
	'driver' => 'mysql',
	'mysql' => [
		'host' => '127.0.0.1',
		'user' => 'root',
		'pass' => '',
		'db' => 'algebra_contacts',
		'charset' => 'utf-8'
	],
	'sqlite' => [
		'db' => ''
	],
	'pgsql' => [
		'host' => '',
		'user' => '',
		'pass' => '',
		'db' => '',
		'charset' => 'utf-8'
	]
];