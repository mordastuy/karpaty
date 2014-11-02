<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-28 07:21:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Controller\Backend\products.php [ 43 ] in file:line
2014-09-28 07:21:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 15:24:06 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Backend\products.php [ 29 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\products.php:29
2014-09-28 15:24:06 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\products.php(29): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\karpaty...', 29, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Products->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\products.php:29
2014-09-28 15:24:16 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Backend\products.php [ 29 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\products.php:29
2014-09-28 15:24:16 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\products.php(29): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\karpaty...', 29, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Products->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\products.php:29
2014-09-28 15:38:47 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Controller\Backend\products.php [ 30 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\products.php:30
2014-09-28 15:38:47 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\products.php(30): Kohana_Core::error_handler(4096, 'Object of class...', 'Z:\home\karpaty...', 30, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Products->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\products.php:30
2014-09-28 15:39:43 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Backend\products.php [ 30 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\products.php:30
2014-09-28 15:39:43 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\products.php(30): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\karpaty...', 30, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Products->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\products.php:30
2014-09-28 15:39:50 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Controller\Backend\products.php [ 30 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\products.php:30
2014-09-28 15:39:50 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\products.php(30): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\karpaty...', 30, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Products->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\products.php:30