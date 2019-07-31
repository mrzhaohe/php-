<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/24
 * Time: 22:41
 */
include ('./conn.php');

$id=$_POST['id'];
$username=$_POST['username'];
$content=$_POST['content'];


$sql="update guestbook set username='$username',content='$content' where id=$id";

$rs=mysqli_query($conn,$sql);

if ($rs) {
    echo '修改成功';
    header("Location: index.php");
} else {
    echo mysqli_error($conn);
}