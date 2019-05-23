<?php
// Xây dựng ứng dụng upload file có size từ 100kb->5Mb, có dạng jpg, png, zip, mp3
require_once ('function.php');
        $configs            = parse_ini_file('config.ini');
        //echo gettype($configs);
        $fileUpload         = $_FILES['file-upload'];// truy cập đến phần tử file upload

        echo '<pre>';
        print_r($fileUpload);
        echo '</pre>';
    foreach ($fileUpload['name'] as $key => $value){
        if ($value != null){
            $fileName           = './files/'.randomString($value,7);
            $flagSize           = checkSize($fileUpload['size'][$key],$configs['min_size'],$configs['max_size']);
            $flagExtension      = checkSizeExtention($value,explode("|",$configs['extension']));
            if ($flagSize == true && $flagExtension == true){
                @move_uploaded_file($fileUpload['tmp_name'],$fileName);// @ nếu có lỗi khi upload file thì không hiển thị
                echo 'File Upload Success';
            }
        }
    }

?>