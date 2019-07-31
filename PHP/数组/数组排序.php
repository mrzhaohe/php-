<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/31
 * Time: 10:25
 *
 *   数组排序
 *
 *  1、按照值排序
 *          sort($arr) : 由小到大 排序
 *          rsort($arr) : 由大到小
 *          asort() : 由小到大保留键名
 *          arsort() : 由大到小保留键名
 *
 *  2、键名排序
 *          ksort()
 *          krsort()
 *
 *
 *
 *
 *  3、
 */



//$arr = [9,1,7,5,8];
//
////sort($arr);
//
//print_r($arr);
//
//echo '<hr/>';
////rsort($arr);
//
//echo '<hr/>';
//
//
//
//asort($arr);
//print_r($arr);


// 按照年龄排序


$students = array(

    array('name' => '关羽', 'age' => 23, 'height' => 178),
    array('name' => '张飞', 'age' => 20, 'height' => 179),
    array('name' => '曹操', 'age' => 27, 'height' => 168),
    array('name' => '刘备', 'age' => 22, 'height' => 170)

);


usort($students, 'compareAge');

function compareAge($a, $b)
{

    if ($a['age'] < $b['age']) {
        return -1;
    }

    if ($a['age'] == $b['age']) {
        return 0;
    }

    if ($a['age'] > $b['age']) {
        return 1;
    }
}

print_r($students);

