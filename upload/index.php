<?php

/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/25
 * Time: 22:55
 */



?>



<!DOCTYPE html>


<html>

<head>

    <meta charset="utf-8">
    <title>文件上传</title>
</head>

<body>

    <form action="upload.php" method="post" enctype="multipart/form-data">

        <p>文件名:<input type="text" name="filename"> </p>
        <p>选择文件:<input type="file" name="img"> </p>

        <p><input type="submit" value="上传"></p>
    </form>


</body>

</html>