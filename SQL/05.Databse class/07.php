<?php
    require_once ('Database.php');
    $params = array(
                'sever' => 'localhost',
                'user' => 'root',
                'password' => '',
                'database' => 'manage_user',
                'table' => 'group'
            );
    $database   = new Database($params);
    $query      = "SELECT * FROM `group` ORDER BY `ordering`";
    $database->query($query);
    $list       = $database->listRecord();
    echo '<pre>';
    print_r($list);
    echo '</pre>';
   // echo $lastID = $database->delete($ids);