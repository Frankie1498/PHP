<?php
//connect
    $con = @mysqli_connect('localhost','root','');// host , user, password

        if (!$con)die('<h3>Fail</h3>');
    //Delete
        $ids = array(9, 10);


        $delID = '';
        foreach ($ids as $value){
            $delID .= "'".$value."',";
        }
            $delID .= "'0'";
        //echo $delID;

        mysqli_select_db($con,'manage_user');

        $query = "DELETE FROM `group` WHERE `id` IN ($delID)";


        $result =  mysqli_query($con,$query);

        if ($result == true) echo $total = mysqli_affected_rows($con);// xem số dòng đã thêm vào
        else echo 'Fail';


    mysqli_close($con);