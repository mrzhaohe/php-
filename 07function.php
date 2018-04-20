<?php

//function add($x,$y){
//    return $x+$y;
//}
//
//echo add(2,4);


class test {
    function pri(){
        echo "当前类是: ".__CLASS__."<br>";
        echo "当前函数为: ".__FUNCTION__;
    }
}

$t = new  test();
$t->pri();
?>