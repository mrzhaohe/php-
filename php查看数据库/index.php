<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/25
 * Time: 16:02
 */

include ('../GuestBook/conn.php');

$sql='show databases';
$rs=mysqli_query($conn,$sql);

while ($row=mysqli_fetch_row($rs)) {

    $db= $row[0];
    echo '<a href="tablelist.php?db='.$db.'">'.$db.'</a>';
    echo '<br/>';
}

mysqli_free_result($rs);
mysqli_close($conn);