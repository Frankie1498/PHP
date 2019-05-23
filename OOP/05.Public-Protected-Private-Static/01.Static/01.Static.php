<?php
// Static cho phép truy cập nhanh một phương thức hay biến mà không cần khởi tạo đối tượng
class Sample{
  static $a = 1000;

  public static function showInfo(){
      echo 'showInfo';
  }
}
/*$sample = new Sample();
echo Sample::$a;
echo $sample->showInfo();*/
echo Sample::showInfo();
?>