<?php
// các function khi kế thừa lớp abstract phải có các thuộc tính có sẵn của lớp abstract
    abstract class Laptop{
       abstract public function keyboard(array $color);
        public function ram(){

        }
        public function chipset(){

        }
    }

    class Lenovo extends Laptop{
        public function keyboard(array $color){
            $str = '';
            foreach ($color as $key=>$value){
                $str .= $value . ',';
            }
            return $str;
        }
    }
    $lenovo = new Lenovo();
    echo $lenovo->keyboard(array('red','green','blue'));

?>