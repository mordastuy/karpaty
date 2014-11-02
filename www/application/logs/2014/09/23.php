<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-23 04:32:26 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\Backend\main\v_main_edit.php [ 19 ] in Z:\home\karpaty\www\application\views\Backend\main\v_main_edit.php:19
2014-09-23 04:32:26 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Backend\main\v_main_edit.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\karpaty...', 19, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Backend\v_base_backend.php(30): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Backend\main\v_main_edit.php:19
2014-09-23 04:37:43 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\Backend\main\v_main_edit.php [ 19 ] in Z:\home\karpaty\www\application\views\Backend\main\v_main_edit.php:19
2014-09-23 04:37:43 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Backend\main\v_main_edit.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\karpaty...', 19, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Backend\v_base_backend.php(30): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Backend\main\v_main_edit.php:19
2014-09-23 04:42:18 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_all() on a non-object ~ APPPATH\views\Backend\main\v_main_edit.php [ 20 ] in file:line
2014-09-23 04:42:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-23 04:53:21 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Image as array ~ APPPATH\views\Backend\main\v_main_edit.php [ 23 ] in file:line
2014-09-23 04:53:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-23 04:53:26 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Image as array ~ APPPATH\views\Backend\main\v_main_edit.php [ 23 ] in file:line
2014-09-23 04:53:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-23 05:42:36 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'imege_href' in 'field list' [ INSERT INTO `images` (`subpage_id`, `imege_href`) VALUES (5, NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-09-23 05:42:36 --- DEBUG: #0 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `im...', false, Array)
#1 Z:\home\karpaty\www\application\classes\Model\main.php(53): Kohana_Database_Query->execute()
#2 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(56): Model_Main->edit_main('1', '???????????????...', '?????????? ????...', NULL)
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-09-23 06:11:02 --- CRITICAL: Database_Exception [ 1146 ]: Table 'karp.subpages' doesn't exist [ SELECT `id` FROM `subpages` WHERE `page_id` = 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-09-23 06:11:02 --- DEBUG: #0 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `id` FRO...', false, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(57): Kohana_Database_Query->execute()
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-09-23 06:15:00 --- CRITICAL: Database_Exception [ 1146 ]: Table 'karp.subpages' doesn't exist [ SELECT `id` FROM `subpages` WHERE `page_id` = 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-09-23 06:15:00 --- DEBUG: #0 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `id` FRO...', false, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(57): Kohana_Database_Query->execute()
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-09-23 06:16:03 --- CRITICAL: Database_Exception [ 1146 ]: Table 'karp.subpages' doesn't exist [ SELECT `id` FROM `subpages` WHERE `page_id` = 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-09-23 06:16:03 --- DEBUG: #0 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `id` FRO...', false, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(57): Kohana_Database_Query->execute()
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-09-23 06:20:17 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\Kohana\Database.php [ 461 ] in Z:\home\karpaty\www\modules\database\classes\Kohana\Database.php:461
2014-09-23 06:20:17 --- DEBUG: #0 Z:\home\karpaty\www\modules\database\classes\Kohana\Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', 'Z:\home\karpaty...', 461, Array)
#1 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote(Object(Database_MySQL_Result))
#2 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#3 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 Z:\home\karpaty\www\application\classes\Model\subpage.php(52): Kohana_Database_Query->execute()
#5 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(52): Model_Subpage->get_images(Object(Database_MySQL_Result))
#6 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#9 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\karpaty\www\modules\database\classes\Kohana\Database.php:461
2014-09-23 06:21:58 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-09-23 06:21:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\karpaty...', 33, Array)
#1 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #80, 'id')
#2 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 Z:\home\karpaty\www\application\classes\Model\subpage.php(50): Kohana_Database_Result->offsetGet('id')
#4 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(52): Model_Subpage->get_images(Object(Database_MySQL_Result))
#5 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-09-23 06:22:57 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-09-23 06:22:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\karpaty...', 33, Array)
#1 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #80, 'id')
#2 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(51): Kohana_Database_Result->offsetGet('id')
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-09-23 06:23:18 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-09-23 06:23:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\karpaty...', 33, Array)
#1 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #80, 'id')
#2 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(51): Kohana_Database_Result->offsetGet('id')
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-09-23 06:24:38 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-09-23 06:24:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\karpaty...', 33, Array)
#1 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #80, 'id')
#2 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(51): Kohana_Database_Result->offsetGet('id')
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-09-23 06:26:03 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-09-23 06:26:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\karpaty...', 33, Array)
#1 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #80, 'id')
#2 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(51): Kohana_Database_Result->offsetGet('id')
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-09-23 06:27:44 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-09-23 06:27:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\karpaty...', 33, Array)
#1 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #80, 'id')
#2 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(51): Kohana_Database_Result->offsetGet('id')
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-09-23 06:32:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: t ~ APPPATH\classes\Controller\Backend\main.php [ 55 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\main.php:55
2014-09-23 06:32:34 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 55, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\main.php:55
2014-09-23 06:32:43 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-09-23 06:32:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\karpaty...', 33, Array)
#1 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #80, 'id')
#2 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(55): Kohana_Database_Result->offsetGet('id')
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-09-23 06:41:54 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Subpage::get_text(), called in Z:\home\karpaty\www\application\classes\Controller\Frontend\main.php on line 15 and defined ~ APPPATH\classes\Model\subpage.php [ 39 ] in Z:\home\karpaty\www\application\classes\Model\subpage.php:39
2014-09-23 06:41:54 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Model\subpage.php(39): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\karpaty...', 39, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Frontend\main.php(15): Model_Subpage->get_text()
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\application\classes\Model\subpage.php:39