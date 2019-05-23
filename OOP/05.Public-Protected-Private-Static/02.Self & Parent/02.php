<?php
// không thể overwrite biến static của class cha, đối với thuộc tính không có static thì không dùng được self
// parent gọi đến các thuộc tính hoặc phương thức của lớp cha trong lớp hiện tại
require_once ('Class.Lion.php');
 $lionA = new Lion('Lion','Yellow',10,'120 kg');
 $lionA->showInfo();
 echo '<pre>';
    print_r($lionA);
 echo '</pre>';
?>