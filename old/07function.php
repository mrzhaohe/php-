<?php
//默认参数函数
//function add($x=3,$y=10){
//    return $x+$y;
//}
//
//echo add(1);

//


class test {
    function pri(){
        echo "当前类是: ".__CLASS__."<br>";
        echo "当前函数为: ".__FUNCTION__;
    }
}
$t = new  test();
$t->pri();





?>