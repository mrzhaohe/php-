<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/24
 * Time: 17:33

 * 项目字符集五个地方统一


1、 PHP 与浏览器之间交互的编码
header('Content-Type:text/html; Charset=utf-8');

2、PHP 文件保存的编码 utf-8  在编辑器中设置


3、数据库保存的 用 utf-8

show create table student;

4、设置 PHP 与 MySQL 交互层使用 utf-8
mysqli_query($conn,'set names utf-8');

5、HTML  meta 标签声明必须使用 utf-8

<meta charset='utf-8'/>


 */