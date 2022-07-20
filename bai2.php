
<?php
$stdudent = array(
['name'=> 'Lê Đình Dũng', 'class' =>'k21cnt1'],
['name'=> 'do van trung', 'class' =>'k21cnt1'],
['name'=> 'nguyen quoc khanh', 'class' =>'k21cnt1'],
['name' =>'quach ngoc duc', 'class' => 'k21cnt3'],);
function name(){}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            width:200px;
            text-align:center;
        }
    </style>
</head>
<body>
<table border="1px solid ">
    <tr>
        <th>họ và tên sinh viên</th>
        <th> lớp theo học</th>
    </tr>
    <?php foreach ($stdudent as $item):?>
        <tr>
            <td><?php echo $item['name']?></td>
            <td><?php echo $item['class']?></td>
        </tr>
    <?php endforeach?>
</table>
</body>
</html>