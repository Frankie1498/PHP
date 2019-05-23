<?php
//Kiem tra ton tai $_SESSION['age']
    session_start();
    if (isset($_SESSION['age'])){
        unset($_SESSION['age']);// xóa phần tử
    }
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';