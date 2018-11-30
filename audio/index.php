<?php 
	
 include "getid3/getid3.php";
    
$fileUrl = "2621.wav";
$getID3 = new getID3();    //实例化类

$ThisFileInfo = $getID3->analyze("2621.wav");   //分析文件

$time = $ThisFileInfo['playtime_seconds'];      //获取wav的长度信息
echo $ThisFileInfo['playtime_seconds'];         //获取wav文件时长
	
