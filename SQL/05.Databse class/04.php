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
    $data  = array('status'=>1,'ordering'=>'5','name'=>'Manager');
    $where = array(
                    array('status',1,'AND'),
                    //array('AND'),
                    array('ordering',10)
    );
    echo $lastID = $database->update($data,$where);