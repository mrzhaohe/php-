<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/31
 * Time: 12:12
 *
 *
 *      html 相关函数
 *
 *      nl2br() ： 将代码中的换行符或者回车符 替换为 <br/> 标签
 *
 *
 *      strip_tags() : 去除 字符串中的 html 标记
 *
 *
 *      urlencode () : 编码
 *
 *      urldecode () : 解码
 */


$str = <<<XXX
今天 
<h1>星期三</h1>
我们又在上班
XXX;

echo nl2br($str);

echo '<br/>';

echo nl2br(strip_tags($str));

echo '<br/>';


echo urlencode($str);










