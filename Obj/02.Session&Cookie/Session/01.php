<?php
    $var = 'String';
    session_start();

    $_SESSION['variable'] = $var;
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';