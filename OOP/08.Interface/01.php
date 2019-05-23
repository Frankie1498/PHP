<?php
// trong interface chỉ có thể khai báo phương thức mà không thể định nghĩa gì trong phương thức đó
    interface people{
        public function eat();
        public function sleep();
    }
    interface bird{
    public function fly();
}
    class Lion{
        public function Shout(){
            echo '<br>'.__METHOD__;
        }
}
    class Superman extends Lion implements people,bird {
        public function eat(){
            echo __METHOD__;
        }
        public function sleep(){
            echo '<br>'.__METHOD__;
        }
        public function fly(){
            echo '<br>'.__METHOD__;
        }
    }
    $superman = new Superman();
    $superman->eat();
    $superman->fly();
    $superman->Shout();