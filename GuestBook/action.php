<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/25
 * Time: 11:02
 */
include('./conn.php');

//置顶
$act = $_GET['action'];
if ($act == 'istop') {

    $id = $_GET['id'];
    $sql = "update guestbook set istop=1 where id=$id";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        echo '置顶成功';
    } else {
        echo '置顶失败';
        echo mysqli_error($conn);
    }

}
//取消置顶
if ($act == 'cancel') {
    $id = $_GET['id'];
    $sql = "update guestbook set istop=0 where id=$id";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        echo '取消置顶成功';
    } else {
        echo '取消置顶失败';
    }

}


//点赞
if ($act == 'praise') {
    $id = $_GET['id'];
    $sql = "update guestbook set praise=praise+1 where id=$id";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        header('Location: index.php');
    } else {
        echo mysqli_error($conn);
    }
}

//举报
if ($act == 'report') {
    $id = $_GET['id'];
    $sql = "update guestbook set report=1 where id=$id";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        header("Location: index.php");
    } else {
        echo mysqli_error($conn);
    }
}

//回复
if ($act == 'reply') {
    $id = $_GET['id'];
    $username = $_POST['username'];
    $content = $_POST['content'];
    $sql = "insert into comment(book_id,username,content) values ($id,'$username','$content')";

    $rs = mysqli_query($conn, $sql);
    if ($rs) {
//        header('Location: index.php');
        echo '回复完成<a href="index.php">回到首页</a>';
    } else {
        echo mysqli_error($conn);
    }
}