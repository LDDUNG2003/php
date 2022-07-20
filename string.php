<?php
/**
 *  Hàm xử lí chuỗi:
 * addcslashes:
 *  - cú pháp : addcslashes($str_name, 'keysearch')
 *  - hàm gán giá trị liên kết mặc định '\' vào trước kí tự được tìm thấy
 * addslashes:
 * cú pháp lệnh: addslashes($str_name)
 * - hàm gắn giá trị liên kết vào nháy đơn nháy kép và \
 * explode: 
 * -cú pháp : explode('keyseach',$name_string) 
 * -tách chuỗi thành một mảng theo kí tự
 */
$str = 'Trung tâm đào tạo lâp trình Unicode';
$str = addcslashes($str,'U');
echo $str;
echo '<br>';
$str = stripslashes($str);
$str = addslashes($str);
echo $str;
echo '<br>';
$strnew = 'trung tâm đào tạo lập trình f8';
$excape = explode(' ',$strnew);
print_r($excape);
echo '<br>';
?>