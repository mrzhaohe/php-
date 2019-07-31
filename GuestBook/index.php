<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/24
 * Time: 18:21
 */
include('./conn.php');

?>

<!DOCTYPE html>

<html>

<header>
    <meta charset="utf-8">
    <title>留言板</title>


    <style>

        a {
            text-decoration: none;
            color: #c00f;
        }

        a.page {
            text-align: center;
            padding: 4px 6px;
            /*border: 1px solid #ccc;*/
            text-decoration: underline;
        }

        .commentform {
            display: none;
        }

        span {
            display: block;
            border: 1px solid #ccc;
            margin: 4px 24px;
        }
    </style>
</header>
<body>


<form action="new_save.php" method="post" enctype="multipart/form-data">

    <p>用户名：<input type="text" name="username"/></p>
    <p>留言：
        <textarea name="content" cols="40" rows="10"></textarea>
    </p>
    选择头像:<input type="file" name="img">

    <p><input type="submit" value="马上留言"></p>
</form>


<?php


$pageSize = 3;

$page = isset($_GET['page']) ? $_GET['page'] : 1;

//计算总条数
$sql = 'select *from guestbook order by istop desc,id desc ';
$rs = mysqli_query($conn, $sql);
$rows_count = mysqli_num_rows($rs);
$page_count = ceil($rows_count / $pageSize);
$start = ($page - 1) * $pageSize;

$sql .= " limit $start,$pageSize";
$rs = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($rs)) {
    echo $row[id] . '#' . $row[username] . '说:    <br/>   ' . $row['content'] . ' <br/>' . $row['intime'];

    echo '<br/>';
    $src = "./$row[imgpath]";
    echo '<br/>';
    if (strlen($row[imgpath]) > 0) {
        echo "<br/><img src=$src />" . '<br/>';
    }
    echo ' <a href="delete.php?id=' . $row[id] . '">删除</a>';
    echo ' <a href="edit.php?id=' . $row[id] . '">修改</a>';

    if ($row[istop]) {
        echo ' <a href="action.php?action=cancel&id=' . $row[id] . '">取消置顶</a>';
    } else {
        echo ' <a href="action.php?action=istop&id=' . $row[id] . '">置顶</a>';
    }

    echo ' <a href="action.php?action=praise&id=' . $row[id] . '">赞(' . $row[praise] . ')</a>';
    echo ' <a href="action.php?action=report&id=' . $row[id] . '">举报</a>';


    echo ' <a href="javascript:show(' . $row[id] . ')">回复</a>';

    //回复内容

    $sql2 = "select *from comment where book_id=$row[id]";

    $rs2 = mysqli_query($conn, $sql2);
    while ($row2 = mysqli_fetch_assoc($rs2)) {
        echo '<span>';
        echo $row2['username'] . '于' . $row2['intime'] . '回复说：' . $row2['content'];
        echo '</span>';
    }

    echo '  <form action="action.php?action=reply&id=' . $row[id] . '" id="comment' . $row[id] . '" class="commentform" method="post"">
  姓名:<input type="text" name="username">
  回复:<input type="text" name="content">
  <input type="submit" value="提交">
    </form>';

    echo '<br/>';
}


for ($i = 1; $i <= $page_count; $i++) {
    echo '<a class="page" href="index.php?page=' . $i . '" >' . $i . '</a>    ';
}

?>

<script>

    function show(id) {
        var obj = document.getElementById('comment' + id);
        if (obj.style.display == 'none' || obj.style.display == '') {
            obj.style.display = 'block';
        } else {
            obj.style.display = 'none';
        }
    }

</script>

</body>
</html>
