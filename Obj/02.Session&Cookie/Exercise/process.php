<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Process</title>
</head>
<body>
	<div id="wrapper">
    	<div class="title">PROCESS</div>
        <div id="form">   
			<?php
                require_once ('error.php');
				require_once 'functions.php';
				session_start();
				if ($_SESSION['flag'] == true){
				    if ($_SESSION['timeout']+ 3 > time()){
                        echo '<h3> Hello : '.$_SESSION['fullName'].'</h3>';
                        echo '<a href="logout.php"> Logout</a>';
                    }else{
				        session_unset();
				        header('location: login.php');
                    }
                }

				elseif(!checkEmpty($_POST['username'])&& !checkEmpty($_POST['username'])){
				    $data = parse_ini_file('user.ini');
                    $username = $_POST['username'];
                    $password = md5($_POST['password']);

                    $userInfo = explode('|',$data[$username]);

                    if ($username == $userInfo[0] && $password == $userInfo[1]){
                        $_SESSION['fullName'] = $userInfo[2];
                        $_SESSION['flag']     = true;
                        $_SESSION['timeout']     = time();
                        echo '<h3> Hello : '.$_SESSION['fullName'].'</h3>';
                        echo '<a href="logout.php"> Logout</a>';
                    }else{
                        header('location: login.php');

                    }
                    /*echo '<pre>';
                    print_r($userInfo);
                    echo '</pre>';*/

                }else{
                    header('location: login.php');
                }
            /*
            session_start();
            if($_SESSION['flagPermission']==true){
                if($_SESSION['timeout'] + 20 > time()){
                    echo '<h3>Xin chào: '.$_SESSION['fullName'].'</h3>';
                    echo '<a href="logout.php">Đăng xuất</a>';
                }else{
                    session_unset();
                    header('location: login.php');
                }

            }else{
                if(!checkEmpty($_POST['username']) && !checkEmpty($_POST['password'])){
                    $username 	= $_POST['username'];
                    $password 	= md5($_POST['password']);
                    $data 		= parse_ini_file('users.ini');
                    $userInfo 	= explode('|', $data[$username]) ;

                    if($userInfo[0] == $username && $userInfo[1] == $password){
                        $_SESSION['fullName'] 		= $userInfo[2];
                        $_SESSION['flagPermission'] = true;
                        $_SESSION['timeout'] 		= time();
                        echo '<h3>Xin chào: '.$_SESSION['fullName'].'</h3>';
                        echo '<a href="logout.php">Đăng xuất</a>';
                    }else{
                        header('location: login.php');
                    }
                }else{
                    header('location: login.php');
                }
            }*/
			?>
        </div>
        
    </div>
</body>
</html>
