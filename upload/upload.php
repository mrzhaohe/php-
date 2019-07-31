<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/25
 * Time: 22:58
 */

date_default_timezone_set('PRC');

$img=$_FILES['img'];

//array(5) { ["name"]=> string(36) "屏幕快照 2019-07-19 15.04.36.png" ["type"]=> string(9) "image/png" ["tmp_name"]=> string(36) "/Applications/MAMP/tmp/php/phpYD5GU0" ["error"]=> int(0) ["size"]=> int(55352) }
$originname=$img['name'];
$ext=strrchr($originname,'.');
//echo $ext;

if ($ext != '.png'  && $ext != '.jpg' & $ext != '.gif' & $ext != '.jpeg') {
    echo '上传文件格式有误';
    exit;
}
$filename=date('YmdHis').'-'.rand(100,900).$ext;
//临时缓存地址
$tmp=$img['tmp_name'];
move_uploaded_file($tmp,'./'.$filename.'');

