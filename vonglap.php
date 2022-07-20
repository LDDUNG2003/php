<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = 10;
        // if($num == 10){
        //     echo "ban du tuoi";
        // }
        // else{
        //     echo "ban khong du tuoi";
        // }
        // echo $num==10?'ban du tuoi':'ban khong du tuoi';
        $printStr = $num<=10?'bạn đủ tuổi':null;
        echo $printStr;
        /**
         * cú pháp
         * bieu_thuc_dieu_kien?ket_qua_dung:ket_qua_sai;
         * 
         * lưu ý:
         * - toán tử ba ngôi phải luôn có giá trị điều kiện
         * - luôn luôn phải có giá trị sai
         * (nếu không hiển thị thì phải có giá trị null)
         */
        // for ($i=0;$i<100;$i++):
        //     echo $i.'<br>';
        // endfor;
        // $i = 0;
        // while($i < 100):
        //     echo $i;
        //     $i++;
        // endwhile;
        $spin = 10==10?'phep toann dung':null;
        echo $spin;
        for($a=10;$a<=20;){
            echo ' '.$a;
            $a = $a+2;
        }
        for($a=10;$a<=20;$a++){
            if($a%2 == 0){
                echo $a;
            }
        }
?>
</body>
</html>