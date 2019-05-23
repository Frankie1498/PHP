<?php
//connect
    $con = @mysqli_connect('localhost','root','');// host , user, password

    if (!$con)die('<h3>Fail</h3>');
    //Insert
        mysqli_select_db($con,'manage_user');
        $sql    = 'INSERT INTO `group`(`name`, `status`, `ordering`) VALUES ("Member","1","10"),("Long","1","10")';
        $result =  mysqli_query($con,$sql);
    if ($result == true) echo $total = mysqli_affected_rows($con);// xem số dòng đã thêm vào
    else echo 'Fail';
    //echo mysqli_errno($con);
    mysqli_close($con);