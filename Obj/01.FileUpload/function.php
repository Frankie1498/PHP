<?php
//Check File
function checkSize($size,$min,$max){
        $flag = false;
    if ($size>=$min && $size <= $max){
        $flag = true;
    }
    return $flag;
}
// pathinfo lấy giá trị đường dẫn, PATHINFO_EXTENSION lấy đuôi file
// Kiểm tra trong file có đuôi cần tìm không , nếu có trả về giá trị
function checkSizeExtention($fileName,$arrExtention){
        $ext     = pathinfo($fileName,PATHINFO_EXTENSION);
        $flag    = false;
   if (in_array(strtolower($ext),$arrExtention)== true){//strtolower chữ hoa - > thường
        $flag    = true;
   }
   return $flag;
}
// Random filename
function randomString($fileName,$length = 5){
    //array_merge nối mảng
    $ext            = pathinfo($fileName,PATHINFO_EXTENSION);
    $arrCharacter   = array_merge(range('A','Z'), range('a','z'), range(0,9));
    //implode sẽ nối các phân tử của mảng lại thành một chuỗi
    $arrCharacter   = implode($arrCharacter, '');
    //str_shuffle sẽ đảo thứ tự một cách ngẫu nhiên các kí tự trong chuỗi
    $arrCharacter   = str_shuffle($arrCharacter);

    $result		    = substr($arrCharacter, 0, $length).'.'.$ext;
    return $result;
}
print_r($_FILES);