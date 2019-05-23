//sort() - sắp xếp các mảng theo thứ tự tăng dần
//rsort() - sắp xếp các mảng theo thứ tự giảm dần
//asort() - sắp xếp các mảng kết hợp theo thứ tự tăng dần, theo giá trị
//ksort() - sắp xếp các mảng kết hợp theo thứ tự tăng dần, theo khóa
//arsort() - sắp xếp các mảng kết hợp theo thứ tự giảm dần, theo giá trị
//krsort() - sắp xếp các mảng kết hợp theo thứ tự giảm dần, theo khóa
<?php
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

?>