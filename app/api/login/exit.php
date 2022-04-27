<?php
session_start();
$_SESSION = array();
if (empty($_SESSION['token'])) {
    header('location: ../../admin');
    exit;
}
?>
