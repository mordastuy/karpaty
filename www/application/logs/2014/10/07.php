<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-07 13:46:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_parents_name ~ APPPATH\classes\Controller\Frontend\products.php [ 19 ] in Z:\home\karpaty\www\application\classes\Controller\Frontend\products.php:19
2014-10-07 13:46:19 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Frontend\products.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 19, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Products->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Products))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Frontend\products.php:19
2014-10-07 13:54:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_parents_name ~ APPPATH\classes\Controller\Frontend\products.php [ 19 ] in Z:\home\karpaty\www\application\classes\Controller\Frontend\products.php:19
2014-10-07 13:54:40 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Frontend\products.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 19, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Products->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Products))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Frontend\products.php:19
2014-10-07 14:03:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_parents_name ~ APPPATH\classes\Controller\Frontend\products.php [ 19 ] in Z:\home\karpaty\www\application\classes\Controller\Frontend\products.php:19
2014-10-07 14:03:58 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Frontend\products.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 19, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Products->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Products))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Frontend\products.php:19
2014-10-07 14:26:46 --- CRITICAL: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_Subpage class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php:603
2014-10-07 14:26:46 --- DEBUG: #0 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('tests')
#1 Z:\home\karpaty\www\application\views\Frontend\products\v_products_f.php(32): Kohana_ORM->__get('tests')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#4 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(131): Kohana_View->__toString()
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#7 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Products))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php:603