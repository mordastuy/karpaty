<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-09 15:46:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\Frontend\v_base_frontend.php [ 131 ] in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:131
2014-10-09 15:46:05 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(131): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 131, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Contacts))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:131
2014-10-09 15:52:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\Frontend\v_base_frontend.php [ 131 ] in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:131
2014-10-09 15:52:28 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(131): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 131, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Contacts))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:131