<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-30 13:36:12 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'paernt_id' in 'where clause' [ SELECT `subpage`.`id` AS `id`, `subpage`.`page_id` AS `page_id`, `subpage`.`parent_id` AS `parent_id`, `subpage`.`language_id` AS `language_id`, `subpage`.`type_id` AS `type_id`, `subpage`.`isInfo` AS `isInfo`, `subpage`.`isImage` AS `isImage`, `subpage`.`subpage_name` AS `subpage_name` FROM `subpage` AS `subpage` WHERE `page_id` = 3 AND `paernt_id` = 0 LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-09-30 13:36:12 --- DEBUG: #0 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `subpage...', false, Array)
#1 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(266): Kohana_ORM->find()
#4 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 Z:\home\karpaty\www\application\classes\Controller\Backend\products.php(105): Kohana_ORM::factory('subpage', Array)
#6 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Products->action_view()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#9 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-09-30 13:37:55 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\products.php:105
2014-09-30 13:37:55 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\products.php(105): Kohana_ORM->find_all()
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Products->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\products.php:105
2014-09-30 13:39:28 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\products.php:105
2014-09-30 13:39:28 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\products.php(105): Kohana_ORM->find_all()
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Products->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\products.php:105
2014-09-30 14:08:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\Backend\products\v_products_view.php [ 2 ] in Z:\home\karpaty\www\application\views\Backend\products\v_products_view.php:2
2014-09-30 14:08:27 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Backend\products\v_products_view.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 2, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Backend\v_base_backend.php(35): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Backend\products\v_products_view.php:2
2014-09-30 14:40:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Model\subpage.php [ 130 ] in file:line
2014-09-30 14:40:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-30 14:42:27 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'lang_id' in 'where clause' [ SELECT `subpage`.`id` AS `id`, `subpage`.`page_id` AS `page_id`, `subpage`.`parent_id` AS `parent_id`, `subpage`.`language_id` AS `language_id`, `subpage`.`type_id` AS `type_id`, `subpage`.`isInfo` AS `isInfo`, `subpage`.`isImage` AS `isImage`, `subpage`.`subpage_name` AS `subpage_name` FROM `subpage` AS `subpage` WHERE `page_id` = 3 AND `parent_id` IN ('7', '8') AND `lang_id` = 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-09-30 14:42:27 --- DEBUG: #0 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `subpage...', 'Model_Subpage', Array)
#1 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\karpaty\www\application\classes\Model\subpage.php(154): Kohana_ORM->find_all()
#4 Z:\home\karpaty\www\application\classes\Controller\Backend\products.php(93): Model_Subpage->get_items(Array, 1)
#5 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Products->action_view()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Products))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-09-30 16:12:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\Backend\products\v_products_add.php [ 40 ] in file:line
2014-09-30 16:12:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line