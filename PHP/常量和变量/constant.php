<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/29
 * Time: 16:17

 1。定义常量（新增）
    语法：
        define('常量名','常量值');
    注意：
 *  1）常量的名字通常用大写。
 *  2）常量的值通常是一个标量类型 （简单类型：数字、字符串、布尔），在 PHP 5.6以后，可以使用数组作为常量值
    3）常量不能修改和删除
 *
 * 检测常量
 *
 * defined('常量名');
 *
 */


//常量
define('PI','3.1415926');

echo PI;

