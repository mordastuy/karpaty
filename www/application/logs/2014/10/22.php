<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-22 09:09:31 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'parent_in' in 'where clause' [ SELECT `subpage`.`id` AS `id`, `subpage`.`page_id` AS `page_id`, `subpage`.`parent_id` AS `parent_id`, `subpage`.`language_id` AS `language_id`, `subpage`.`type_id` AS `type_id`, `subpage`.`isInfo` AS `isInfo`, `subpage`.`isImage` AS `isImage`, `subpage`.`subpage_name` AS `subpage_name` FROM `subpage` AS `subpage` WHERE `parent_in` = 0 OR `language_id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-22 09:09:31 --- DEBUG: #0 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `subpage...', false, Array)
#1 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php(50): Kohana_ORM->find()
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Photogallery->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Photogallery))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-22 09:09:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\Controller\Backend\photogallery.php [ 77 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php:77
2014-10-22 09:09:58 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php(77): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 77, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Photogallery->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Photogallery))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php:77
2014-10-22 09:16:40 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Subpage as array ~ APPPATH\classes\Controller\Backend\photogallery.php [ 53 ] in file:line
2014-10-22 09:16:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-22 09:48:51 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`karp`.`subpage`, CONSTRAINT `FK_language_id` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `subpage` (`page_id`, `type_id`, `isImage`, `subpage_name`, `parent_id`, `isInfo`) VALUES (5, 2, 1, 'None', '101', 0) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-22 09:48:51 --- DEBUG: #0 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `su...', false, Array)
#1 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\karpaty\www\application\classes\Model\subpage.php(71): Kohana_ORM->save()
#4 Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php(54): Model_Subpage->add_text(5, NULL, 1, '<p>?????? ?????...', '101', 0)
#5 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Photogallery->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Photogallery))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-22 10:15:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\Controller\Backend\photogallery.php [ 78 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php:78
2014-10-22 10:15:17 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php(78): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 78, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Photogallery->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Photogallery))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php:78