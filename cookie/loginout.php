<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/25
 * Time: 22:00
 */

session_start();
$_SESSION= array();
session_destroy();

echo '<a href="index.php">去登录</a>';
