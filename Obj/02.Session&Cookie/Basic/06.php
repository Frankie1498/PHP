<?php
//Kiem tra ton tai $_SESSION['age']
    session_start();
    session_destroy();// xóa tất cả các session
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';