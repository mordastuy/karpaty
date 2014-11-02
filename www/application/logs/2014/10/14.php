<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-14 12:38:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\Frontend\contacts\v_contacts_f.php [ 26 ] in Z:\home\karpaty\www\application\views\Frontend\contacts\v_contacts_f.php:26
2014-10-14 12:38:37 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\contacts\v_contacts_f.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 26, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(131): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Contacts))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Frontend\contacts\v_contacts_f.php:26
2014-10-14 12:49:41 --- CRITICAL: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1 http://support.google.com/mail/bin/answer.py?answer=14257 2sm5828617lai.36 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ] in Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2014-10-14 12:49:41 --- DEBUG: #0 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530-5.5.1 Authe...', Array)
#1 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <koh...', Array, Array)
#2 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <koh...', Array)
#3 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('kohanaframework...')
#4 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'kohanaframework...', Array, Array)
#5 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'kohanaframework...', Array, Array)
#6 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 Z:\home\karpaty\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 Z:\home\karpaty\www\application\classes\Controller\Frontend\contacts.php(36): Email::send('mordastuy@gmail...', 'kohanaframework...', '???????????????...', '???????????????...', false)
#9 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Contacts->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Contacts))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2014-10-14 14:31:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: languages ~ APPPATH\views\Backend\main\v_main_edit.php [ 18 ] in Z:\home\karpaty\www\application\views\Backend\main\v_main_edit.php:18
2014-10-14 14:31:39 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Backend\main\v_main_edit.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 18, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\karpaty\www\application\views\Backend\v_base_backend.php(103): Kohana_View->__toString()
#5 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#6 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Main))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\karpaty\www\application\views\Backend\main\v_main_edit.php:18