<?php
// Xây dựng ứng dụng upload file có size từ 100kb->5Mb, có dạng jpg, png, zip, mp3
require_once ('function.php');
        $fileUpload         = $_FILES['file-upload'];// truy cập đến phần tử file upload
        $fileName           = './files/'.randomString($fileUpload['name'],7);
        $flagSize           = checkSize($fileUpload['size'],100*1024,5*1024*1024);// đơn vị cơ bản là byte
        $flagExtension      = checkSizeExtention($fileUpload['name'],array('jpg', 'png', 'zip', 'mp3'));

    if ($flagSize == true && $flagExtension == true){
        @move_uploaded_file($fileUpload['tmp_name'],$fileName);// @ nếu có lỗi khi upload file thì không hiển thị
        echo 'File Upload Success';
    }
?>