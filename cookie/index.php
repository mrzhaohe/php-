<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/25
 * Time: 21:18
 */


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>会员中心</title>
</head>
<body>
<h1>会员登录系统</h1>

<?php
session_start();
if (isset($_SESSION['id'])) {
    echo $_SESSION['username'] . ',欢迎回来...<a href="loginout.php">退出登录</a>';
} else {
    ?>


    <a href="reg.php">注册</a>
    <a href="login.php">登录</a>


    <?php
}

?>


</body>

</html>
