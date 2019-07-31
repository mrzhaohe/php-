<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/30
 * Time: 10:36
 *      静态局部变量
 *          在函数内声明，是一个局部变量，函数执行时声明，函数执行结束时不会自动销毁，直到php 脚本执行结束或unset 才销毁。
 *
 *
 *
 *

 */


function show() {

    echo  '<br/>今天星期';
    static $n = 1; //静态局部变量的声明只执行一次，在后续的调用中不会再执行。
    echo $n++;

}

show();
show();
show();
show();
show();

echo '<hr/>';


var_dump(function_exists('show'));