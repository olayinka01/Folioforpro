<?php

/*$DATABASE_URL=parse_url(getenv("mysql://b3c72262693d13:c248993f@us-cdbr-iron-east-05.cleardb.net/heroku_539c97148f2221b?reconnect=true"));

$host = $DATABASE_URL("us-cdbr-iron-east-05.cleardb.net");
$username = $DATABASE_URL("b3c72262693d13");
$password = $DATABASE_URL("c248993f");
$database = substr($DATABASE_URL("heroku_539c97148f2221b"), 1);*/

return array(

	/*
	|--------------------------------------------------------------------------
	| PDO Fetch Style
	|--------------------------------------------------------------------------
	|
	| By default, database results will be returned as instances of the PHP
	| stdClass object; however, you may desire to retrieve records in an
	| array format for simplicity. Here you can tweak the fetch style.
	|
	*/

	'fetch' => PDO::FETCH_CLASS,

	/*
	|--------------------------------------------------------------------------
	| Default Database Connection Name
	|--------------------------------------------------------------------------
	|
	| Here you may specify which of the database connections below you wish
	| to use as your default connection for all database work. Of course
	| you may use many connections at once using the Database library.
	|
	*/

	'default' => 'mysql',
	


	/*
	|--------------------------------------------------------------------------
	| Database Connections
	|--------------------------------------------------------------------------
	|
	| Here are each of the database connections setup for your application.
	| Of course, examples of configuring each database platform that is
	| supported by Laravel is shown below to make development simple.
	|
	|
	| All database work in Laravel is done through the PHP PDO facilities
	| so make sure you have the driver for your particular database of
	| choice installed on your machine before you begin development.
	|
	*/

	'connections' => array(

		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => storage_path().'/database.sqlite',
			'prefix'   => '',
		),

		/*'mysql' => array(
			'driver'    => 'mysql',
			'host'      => env('DB_HOST', 'localhost'),
			'database'  => env('DB_DATABASE', 'folioforpro52'),
			'username'  => env('DB_USERNAME', 'root'),
			'password'  => env('DB_PASSWORD', ''),
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
			'strict'    => false,
		),*/
		
		'mysql' => array(
			'driver'    => 'mysql',
			'port'		=> env('DB_PORT', '3306'),
			'host'      => env('DB_HOST', 'us-cdbr-iron-east-05.cleardb.net'),
			'database'  => env('DB_DATABASE', 'heroku_539c97148f2221b'),
			'username'  => env('DB_USERNAME', 'b3c72262693d13'),
			'password'  => env('DB_PASSWORD', 'c248993f'),
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
			'sslmode' => env('DB_SSLMODE', 'prefer'),
			'options'   => array(
            PDO::MYSQL_ATTR_SSL_CA      => storage_path().'/app/cert/cleardb-ca.pem',
            PDO::MYSQL_ATTR_SSL_CERT    => storage_path().'/app/cert/b3c72262693d13-cert.pem',
            PDO::MYSQL_ATTR_SSL_KEY     => storage_path().'/app/cert/b3c72262693d13-key.pem'
        ),
			'strict'    => false,
			'engine'	=> null,
		),

			'pgsql' => array(
			'driver'   => 'pgsql',
			'host'     => env('DB_HOST', 'localhost'),
			'database' => env('DB_DATABASE', 'forge'),
			'username' => env('DB_USERNAME', 'forge'),
			'password' => env('DB_PASSWORD', ''),
			'charset'  => 'utf8',
			'prefix'   => '',
			'schema'   => 'public',
		),

		'sqlsrv' => array(
			'driver'   => 'sqlsrv',
			'host'     => env('DB_HOST', 'localhost'),
			'database' => env('DB_DATABASE', 'forge'),
			'username' => env('DB_USERNAME', 'forge'),
			'password' => env('DB_PASSWORD', ''),
			'prefix'   => '',
		),

	),

	/*
	|--------------------------------------------------------------------------
	| Migration Repository Table
	|--------------------------------------------------------------------------
	|
	| This table keeps track of all the migrations that have already run for
	| your application. Using this information, we can determine which of
	| the migrations on disk haven't actually been run in the database.
	|
	*/

	'migrations' => 'migrations',

	/*
	|--------------------------------------------------------------------------
	| Redis Databases
	|--------------------------------------------------------------------------
	|
	| Redis is an open source, fast, and advanced key-value store that also
	| provides a richer set of commands than a typical key-value systems
	| such as APC or Memcached. Laravel makes it easy to dig right in.
	|
	*/

	'redis' => array(

		'cluster' => false,

		'default' => array(
			'host'     => '127.0.0.1',
			'port'     => 6379,
			'database' => 0,
		),

	),

);
