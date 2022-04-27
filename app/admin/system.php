<?php
    if(empty($_SESSION['token'])){
        header('location: ./');
        exit;
    }
?>