<?php

header('Content-Type:text/html; Charset=utf-8');

$conn=mysqli_connect('localhost','root','root','blog');
mysqli_query($conn,'set names utf8');