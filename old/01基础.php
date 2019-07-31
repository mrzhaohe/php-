<?php


//**************************数组****************************

//$arr= array(@"fgf",@"rrrw",@"sdd");
////遍历 1
//foreach ($arr as $value){
//    echo "$value <br>";
//}
//
//
//$arr1 = array(@"1"=>"one",@"2"=>"two",@"3"=>"three");//关联数组
//$arr2 = array("one","two","three");
//
////遍历 2  （默认 key 为 index 否则为别名 见 arr1 关联数组
//
//foreach ($arr1 as $key=>$value){
//    echo $key.":".$value."<br>";
//}


//
////局部作用域
//
//$x=5;
////$y=10;
////echo $z;
//function myTest(){
//
//    global $x,$y;//
//    $y= 10;
//    echo "<p>测试函数内变量：<p>";
//    echo "变量 x为 ：$x";
//    echo "<br>";
//    echo "变量 a 为 : $y";
//}
//
//myTest();
//
//
//echo "<p>测试函数外变量：<p>";
//echo "变量 x为：$x";
//echo "<br>";
//echo "变量 a 为 : $y";
//
//
//
//


// **********************判断数据类型**********************

/*
 *  var_dump 判断一个变量的类型和长度 并输出变量的值
 *
 *  gettype 获取变量的类型
 *
 *      Warning
 *      不要使用 gettype() 来测试某种类型，因为其返回的字符串在未来的版本中可能需要改变。此外，由于包含了字符串的比较，它的运行也是较慢的。
 *      使用 is_* 函数代替。

 * is_bool
 * is_null
 * is_numberic
 * is_callable

*/

//$fo=false;
//
//echo gettype($fo);
//
//var_dump($fo);
//if (is_bool($fo)){
//    echo "$fo 是布尔类型";
//}else {
// echo "$fo 不是布尔类型";
//}
//
//echo  "<br/>";
//
//$float = 88.8;
//$type = gettype($float);
//echo $type;
////判断类型
//$str = "sss";
//var_dump($str);
//
////是否是空
//if (is_null($p)){
//    echo "$p is_null";
//}
//echo  "<br/>";
////是否是数字
//if (is_numeric($str)){//是否是数值类型
//    echo "$str 是数字";
//}else{
//    echo "$str 不是数字";
//}
//
//echo "<br/>";
////是否是函数
//if (is_callable("var_dump")){
//    echo  "var_dump 是函数";
//}



//***************数据处理相关****************


//$bool = 0.1;
//if ($bool){
//    echo "$bool 为真 ";
//}else{
//    echo "$bool 为假 ";
//
//}
//
//echo "<br/>";
//$str = "0";
//if ($str){//空字符串为假 只要里面有一个空格都算真  但是 字符串 0 为假
//    echo "$str 为真";
//}else{
//    echo "$str 为假";
//}
//echo "<br/>";
//
//
////强制类型转换 intval floatval strval
//
//$float = 1.23;
//$result = intval($float);
//echo $result;
//
//echo "<br/>";
//
//$resultstr = strval($float);
//echo $resultstr;
//
//echo "<br/>";




//*****************常量************************

/*
 * define  value  只能是字符串 或者 数字
 * __LINE__  当前行数
 * __CLASS__ 当前类
 * __DIR__   当前文件夹
 * $_SERVER["SCRIPT_FILENAME"]  当前文件
 *
 */

//define("MY_NAME","MR.HE");//字符串
//define("static_num",100);//数字
//
//echo static_num;
//echo "<br>";
//echo MY_NAME;
//echo "<br/>";
//
//echo "my name is MY_NAME";
//echo "<br/>";
//
//echo  "my name is " .MY_NAME;
//echo "<br/>";
//
//echo __LINE__;//当前行数
//echo "<br/>";
//echo __CLASS__;//当前类
//echo "<br/>";
//echo __DIR__;//当前文件夹
//echo "<br/>";
//echo $_SERVER["SCRIPT_FILENAME"];//当前文件
//
//
//
//$shu = "biao";
//$biao = "鼠标";
//
//echo $$shu;



//phpinfo();


//变量引用


//$fo= 5;
//$bar = &$fo;
//$bar = 4;
//echo $fo."<br/>";


//随机数
/*
$tool = rand(1, 6);

echo $tool;

while ($tool == 6) {
    echo "我最大";
    $tool++;
}
*/


//函数


function check($one, $two, $func)
{

    if (!is_callable($func)) {//检测是否是函数
        echo "$func 非函数";
    }


    echo $one + $two + $func($one, $two);

}


function plus($one, $two)
{
    return 2 * ($one + $two);
}

echo check(20, 10, plus);



//function demo($a){
//    echo $a;
//}
//
//
//$fu = "demo";
//echo $fu."<br/>";
//$fu(1);

?>