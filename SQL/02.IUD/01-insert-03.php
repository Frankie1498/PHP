<?php
//connect
    $con = @mysqli_connect('localhost','root','');// host , user, password

    if (!$con)die('<h3>Fail</h3>');
    //Insert
        mysqli_select_db($con,'manage_user');

        $arrData = array(
            array('name'=>'Member123','status'=>'12','ordering'=>'101'),
            array('name'=>'Admin1'),
            array('name'=>'Admin2','ordering'=>'100'),
            array('id'=>149,'name'=>'Long','status'=>'1','ordering'=>'1')
        );

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
        foreach ($arrData as $value){
            $newQuery = createInsertSQL($value);
            $query    = "INSERT INTO `group`(".$newQuery['cols'].") VALUES (".$newQuery['vals'].")";
            $res      = mysqli_query($con,$query);
     }
    mysqli_close($con);