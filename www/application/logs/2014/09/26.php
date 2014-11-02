<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-26 02:19:25 --- CRITICAL: ErrorException [ 2 ]: Missing argument 3 for Model_Main::edit_main(), called in Z:\home\karpaty\www\application\classes\Controller\Backend\main.php on line 92 and defined ~ APPPATH\classes\Model\main.php [ 16 ] in Z:\home\karpaty\www\application\classes\Model\main.php:16
2014-09-26 02:19:25 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Model\main.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\karpaty...', 16, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Backend\main.php(92): Model_Main->edit_main(NULL, '<h2 style="font...')
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Main->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\application\classes\Model\main.php:16
2014-09-26 02:23:18 --- CRITICAL: ErrorException [ 2 ]: Missing argument 3 for Model_Main::edit_main(), called in Z:\home\karpaty\www\application\classes\Controller\Backend\about.php on line 94 and defined ~ APPPATH\classes\Model\main.php [ 16 ] in Z:\home\karpaty\www\application\classes\Model\main.php:16
2014-09-26 02:23:18 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\Model\main.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\karpaty...', 16, Array)
#1 Z:\home\karpaty\www\application\classes\Controller\Backend\about.php(94): Model_Main->edit_main(NULL, '<p><img alt="" ...')
#2 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_About->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_About))
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\application\classes\Model\main.php:16
2014-09-26 03:45:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\Backend\main.php [ 90 ] in file:line
2014-09-26 03:45:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-26 16:05:10 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in Z:\home\karpaty\www\system\classes\Kohana\Arr.php on line 433 and defined ~ SYSPATH\classes\Kohana\Arr.php [ 30 ] in Z:\home\karpaty\www\system\classes\Kohana\Arr.php:30
2014-09-26 16:05:10 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\karpaty...', 30, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Arr.php(433): Kohana_Arr::is_assoc(1)
#2 Z:\home\karpaty\www\system\classes\Kohana\Core.php(960): Kohana_Arr::merge(Array, 1)
#3 Z:\home\karpaty\www\application\classes\Controller\Backend\auth.php(34): Kohana_Core::message('auth/user', 'no_user')
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\system\classes\Kohana\Arr.php:30
2014-09-26 16:14:41 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2014-09-26 16:14:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'Z:\home\karpaty...', 377, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#3 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#4 Z:\home\karpaty\www\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#5 Z:\home\karpaty\www\application\classes\Controller\Backend\auth.php(59): Model_Auth_User->create_user(Array, Array)
#6 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Auth->action_register()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#9 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-09-26 16:43:22 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\Backend\auth\v_auth_register.php [ 6 ] in Z:\home\karpaty\www\application\views\Backend\auth\v_auth_register.php:6
2014-09-26 16:43:22 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Backend\auth\v_auth_register.php(6): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\karpaty...', 6, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Backend\v_base_backend.php(34): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Backend\auth\v_auth_register.php:6
2014-09-26 16:54:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Backend\auth.php [ 64 ] in file:line
2014-09-26 16:54:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-26 17:05:29 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in file:line
2014-09-26 17:05:29 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('1234567890')
#1 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(1210): call_user_func_array(Array, Array)
#2 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(732): Kohana_ORM->run_filter('password', '1234567890')
#3 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('password', '1234567890')
#4 Z:\home\karpaty\www\modules\orm\classes\Kohana\ORM.php(804): Kohana_ORM->__set('password', '1234567890')
#5 Z:\home\karpaty\www\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->values(Array, Array)
#6 Z:\home\karpaty\www\application\classes\Controller\Backend\auth.php(59): Model_Auth_User->create_user(Array, Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Auth->action_register()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-09-26 17:42:50 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\Backend\auth\v_auth_register.php [ 7 ] in Z:\home\karpaty\www\application\views\Backend\auth\v_auth_register.php:7
2014-09-26 17:42:50 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Backend\auth\v_auth_register.php(7): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\karpaty...', 7, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Backend\v_base_backend.php(34): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Backend\auth\v_auth_register.php:7
2014-09-26 17:52:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Backend\auth.php [ 23 ] in file:line
2014-09-26 17:52:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-26 17:56:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Backend\auth.php [ 84 ] in file:line
2014-09-26 17:56:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line