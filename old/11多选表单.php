<?php
$q = isset($_POST['q'])? $_POST['q'] : '';
if(is_array($q)) {
    $sites = array(
        'runoob' => '菜鸟教程: http://www.runoob.com',
        'google' => 'Google 搜索: http://www.google.com',
        'taobao' => '淘宝: http://www.taobao.com',
    );
    foreach($q as $val) {
        // PHP_EOL 为常量，用于换行
        echo $sites[$val] . PHP_EOL;
    }

}
?>