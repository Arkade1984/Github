<?php exit('Forbidden'); ?>
[2011-11-14 02:42:09] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok.cp_voteforpoints' doesn't exist
[2011-11-14 02:42:09] (Flux_Error) **TRACE** #0 C:\xampp\htdocs\mid3rd\modules\account\voteforpoints.php(42): Flux_Connection_Statement->execute(Array)
[2011-11-14 02:42:09] (Flux_Error) **TRACE** #1 C:\xampp\htdocs\mid3rd\lib\Flux\Template.php(337): include('C:\xampp\htdocs...')
[2011-11-14 02:42:09] (Flux_Error) **TRACE** #2 C:\xampp\htdocs\mid3rd\lib\Flux\Dispatcher.php(168): Flux_Template->render()
[2011-11-14 02:42:09] (Flux_Error) **TRACE** #3 C:\xampp\htdocs\mid3rd\index.php(170): Flux_Dispatcher->dispatch(Array)
[2011-11-14 02:42:09] (Flux_Error) **TRACE** #4 {main}
[2011-11-14 02:41:11] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok.cp_voteforpoints' doesn't exist
[2011-11-14 02:41:11] (Flux_Error) **TRACE** #0 C:\xampp\htdocs\mid3rd\modules\account\voteforpoints.php(42): Flux_Connection_Statement->execute(Array)
[2011-11-14 02:41:11] (Flux_Error) **TRACE** #1 C:\xampp\htdocs\mid3rd\lib\Flux\Template.php(337): include('C:\xampp\htdocs...')
[2011-11-14 02:41:11] (Flux_Error) **TRACE** #2 C:\xampp\htdocs\mid3rd\lib\Flux\Dispatcher.php(168): Flux_Template->render()
[2011-11-14 02:41:11] (Flux_Error) **TRACE** #3 C:\xampp\htdocs\mid3rd\index.php(170): Flux_Dispatcher->dispatch(Array)
[2011-11-14 02:41:11] (Flux_Error) **TRACE** #4 {main}
[2011-11-14 06:38:55] (Flux_LoginError) Exception Flux_LoginError: Unexpected error during login.
PDO error info, if any: Array
(
    [0] => 42S02
    [1] => 1146
    [2] => Table 'ragnarok.cp_credits' doesn't exist
)

[2011-11-14 06:38:55] (Flux_LoginError) **TRACE** #0 C:\xampp\htdocs\mid3rd\modules\account\create.php(73): Flux_SessionData->login('CavaleRO', 'Cavalero', 'valent1no', false)
[2011-11-14 06:38:55] (Flux_LoginError) **TRACE** #1 C:\xampp\htdocs\mid3rd\lib\Flux\Template.php(337): include('C:\xampp\htdocs...')
[2011-11-14 06:38:55] (Flux_LoginError) **TRACE** #2 C:\xampp\htdocs\mid3rd\lib\Flux\Dispatcher.php(168): Flux_Template->render()
[2011-11-14 06:38:55] (Flux_LoginError) **TRACE** #3 C:\xampp\htdocs\mid3rd\index.php(170): Flux_Dispatcher->dispatch(Array)
[2011-11-14 06:38:55] (Flux_LoginError) **TRACE** #4 {main}
