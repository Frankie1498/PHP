<?php
// nếu function trong class là abstract thì phải không chứa gì trong thân hàm
// và khi kế thừa phải có nội dung function đó
    abstract class Laptop{
       abstract public function keyboard();
        public function ram(){

        }
        public function chipset(){

        }
    }
    // có thể overwrite
    class Lenovo extends Laptop{
        public function keyboard(){
            return 'Ban phim co ';
        }
    }
    $lenovo = new Lenovo();
    echo $lenovo->keyboard();

?>