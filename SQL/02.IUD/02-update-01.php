<?php
//connect
    $con = @mysqli_connect('localhost','root','');// host , user, password

        if (!$con)die('<h3>Fail</h3>');
    //Update

        mysqli_select_db($con,'manage_user');

        $data = array('status'=>1,'ordering'=>'1');

    function createInsertSQL($data){
        $newQuery = array();
        if (!empty($data)){
            //`status` = '1', `ordering` = '10'

            foreach ($data as $key => $value){
                $newQuery = ",`$key` = '$value'";
            }
            $newQuery = substr($newQuery,1);

        }
        return $newQuery;
    }
        $newQuery = createInsertSQL($data);

        $query    = "UPDATE `group` SET ".$newQuery."
                     WHERE `ordering` = '101'";

        echo '<pre>';
        print_r($newQuery);
        echo '</pre>';


        $result =  mysqli_query($con,$query);

        if ($result == true) echo $total = mysqli_affected_rows($con);// xem số dòng đã thêm vào
        else echo 'Fail';

mysqli_close($con);