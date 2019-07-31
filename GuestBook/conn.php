<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/24
 * Time: 18:50
 */

header('Content-Type:text/html; Charset=utf-8');

$conn=@mysqli_connect('localhost','root','root','book') or die('error');
mysqli_query($conn,'set names utf8');


