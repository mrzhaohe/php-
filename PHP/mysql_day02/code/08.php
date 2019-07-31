<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/24
 * Time: 18:00
 */

//create database book;
//
//create table guestbook (
//
//    id int primary key auto_increment,
//    username varchar(20),
//    content text,
//    intime timestamp default current_timestamp
//);
//
//
//create table comment (
//
//    id int primary key auto_increment,
//    book_id int,
//    username varchar(20),
//    content text,
//    intime timestamp default current_timestamp
//
//);




//1.允许用户填写留言
//
//    1）新建文件 index.php
//    2) 制作一个 FORM 表单，用于手机用户的留言信息
//        用户名  文本框 <input type='text' name='username'/>
//        内容 文本域  <textarea name='content'></textarea>
//        提交按钮
//
//     3）将收集到的数据提交给 new_save.php 文件去实现功能
//     4) 新建文件 new_save.php 文件用于保存新留言的数据
//     5) 接受用户名 内容 等 新留言 数据
//     $_POST
//     6) 验证数据有效性
//     7）构造 SQL 语句实现新增留言的功能
//        insert into