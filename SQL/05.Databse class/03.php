<?php
    require_once ('Database.php');
    $params = array(
                'sever' => 'localhost',
                'user' => 'root',
                'password' => '',
                'database' => 'manage_user',
                'table' => 'group'
            );
    $database = new Database($params);
    $arrData = array(
                array('name'=>'Member','status'=>'1','ordering'=>'101'),
                array('name'=>'Admin_1'),
                array('name'=>'Admin_2','ordering'=>'100'),
                array('id'=>149,'name'=>'Long','status'=>'1','ordering'=>'1')
            );
    echo $lastID = $database->insert($arrData,'multi');