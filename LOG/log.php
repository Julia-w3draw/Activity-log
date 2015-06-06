<?php
$width=$_GET["_X"];
$height=$_GET["_Y"];
$screen_w=$_GET["_screen_w"];
$screen_h=$_GET["_screen_h"];
$browser_name=$_GET["br"];
$browser_app_version=$_GET["version"];
$browser_language=$_GET["lang"];
$platform=$_GET["platform"];
$cookie=$_GET["cookie"];
$ip=$_SERVER['REMOTE_ADDR'];  //visitor ip
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);  // take hostname vizitator
$d= date('d-m-Y H:i:s');
$file="log.txt";
$enter="\n";
$log_content="";
file_put_contents($file,$d." | ".$ip." | ".$width." | ".$height." | ".$screen_w." | ".$screen_h." | ".$hostname." | ".$platform." | ".$browser_name." | ".$browser_app_version." | ".$browser_language.$enter,FILE_APPEND);
echo "ready logging data"
?>
