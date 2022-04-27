<?php
    if(empty($_SESSION['token'])){
        header('location: ./');
    }
    else{
        echo "Logado com sucesso.";
    }
?>