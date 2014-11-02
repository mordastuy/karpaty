<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-19 14:02:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\Frontend\about\v_about_f.php [ 1 ] in Z:\home\karpaty\www\application\views\Frontend\about\v_about_f.php:1
2014-09-19 14:02:03 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\about\v_about_f.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 1, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(33): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_About))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Frontend\about\v_about_f.php:1
2014-09-19 14:02:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH\views\Frontend\about\v_about_f.php [ 1 ] in Z:\home\karpaty\www\application\views\Frontend\about\v_about_f.php:1
2014-09-19 14:02:18 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\about\v_about_f.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 1, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(33): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_About))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Frontend\about\v_about_f.php:1
2014-09-19 14:05:29 --- CRITICAL: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH\classes\Model\about.php [ 7 ] in file:line
2014-09-19 14:05:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-19 14:06:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::were() ~ APPPATH\classes\Model\about.php [ 7 ] in file:line
2014-09-19 14:06:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-19 14:06:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::were() ~ APPPATH\classes\Model\about.php [ 7 ] in file:line
2014-09-19 14:06:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-19 14:07:15 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\karpaty\www\application\classes\Controller\Frontend\about.php on line 10 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\karpaty\www\system\classes\Kohana\View.php:28
2014-09-19 14:07:15 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\karpaty...', 28, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Frontend\about.php(10): Kohana_View::factory('frontend/about/...', Object(Database_MySQL_Result))
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_About->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_About))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\system\classes\Kohana\View.php:28
2014-09-19 14:10:17 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-09-19 14:10:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\karpaty...', 33, Array)
#1 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #83, 'text_ua')
#2 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('text_ua')
#3 Z:\home\karpaty\www\application\views\Frontend\about\v_about_f.php(1): Kohana_Database_Result->offsetGet('text_ua')
#4 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(33): Kohana_View->__toString()
#8 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#9 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#10 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_About))
#14 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#17 {main} in file:line