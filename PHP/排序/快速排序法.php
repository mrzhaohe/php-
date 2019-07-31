<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/31
 * Time: 14:46
 *
 *
 * 快速排序法
 *
 *
 */


$arr = [3, 13, 2, 4, 23, 45, 21, 44, 25, 5];


function quickSort($arr)
{
    if (count($arr) <= 1) {
        return $arr;//这里是递归的出口
    }
    $temp = $arr[0];
    $big = $small = [];

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $temp) {
            $big[] = $arr[$i];
        } else {
            $small[] = $arr[$i];
        }
    }
    $big = quickSort($big);//这里是递归的入口
    $small = quickSort($small);

    return array_merge($big, [$temp], $small);
}

var_dump(quickSort($arr));
