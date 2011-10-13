<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
//	'default' => array
//	(
//            'type'       => 'pdo',
//		'connection' => array(
//			/**
//			 * The following options are available for PDO:
//			 *
//			 * string   dsn         Data Source Name
//			 * string   username    database username
//			 * string   password    database password
//			 * boolean  persistent  use persistent connections?
//			 */
//			'dsn'        => 'mysql:host=localhost;dbname=kohana',
//			'username'   => 'root',
//			'password'   => '',
//			'persistent' => FALSE,
//		),
//		/**
//		 * The following extra options are available for PDO:
//		 *
//		 * string   identifier  set the escaping identifier
//		 */
//		'table_prefix' => '',
//		'charset'      => 'utf8',
//		'caching'      => FALSE,
//		'profiling'    => TRUE,
//	),
//	'starsfon' => array(
//		'type'       => 'pdo',
//                'connection' => array(
//                        /**
//			 * The following options are available for PDO:
//			 *
//			 * string   dsn         Data Source Name
//			 * string   username    database username
//			 * string   password    database password
//			 * boolean  persistent  use persistent connections?
//			 */
//			'dsn'        => 'mysql:host=78.41.28.179;dbname=mor',
//			'username'   => 'root',
//			'password'   => 'Rdx768Wdv',
//			'persistent' => FALSE,
//                ),
//                'table_prefix' => '',
//                'charset'      => 'utf8',
//                'caching'      => FALSE,
//                'profiling'    => TRUE,
//	),
//	'default' => array
//	(
//            'type'       => 'pdo',
//		'connection' => array(
//			/**
//			 * The following options are available for PDO:
//			 *
//			 * string   dsn         Data Source Name
//			 * string   username    database username
//			 * string   password    database password
//			 * boolean  persistent  use persistent connections?
//			 */
//			'dsn'        => 'mysql:host=localhost;dbname=kohanasipcms',
//			'username'   => 'root',
//			'password'   => 'SaRaTdAnIl09011991',
//			'persistent' => FALSE,
//		),
//		/**
//		 * The following extra options are available for PDO:
//		 *
//		 * string   identifier  set the escaping identifier
//		 */
//		'table_prefix' => '',
//		'charset'      => 'utf8',
//		'caching'      => FALSE,
//		'profiling'    => TRUE,
//	),
//	'starsfon' => array(
//		'type'       => 'pdo',
//                'connection' => array(
//                        /**
//			 * The following options are available for PDO:
//			 *
//			 * string   dsn         Data Source Name
//			 * string   username    database username
//			 * string   password    database password
//			 * boolean  persistent  use persistent connections?
//			 */
//			'dsn'        => 'mysql:host=78.41.28.179;dbname=mor',
//			'username'   => 'root',
//			'password'   => 'Rdx768Wdv',
//			'persistent' => FALSE,
//                ),
//                'table_prefix' => '',
//                'charset'      => 'utf8',
//                'caching'      => FALSE,
//                'profiling'    => TRUE,
//	),
        'default' => array
	(
		'type'       => 'mysql',
		'connection' => array(
			/**
			 * The following options are available for MySQL:
			 *
			 * string   hostname     server hostname, or socket
			 * string   database     database name
			 * string   username     database username
			 * string   password     database password
			 * boolean  persistent   use persistent connections?
			 * array    variables    system variables as "key => value" pairs
			 *
			 * Ports and sockets may be appended to the hostname.
			 */
			'hostname'   => 'localhost',
			'database'   => 'kohanasipcms',
			'username'   => 'root',
			'password'   => 'SaRaTdAnIl09011991',
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
		'profiling'    => TRUE,
	),
        'starsfon' => array
	(
		'type'       => 'mysql',
		'connection' => array(
			/**
			 * The following options are available for MySQL:
			 *
			 * string   hostname     server hostname, or socket
			 * string   database     database name
			 * string   username     database username
			 * string   password     database password
			 * boolean  persistent   use persistent connections?
			 * array    variables    system variables as "key => value" pairs
			 *
			 * Ports and sockets may be appended to the hostname.
			 */
			'hostname'   => '78.41.28.180',
			'database'   => 'mor',
			'username'   => 'Sadmin',
			'password'   => 'DaNiL147369',
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
		'profiling'    => TRUE,
	),
);