<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/31
 * Time: 09:52
 *
 *      数组与字符串 转换
 *      array explode(分隔符，字符串): 将字符串按分隔符分割后放入到数组中
 *      string implode(分隔符，数组)：将数组元素按照连接符进行连接，连接符默认为空。
 */


$str = 'h e l l o w o r l d';
$arr = explode(' ',$str);

//var_dump($arr);

print_r($arr);
echo '<br/>';


$arr1 = ['1','2','3'];
$str1 = implode('--',$arr1);

echo $str1;








