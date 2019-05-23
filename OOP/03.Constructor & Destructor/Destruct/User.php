<?php


class User{
    //Properties
    private $name;
    private $pass;
    private $fullName;
    public  function  __construct()
    {
        $this->name = 'Frank';
        $this->fullName = 'Lampard';
        $this->pass = '123123';
    }

    public  function __destruct()
    {
        // Thực thi ở cuối trang, hoặc cuối cùng.
        $_SESSION['userA'] = serialize($this);// serialize chuyển thành chuỗi đặc biệt - unserialize ngược lại
    }
}
?>