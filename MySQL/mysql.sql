
-- Created by PhpStorm.
-- User: zhaohe
-- Date: 2018/10/31
-- Time: 18:02
--


--数据库的分类： 层次型数据库 网络型数据库

--关系型数据库 ： RDBS relational DBS 二维数组的结构


--------------------------分割线----------------------



--启动 mysql

mysql -u root -p; 输入密码；

show databases;

create database p2peye;

alter database p2peye charset=utf8;// 修改字符集

alter database p2peye engine=innodb;//修改默认引擎

drop database p2peye;

use p2peye;

create table student(id int, username varchar(20), age int);

show tables;

desc student;

drop table student;

rename table student to user; //修改表明


--------------------------分割线----------------------



--字段的操作
--创建字段在创建数据表时进行，在已经拥有了表之后，还可以对表进行操作；

--增加新字段
alter table student add column gender varchar(2);

--修改字段类型和属性
alter table student modify column gender varchar(10) ;

--修改字段的名字
alter table student change column gender sex varchar(2);

--删除字段
alter table student DROP column sex;



--------------------------分割线----------------------

-- 记录的操作 //值与列表一一对应

insert into user(username) values ('zhamsa');--值的列表个数与字段列表个数一致时，可以省略字段列表


--------------------------分割线----------------------

--记录查询

select [字段列表] [from 子句] [inner join 子句] [where 子句] [order by] [limit 子句]

select *from student s;--为 student表 指定别名

--模糊查询
select *from user where username like '%zh%';

--limit  用于限制输出数据的条数
select *from user where username like '%s%' limit 2;

--order by asc 升序  desc 降序
select *from user where username like '%s%' order by age asc;

-- 更新数据
update user set age=19 where username='zhamsa';


-- 删除记录
 delete from user where age=19;



