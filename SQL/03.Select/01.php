<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>PHP & MySQL - Select</title>
</head>
<body>
	<div id="wrapper">
    	<div class="title">PHP & MySQL - Select</div>
        <div class="list">   
        
        	<div class="row header">
            	<p class="no">No</p>
                <p class="name">Group Name</p>
                <p class="status">Status</p>
                <p class="ordering">Ordering</p>
                <p class="id">ID</p>
            </div>
<?php

    //CONNECT
    $con = @mysqli_connect('localhost', 'root', '');// host , user, password

        if (!$con) die('<h3>Fail</h3>');
        mysqli_select_db($con,'manage_user');

        mysqli_query($con,"SET NAMES 'utf8'");
        mysqli_query($con,"SET CHARACTER 'utf8'");
    //SELECT
        $query = "SELECT * FROM `group` ORDER BY `ordering` DESC "; // ORDER BY ASC là tăng dần, DESC là giảm dần

        $result = mysqli_query($con,$query);

        $i = 1;
        $xhtml = '';
        while ($row = mysqli_fetch_assoc($result)){
            $class 	= ($i % 2 == 0) ? "odd" : "even";
            $status = ($row['status'] == 0) ? "Inactive" : "Active";
            $xhtml .= '<div class="row ' . $class . '">
		            	<p class="no">'.$i.'</p>
		                <p class="name">'.$row['name'].'</p>
		                <p class="status">'.$status.'</p>
		                <p class="ordering">'.$row['ordering'].'</p>
		                <p class="id">'.$row['id'].'</p>
		            </div>';
            $i++;
        }


        echo $xhtml;
    mysqli_close($con);
?>            
    	</div>
    </div>
</body>
</html>


	
	
	
	
	
	