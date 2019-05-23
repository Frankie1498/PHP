<?php
        $myArrs = array(
                array('id'    =>   1,'name'  =>   'PHP'),
                array('id'    =>   2,'name'  =>   'JS'),
                array('id'    =>   3,'name'  =>   'NodeJS')
        );
        $string = 'This is a text';
        echo $myArrsEncode = json_encode($myArrs);// chuyển mảng PHP sang json
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="js/json2.js"></script>
    <script type="text/javascript" >
        var str = '<?php echo $myArrsEncode?>';// str= giá trị $myArrsEncode

        var myObj = JSON.parse(str);// chuyển chuỗi thành json
        console.log(myObj[0].name);

    </script>
</head>
<body>

</body>
</html>