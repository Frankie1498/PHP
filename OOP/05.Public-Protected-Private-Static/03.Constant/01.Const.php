<?php
// hằng số là không đổi ,truy cập đến hằng số dùng $đối tượng hoặc tên class
// có thể dùng self , tên Class, this để trỏ tới hằng số
require_once ('Sample.php');
$sample = new Sample();
echo $sample->showInfo();