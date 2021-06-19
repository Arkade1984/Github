<?php exit('Forbidden'); ?>
[2011-11-12 06:34:31] (PDOException) Exception PDOException: SQLSTATE[28000] [1045] Access denied for user 'ragnarok'@'localhost' (using password: YES)
[2011-11-12 06:34:31] (PDOException) **TRACE** #0 C:\xampp\htdocs\mid\lib\Flux\Connection.php(81): PDO->__construct('mysql:host=127....', 'ragnarok', 'ragnarok', Array)
[2011-11-12 06:34:31] (PDOException) **TRACE** #1 C:\xampp\htdocs\mid\lib\Flux\Connection.php(94): Flux_Connection->connect(Object(Flux_Config))
[2011-11-12 06:34:31] (PDOException) **TRACE** #2 C:\xampp\htdocs\mid\lib\Flux\Connection.php(159): Flux_Connection->getConnection()
[2011-11-12 06:34:31] (PDOException) **TRACE** #3 C:\xampp\htdocs\mid\themes\cavalero\serverstatus.php(23): Flux_Connection->getStatement('SELECT COUNT(ch...')
[2011-11-12 06:34:31] (PDOException) **TRACE** #4 C:\xampp\htdocs\mid\themes\cavalero\header.php(27): include('C:\xampp\htdocs...')
[2011-11-12 06:34:31] (PDOException) **TRACE** #5 C:\xampp\htdocs\mid\lib\Flux\Template.php(359): include('C:\xampp\htdocs...')
[2011-11-12 06:34:31] (PDOException) **TRACE** #6 C:\xampp\htdocs\mid\lib\Flux\Dispatcher.php(168): Flux_Template->render()
[2011-11-12 06:34:31] (PDOException) **TRACE** #7 C:\xampp\htdocs\mid\index.php(170): Flux_Dispatcher->dispatch(Array)
[2011-11-12 06:34:31] (PDOException) **TRACE** #8 {main}
[2011-11-12 07:02:36] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok.item_db' doesn't exist
[2011-11-12 07:02:36] (Flux_Error) **TRACE** #0 C:\xampp\htdocs\mid\lib\Flux\TemporaryTable.php(99): Flux_Connection_Statement->execute()
[2011-11-12 07:02:36] (Flux_Error) **TRACE** #1 C:\xampp\htdocs\mid\lib\Flux\TemporaryTable.php(71): Flux_TemporaryTable->create('ragnarok.item_d...')
[2011-11-12 07:02:36] (Flux_Error) **TRACE** #2 C:\xampp\htdocs\mid\modules\character\view.php(12): Flux_TemporaryTable->__construct(Object(Flux_Connection), 'ragnarok.items', Array)
[2011-11-12 07:02:36] (Flux_Error) **TRACE** #3 C:\xampp\htdocs\mid\lib\Flux\Template.php(337): include('C:\xampp\htdocs...')
[2011-11-12 07:02:36] (Flux_Error) **TRACE** #4 C:\xampp\htdocs\mid\lib\Flux\Dispatcher.php(168): Flux_Template->render()
[2011-11-12 07:02:36] (Flux_Error) **TRACE** #5 C:\xampp\htdocs\mid\index.php(170): Flux_Dispatcher->dispatch(Array)
[2011-11-12 07:02:36] (Flux_Error) **TRACE** #6 {main}
[2011-11-12 11:43:28] (PDOException) Exception PDOException: SQLSTATE[28000] [1045] Access denied for user 'root'@'localhost' (using password: YES)
[2011-11-12 11:43:28] (PDOException) **TRACE** #0 C:\xampp\htdocs\mid\lib\Flux\Connection.php(81): PDO->__construct('mysql:host=127....', 'root', 'maazfaith786', Array)
[2011-11-12 11:43:28] (PDOException) **TRACE** #1 C:\xampp\htdocs\mid\lib\Flux\Connection.php(94): Flux_Connection->connect(Object(Flux_Config))
[2011-11-12 11:43:28] (PDOException) **TRACE** #2 C:\xampp\htdocs\mid\lib\Flux\Connection.php(159): Flux_Connection->getConnection()
[2011-11-12 11:43:28] (PDOException) **TRACE** #3 C:\xampp\htdocs\mid\themes\cavalero\serverstatus.php(23): Flux_Connection->getStatement('SELECT COUNT(ch...')
[2011-11-12 11:43:28] (PDOException) **TRACE** #4 C:\xampp\htdocs\mid\themes\cavalero\header.php(27): include('C:\xampp\htdocs...')
[2011-11-12 11:43:28] (PDOException) **TRACE** #5 C:\xampp\htdocs\mid\lib\Flux\Template.php(359): include('C:\xampp\htdocs...')
[2011-11-12 11:43:28] (PDOException) **TRACE** #6 C:\xampp\htdocs\mid\lib\Flux\Dispatcher.php(168): Flux_Template->render()
[2011-11-12 11:43:28] (PDOException) **TRACE** #7 C:\xampp\htdocs\mid\index.php(170): Flux_Dispatcher->dispatch(Array)
[2011-11-12 11:43:28] (PDOException) **TRACE** #8 {main}
