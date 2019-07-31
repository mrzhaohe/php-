<form>
    <input type="text" name="num1">


    <select name="cal">
        <option value="jia"> +</option>
        <option value="jian"> -</option>
        <option value="cheng"> *</option>
        <option value="chu"> /</option>


    </select>

    <input type="text" name="num2">
    <input type="submit" value="计算">

</form>


<?php

$num1 = $_GET['num1'];

$num2 = $_GET['num2'];

$type = $_GET['cal'];


if (!is_numeric($num1) || !is_numeric($num2)) {
    echo "请输入数值类型";
}


if ($type == "jia") {
    echo $num1 . '+' . $num2 . '=' . ($num1 + $num2);
}
if ($type == "jian") {
    echo $num1 . '-' . $num2 . '=' . ($num1 - $num2);
}
if ($type == "cheng") {
    echo $num1 . '*' . $num2 . '=' . ($num1 * $num2);
}
if ($type == "chu") {
    echo $num1 . '➗' . $num2 . '=' . ($num1 / $num2);
}


?>