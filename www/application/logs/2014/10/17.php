<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-17 11:48:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_parents_name ~ APPPATH\classes\Controller\Backend\services.php [ 157 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\services.php:157
2014-10-17 11:48:53 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\services.php(157): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 157, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Services->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Services))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\services.php:157
2014-10-17 12:58:06 --- CRITICAL: View_Exception [ 0 ]: The requested view /backend/servises/v_services_edit could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-10-17 12:58:06 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/backend/servis...')
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/backend/servis...', Array)
#2 Z:\home\karpaty\www\application\classes\Controller\Backend\services.php(121): Kohana_View::factory('/backend/servis...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Services->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Services))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-10-17 16:13:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_parents_name ~ APPPATH\classes\Controller\Backend\cooperation.php [ 146 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\cooperation.php:146
2014-10-17 16:13:36 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\cooperation.php(146): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 146, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Cooperation->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Cooperation))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\cooperation.php:146
2014-10-17 16:21:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: parent_id ~ APPPATH\views\Backend\cooperation\v_cooperation_add.php [ 13 ] in Z:\home\karpaty\www\application\views\Backend\cooperation\v_cooperation_add.php:13
2014-10-17 16:21:17 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Backend\cooperation\v_cooperation_add.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 13, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Backend\v_base_backend.php(110): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Cooperation))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Backend\cooperation\v_cooperation_add.php:13