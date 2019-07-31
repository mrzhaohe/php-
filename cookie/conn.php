<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/25
 * Time: 21:29
 */
header('Content-Type:text/html; Charset=utf-8');

$conn=@mysqli_connect('localhost','root', 'root','p2peye');
mysqli_query($conn,'set names utf8');


