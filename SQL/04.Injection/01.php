<?php

//CONNECT
    $con = @mysqli_connect('localhost', 'root', '');// host , user, password

        if (!$con) die('<h3>Fail</h3>');
    mysqli_select_db($con,'manage_user');

    mysqli_query($con,"SET NAMES 'utf8'");
    mysqli_query($con,"SET CHARACTER 'utf8'");
//INJECTION
        $id = $_GET['id'];
        //$id = mysqli_real_escape_string($id);
        $query = "SELECT * FROM `group` where `id` = '$id' ";

        $result = mysqli_query($con,$query);

        while ($row = mysqli_fetch_array($result)){
            echo '<pre>';
            print_r($result);
            echo '</pre>';

        }


    mysqli_close($con);
?>
