<?php
    require_once ('Database.php');
    $params = array(
                'sever' => 'localhost',
                'user' => 'root',
                'password' => '',
                'database' => 'manage_user',
                'table' => '`group`'
            );
    $database = new Database($params);
    $arrData = array('name'=>'Member123','status'=>'1','ordering'=>'101');
    echo $lastID = $database->insert($arrData,'single');