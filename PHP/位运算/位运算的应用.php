<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/31
 * Time: 16:18
 *
 *
 *
 *
 */

$status = $_POST['status'];

$total = array_sum($status);

echo  $total;


define('V1',1);//新品
define('V2',2);//精品
define('V3',4);//促销


if ($total & V1) {
    echo '新品';
}

if ($total & V2) {
    echo '精品';
}
if ($total & V3) {
    echo '促销';
}
