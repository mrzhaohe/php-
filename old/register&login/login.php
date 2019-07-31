<?php


$loginname = $_POST['username'];
$loginpwd = $_POST['pwd'];

if ($loginname == '') {
    exit("登录名不能为空");
}

if ($loginpwd == '') {
    exit("登录密码不能为空");
}
$con = mysqli_connect("localhost", "root", "root", "p2peye");
if ($con) {
    mysqli_query($con, "set names utf8");
    $loginpwd = md5($loginpwd);
    $sql = "select *from user where username='{$loginname}' and pwd='{$loginpwd}'";
    $re = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($re);
    if ($data) {
        echo "login success";
    } else {
        echo "登录失败";
    }
}


?>