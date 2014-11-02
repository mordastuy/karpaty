<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-06 13:15:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH\views\Frontend\v_base_frontend.php [ 65 ] in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:65
2014-10-06 13:15:24 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 65, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_About))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:65
2014-10-06 14:37:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\base.php [ 46 ] in file:line
2014-10-06 14:37:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line