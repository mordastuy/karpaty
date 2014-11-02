<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-05 09:17:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\Controller\Backend\photogallery.php [ 70 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php:70
2014-10-05 09:17:17 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 70, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Photogallery->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Photogallery))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php:70
2014-10-05 09:34:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\Controller\Backend\photogallery.php [ 70 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php:70
2014-10-05 09:34:09 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 70, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Photogallery->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Photogallery))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php:70
2014-10-05 09:46:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: items ~ APPPATH\classes\Controller\Backend\photogallery.php [ 157 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php:157
2014-10-05 09:46:09 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php(157): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 157, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Photogallery->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Photogallery))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php:157
2014-10-05 10:08:28 --- CRITICAL: View_Exception [ 0 ]: The requested view /backend/photogallery/v_products_edit could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-10-05 10:08:28 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/backend/photog...')
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/backend/photog...', Array)
#2 Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php(133): Kohana_View::factory('/backend/photog...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Photogallery->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Photogallery))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-10-05 14:16:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\Frontend\photogallery\v_photogallery_f.php [ 30 ] in file:line
2014-10-05 14:16:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-05 14:17:14 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Subpage class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php:603
2014-10-05 14:17:14 --- DEBUG: #0 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 Z:\home\karpaty\www\application\views\Frontend\photogallery\v_photogallery_f.php(14): Kohana_ORM->__get('name')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#4 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(108): Kohana_View->__toString()
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#7 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Photogallery))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php:603