<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-06 15:32:22 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2014-08-06 15:32:22 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2014-08-06 15:32:23 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2014-08-06 15:32:23 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2014-08-06 15:35:55 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:35:55 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 Z:\home\cms\www\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', 'KK44wax', false)
#5 Z:\home\cms\www\application\classes\Controller\Main\Auth.php(12): Kohana_Auth->login('admin', 'KK44wax', false)
#6 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Auth))
#9 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:36:14 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:36:14 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 Z:\home\cms\www\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', 'KK44wax', false)
#5 Z:\home\cms\www\application\classes\Controller\Main\Auth.php(12): Kohana_Auth->login('admin', 'KK44wax', false)
#6 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Auth))
#9 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:39:30 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:39:30 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 Z:\home\cms\www\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', 'KK44wax', false)
#5 Z:\home\cms\www\application\classes\Controller\Main\Auth.php(12): Kohana_Auth->login('admin', 'KK44wax', false)
#6 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Auth))
#9 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:40:14 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:40:14 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 Z:\home\cms\www\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', 'KK44wax', true)
#5 Z:\home\cms\www\application\classes\Controller\Main\Auth.php(12): Kohana_Auth->login('admin', 'KK44wax', true)
#6 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Auth))
#9 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:40:18 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:40:18 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(171): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(199): Kohana_Auth_ORM->auto_login()
#5 Z:\home\cms\www\application\classes\Controller\Base.php(16): Kohana_Auth_ORM->get_user()
#6 Z:\home\cms\www\application\classes\Controller\Main.php(11): Controller_Base->before()
#7 Z:\home\cms\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Auth))
#10 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:40:26 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:40:26 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(171): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(199): Kohana_Auth_ORM->auto_login()
#5 Z:\home\cms\www\application\classes\Controller\Base.php(16): Kohana_Auth_ORM->get_user()
#6 Z:\home\cms\www\application\classes\Controller\Main.php(11): Controller_Base->before()
#7 Z:\home\cms\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Auth))
#10 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:40:27 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:40:27 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(171): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(199): Kohana_Auth_ORM->auto_login()
#5 Z:\home\cms\www\application\classes\Controller\Base.php(16): Kohana_Auth_ORM->get_user()
#6 Z:\home\cms\www\application\classes\Controller\Main.php(11): Controller_Base->before()
#7 Z:\home\cms\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Auth))
#10 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:40:28 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:40:28 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(171): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(199): Kohana_Auth_ORM->auto_login()
#5 Z:\home\cms\www\application\classes\Controller\Base.php(16): Kohana_Auth_ORM->get_user()
#6 Z:\home\cms\www\application\classes\Controller\Main.php(11): Controller_Base->before()
#7 Z:\home\cms\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Auth))
#10 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:40:30 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:40:30 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(171): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(199): Kohana_Auth_ORM->auto_login()
#5 Z:\home\cms\www\application\classes\Controller\Base.php(16): Kohana_Auth_ORM->get_user()
#6 Z:\home\cms\www\application\classes\Controller\Main.php(11): Controller_Base->before()
#7 Z:\home\cms\www\application\classes\Controller\Main\Index.php(9): Controller_Main->before()
#8 Z:\home\cms\www\system\classes\Kohana\Controller.php(69): Controller_Main_Index->before()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#11 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:40:33 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:40:33 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(171): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(199): Kohana_Auth_ORM->auto_login()
#5 Z:\home\cms\www\application\classes\Controller\Base.php(16): Kohana_Auth_ORM->get_user()
#6 Z:\home\cms\www\application\classes\Controller\Main.php(11): Controller_Base->before()
#7 Z:\home\cms\www\application\classes\Controller\Main\Index.php(9): Controller_Main->before()
#8 Z:\home\cms\www\system\classes\Kohana\Controller.php(69): Controller_Main_Index->before()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#11 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:40:34 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:40:34 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(171): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(199): Kohana_Auth_ORM->auto_login()
#5 Z:\home\cms\www\application\classes\Controller\Base.php(16): Kohana_Auth_ORM->get_user()
#6 Z:\home\cms\www\application\classes\Controller\Main.php(11): Controller_Base->before()
#7 Z:\home\cms\www\application\classes\Controller\Main\Index.php(9): Controller_Main->before()
#8 Z:\home\cms\www\system\classes\Kohana\Controller.php(69): Controller_Main_Index->before()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#11 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:40:35 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:40:35 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(171): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(199): Kohana_Auth_ORM->auto_login()
#5 Z:\home\cms\www\application\classes\Controller\Base.php(16): Kohana_Auth_ORM->get_user()
#6 Z:\home\cms\www\application\classes\Controller\Main.php(11): Controller_Base->before()
#7 Z:\home\cms\www\application\classes\Controller\Main\Index.php(9): Controller_Main->before()
#8 Z:\home\cms\www\system\classes\Kohana\Controller.php(69): Controller_Main_Index->before()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#11 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:45:06 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-06 15:45:06 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 Z:\home\cms\www\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 Z:\home\cms\www\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', 'KK44wax', false)
#5 Z:\home\cms\www\application\classes\Controller\Main\Auth.php(12): Kohana_Auth->login('admin', 'KK44wax', false)
#6 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Auth->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Auth))
#9 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1362