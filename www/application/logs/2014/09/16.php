<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-16 12:13:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\Frontend\v_base_frontend.php [ 31 ] in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:31
2014-09-16 12:13:38 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 31, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:31
2014-09-16 14:08:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\widget.php [ 64 ] in file:line
2014-09-16 14:08:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-16 14:09:49 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: widgets ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in Z:\home\karpaty\www\application\classes\widget.php:80
2014-09-16 14:09:49 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\widget.php(80): Kohana_Route::get('widgets')
#1 Z:\home\karpaty\www\application\classes\widget.php(37): Widget->render()
#2 Z:\home\karpaty\www\application\classes\Controller\frontend.php(11): Widget::load('widgets/topmenu')
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(69): Controller_Frontend->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Services))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\karpaty\www\application\classes\widget.php:80
2014-09-16 14:10:05 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: widgets ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in Z:\home\karpaty\www\application\classes\widget.php:80
2014-09-16 14:10:05 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\widget.php(80): Kohana_Route::get('widgets')
#1 Z:\home\karpaty\www\application\classes\widget.php(37): Widget->render()
#2 Z:\home\karpaty\www\application\classes\Controller\frontend.php(11): Widget::load('widgets/topmenu')
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(69): Controller_Frontend->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\karpaty\www\application\classes\widget.php:80
2014-09-16 14:10:12 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: widgets ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in Z:\home\karpaty\www\application\classes\widget.php:80
2014-09-16 14:10:12 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\widget.php(80): Kohana_Route::get('widgets')
#1 Z:\home\karpaty\www\application\classes\widget.php(37): Widget->render()
#2 Z:\home\karpaty\www\application\classes\Controller\frontend.php(11): Widget::load('widgets/topmenu')
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(69): Controller_Frontend->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\karpaty\www\application\classes\widget.php:80
2014-09-16 14:12:21 --- CRITICAL: View_Exception [ 0 ]: The requested view frontend/photogallery/v_photogalerry_f could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-09-16 14:12:21 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('frontend/photog...')
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('frontend/photog...', NULL)
#2 Z:\home\karpaty\www\application\classes\Controller\Frontend\photogallery.php(9): Kohana_View::factory('frontend/photog...')
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Photogallery->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Photogallery))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-09-16 14:13:13 --- CRITICAL: View_Exception [ 0 ]: The requested view frontend/photogallery/v_photogalerry_f could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-09-16 14:13:13 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('frontend/photog...')
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('frontend/photog...', NULL)
#2 Z:\home\karpaty\www\application\classes\Controller\Frontend\photogallery.php(9): Kohana_View::factory('frontend/photog...')
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Photogallery->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Photogallery))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-09-16 14:15:41 --- CRITICAL: View_Exception [ 0 ]: The requested view frontend/photogallery/v_photogalerry_f could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-09-16 14:15:41 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('frontend/photog...')
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('frontend/photog...', NULL)
#2 Z:\home\karpaty\www\application\classes\Controller\Frontend\photogallery.php(9): Kohana_View::factory('frontend/photog...')
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Photogallery->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Photogallery))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-09-16 14:15:53 --- CRITICAL: View_Exception [ 0 ]: The requested view frontend/photogallery/v_photogalerry_f could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\karpaty\www\system\classes\Kohana\View.php:137
2014-09-16 14:15:53 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('frontend/photog...')
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('frontend/photog...', NULL)
#2 Z:\home\karpaty\www\application\classes\Controller\Frontend\photogallery.php(9): Kohana_View::factory('frontend/photog...')
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Photogallery->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Photogallery))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\karpaty\www\system\classes\Kohana\View.php:137