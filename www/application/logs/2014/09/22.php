<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-22 12:50:29 --- CRITICAL: Database_Exception [ 1146 ]: Table 'karp.subpages' doesn't exist [ SHOW FULL COLUMNS FROM `subpages` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-09-22 12:50:29 --- DEBUG: #0 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('subpages')
#2 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\karpaty\www\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#6 Z:\home\karpaty\www\application\classes\Controller\Frontend\main.php(15): Kohana_Model::factory('subpage')
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-09-22 12:54:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-09-22 12:54:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-22 12:56:05 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-09-22 12:56:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-22 12:59:14 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-09-22 12:59:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-22 12:59:39 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-09-22 12:59:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-22 13:00:39 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-09-22 13:00:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-22 13:02:10 --- CRITICAL: Database_Exception [ 1146 ]: Table 'karp.about' doesn't exist [ SELECT `text_ua` FROM `about` WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-09-22 13:02:10 --- DEBUG: #0 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `text_ua...', false, Array)
#1 Z:\home\karpaty\www\application\classes\Model\about.php(8): Kohana_Database_Query->execute()
#2 Z:\home\karpaty\www\application\classes\Controller\Frontend\about.php(9): Model_About->get_text()
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_About->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_About))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-09-22 13:02:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH\classes\Model\subpage.php [ 32 ] in file:line
2014-09-22 13:02:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-22 13:10:03 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\Frontend\main\v_main_f.php [ 2 ] in Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php:2
2014-09-22 13:10:03 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php(2): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\karpaty...', 2, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(34): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php:2
2014-09-22 13:11:43 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\karpaty\www\application\classes\Controller\Frontend\main.php on line 16 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\karpaty\www\system\classes\Kohana\View.php:28
2014-09-22 13:11:43 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\karpaty...', 28, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Frontend\main.php(16): Kohana_View::factory('frontend/main/v...', Object(Model_Subpage))
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\system\classes\Kohana\View.php:28
2014-09-22 13:11:58 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\karpaty\www\application\classes\Controller\Frontend\main.php on line 16 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\karpaty\www\system\classes\Kohana\View.php:28
2014-09-22 13:11:58 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\karpaty...', 28, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Frontend\main.php(16): Kohana_View::factory('frontend/main/v...', Object(Model_Subpage))
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\system\classes\Kohana\View.php:28
2014-09-22 13:17:11 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\karpaty\www\application\classes\Controller\Frontend\main.php on line 16 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\karpaty\www\system\classes\Kohana\View.php:28
2014-09-22 13:17:11 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\karpaty...', 28, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Frontend\main.php(16): Kohana_View::factory('frontend/main/v...', Object(Model_Subpage))
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\system\classes\Kohana\View.php:28
2014-09-22 15:00:09 --- CRITICAL: Kohana_Exception [ 0 ]: The images property does not exist in the Model_Subpage class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php:603
2014-09-22 15:00:09 --- DEBUG: #0 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('images')
#1 Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php(2): Kohana_ORM->__get('images')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#4 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(34): Kohana_View->__toString()
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#7 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php:603
2014-09-22 15:00:53 --- CRITICAL: Kohana_Exception [ 0 ]: The images property does not exist in the Model_Subpage class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php:603
2014-09-22 15:00:53 --- DEBUG: #0 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('images')
#1 Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php(2): Kohana_ORM->__get('images')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#4 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(34): Kohana_View->__toString()
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#7 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php:603
2014-09-22 15:01:43 --- CRITICAL: Kohana_Exception [ 0 ]: The images property does not exist in the Model_Subpage class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php:603
2014-09-22 15:01:43 --- DEBUG: #0 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('images')
#1 Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php(2): Kohana_ORM->__get('images')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#4 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(34): Kohana_View->__toString()
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#7 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php:603
2014-09-22 15:02:25 --- CRITICAL: Kohana_Exception [ 0 ]: The images property does not exist in the Model_Subpage class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php:603
2014-09-22 15:02:25 --- DEBUG: #0 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('images')
#1 Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php(2): Kohana_ORM->__get('images')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#4 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(34): Kohana_View->__toString()
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#7 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php:603
2014-09-22 15:02:30 --- CRITICAL: Kohana_Exception [ 0 ]: The images property does not exist in the Model_Subpage class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php:603
2014-09-22 15:02:30 --- DEBUG: #0 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('images')
#1 Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php(2): Kohana_ORM->__get('images')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#4 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(34): Kohana_View->__toString()
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#7 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php:603