<?php
// self tương tự như this, nhưng dùng để truy cập vào static, có thể dùng tên Class để gọi tới biến static
require_once ('Class.Cat.php');
 $cat = new Cat('MiMi','blue','2','5 kg');
 $cat->showInfo();

?>