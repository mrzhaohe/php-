<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/29
 * Time: 18:33
//文件加载
       将其他的文件，加载到当前文件中进行执行。
 * include
 *  用法1：
 *      include '文件路径'；
 *  用法2：
 *      include('文件路径');
 *
 * require
 * include_once
 * require_once
 *
 * include 载入多少次 目标文件就执行多少次
 * 一般会使用 require_once
 *
 * include 与 require的区别
 *
 * include 在载入的文件出错时，报警告错误，后面的代码继续执行。
 *
 * require 在载入的文件出错时，报致命错误，后面的代码不再执行。
 *
 * 1. 在团队开发时 ，尽量使用 require_once
 * 2. 尽量使用相对路径 ./
 * 3. 在入口页面将当前目录设置的常量，在其它文件时以这个常量加对应的路径来包含文件
 *
 */
require_once('./loadFile_head.html');

require_once('./post.php');
echo '<h1>主体</h1>';

require_once('./loadFile_footer.html');
show();