<?php
//Set thiết lập thuộc tính cho các đối tượng chưa được khai báo hoặc ở private trong class
//Get lấy giá trị của 1 thuộc tính nào đó dù thuộc tính đó private hoặc protected
    require_once 'Cat.class.php';
    $cat = new Cat();
    echo $cat->age;
 //   echo $cat->name;
?>