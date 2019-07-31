<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/30
 * Time: 17:19
 *
 *
 * 数组的分类
 *
 *      按键名划分
 * ：
 *          1.关联数组 ： 键名是字符串类型
 *          2.索引数组 ： 键名是整数类型
 *
 *
 *
 * 数组的遍历
 *
 *       1、完整版
 *           foreach ($arr as $key => $value) { }
 *
 *      2.简洁版
 *          foreach ($arr as $value) { }

 *      foreach 遍历的是数组的副本
 *
 *
 *
 *
 */


$arr = [1,2,2,3,5];

//echo implode('--',$arr);

$arr1 = ['boss'=>'张飞',2,3,3];


foreach ($arr1 as $key => $value) {

    echo  $key.'---'.$value.'<br/>';

}




