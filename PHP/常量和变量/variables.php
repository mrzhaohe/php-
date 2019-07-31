<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/29
 * Time: 14:42
 */


$age = 14;
echo $age."<br>";

//删除变量
//unset($age);
//echo $age;

//检测变量
//echo isset($age);
//var_dump 只要用于输出 内容的长度、类型、值。用于程序调试
var_dump(isset($age));


//变量赋值

//1.传值赋值 直接将变量 a 的值给 变量b,两个变量分别指向自己的内存空间，相互之间不影响。

$a = "11";
$b = $a;
$a = "10";
echo $b;
echo '<br/>';

//2.引用赋值 变量 c和d 指向同一块内存地址，相互之间会受影响。

$c = "10";
$d = &$c;
$c = "12";
echo $d;
echo '<br/>';

//可变变量  语法：$$变量名=变量值；


$str='a';
$$str='php';//可变变量：将已经定义好的变量值，作为变量的名字

echo $a;

echo '<br/>';


//预定义变量
var_dump($_SERVER);


//implode() 将数组的元素使用指定元素进行拼接，返回一个字符串
