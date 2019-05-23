<?php
//sleep có thể thiết lập giá trị muốn chuyển thành chuỗi đặc biệt
    require_once ('Cat.class.php');
    $cat = new Cat('MiMi');
    $cat->showInfo();
    $strCat = serialize($cat);
    echo '<br>'.$strCat;
?>