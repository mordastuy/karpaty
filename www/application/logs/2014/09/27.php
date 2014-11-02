<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-27 06:28:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\backend.php [ 13 ] in file:line
2014-09-27 06:28:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-27 11:28:30 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-09-27 11:28:30 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\auth.php(9): Kohana_Controller_Template->before()
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(69): Controller_Backend_Auth->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-09-27 11:28:34 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-09-27 11:28:34 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\auth.php(9): Kohana_Controller_Template->before()
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(69): Controller_Backend_Auth->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-09-27 11:29:49 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-09-27 11:29:49 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\karpaty\www\application\classes\Controller\base.php(15): Kohana_Controller_Template->before()
#4 Z:\home\karpaty\www\application\classes\Controller\Backend\auth.php(9): Controller_Base->before()
#5 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(69): Controller_Backend_Auth->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-09-27 11:29:50 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-09-27 11:29:50 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\karpaty\www\application\classes\Controller\base.php(15): Kohana_Controller_Template->before()
#4 Z:\home\karpaty\www\application\classes\Controller\Backend\auth.php(9): Controller_Base->before()
#5 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(69): Controller_Backend_Auth->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-09-27 11:32:45 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-09-27 11:32:45 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\karpaty\www\application\classes\Controller\base.php(15): Kohana_Controller_Template->before()
#4 Z:\home\karpaty\www\application\classes\Controller\Backend\auth.php(9): Controller_Base->before()
#5 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(69): Controller_Backend_Auth->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-09-27 11:51:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: adminmenu ~ APPPATH\views\Backend\v_base_backend.php [ 32 ] in Z:\home\karpaty\www\application\views\Backend\v_base_backend.php:32
2014-09-27 11:51:29 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Backend\v_base_backend.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 32, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\application\views\Backend\v_base_backend.php:32
2014-09-27 16:51:58 --- CRITICAL: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\Model\subpage.php [ 82 ] in file:line
2014-09-27 16:51:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-27 17:00:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\Model\subpage.php [ 84 ] in file:line
2014-09-27 17:00:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-27 17:33:35 --- CRITICAL: Kohana_Exception [ 0 ]: The get_measures property does not exist in the Model_Measure class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php:603
2014-09-27 17:33:35 --- DEBUG: #0 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('get_measures')
#1 Z:\home\karpaty\www\application\classes\Controller\Backend\products.php(24): Kohana_ORM->__get('get_measures')
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Products->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php:603
2014-09-27 17:34:10 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Measure as array ~ APPPATH\views\Backend\products\v_products_add.php [ 26 ] in file:line
2014-09-27 17:34:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-27 17:34:26 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Measure as array ~ APPPATH\views\Backend\products\v_products_add.php [ 26 ] in file:line
2014-09-27 17:34:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-27 17:51:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: languages ~ APPPATH\views\Backend\products\v_products_edit.php [ 8 ] in Z:\home\karpaty\www\application\views\Backend\products\v_products_edit.php:8
2014-09-27 17:51:35 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Backend\products\v_products_edit.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 8, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Backend\v_base_backend.php(34): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Backend\products\v_products_edit.php:8
2014-09-27 17:51:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: languages ~ APPPATH\views\Backend\products\v_products_edit.php [ 8 ] in Z:\home\karpaty\www\application\views\Backend\products\v_products_edit.php:8
2014-09-27 17:51:51 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Backend\products\v_products_edit.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 8, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Backend\v_base_backend.php(34): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Backend\products\v_products_edit.php:8
2014-09-27 17:52:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: measures ~ APPPATH\views\Backend\products\v_products_edit.php [ 26 ] in Z:\home\karpaty\www\application\views\Backend\products\v_products_edit.php:26
2014-09-27 17:52:06 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Backend\products\v_products_edit.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 26, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Backend\v_base_backend.php(34): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Backend\products\v_products_edit.php:26
2014-09-27 17:53:44 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`karp`.`subpage`, CONSTRAINT `FK_page_id` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `subpage` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-09-27 17:53:44 --- DEBUG: #0 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `su...', false, Array)
#1 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\products.php(57): Kohana_ORM->save()
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Products->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-09-27 18:03:27 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\Controller\Backend\products.php [ 62 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\products.php:62
2014-09-27 18:03:27 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\products.php(62): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\karpaty...', 62, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Products->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\products.php:62
2014-09-27 18:03:57 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\Controller\Backend\products.php [ 62 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\products.php:62
2014-09-27 18:03:57 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\products.php(62): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\karpaty...', 62, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Products->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\products.php:62
2014-09-27 18:35:06 --- CRITICAL: Kohana_Exception [ 0 ]: The measure property does not exist in the Model_Info class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php:603
2014-09-27 18:35:06 --- DEBUG: #0 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('measure')
#1 Z:\home\karpaty\www\application\classes\Controller\Backend\products.php(68): Kohana_ORM->__get('measure')
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Products->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php:603
2014-09-27 18:35:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: measures ~ APPPATH\views\Backend\products\v_products_edit.php [ 20 ] in Z:\home\karpaty\www\application\views\Backend\products\v_products_edit.php:20
2014-09-27 18:35:41 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Backend\products\v_products_edit.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 20, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Backend\v_base_backend.php(34): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Backend\products\v_products_edit.php:20
2014-09-27 18:36:15 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\Backend\products\v_products_edit.php [ 20 ] in Z:\home\karpaty\www\application\views\Backend\products\v_products_edit.php:20
2014-09-27 18:36:15 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Backend\products\v_products_edit.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\karpaty...', 20, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Backend\v_base_backend.php(34): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Backend\products\v_products_edit.php:20
2014-09-27 19:05:16 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`karp`.`subpage`, CONSTRAINT `FK_language_id` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `subpage` (`page_id`, `type_id`, `isImage`, `subpage_name`, `parent_id`, `isInfo`) VALUES (3, 2, 0, 'None', 1, 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-09-27 19:05:16 --- DEBUG: #0 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `su...', false, Array)
#1 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\karpaty\www\application\classes\Model\subpage.php(77): Kohana_ORM->save()
#4 Z:\home\karpaty\www\application\classes\Controller\Backend\products.php(32): Model_Subpage->add_text(3, NULL, 0, '<p>test1</p>?', 1, 1, '2', '1000')
#5 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Products->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-09-27 19:26:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Subpage::edit_main() ~ APPPATH\classes\Controller\Backend\products.php [ 59 ] in file:line
2014-09-27 19:26:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line