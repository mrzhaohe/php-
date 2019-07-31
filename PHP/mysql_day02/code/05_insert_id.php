<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/23
 * Time: 16:01
 */


$con=mysqli_connect('localhost','root','root','p2peye');

$rs=mysqli_query($con,"insert into student(username,age) values ('李四',20)");

echo '刚刚插入的 ID 是：'.mysqli_insert_id($con);

