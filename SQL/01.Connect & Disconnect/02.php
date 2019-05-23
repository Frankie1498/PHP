<?php
//connect
    $cnn = @mysqli_connect('localhost','root','');
    // host , user, password,name dtb
// test connect
    if (!$cnn){
        die('<h3>Fail</h3>');
    }
    echo '<h3>Success</h3>';
    //mysqli_select_db($cnn,'manage_user');

    $sql = 'SHOW TABLE FROM manage_user';
    $result = $cnn->query($sql);
    $res = mysqli_query($cnn,$sql);
    while ($row = mysqli_fetch_array($result)){
        echo $row[0];
    }