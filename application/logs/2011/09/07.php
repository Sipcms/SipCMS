<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-07 22:37:12 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:37:12 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\modules\auth\classes\kohana\auth.php(57): Kohana_Session::instance('database')
#4 Z:\home\sipcms.local\www\modules\auth\classes\kohana\auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 Z:\home\sipcms.local\www\application\classes\sip\controller.php(11): Kohana_Auth::instance()
#6 Z:\home\sipcms.local\www\application\classes\controller\registration.php(6): Sip_Controller->before()
#7 [internal function]: Controller_Registration->before()
#8 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#9 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#12 {main}
2011-09-07 22:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-09-07 22:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-07 22:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-09-07 22:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-07 22:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-09-07 22:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-07 22:37:51 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:37:51 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 Z:\home\sipcms.local\www\application\classes\controller\registration.php(6): Sip_Controller->before()
#5 [internal function]: Controller_Registration->before()
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-09-07 22:39:31 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:39:31 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 Z:\home\sipcms.local\www\application\classes\controller\registration.php(6): Sip_Controller->before()
#5 [internal function]: Controller_Registration->before()
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-09-07 22:39:57 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:39:57 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 Z:\home\sipcms.local\www\application\classes\controller\registration.php(6): Sip_Controller->before()
#5 [internal function]: Controller_Registration->before()
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-09-07 22:40:17 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:40:17 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 Z:\home\sipcms.local\www\application\classes\controller\registration.php(6): Sip_Controller->before()
#5 [internal function]: Controller_Registration->before()
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-09-07 22:40:41 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:40:41 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 Z:\home\sipcms.local\www\application\classes\controller\registration.php(6): Sip_Controller->before()
#5 [internal function]: Controller_Registration->before()
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-09-07 22:40:42 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:40:42 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 Z:\home\sipcms.local\www\application\classes\controller\registration.php(6): Sip_Controller->before()
#5 [internal function]: Controller_Registration->before()
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-09-07 22:40:42 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:40:42 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 Z:\home\sipcms.local\www\application\classes\controller\registration.php(6): Sip_Controller->before()
#5 [internal function]: Controller_Registration->before()
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-09-07 22:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-09-07 22:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-07 22:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL XDEBUG_SESSION_START=netbeans-xdebug was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-09-07 22:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL XDEBUG_SESSION_START=netbeans-xdebug was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-07 22:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-09-07 22:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-07 22:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL XDEBUG_SESSION_START=netbeans-xdebug was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-09-07 22:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL XDEBUG_SESSION_START=netbeans-xdebug was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-07 22:54:37 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:54:37 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 Z:\home\sipcms.local\www\application\classes\controller\registration.php(6): Sip_Controller->before()
#5 [internal function]: Controller_Registration->before()
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-09-07 22:54:39 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:54:39 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 Z:\home\sipcms.local\www\application\classes\controller\registration.php(6): Sip_Controller->before()
#5 [internal function]: Controller_Registration->before()
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-09-07 22:54:39 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:54:39 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 Z:\home\sipcms.local\www\application\classes\controller\registration.php(6): Sip_Controller->before()
#5 [internal function]: Controller_Registration->before()
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-09-07 22:54:39 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:54:39 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 Z:\home\sipcms.local\www\application\classes\controller\registration.php(6): Sip_Controller->before()
#5 [internal function]: Controller_Registration->before()
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-09-07 22:54:39 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:54:39 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 Z:\home\sipcms.local\www\application\classes\controller\registration.php(6): Sip_Controller->before()
#5 [internal function]: Controller_Registration->before()
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-09-07 22:54:39 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:54:39 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 Z:\home\sipcms.local\www\application\classes\controller\registration.php(6): Sip_Controller->before()
#5 [internal function]: Controller_Registration->before()
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-09-07 22:56:48 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:56:48 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 [internal function]: Sip_Controller->before()
#5 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-07 22:56:49 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:56:49 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 [internal function]: Sip_Controller->before()
#5 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-07 22:56:49 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:56:49 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 [internal function]: Sip_Controller->before()
#5 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-07 22:56:50 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:56:50 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 [internal function]: Sip_Controller->before()
#5 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-07 22:56:50 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:56:50 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 [internal function]: Sip_Controller->before()
#5 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-07 22:56:50 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:56:50 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 [internal function]: Sip_Controller->before()
#5 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-07 22:57:09 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:57:09 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\modules\auth\classes\kohana\auth.php(57): Kohana_Session::instance('database')
#4 Z:\home\sipcms.local\www\modules\auth\classes\kohana\auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 Z:\home\sipcms.local\www\application\classes\sip\controller.php(11): Kohana_Auth::instance()
#6 [internal function]: Sip_Controller->before()
#7 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#8 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-09-07 22:57:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\registration.php [ 19 ]
2011-09-07 22:57:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\registration.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-07 22:58:00 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:58:00 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 [internal function]: Sip_Controller->before()
#5 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-07 22:58:11 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:58:11 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 [internal function]: Sip_Controller->before()
#5 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-07 22:58:12 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2011-09-07 22:58:12 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\sipcms.local\www\modules\database\classes\kohana\session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\sipcms.local\www\system\classes\kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 Z:\home\sipcms.local\www\application\classes\sip\controller.php(10): Kohana_Session::instance()
#4 [internal function]: Sip_Controller->before()
#5 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-07 23:08:02 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]
2011-09-07 23:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-09-07 23:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-07 23:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-09-07 23:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-07 23:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-09-07 23:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-07 23:08:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-09-07 23:08:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-07 23:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-09-07 23:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-07 23:13:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-09-07 23:13:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-07 23:14:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-09-07 23:14:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-07 23:16:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-09-07 23:16:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-07 23:16:58 --- ERROR: Database_Exception [ 2000 ]: SQLSTATE[HY000] [2000] mysqlnd cannot connect to MySQL 4.1+ using the old insecure authentication. Please use an administration tool to reset your password with the command SET PASSWORD = PASSWORD('your_existing_password'). This will store a new, and more secure, hash value in mysql.user. If this user is used in other scripts executed by PHP 5.2 or earlier you might need to remove the old-passwords flag from your my.cnf file ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2011-09-07 23:16:58 --- STRACE: Database_Exception [ 2000 ]: SQLSTATE[HY000] [2000] mysqlnd cannot connect to MySQL 4.1+ using the old insecure authentication. Please use an administration tool to reset your password with the command SET PASSWORD = PASSWORD('your_existing_password'). This will store a new, and more secure, hash value in mysql.user. If this user is used in other scripts executed by PHP 5.2 or earlier you might need to remove the old-passwords flag from your my.cnf file ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 Z:\home\sipcms.local\www\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 Z:\home\sipcms.local\www\application\classes\controller\registration.php(17): Kohana_Database_PDO->query(1, 'SELECT * FROM `...')
#2 [internal function]: Controller_Registration->action_index()
#3 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-07 23:16:58 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]
2011-09-07 23:21:22 --- ERROR: Database_Exception [ 2000 ]: SQLSTATE[HY000] [2000] mysqlnd cannot connect to MySQL 4.1+ using the old insecure authentication. Please use an administration tool to reset your password with the command SET PASSWORD = PASSWORD('your_existing_password'). This will store a new, and more secure, hash value in mysql.user. If this user is used in other scripts executed by PHP 5.2 or earlier you might need to remove the old-passwords flag from your my.cnf file ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2011-09-07 23:21:22 --- STRACE: Database_Exception [ 2000 ]: SQLSTATE[HY000] [2000] mysqlnd cannot connect to MySQL 4.1+ using the old insecure authentication. Please use an administration tool to reset your password with the command SET PASSWORD = PASSWORD('your_existing_password'). This will store a new, and more secure, hash value in mysql.user. If this user is used in other scripts executed by PHP 5.2 or earlier you might need to remove the old-passwords flag from your my.cnf file ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 Z:\home\sipcms.local\www\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 Z:\home\sipcms.local\www\application\classes\controller\registration.php(17): Kohana_Database_PDO->query(1, 'SELECT * FROM `...')
#2 [internal function]: Controller_Registration->action_index()
#3 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-07 23:21:22 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]
2011-09-07 23:21:24 --- ERROR: Database_Exception [ 2000 ]: SQLSTATE[HY000] [2000] mysqlnd cannot connect to MySQL 4.1+ using the old insecure authentication. Please use an administration tool to reset your password with the command SET PASSWORD = PASSWORD('your_existing_password'). This will store a new, and more secure, hash value in mysql.user. If this user is used in other scripts executed by PHP 5.2 or earlier you might need to remove the old-passwords flag from your my.cnf file ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2011-09-07 23:21:24 --- STRACE: Database_Exception [ 2000 ]: SQLSTATE[HY000] [2000] mysqlnd cannot connect to MySQL 4.1+ using the old insecure authentication. Please use an administration tool to reset your password with the command SET PASSWORD = PASSWORD('your_existing_password'). This will store a new, and more secure, hash value in mysql.user. If this user is used in other scripts executed by PHP 5.2 or earlier you might need to remove the old-passwords flag from your my.cnf file ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 Z:\home\sipcms.local\www\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 Z:\home\sipcms.local\www\application\classes\controller\registration.php(17): Kohana_Database_PDO->query(1, 'SELECT * FROM `...')
#2 [internal function]: Controller_Registration->action_index()
#3 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-07 23:21:24 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]
2011-09-07 23:22:57 --- ERROR: Database_Exception [ 2000 ]: SQLSTATE[HY000] [2000] mysqlnd cannot connect to MySQL 4.1+ using the old insecure authentication. Please use an administration tool to reset your password with the command SET PASSWORD = PASSWORD('your_existing_password'). This will store a new, and more secure, hash value in mysql.user. If this user is used in other scripts executed by PHP 5.2 or earlier you might need to remove the old-passwords flag from your my.cnf file ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2011-09-07 23:22:57 --- STRACE: Database_Exception [ 2000 ]: SQLSTATE[HY000] [2000] mysqlnd cannot connect to MySQL 4.1+ using the old insecure authentication. Please use an administration tool to reset your password with the command SET PASSWORD = PASSWORD('your_existing_password'). This will store a new, and more secure, hash value in mysql.user. If this user is used in other scripts executed by PHP 5.2 or earlier you might need to remove the old-passwords flag from your my.cnf file ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 Z:\home\sipcms.local\www\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 Z:\home\sipcms.local\www\application\classes\controller\registration.php(17): Kohana_Database_PDO->query(1, 'SELECT * FROM `...')
#2 [internal function]: Controller_Registration->action_index()
#3 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-07 23:22:57 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]
2011-09-07 23:22:59 --- ERROR: Database_Exception [ 2000 ]: SQLSTATE[HY000] [2000] mysqlnd cannot connect to MySQL 4.1+ using the old insecure authentication. Please use an administration tool to reset your password with the command SET PASSWORD = PASSWORD('your_existing_password'). This will store a new, and more secure, hash value in mysql.user. If this user is used in other scripts executed by PHP 5.2 or earlier you might need to remove the old-passwords flag from your my.cnf file ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2011-09-07 23:22:59 --- STRACE: Database_Exception [ 2000 ]: SQLSTATE[HY000] [2000] mysqlnd cannot connect to MySQL 4.1+ using the old insecure authentication. Please use an administration tool to reset your password with the command SET PASSWORD = PASSWORD('your_existing_password'). This will store a new, and more secure, hash value in mysql.user. If this user is used in other scripts executed by PHP 5.2 or earlier you might need to remove the old-passwords flag from your my.cnf file ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 Z:\home\sipcms.local\www\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 Z:\home\sipcms.local\www\application\classes\controller\registration.php(17): Kohana_Database_PDO->query(1, 'SELECT * FROM `...')
#2 [internal function]: Controller_Registration->action_index()
#3 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-07 23:22:59 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]
2011-09-07 23:32:19 --- ERROR: Database_Exception [ 2000 ]: SQLSTATE[HY000] [2000] mysqlnd cannot connect to MySQL 4.1+ using the old insecure authentication. Please use an administration tool to reset your password with the command SET PASSWORD = PASSWORD('your_existing_password'). This will store a new, and more secure, hash value in mysql.user. If this user is used in other scripts executed by PHP 5.2 or earlier you might need to remove the old-passwords flag from your my.cnf file ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2011-09-07 23:32:19 --- STRACE: Database_Exception [ 2000 ]: SQLSTATE[HY000] [2000] mysqlnd cannot connect to MySQL 4.1+ using the old insecure authentication. Please use an administration tool to reset your password with the command SET PASSWORD = PASSWORD('your_existing_password'). This will store a new, and more secure, hash value in mysql.user. If this user is used in other scripts executed by PHP 5.2 or earlier you might need to remove the old-passwords flag from your my.cnf file ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 Z:\home\sipcms.local\www\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 Z:\home\sipcms.local\www\application\classes\controller\registration.php(17): Kohana_Database_PDO->query(1, 'SELECT * FROM `...')
#2 [internal function]: Controller_Registration->action_index()
#3 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-07 23:32:19 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]