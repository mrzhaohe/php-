<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            background: #313641;
        }

        h1,
        p {
            display: inline;
            height: 60px;
        }

        h1 {
            font: 24px/48px 微软雅黑;
            color: #fff;
            float: left;
        }

        p {
            float: right;
        }

        p a {
            color: #fff;
        }
    </style>

</head>

<body>
    <header>
        <h1>网站后台管理系统</h1>
        <p>
            <a href="index.php"><span class="icon home"></span>系统首页</a>
            <a href="loginout.php"><span class="icon quit"></span>安全退出</a>
        </p>
    </header>
    <?php
    include('./nav.php');
    ?>