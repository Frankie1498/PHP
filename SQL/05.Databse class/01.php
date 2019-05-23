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