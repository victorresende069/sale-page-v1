<?php 
    session_start();
    require_once('../../database/db.php');
    $data = file_get_contents('php://input');
    $obj = json_decode($data);
    $name = $obj->{'name'};
    $text = $obj->{'text'};
    $value = $obj->{'value'};
    $image = $obj->{'image'};
    $link = $obj->{'link'};
    $id = $obj->{'id'};



    $queryMYSQL = "UPDATE `produto` SET `nome` = '$name', `texto` = '$text', `valor` = '$value', `image` = '$image', `link` = '$link' WHERE `produto`.`id` = '$id'";
    if(mysqli_query($connect_mysql, $queryMYSQL)): echo json_encode(array('status' => 201)); 

    else: echo json_encode(array("status" => 401)); 

endif;