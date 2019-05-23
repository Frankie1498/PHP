<?php
//connect
    $con = @mysqli_connect('localhost','root','');// host , user, password

    if (!$con)die('<h3>Fail</h3>');
    //Insert
        mysqli_select_db($con,'manage_user');

        $arrData = array('name'=>'Member123','status'=>'12','ordering'=>'101');

     function createInsertSQL($data){
        $newQuery = array();
        if (!empty($data)){
            $cols= '';
            $vals= '';
            foreach ($data as $key => $value) {
                $cols .= ",`$key`";//`name`, `status`, `ordering`
                $vals .= ",'$value'";
            }
        }
        $newQuery['cols'] = substr($cols,1);
        $newQuery['vals'] = substr($vals,1);
        return $newQuery;
     }
        $newQuery = createInsertSQL($arrData);
        echo '<pre>';
        print_r($newQuery);
        echo '</pre>';
        $query    = "INSERT INTO `group`(".$newQuery['cols'].") VALUES (".$newQuery['vals'].")";

        $result =  mysqli_query($con,$query);
    if ($result == true) echo $total = mysqli_affected_rows($con);// xem số dòng đã thêm vào
    else echo mysqli_errno($con);
    //echo mysqli_errno($con);
    mysqli_close($con);