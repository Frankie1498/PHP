<?php
    function checkNum($num){
       return $num %2 ==0? 'So chan':'So le';
    }
    session_start();

    $_SESSION['fucntion'] = checkNum(6);
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';