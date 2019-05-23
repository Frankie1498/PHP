<?php
require_once ('User.php');
session_start();
$userA = new User();
//echo 'This is a test';
echo '<pre>'.print_r($userA).'</pre>';
?>