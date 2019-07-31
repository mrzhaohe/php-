<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/25
 * Time: 15:07
 */
header('Content-Type:text/html; Charset=utf-8');

$db = $_GET['db'];
$table = $_GET['table'];
$con = mysqli_connect('localhost', 'root', 'root', $db) or die('error');
mysqli_query($con, 'set names utf8');

$sql="desc $table";
$rs=mysqli_query($con,$sql);

echo "<table border='1'><thead><tr>";
while ($row=mysqli_fetch_row($rs)) {
    echo '<th>'.$row[0].'</th>';
}
echo '</tr></thead><tbody>';

$sql = "select *from $table";
$rs = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($rs)) {
    echo '<tr>';
    foreach ($row as $v) {
        echo '<td>'.$v.'</td>';
    }
    echo '</tr>';
}
echo '</tbody></table>';
mysqli_free_result($rs);
mysqli_close($con);
