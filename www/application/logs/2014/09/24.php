<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-24 05:55:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: subpages_id ~ APPPATH\classes\Controller\Backend\main.php [ 43 ] in Z:\home\karpaty\www\application\classes\Controller\Backend\main.php:43
2014-09-24 05:55:54 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 43, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\karpaty\www\application\classes\Controller\Backend\main.php:43
2014-09-24 05:57:33 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\karpaty\www ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 05:57:33 --- DEBUG: #0 Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('')
#1 Z:\home\karpaty\www\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('')
#2 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(119): Kohana_Image::factory('')
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(39): Controller_Backend_Main->_upload_img('')
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 06:49:30 --- CRITICAL: ErrorException [ 2 ]: Missing argument 5 for Model_Subpage::add_text(), called in Z:\home\karpaty\www\application\classes\Controller\Backend\main.php on line 31 and defined ~ APPPATH\classes\Model\subpage.php [ 55 ] in Z:\home\karpaty\www\application\classes\Model\subpage.php:55
2014-09-24 06:49:30 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Model\subpage.php(55): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\karpaty...', 55, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(31): Model_Subpage->add_text(1, '1', 'wdfwf', 'sdfasfasdfasdf')
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\application\classes\Model\subpage.php:55
2014-09-24 06:52:09 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\karpaty\www ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 06:52:09 --- DEBUG: #0 Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('')
#1 Z:\home\karpaty\www\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('')
#2 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(119): Kohana_Image::factory('')
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(39): Controller_Backend_Main->_upload_img('')
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 06:55:45 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\karpaty\www ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 06:55:45 --- DEBUG: #0 Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('')
#1 Z:\home\karpaty\www\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('')
#2 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(119): Kohana_Image::factory('')
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(39): Controller_Backend_Main->_upload_img('')
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 06:57:54 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\karpaty\www ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 06:57:54 --- DEBUG: #0 Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('')
#1 Z:\home\karpaty\www\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('')
#2 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(119): Kohana_Image::factory('')
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(39): Controller_Backend_Main->_upload_img('')
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 06:59:28 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\karpaty\www ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 06:59:28 --- DEBUG: #0 Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('')
#1 Z:\home\karpaty\www\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('')
#2 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(119): Kohana_Image::factory('')
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(39): Controller_Backend_Main->_upload_img('')
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 07:05:55 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\karpaty\www ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 07:05:55 --- DEBUG: #0 Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('')
#1 Z:\home\karpaty\www\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('')
#2 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(119): Kohana_Image::factory('')
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(39): Controller_Backend_Main->_upload_img('')
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 07:07:28 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\karpaty\www ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 07:07:28 --- DEBUG: #0 Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('')
#1 Z:\home\karpaty\www\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('')
#2 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(119): Kohana_Image::factory('')
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(39): Controller_Backend_Main->_upload_img('')
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 07:15:02 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\karpaty\www ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 07:15:02 --- DEBUG: #0 Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('')
#1 Z:\home\karpaty\www\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('')
#2 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(119): Kohana_Image::factory('')
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(39): Controller_Backend_Main->_upload_img('')
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 07:17:59 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\karpaty\www ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 07:17:59 --- DEBUG: #0 Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('')
#1 Z:\home\karpaty\www\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('')
#2 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(119): Kohana_Image::factory('')
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(39): Controller_Backend_Main->_upload_img('')
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 07:21:09 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\karpaty\www ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 07:21:09 --- DEBUG: #0 Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('')
#1 Z:\home\karpaty\www\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('')
#2 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(119): Kohana_Image::factory('')
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(39): Controller_Backend_Main->_upload_img('')
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\modules\image\classes\Kohana\Image\GD.php:91
2014-09-24 07:28:00 --- CRITICAL: ErrorException [ 2 ]: mysql_query() [function.mysql-query]: MySQL server has gone away ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 186 ] in file:line
2014-09-24 07:28:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_query() [...', 'Z:\home\karpaty...', 186, Array)
#1 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\MySQL.php(186): mysql_query('SELECT `text`.`...', Resource id #77)
#2 Z:\home\karpaty\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `text`.`...', false, Array)
#3 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#4 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#5 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(653): Kohana_ORM->find()
#6 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('texts')
#7 Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php(3): Kohana_ORM->__get('texts')
#8 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#9 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#10 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#11 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(34): Kohana_View->__toString()
#12 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#13 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#14 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#15 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#16 [internal function]: Kohana_Controller->execute()
#17 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#18 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#21 {main} in file:line
2014-09-24 07:56:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\Backend\main\v_main_edit.php [ 3 ] in file:line
2014-09-24 07:56:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-24 08:03:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH\views\Frontend\main\v_main_f.php [ 4 ] in Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php:4
2014-09-24 08:03:34 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 4, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(34): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Frontend\main\v_main_f.php:4
2014-09-24 11:20:57 --- CRITICAL: ErrorException [ 1 ]: Cannot use string offset as an array ~ APPPATH\views\Frontend\main\v_main_f.php [ 4 ] in file:line
2014-09-24 11:20:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-24 12:36:38 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in Z:\home\karpaty\www\system\classes\Kohana\Cookie.php:67
2014-09-24 12:36:38 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 Z:\home\karpaty\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\karpaty\www\system\classes\Kohana\Cookie.php:67
2014-09-24 14:04:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*' ~ APPPATH\views\Backend\main\v_main_edit.php [ 24 ] in file:line
2014-09-24 14:04:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line