<?php exit('Forbidden'); ?>
[2011-11-05 10:12:08] (Flux_Error) Exception Flux_Error: Critical MySQL error in Installer/Updater: Table 'cp_banlog' already exists
[2011-11-05 10:12:08] (Flux_Error) **TRACE** #0 C:\xampp\htdocs\cavalero\flux\lib\Flux\Installer\Schema.php(157): Flux_Installer_Schema->install(497)
[2011-11-05 10:12:08] (Flux_Error) **TRACE** #1 C:\xampp\htdocs\cavalero\flux\lib\Flux\Installer\MainServer.php(46): Flux_Installer_Schema->update()
[2011-11-05 10:12:08] (Flux_Error) **TRACE** #2 C:\xampp\htdocs\cavalero\flux\modules\install\index.php(83): Flux_Installer_MainServer->updateAll()
[2011-11-05 10:12:08] (Flux_Error) **TRACE** #3 C:\xampp\htdocs\cavalero\flux\lib\Flux\Template.php(337): include('C:\xampp\htdocs...')
[2011-11-05 10:12:08] (Flux_Error) **TRACE** #4 C:\xampp\htdocs\cavalero\flux\lib\Flux\Dispatcher.php(168): Flux_Template->render()
[2011-11-05 10:12:08] (Flux_Error) **TRACE** #5 C:\xampp\htdocs\cavalero\flux\index.php(170): Flux_Dispatcher->dispatch(Array)
[2011-11-05 10:12:08] (Flux_Error) **TRACE** #6 {main}
