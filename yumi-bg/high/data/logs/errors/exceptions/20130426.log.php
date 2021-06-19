<?php exit('Forbidden'); ?>
[2013-04-26 18:47:13] (PDOException) Exception PDOException: SQLSTATE[42000] [1044] Access denied for user 'root'@'p3nlhg245.shr.prod.phx3.secureserver.net' to database 'yumi_highr'
[2013-04-26 18:47:13] (PDOException) **TRACE** #0 /home/content/18/10192718/html/high/lib/Flux/Connection.php(81): PDO->__construct('mysql:host=208....', 'root', 'snipergoat', Array)
[2013-04-26 18:47:13] (PDOException) **TRACE** #1 /home/content/18/10192718/html/high/lib/Flux/Connection.php(94): Flux_Connection->connect(Object(Flux_Config))
[2013-04-26 18:47:13] (PDOException) **TRACE** #2 /home/content/18/10192718/html/high/lib/Flux/Connection.php(159): Flux_Connection->getConnection()
[2013-04-26 18:47:13] (PDOException) **TRACE** #3 /home/content/18/10192718/html/high/modules/install/index.php(17): Flux_Connection->getStatement('SELECT VERSION(...')
[2013-04-26 18:47:13] (PDOException) **TRACE** #4 /home/content/18/10192718/html/high/lib/Flux/Template.php(337): include('/home/content/1...')
[2013-04-26 18:47:13] (PDOException) **TRACE** #5 /home/content/18/10192718/html/high/lib/Flux/Dispatcher.php(168): Flux_Template->render()
[2013-04-26 18:47:13] (PDOException) **TRACE** #6 /home/content/18/10192718/html/high/index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-04-26 18:47:13] (PDOException) **TRACE** #7 {main}
[2013-04-26 18:47:34] (PDOException) Exception PDOException: SQLSTATE[42000] [1044] Access denied for user 'root'@'p3nlhg245.shr.prod.phx3.secureserver.net' to database 'yumi_highr'
[2013-04-26 18:47:34] (PDOException) **TRACE** #0 /home/content/18/10192718/html/high/lib/Flux/Connection.php(81): PDO->__construct('mysql:host=208....', 'root', 'snipergoat', Array)
[2013-04-26 18:47:34] (PDOException) **TRACE** #1 /home/content/18/10192718/html/high/lib/Flux/Connection.php(94): Flux_Connection->connect(Object(Flux_Config))
[2013-04-26 18:47:34] (PDOException) **TRACE** #2 /home/content/18/10192718/html/high/lib/Flux/Connection.php(159): Flux_Connection->getConnection()
[2013-04-26 18:47:34] (PDOException) **TRACE** #3 /home/content/18/10192718/html/high/modules/install/index.php(17): Flux_Connection->getStatement('SELECT VERSION(...')
[2013-04-26 18:47:34] (PDOException) **TRACE** #4 /home/content/18/10192718/html/high/lib/Flux/Template.php(337): include('/home/content/1...')
[2013-04-26 18:47:34] (PDOException) **TRACE** #5 /home/content/18/10192718/html/high/lib/Flux/Dispatcher.php(168): Flux_Template->render()
[2013-04-26 18:47:34] (PDOException) **TRACE** #6 /home/content/18/10192718/html/high/index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-04-26 18:47:34] (PDOException) **TRACE** #7 {main}
[2013-04-26 18:52:05] (Flux_Error) Exception Flux_Error: Critical MySQL error in Installer/Updater: Table 'cp_banlog' already exists
[2013-04-26 18:52:05] (Flux_Error) **TRACE** #0 /home/content/18/10192718/html/high/lib/Flux/Installer/Schema.php(155): Flux_Installer_Schema->install('20080928225124')
[2013-04-26 18:52:05] (Flux_Error) **TRACE** #1 /home/content/18/10192718/html/high/lib/Flux/Installer/MainServer.php(46): Flux_Installer_Schema->update()
[2013-04-26 18:52:05] (Flux_Error) **TRACE** #2 /home/content/18/10192718/html/high/modules/install/index.php(83): Flux_Installer_MainServer->updateAll()
[2013-04-26 18:52:05] (Flux_Error) **TRACE** #3 /home/content/18/10192718/html/high/lib/Flux/Template.php(337): include('/home/content/1...')
[2013-04-26 18:52:05] (Flux_Error) **TRACE** #4 /home/content/18/10192718/html/high/lib/Flux/Dispatcher.php(168): Flux_Template->render()
[2013-04-26 18:52:05] (Flux_Error) **TRACE** #5 /home/content/18/10192718/html/high/index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-04-26 18:52:05] (Flux_Error) **TRACE** #6 {main}
