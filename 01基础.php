<?php


//数组

//$arr= array(@"fgf",@"rrrw",@"sdd");

//*关联数组
$arr = array(@"1"=>"one",@"2"=>@"two",@"3"=>@"three");

foreach ($arr as $key=>$value){
    echo $key.":".$value;
    echo "<br>";
}

?>