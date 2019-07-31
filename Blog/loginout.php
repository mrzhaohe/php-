<?php
//  退出登录


session_start();
$_SESSION = [];
session_destroy();


alert('退出成功');
