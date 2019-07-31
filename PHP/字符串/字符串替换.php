<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/31
 * Time: 12:06
 *
 *      字符串替换
 *
 *      str_replace
 *
 *      strlen()
 *
 *      mb_strlen
 *
 *
 *
 *      去除空格
 *
 *      trim()
 *      ltrim()
 *      rtrim()
 */



$str = 'wwhdsahda.dhjsad';


echo str_replace('.','$$$',$str);


echo '<br/>';

echo $str;


//字符串长度  是字节的长度 不是字符的长度

echo '<br/>';

$str = '哈哈';

echo strlen($str);
echo '<br/>';
//字符长度
echo  mb_strlen($str,'utf-8');




