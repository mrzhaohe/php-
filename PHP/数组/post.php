<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/29
 * Time: 15:52
 */

//var_dump($_POST);



$fav = implode('-',$_POST['fav']);

echo $fav;



function show() {
    echo "show";
}