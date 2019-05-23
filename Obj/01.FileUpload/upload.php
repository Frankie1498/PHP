<?php
// form luôn phải có giá trị  enctype="multipart/form-data"
    function randomString($length = 5){
        //array_merge nối mảng
        $arrCharacter = array_merge(range('A','Z'), range('a','z'), range(0,9));
        //implode sẽ nối các phân tử của mảng lại thành một chuỗi
        $arrCharacter = implode($arrCharacter, '');
        //str_shuffle sẽ đảo thứ tự một cách ngẫu nhiên các kí tự trong chuỗi
        $arrCharacter = str_shuffle($arrCharacter);

        $result		= substr($arrCharacter, 0, $length);
        return $result;
    }
$fileUpload = $_FILES['file-upload'];// truy cập đến phần tử file upload
if ($fileUpload['name']!= null){
    $fileName = $fileUpload['tmp_name'];
    $random = randomString(6);
    $destination = './files/'.$random.$fileUpload['name'];
    //move_uploaded_file($fileName,$destination);// move_uploaded_file(file-name, đường dẫn) tương tự hàm copy
   if ( copy($fileName,$destination)){
       echo 'Success';
   }
}