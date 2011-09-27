<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-09 12:02:57 --- ERROR: Database_Exception [ 2000 ]: SQLSTATE[HY000] [2000] mysqlnd cannot connect to MySQL 4.1+ using the old insecure authentication. Please use an administration tool to reset your password with the command SET PASSWORD = PASSWORD('your_existing_password'). This will store a new, and more secure, hash value in mysql.user. If this user is used in other scripts executed by PHP 5.2 or earlier you might need to remove the old-passwords flag from your my.cnf file ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2011-09-09 12:02:57 --- STRACE: Database_Exception [ 2000 ]: SQLSTATE[HY000] [2000] mysqlnd cannot connect to MySQL 4.1+ using the old insecure authentication. Please use an administration tool to reset your password with the command SET PASSWORD = PASSWORD('your_existing_password'). This will store a new, and more secure, hash value in mysql.user. If this user is used in other scripts executed by PHP 5.2 or earlier you might need to remove the old-passwords flag from your my.cnf file ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 Z:\home\sipcms.local\www\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 Z:\home\sipcms.local\www\application\classes\controller\registration.php(17): Kohana_Database_PDO->query(1, 'SELECT * FROM `...')
#2 [internal function]: Controller_Registration->action_index()
#3 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-09 12:02:58 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]
2011-09-09 12:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-09-09 12:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-09 12:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-09-09 12:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-09 12:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-09-09 12:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-09 12:05:43 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Premature end of data (mysqlnd_wireprotocol.c:554) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2011-09-09 12:05:43 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Premature end of data (mysqlnd_wireprotocol.c:554) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\sipcms.local\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\sipcms.local\www\application\classes\controller\registration.php(17): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...')
#2 [internal function]: Controller_Registration->action_index()
#3 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-09 12:05:43 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]