<?php
session_start();
 if (isset($_SESSION['name'])){
     echo 'Ton tai';
 }else echo 'Khong ton tai';
