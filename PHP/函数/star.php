<?php
/**
 * Created by PhpStorm.
 * User: zhaohe
 * Date: 2018/10/31
 * Time: 17:42
 */


function star($n)
{
    echo '<pre>';

    for ($i = 1; $i < $n; $i++) {

        for ($j = 1; $j <= $n - $i; $j++) {
            echo ' ';
        }
        for ($j = 1; $j <= 2 * $i - 1; $j++) {
            echo '*';
        }
        echo '<br/>';
    }

    echo '</pre>';
}

star(10);