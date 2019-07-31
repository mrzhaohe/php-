

1.null 属性

mysql 中的 null 是一个属性，表示是否可为空。

null 允许字段为空
not null 不允许字段写空值。

eg:
  create table null_1 (
    username varchar(20),
    gender char(1) not null
  );


2.default 属性

设置字段的默认值,当插入数据时，如果没有为该字段赋值，字段使用默认值。

eg:
  create table default_t (
        username varchar(20) default '匿名',
        gender char(2)
  );


-- 特殊的默认值
  timestamp 时间戳类型，默认值是：CURRENT_TIMESTAMP on update current_timestamp

--常用写法
timestamp default current_timestamp


3.主键和自增
primary key
主键也叫主索引，通常用于修饰数据标识（id 字段）
特性：
    1）.一个表中只允许有一个主键
    2）.主键修饰的字段 不能重复 不能为空



-- auto-increment
通常和主键一起使用，


create table classes (
    id int primary key auto_increment,
    classname varchar(20),
    classroom char(3)
);