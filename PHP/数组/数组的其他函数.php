<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/31
 * Time: 09:59
 *    变量与数组相互转换的函数
 *
 *    extract($arr)  将数组转换成变量，数组的键名作为变量名，数组的值作为变量值。
 *
 *    compact($var1,$var2,$var3): 用给定的变量创建一个数组
 *
 *
 *          array_splice()
 *
 *                  可以删除指定位置的数组元素 ，
                        array_splice($arr,0,1);
                        print_r($arr);

                    也可以替换指定位置的元素
                        array_splice($arr,0,1,['hh']);
                          print_r($arr);
 *
 *
 */

$arr = ['name1'=>'刘备','name2'=>'关羽','name3'=>'张飞'];

//extract($arr);
//
//echo $name1;


//extract($_GET);
//$id = $_GET['id'];
//echo  $id;


//可以删除指定位置的数组元素 ，
//array_splice($arr,0,1);
//print_r($arr);

//也可以替换指定位置的元素
array_splice($arr,0,1,['hh']);
print_r($arr);
