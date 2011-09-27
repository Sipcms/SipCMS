<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-11 20:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-08-11 20:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-08-11 20:31:25 --- ERROR: ErrorException [ 1 ]: Class 'Sip_Controller' not found ~ APPPATH\classes\controller\main.php [ 3 ]
2011-08-11 20:31:25 --- STRACE: ErrorException [ 1 ]: Class 'Sip_Controller' not found ~ APPPATH\classes\controller\main.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-11 20:31:58 --- ERROR: ErrorException [ 1 ]: Class 'Sip_Controller' not found ~ APPPATH\classes\controller\main.php [ 3 ]
2011-08-11 20:31:58 --- STRACE: ErrorException [ 1 ]: Class 'Sip_Controller' not found ~ APPPATH\classes\controller\main.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-11 20:33:02 --- ERROR: ErrorException [ 1 ]: Class 'Sip_Controller' not found ~ APPPATH\classes\controller\main.php [ 3 ]
2011-08-11 20:33:02 --- STRACE: ErrorException [ 1 ]: Class 'Sip_Controller' not found ~ APPPATH\classes\controller\main.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-11 22:46:00 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Session::set(), called in Z:\home\sipcms.local\www\application\classes\controller\main.php on line 7 and defined ~ SYSPATH\classes\kohana\session.php [ 243 ]
2011-08-11 22:46:00 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Session::set(), called in Z:\home\sipcms.local\www\application\classes\controller\main.php on line 7 and defined ~ SYSPATH\classes\kohana\session.php [ 243 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(243): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\sipcms....', 243, Array)
#1 Z:\home\sipcms.local\www\application\classes\controller\main.php(7): Kohana_Session->set('FOO')
#2 [internal function]: Controller_Main->action_index()
#3 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-11 22:46:01 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]
2011-08-11 22:46:47 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Session::set(), called in Z:\home\sipcms.local\www\application\classes\sip\controller.php on line 9 and defined ~ SYSPATH\classes\kohana\session.php [ 243 ]
2011-08-11 22:46:47 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Session::set(), called in Z:\home\sipcms.local\www\application\classes\sip\controller.php on line 9 and defined ~ SYSPATH\classes\kohana\session.php [ 243 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(243): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\sipcms....', 243, Array)
#1 Z:\home\sipcms.local\www\application\classes\sip\controller.php(9): Kohana_Session->set('FOO')
#2 [internal function]: Sip_Controller->before()
#3 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-11 22:46:47 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]
2011-08-11 22:46:49 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Session::set(), called in Z:\home\sipcms.local\www\application\classes\sip\controller.php on line 9 and defined ~ SYSPATH\classes\kohana\session.php [ 243 ]
2011-08-11 22:46:49 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Session::set(), called in Z:\home\sipcms.local\www\application\classes\sip\controller.php on line 9 and defined ~ SYSPATH\classes\kohana\session.php [ 243 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(243): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\sipcms....', 243, Array)
#1 Z:\home\sipcms.local\www\application\classes\sip\controller.php(9): Kohana_Session->set('FOO')
#2 [internal function]: Sip_Controller->before()
#3 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-11 22:46:49 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]
2011-08-11 22:46:49 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Session::set(), called in Z:\home\sipcms.local\www\application\classes\sip\controller.php on line 9 and defined ~ SYSPATH\classes\kohana\session.php [ 243 ]
2011-08-11 22:46:49 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Session::set(), called in Z:\home\sipcms.local\www\application\classes\sip\controller.php on line 9 and defined ~ SYSPATH\classes\kohana\session.php [ 243 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(243): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\sipcms....', 243, Array)
#1 Z:\home\sipcms.local\www\application\classes\sip\controller.php(9): Kohana_Session->set('FOO')
#2 [internal function]: Sip_Controller->before()
#3 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-11 22:46:49 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]
2011-08-11 22:46:50 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Session::set(), called in Z:\home\sipcms.local\www\application\classes\sip\controller.php on line 9 and defined ~ SYSPATH\classes\kohana\session.php [ 243 ]
2011-08-11 22:46:50 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Session::set(), called in Z:\home\sipcms.local\www\application\classes\sip\controller.php on line 9 and defined ~ SYSPATH\classes\kohana\session.php [ 243 ]
--
#0 Z:\home\sipcms.local\www\system\classes\kohana\session.php(243): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\sipcms....', 243, Array)
#1 Z:\home\sipcms.local\www\application\classes\sip\controller.php(9): Kohana_Session->set('FOO')
#2 [internal function]: Sip_Controller->before()
#3 Z:\home\sipcms.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\sipcms.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\sipcms.local\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\sipcms.local\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-11 22:46:50 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]
2011-08-11 22:47:09 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]
2011-08-11 22:47:55 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]
2011-08-11 22:47:56 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]
2011-08-11 22:48:21 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]
2011-08-11 22:48:22 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]
2011-08-11 22:48:22 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]
2011-08-11 22:48:22 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]
2011-08-11 22:48:23 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH\classes\kohana\encrypt.php [ 68 ]