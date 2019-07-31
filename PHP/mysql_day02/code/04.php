<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/23
 * Time: 15:33
 */


$conn=mysqli_connect('localhost','root','root','mysql') or die('failed');




//$rs=mysqli_query($conn,'show tables');
//
//while($row=mysqli_fetch_assoc($rs)) {
//    echo $row['Tables_in_mysql'].'<br/>';
//
//}


//$rs=mysqli_query($conn,'show tables');
//while($row=mysqli_fetch_row($rs)) {
//    echo $row[0].'<br/>';
//
//}


//$rs=mysqli_query($conn,'show tables');
//while($row=mysqli_fetch_array($rs)) {
////    echo $row['Tables_in_mysql'].'<br/>';
//var_dump($row);
//echo '<hr>';
//}

$rs=mysqli_query($conn,'show tables');
echo mysqli_num_rows($rs);