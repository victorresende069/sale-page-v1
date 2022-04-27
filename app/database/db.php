<?php
//BANCO DE DADOS - .GITINGORE s

$host_name = 'localhost';
$user_mysql = 'root';
$passwd_mysql = '12345678';
$database_mysql = 'ps_v1';


    $connect_mysql = mysqli_connect($host_name, $user_mysql, $passwd_mysql, $database_mysql) or die (exit(print_r(array('status' => 400))));

?>