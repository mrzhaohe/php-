<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/24
 * Time: 20:37
 */
include('./conn.php');

$id=$_GET['id'];

if (!is_numeric($id)) {
    echo '传入的 id  不是一个数字';
    exit;
}
$sql="delete from guestbook where id=$id";

$rs=mysqli_query($conn,$sql);
if ($rs) {
//    echo '删除成功';
//    header('Location: index.php');

    echo '<script>alert("删除成功！");location.href="./index.php";</script>';

} else {
    echo '删除失败';
    echo mysqli_error($conn);
}

