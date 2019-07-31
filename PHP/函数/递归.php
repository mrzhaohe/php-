<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/30
 * Time: 16:44
 * 递归函数：
 *         在函数内调用函数自己
 *
 * 递归函数必须设置 入口和出口
 *
 *      递归出口：
 *      递归入口：
 *
 */

//function show($num)
//{
//
//    $num++;
//    if ($num < 4) {
//        echo $num;
//        echo '<br/>';
//        show($num);
//    }
//    echo $num;
//    echo '<br/>';
//
//}
//
//
//show(0);

//斐波那切数列
function show($n)
{

    if ($n == 0) return 0;
    if ($n == 1) return 1;

    return show($n - 1) + show($n - 2);

}


echo show(10);
