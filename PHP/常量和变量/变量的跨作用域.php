<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/30
 * Time: 10:04
 *
 * 变量的跨作用域访问
 *
 *  1. 借助超全局变量
 *
 *       $_POST、 $_GET、
 *
 *  2. $GLOBALS 预定义变量  *****强烈推荐使用******
 *        不用赋值 直接使用
 *
 *   3.global 关键字 不常用
 *      在函数内使用 global 关键字将全局变量声明一个副本到局部变量中
 *
 *
 *
 */

$str = "10";

//1.借助超全局变量

//$_GET['str'] = $str;
//
//function modify()
//{
//    echo $_GET['str'];
//}


//2. $GLOBALS

function modify()
{
    $GLOBALS['str'] = '跨作用域';
}


//3. global
/*
function modify() {
    global $str;
    echo  $str;
}
*/


modify();
echo '<br/>';
echo $str;
