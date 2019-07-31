<?php
header('Content-Type:text/html; Charset=utf-8');

/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/23
 * Time: 10:57

 * 使用 PHP 访问数据库
 *        mysqli_query() 向数据库发送 sql 语句
 *        mysqli_query(数据库链接标识,SQL 指令);
 *
 **结果集的处理
 *
 * 1、有返回值
 *
 *      执行成功返回 资源类型的对象 失败返回 false
 *      有返回值的命令 (select  show  desc)
 *
 *   **** 由于资源类型永远为真，不能用于判断是否有数据，只能用于判断命令是否执行成功。
 *
 * 2、无返回值
 *
 *      执行成功返回 true  失败返回 false
 *
 *      没有返回值的命令（insert  update delete set create drop alter
 *
 * 3、从结果集中读取数据
 *
 *      使用 PHP 函数  mysqli_fetch_assoc()  从结果集中读取1条数据，将读取到的数据以关联数组的形式返回。
 *  关联数组的键名就是字段名，同时结果集指针向下移动一行。
 *
 */

$conn=mysqli_connect('localhost','root','root','p2peye') or die('failed');

$rs=mysqli_query($conn,'select *from student');


$row=mysqli_fetch_assoc($rs);
//var_dump($row);

while($row=mysqli_fetch_assoc($rs)) {
    echo 'id:'.$row['id'].'<br/>';
    echo '名字:'.$row['username'].'<br/>';
    echo '年龄:'.$row['age'].'<hr/>';
}