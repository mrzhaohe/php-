<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/25
 * Time: 14:41
 */
header('Content-Type:text/html; Charset=utf-8');

$db=$_GET['db'];
$table=$_GET['table'];
$con=mysqli_connect('localhost','root','root',$db) or die('error');
mysqli_query($con,'set names utf8');
$rs=mysqli_query($con, 'show tables');

while ($row=mysqli_fetch_row($rs)) {
    $table= $row[0];
    echo $row[0].'<a href="datalist.php?db='.$db.'&table='.$table.'">查看数据</a>';
    echo '<br/>';
}

mysqli_free_result($rs);
mysqli_close($con);