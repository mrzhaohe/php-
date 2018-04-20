<html>

<body>

<form method="post" action="<?php echo $_SERVER[PHP_SELF];?>">
    Name:<input type="text" name="fname">
    <br>
    pwd:<input type="text" name="pwd">
    <input type="submit">

</form>




<?php
$name=$_REQUEST['fname'];
$pwd=$_REQUEST['pwd'];

$postname = $_POST[@"fname"];


echo $postname;
echo "<br>";
echo $pwd;
?>

</body>


</html>