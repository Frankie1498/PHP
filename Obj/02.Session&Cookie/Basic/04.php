<?php
//Kiem tra ton tai $_SESSION['age']
    session_start();
    if (isset($_SESSION['age'])){
        $_SESSION['age'] = 30;
    }else $_SESSION = 20;
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';