<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/31
 * Time: 11:45
 *
 *      substr() :
 *
 *      mb_*** 函数：多字节字符函数，主要用于处理多字节字符的相关操作。
 *
 *      mb_substr（） ：
 *
 *      strrchr() : 最后一次搜索到的字符串返回
 *                  用处：截取路径中文名称或者扩展名
 *
 *
 */

$str = 'www.p2peye.com';
echo substr($str,0,3);//从0开始截取3个字符

echo '<br/>';

echo substr($str,1); //从1开始截取到最后，第三个参数不写 就截取到最后


echo '<br/>';

echo substr($str,-4);


echo '<br/>';
//截取汉字
$str= '今天星期三';
echo substr($str,1);



//phpinfo();

//多字节字符
echo mb_substr($str,1,3,'utf-8');


// strrchr()
$filename = 'dsjahda.jdj.jpg';

$ext = strrchr($filename,'.');

$exts = ['.jpg','.png','.txt'];

echo $ext;
echo '<br/>';
if (in_array($ext,$exts)) {

    echo '允许上传';
}else {
    echo '不允许上传';
}

