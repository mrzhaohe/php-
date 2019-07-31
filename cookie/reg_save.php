<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/25
 * Time: 21:39
 */
include('./conn.php');

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if (mb_strlen($username, 'utf-8') < 2) {
    echo '用户名长度不能小于 2';
    exit;
}

if ($password != $password2) {
    echo '两次密码输入不一致，请重新输入';
    exit;
}


$password = md5($password);

$sql = "insert into member(username, password) values ('$username','$password')";

$rs = mysqli_query($conn, $sql);
if ($rs) {
//注册成功之后，自动登录
    $id = mysqli_insert_id($conn);
    session_start();
    $_SESSION['id'] = $id;
    $_SESSION['username'] = $username;
    echo '注册成功<a href="index.php">回到首页</a>';
} else {
    echo mysqli_error($conn);
}