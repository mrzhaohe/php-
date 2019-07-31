<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/24
 * Time: 18:34
 */

include './conn.php';


$username=$_POST['username'];
$content=$_POST['content'];
$img=$_FILES['img'];


if (strlen($img['name']) > 0) {
    $ext= strrchr($img['name'],'.');
    //判断文件类型
    $allow=['.jpg','.png','.gif','.jpeg'];
    if (!in_array($ext,$allow)) {
        echo '上传文件类型有误';
        exit;
    }
    $imgpath=date('YmdHis').$ext;
} else {
    $imgpath = '';
}

$tmp=$img['tmp_name'];
move_uploaded_file($tmp,'./'.$imgpath);
//验证数据有效性

if (strlen($username) < 2) {
    echo '用户名不能小于 2 个字';
    exit;
}

if (strlen($content) < 1) {
    echo '留言内容不能为空';
    exit;
}

$sql="insert into guestbook(username,content,imgpath) values ('$username','$content','$imgpath')";

$r=mysqli_query($conn,$sql);

if ($r) {
    echo 'success';
    echo '<a href="./index.php">回到首页</a>';
} else {
    echo mysqli_error($conn);
}