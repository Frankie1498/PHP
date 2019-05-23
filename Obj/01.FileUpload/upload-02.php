<?php
// Xây dựng ứng dụng upload file có size từ 100kb->5Mb, có dạng jpg, png, zip, mp3
require_once ('function.php');
        $configs            = parse_ini_file('config.ini');
        //echo gettype($configs);
        /*echo '<pre>';
        print_r($configs);
        echo '</pre>';*/
        $fileUpload         = $_FILES['file-upload'];// truy cập đến phần tử file upload
        $fileName           = './files/'.randomString($fileUpload['name'],7);
        $flagSize           = checkSize($fileUpload['size'],$configs['min_size'],$configs['max_size']);// đơn vị cơ bản là byte
        $flagExtension      = checkSizeExtention($fileUpload['name'],explode("|",$configs['extension']));
        //explode chuyển một chuỗi thành một mảng và mỗi phần tử được cắt bởi một chuỗi con nào đó(|)

    if ($flagSize == true && $flagExtension == true){
       @move_uploaded_file($fileUpload['tmp_name'],$fileName);// @ nếu có lỗi khi upload file thì không hiển thị
        echo 'File Upload Success';
    }
?>