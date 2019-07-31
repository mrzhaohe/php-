<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2019/7/24
 * Time: 22:17
 */
include ('./conn.php');

$id=$_GET['id'];
echo $id;
if (!is_numeric($id)) {
    echo 'id 非数字';
    exit;
}

$sql="select *from guestbook where id=$id";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($rs);
?>

<!DOCTYPE html>
<html>

<header>
    <meta charset="utf8">
    <title>编辑留言</title>

</header>

<body>

<form action="edit_save.php?id='<?php echo $row['id']?>'" method="post">
<!--隐藏域-->
    <input type="hidden" name="id" value="<?php echo $row['id']?>">
    <p>
        名字：<input type="text" name="username" value="<?php echo $row['username']?>">
    </p>
    <p>
        留言：<textarea name="content" cols="80" rows="10"><?php echo $row['content']?></textarea>
    </p>
    <p>
        <input type="submit" value="提交">
    </p>

</form>


</body>

</html>




