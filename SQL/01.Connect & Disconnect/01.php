<?php
//connect
    $cnn = @mysqli_connect('localhost','root','');// host , user, password
// test connect
    if (!$cnn){
        die('<h3>Fail</h3>');
    }
    echo '<h3>Success</h3>';
    mysqli_close($cnn);