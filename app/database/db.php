<?php
//BANCO DE DADOS - .GITINGORE

$host_name = '';
$user_mysql = '';
$passwd_mysql = '';
$database_mysql = '';


    $connect_mysql = mysqli_connect($host_name, $user_mysql, $passwd_mysql, $database_mysql) or die (exit(print_r(array('status' => 400))));

?>