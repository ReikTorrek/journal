<?php
require "../../PHP/trCreator.php";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://httpbin.org/get?qwe=rty&a=qqq');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$out = curl_exec($curl);
curl_close($curl);

var_dump($out);
?>