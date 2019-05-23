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
    $ids  = array(160,161);
    $where = 'id';
    echo $lastID = $database->delete($where,$ids);