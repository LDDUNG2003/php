<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php
        include './css/style.css'
    ?>
    </style>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
</head>
<body>
    <h1 id="check">check</h1>
    <h1>
    <?php
        $firtname = "Nguyễn Hoàng";
        $lastname = "Nam";
        $name = "$firtname $lastname";
        $age = 25;
        $phone = '0986421127';
        $email = "luongitvnssoft@gmail.com";
        $address = "số 7 - Mỹ Đình - Cầu Giấy -Hà Nội";
        $color = 'blue';
        ?>
    </h1>
    <h1>
        <h1 style="color:<?php echo $color; ?>"><?php echo $name?></h1>
    <table border="1px">
        <tr><td>tên</td><td><?php echo $name?></td></tr>
        <tr><td>tuổi</td><td><?php echo $age?></td></tr>
        <tr><td>số điện thoại </td><td><?php echo $phone?></td></tr>
        <tr><td>email</td><td><?php echo $email?></td></tr>
        <tr><td>địa chỉ</td><td><?php echo $address?></td></tr>
    </table>
    <?php
        function tutal_odd($n){
            $sum = 0;
        for($i=1;$i<$n;$i++){
            if($i%2 == 0){
                echo $i;
                $sum = $sum +$i;
            }
        }
        return $sum;
        }
        echo tutal_odd(20);
    ?>
    </h1>
    <form action="process.php" method="POST">
        Tên: <br> <input type="text" value="" maxlength="255" required name="username"><br>
        Mật Khẩu: <br> <input type="password" required name="password"><br>
        <input type="submit" value="đăng nhập">
    </form>
    <?php
        $students = array('cương', 'hang' , 'nam');
        $students [] = 'an';
        print_r($students);
        foreach($students as $item){
            echo $item .'<br>';
        }
        echo "hello";
    ?>
    <h1 id="check">check css</h1>
    <?php
    // path file :
        $path_file = __FILE__;
        echo $path_file .'<br>';
        // path url
        $path_dir = __DIR__;
        echo $path_dir;
    ?>
</body>
</html>