<?php

header('Content-Type:text/html; Charset=utf-8');

/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/23
 * Time: 11:26
 *
 * 关闭数据库
 */

$conn=mysqli_connect('localhost','root','root','p2peye') or die('failed');

$rs=mysqli_query($conn,'show databases');

while($row=mysqli_fetch_assoc($rs)) {
    echo $row['Database'].'<br/>';

}

//释放结果集 占用的空间
mysqli_free_result($rs);
//关闭数据库连接
mysqli_close($conn);