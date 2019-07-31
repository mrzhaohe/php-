<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/30
 * Time: 18:32
 *
 *   数组常用函数:
 *          array_values 格式化数组的键名
 *          array_keys 获取数组的键名
 *          array_flip 键名与键值互换
 *          in_array(值，数组) 数组内是否包含改值
 *          array_search(值，数组) 在数组内检索值，存在返回键名，否则返回  false
 *
 *
 *          array_unique($arr)  移除数组中重复的值 新的数组中会保留原始的键名
 */


$arr = ['张飞', 'boss' => '刘备', '关羽','关羽'];

//获取数组中所有的值
print_r(array_values($arr));
echo '<hr/>';

//获取数组中的所有key
print_r(array_keys($arr));
echo '<hr/>';

//键名与 键值 互换
print_r(array_flip($arr));
echo '<hr/>';

// 搜索数组中是否存在某个值
print_r( in_array('张飞',$arr));
echo '<hr/>';
// 搜索数组中是否存在某个值
print_r(array_search('刘备', $arr));

echo '<hr/>';

//移除数组中重复的值
$newArr = array_unique($arr);
print_r($newArr);

echo '<br/>';

//反转 数组 false 不保留键名  true  保留键名
print_r(array_reverse($newArr,false));
echo '<br/>';

//数组中的个数
echo count($newArr);
echo '<br/>';
//合并数组 产生一个新数组  不会对原来的数组产生影响
print_r(array_merge($arr,$newArr));

