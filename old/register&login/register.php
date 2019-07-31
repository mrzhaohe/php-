<?php


$username = $_POST['username'];
$pwd = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];


if ($username == '') {
    exit('用户名不能为空');
}

if ($pwd == '') {
    exit('密码不能为空');

}

if ($pwd != $pwd2) {
    exit('二次密码不一致');
}


$con = mysqli_connect("localhost", "root", "root", "p2peye");

if ($con) {
    mysqli_query($con, "set names utf8");

    echo "connect success" . '</br>';
    $pwd = md5($pwd);
    $sql = "insert into user (username,pwd)values('{$username}','{$pwd}')";
    mysqli_query($con, $sql);

//    echo mysqli_affected_rows($con);

    if (mysqli_affected_rows($con)==1) {
        echo $username . "register success";
    } else {
        echo "register failed";
    }



} else {
    echo "failed";
}

?>