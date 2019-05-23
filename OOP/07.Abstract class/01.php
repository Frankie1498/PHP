<?php
// abstract class không thể tạo ra đối tượng từ chính nó, mà phải tạo đối tượng từ các class con của nó
// method trong class abstract là abstract thì method đó không có nội dung bên trong mà các class kết thừa nó phải có
// nội dung của method đó
// abstract class có điều kiện gì thì các class con phải có điều kiện đó
    abstract class Laptop{
        public function keyboard(){
            return 'Ban phim';
        }
        public function ram(){

        }
        public function chipset(){

        }
    }
    class Acer extends Laptop{

    }
    // có thể overwrite
    class Lenovo extends Laptop{
        public function keyboard(){
            return 'Ban phim co ';
        }
    }
    $lenovo     = new Lenovo();
    $acer       = new Acer();
        /*echo '<pre>';
        print_r($acer);
        echo '</pre>';*/
    echo $acer->keyboard();
?>