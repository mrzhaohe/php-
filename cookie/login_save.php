<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/25
 * Time: 21:29
 */

include ('./conn.php');

$username=$_POST['username'];
$password=$_POST['password'];
$password=md5($password);

$sql="select *from member where username='$username' and password='$password'";

$rs=mysqli_query($conn,$sql);

$row=mysqli_num_rows($rs);


if (mysqli_num_rows($rs) > 0) {
    $row=mysqli_fetch_assoc($rs);
    session_start();
    $_SESSION['id'] = $row[id];
    $_SESSION['username'] = $row[username];
    echo '欢迎回来。。。<a href="index.php">回到首页</a>';

}


