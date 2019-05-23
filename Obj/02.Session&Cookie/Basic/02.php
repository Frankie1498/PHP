<?php
 session_start();
    $name = $_SESSION['name'];
    echo $name;
    /*echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';*/