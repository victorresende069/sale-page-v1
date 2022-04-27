<?php
    session_start();
    require_once('../../database/db.php');
    $data = file_get_contents('php://input');
    $obj = json_decode($data);
    $user = $obj->usuario;
    $pass = $obj->senha;


    $queryMYSQL = "SELECT nome, usuario, senha FROM usuario  WHERE usuario = '{$user}'";
    $resultQueryMysql = mysqli_query($connect_mysql, $queryMYSQL);

    if(mysqli_num_rows($resultQueryMysql) == 1):
        
            $resultQueryMysql = mysqli_fetch_array($resultQueryMysql);

            if(!strcmp($pass, $resultQueryMysql[2])):
                //*LOGADO COM SUCESSO*/
                $_SESSION['nome'] = $resultQueryMysql[0];
                $_SESSION['token'] = true;
                $result = array('token' => true);
                echo json_encode($result);
                exit;
            endif;
            //*DADOS INCORRETO*/
            $result = array('token' => false);
            echo json_encode($result);
            exit;
        else:
            //*DADOS INCORRETO*/
            $result = array('token' => false);
            echo json_encode($result);
            exit;
    endif;


?>