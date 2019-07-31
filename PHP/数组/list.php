<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/30
 * Time: 17:58
 *
 *  list 语法结构：
 *        语法：
 *         list(变量1，变量2，变量3) = $数组名；
 *
 *
 */


//$arr = ['刘备','关羽','黄忠','赵云'];
//
//list(,,$c) = $arr;
//
//echo $c;


$arr = [
    ['刘1备', 21, 161],
    ['刘2备', 22, 162],
    ['刘3备', 23, 163],
    ['刘4备', 24, 164]];


echo '<table border="1" width="200">';

echo '<tr><th>姓名</th><th>年龄</th><th>身高</th></tr>';
foreach ($arr as $value) {

    echo '<tr>';
    foreach ($value as $value2) {
        echo "<td align='center'>$value2</td>";
    }
    echo '</tr>';


}
echo '</table>';

unset($arr[0]); //删除数组元素不会重新分配下标

//print_r($arr);


echo $arr[0];

echo '<hr/>';
echo is_array($arr);

