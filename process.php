<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login = array(
        ['user' => 'admin', 'pass' => 'admin'],
        ['user' => 'admin1', 'pass' => 'admin'],
        ['user' => 'admin2', 'pass' => 'admin'],
    );
    foreach( $login as $item){
        if($username == $item['user']){
            if($password == $item['pass']){
                echo 'đăng nhập thành công';
                break;
            }
            else{

                echo "sai mật khẩu";
                break;
            }
        }
        else{
            echo'tài khoản không tồn tại';
            break;
        }
    }
    const code = 100;
?>