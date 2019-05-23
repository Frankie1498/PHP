<?php
    require_once 'class/Database.Class.php';
        $params = array(
            'sever' => 'localhost',
            'user' => 'root',
            'password' => '',
            'database' => 'manage_user',
            'table' => '`user`'
        );
        $database = new Database($params);