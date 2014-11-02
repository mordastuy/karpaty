<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-21 11:35:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: items ~ APPPATH\views\Frontend\main\v_main_f.php [ 71 ] in Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php:71
2014-10-21 11:35:26 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 71, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(132): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php:71
2014-10-21 11:38:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: items ~ APPPATH\views\Frontend\main\v_main_f.php [ 71 ] in Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php:71
2014-10-21 11:38:20 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 71, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(132): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php:71
2014-10-21 11:54:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: items ~ APPPATH\views\Frontend\main\v_main_f.php [ 71 ] in Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php:71
2014-10-21 11:54:10 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 71, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(132): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php:71
2014-10-21 11:57:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Subpage::get_img() ~ APPPATH\classes\Controller\Frontend\main.php [ 17 ] in file:line
2014-10-21 11:57:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-21 13:49:15 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Subpage::get_parents_name(), called in Z:\home\karpaty\www\application\classes\Controller\Frontend\products.php on line 13 and defined ~ APPPATH\classes\Model\subpage.php [ 140 ] in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 13:49:15 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Model\subpage.php(140): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\karpaty...', 140, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Frontend\products.php(13): Model_Subpage->get_parents_name(3)
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Products->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Products))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 13:50:21 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Subpage::get_parents_name(), called in Z:\home\karpaty\www\application\classes\Controller\Frontend\services.php on line 13 and defined ~ APPPATH\classes\Model\subpage.php [ 140 ] in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 13:50:21 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Model\subpage.php(140): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\karpaty...', 140, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Frontend\services.php(13): Model_Subpage->get_parents_name(4)
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Services->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Services))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 13:51:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_parents_name ~ APPPATH\classes\Controller\Backend\services.php [ 157 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\services.php:157
2014-10-21 13:51:57 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\services.php(157): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 157, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Services->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Services))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\services.php:157
2014-10-21 13:52:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_parents_name ~ APPPATH\classes\Controller\Backend\services.php [ 157 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\services.php:157
2014-10-21 13:52:41 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\services.php(157): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 157, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Services->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Services))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\services.php:157
2014-10-21 13:54:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_parents_name ~ APPPATH\classes\Controller\Backend\services.php [ 157 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\services.php:157
2014-10-21 13:54:02 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\services.php(157): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 157, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Services->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Services))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\services.php:157
2014-10-21 13:56:31 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Subpage::get_parents_name(), called in Z:\home\karpaty\www\application\classes\Controller\Frontend\services.php on line 13 and defined ~ APPPATH\classes\Model\subpage.php [ 140 ] in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 13:56:31 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Model\subpage.php(140): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\karpaty...', 140, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Frontend\services.php(13): Model_Subpage->get_parents_name(4)
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Services->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Services))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 13:57:35 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Subpage::get_parents_name(), called in Z:\home\karpaty\www\application\classes\Controller\Frontend\photogallery.php on line 9 and defined ~ APPPATH\classes\Model\subpage.php [ 140 ] in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 13:57:35 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Model\subpage.php(140): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\karpaty...', 140, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Frontend\photogallery.php(9): Model_Subpage->get_parents_name(5)
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Photogallery->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Photogallery))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 13:57:52 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Subpage::get_parents_name(), called in Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php on line 149 and defined ~ APPPATH\classes\Model\subpage.php [ 140 ] in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 13:57:52 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Model\subpage.php(140): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\karpaty...', 140, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php(149): Model_Subpage->get_parents_name(5)
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Photogallery->action_view()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Photogallery))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 13:58:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_parents_name ~ APPPATH\classes\Controller\Backend\photogallery.php [ 169 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php:169
2014-10-21 13:58:25 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php(169): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 169, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Photogallery->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Photogallery))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php:169
2014-10-21 13:59:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_parents_name ~ APPPATH\classes\Controller\Backend\photogallery.php [ 169 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php:169
2014-10-21 13:59:45 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php(169): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 169, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Photogallery->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Photogallery))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\photogallery.php:169
2014-10-21 14:02:31 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Subpage::get_parents_name(), called in Z:\home\karpaty\www\application\classes\Controller\Frontend\photogallery.php on line 9 and defined ~ APPPATH\classes\Model\subpage.php [ 140 ] in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 14:02:31 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Model\subpage.php(140): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\karpaty...', 140, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Frontend\photogallery.php(9): Model_Subpage->get_parents_name(5)
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Photogallery->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Photogallery))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 14:03:31 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Subpage::get_parents_name(), called in Z:\home\karpaty\www\application\classes\Controller\Frontend\cooperation.php on line 13 and defined ~ APPPATH\classes\Model\subpage.php [ 140 ] in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 14:03:31 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Model\subpage.php(140): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\karpaty...', 140, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Frontend\cooperation.php(13): Model_Subpage->get_parents_name(7)
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Cooperation->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Cooperation))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 14:03:39 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Subpage::get_parents_name(), called in Z:\home\karpaty\www\application\classes\Controller\Frontend\cooperation.php on line 13 and defined ~ APPPATH\classes\Model\subpage.php [ 140 ] in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 14:03:39 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Model\subpage.php(140): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\karpaty...', 140, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Frontend\cooperation.php(13): Model_Subpage->get_parents_name(7)
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Cooperation->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Cooperation))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 14:04:33 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Subpage::get_parents_name(), called in Z:\home\karpaty\www\application\classes\Controller\Backend\cooperation.php on line 123 and defined ~ APPPATH\classes\Model\subpage.php [ 140 ] in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 14:04:33 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Model\subpage.php(140): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\karpaty...', 140, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Backend\cooperation.php(123): Model_Subpage->get_parents_name(7)
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Cooperation->action_view()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Cooperation))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 14:05:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_parents_name ~ APPPATH\classes\Controller\Backend\cooperation.php [ 143 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\cooperation.php:143
2014-10-21 14:05:16 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\cooperation.php(143): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 143, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Cooperation->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Cooperation))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\cooperation.php:143
2014-10-21 14:11:42 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Subpage::get_parents_name(), called in Z:\home\karpaty\www\application\classes\Controller\Backend\static.php on line 73 and defined ~ APPPATH\classes\Model\subpage.php [ 140 ] in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 14:11:42 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Model\subpage.php(140): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\karpaty...', 140, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Backend\static.php(73): Model_Subpage->get_parents_name(8)
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Static->action_view()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Static))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 14:12:07 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Subpage::get_parents_name(), called in Z:\home\karpaty\www\application\classes\Controller\Backend\static.php on line 73 and defined ~ APPPATH\classes\Model\subpage.php [ 140 ] in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 14:12:07 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Model\subpage.php(140): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\karpaty...', 140, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Backend\static.php(73): Model_Subpage->get_parents_name(8)
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Static->action_view()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Static))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\application\classes\Model\subpage.php:140
2014-10-21 14:12:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_parents_name ~ APPPATH\classes\Controller\Backend\static.php [ 81 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\static.php:81
2014-10-21 14:12:42 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\static.php(81): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 81, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Static->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Static))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\static.php:81
2014-10-21 14:16:19 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\Frontend\v_base_frontend.php [ 146 ] in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:146
2014-10-21 14:16:19 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(146): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\karpaty...', 146, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:146
2014-10-21 14:16:30 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\Frontend\v_base_frontend.php [ 146 ] in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:146
2014-10-21 14:16:30 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(146): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\karpaty...', 146, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:146
2014-10-21 14:17:04 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\Frontend\v_base_frontend.php [ 146 ] in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:146
2014-10-21 14:17:04 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(146): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\karpaty...', 146, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:146
2014-10-21 14:17:23 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\Frontend\v_base_frontend.php [ 146 ] in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:146
2014-10-21 14:17:23 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(146): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\karpaty...', 146, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_About))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:146