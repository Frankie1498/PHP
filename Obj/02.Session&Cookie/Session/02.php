<?php
    $arr = array(
            array('course'=>'jQuery','time'=>120),
            array('course'=>'PHP','time'=>100),
            array('course'=>'NodeJS','time'=>150),
    );
    session_start();

    $_SESSION['array'] = $arr;
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';