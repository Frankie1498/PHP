<?php
    setcookie('name','test cookie',time()+3600);
    echo '<pre>';
    print_r($_COOKIE);
    echo '</pre>';
    setcookie('name','test cookie',time()- 3600);// xóa cookie