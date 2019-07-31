<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/24
 * Time: 17:43
 */


$username=$_POST['username'];
$age=$_POST['age'];
$gender=$_POST['gender'];


$conn=@mysqli_connect('localhost','root','root','p2peye');
mysqli_query($conn,'set names utf-8');



$sql="insert into student(username,age) values ('$username','$age')";

//echo $sql;

$rs=mysqli_query($conn,$sql);
if ($rs) {
    echo 'success';
} else {
    echo 'error';
}