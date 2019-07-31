<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/24
 * Time: 17:36
 */

header('Content-Type:text/html;Charset=utf-8');


?>

<!DOCTYPE html>
<html>


<header>

    <meta charset="utf-8">
    <title>注册新用户</title>
</header>


<body>

<form action="register.php" method="post">

    <p>姓名：<input type="text" name="username"/></p>
    <p>年龄：<input type="text" name="age"/></p>
    <p>性别：
        <label>
            <input type="radio" name="gender" value="男"/>男
        </label>
        <label>
            <input type="radio" name="gender" value="女"/>女

        </label>
    </p>

    <p>

        <input type="submit" value="立即注册"/>

    </p>


</form>

</body>
</html>