<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/30
 * Time: 21:44
 *
 *      设置时区
 *         date_default_timezone_set()
 *
 *      time() 时间戳
 *
 *      字符串转为时间戳
 *          strtotime（）
 *
 */

date_default_timezone_set('PRC');
//echo date('Y-m-d H:i:s');

echo time();
echo '<hr/>';
echo date('Y-m-d H:i:s',time()+3600*10*24);

echo '<hr/>';
$str= '2018-10-30 21:50:30';
//字符串转为时间戳
echo strtotime($str);

