<?php

$q=isset($_GET["q"])?htmlspecialchars($_GET["q"]): "";

if ($q) {

    if ($q == "runoob"){
        echo "菜鸟联盟：www.runoob.com";
    }else if ($q == "google"){
        echo  "谷歌：www.google.cn";
    }else if ($q == "taobao") {
        echo "淘宝: www.taobao.com";
    }

}

?>