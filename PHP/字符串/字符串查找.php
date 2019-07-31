<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/31
 * Time: 11:34
 *
 *      字符串查找
 *      strpos（$str,''）: 查找字符串在另一个字符串中首次出现的位置
 *
 */

$str ='www.p2peye.com';

//***** 巨大的坑

if (strpos($str,'w') === false) {
    echo '没找到';
}else {
    echo '找到了';
}
