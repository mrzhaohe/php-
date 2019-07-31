<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/31
 * Time: 10:51
 *
 *
 * 字符串 处理：
 *
 *          1、字符串 [] 操作符
 *
 *
 *          2、多字节概念
 *
 *          存储概念是字节
 *
 *
 *
 */

$str = 'www.p2peye.com';
//echo $str[11];  //可以读取

var_dump($str[1]);

//只能修改一个位置
$str[0] = 'h';//可以修改

echo $str;


echo '<br/>';


echo strpos($str,'w');
