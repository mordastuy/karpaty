<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-15 13:00:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\Controller\base.php [ 10 ] in file:line
2014-09-15 13:00:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-15 13:04:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: current_lang ~ APPPATH\views\Frontend\v_base_frontend.php [ 3 ] in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:3
2014-09-15 13:04:59 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 3, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:3
2014-09-15 13:05:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: current_lang ~ APPPATH\views\Frontend\v_base_frontend.php [ 3 ] in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:3
2014-09-15 13:05:00 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 3, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:3
2014-09-15 13:05:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: site_title ~ APPPATH\views\Frontend\v_base_frontend.php [ 6 ] in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:6
2014-09-15 13:05:32 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 6, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:6
2014-09-15 13:05:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: site_title ~ APPPATH\views\Frontend\v_base_frontend.php [ 6 ] in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:6
2014-09-15 13:05:33 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 6, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:6
2014-09-15 13:09:08 --- CRITICAL: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\HTML.php [ 209 ] in file:line
2014-09-15 13:09:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'Z:\home\karpaty...', 209, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\HTML.php(209): strpos(Array, '://')
#2 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(18): Kohana_HTML::style(Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#4 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#5 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#9 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#12 {main} in file:line