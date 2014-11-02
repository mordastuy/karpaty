<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-26 12:11:20 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Core.php [ 676 ] in file:line
2014-10-26 12:11:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-26 12:14:31 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Core.php [ 676 ] in file:line
2014-10-26 12:14:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-26 12:21:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\Frontend\v_base_frontend.php [ 6 ] in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:6
2014-10-26 12:21:53 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 6, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\application\classes\HTTP\Exception\404.php(22): Kohana_View->render()
#4 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(114): HTTP_Exception_404->get_response()
#5 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:6
2014-10-26 12:25:04 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:25:04 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:25:04 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:25:04 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:25:18 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:25:18 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:25:18 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:25:18 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:25:20 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:25:20 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:25:20 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:25:20 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:25:45 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:25:45 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:25:45 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:25:45 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:25:47 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:25:47 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:25:47 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:25:47 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:26:02 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:26:02 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:26:02 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:26:02 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:26:05 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:26:05 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:26:05 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:26:05 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:56:38 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:56:38 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:57:45 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:57:45 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:57:46 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:57:46 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:58:17 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:58:17 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:58:20 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:58:20 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:58:23 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:58:23 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:59:31 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 12:59:31 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 13:02:35 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 13:02:35 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 13:02:36 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 13:02:36 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 13:02:39 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL as was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 13:02:39 --- DEBUG: #0 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-10-26 13:07:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Frontend_System::add_styles() ~ APPPATH\classes\Controller\Frontend\System.php [ 10 ] in file:line
2014-10-26 13:07:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-26 13:38:10 --- CRITICAL: ErrorException [ 8 ]: Undefined property: HTTP_Exception_404::$lang ~ APPPATH\classes\HTTP\Exception\404.php [ 39 ] in Z:\home\karpaty\www\application\classes\HTTP\Exception\404.php:39
2014-10-26 13:38:10 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\HTTP\Exception\404.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\karpaty...', 39, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request.php(976): HTTP_Exception_404->get_response()
#2 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#3 {main} in Z:\home\karpaty\www\application\classes\HTTP\Exception\404.php:39
2014-10-26 13:41:18 --- CRITICAL: ErrorException [ 8 ]: Undefined property: HTTP_Exception_404::$lang ~ APPPATH\classes\HTTP\Exception\404.php [ 39 ] in Z:\home\karpaty\www\application\classes\HTTP\Exception\404.php:39
2014-10-26 13:41:18 --- DEBUG: #0 Z:\home\karpaty\www\application\classes\HTTP\Exception\404.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\karpaty...', 39, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\Request.php(976): HTTP_Exception_404->get_response()
#2 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#3 {main} in Z:\home\karpaty\www\application\classes\HTTP\Exception\404.php:39