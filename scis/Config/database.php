<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'cake',
		'password' => 'cake',
		'database' => 'cake',
	);

	public $mongodb = array(
		'datasource' => 'Mongodb.MongodbSource',
		'persistent' => 'false',
		'port' => 27017,
		'host' => 'localhost',
		// 'login' => 'cake',
		// 'password' => 'cake',
		'database' => 'cake',
	);
}
