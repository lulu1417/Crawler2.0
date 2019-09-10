<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ithelp.ithome.com.tw/m/api/users/20107159/ironman/1325?page=undefined");
curl_setopt($ch, CURLOPT_HEADER, False);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //將獲取的訊息以文字流的形式返回給temp，而不是直接輸出
$temp = curl_exec($ch);
$json = json_decode($temp, true);
$total_articles = $json['paginator']['total_count'];
var_dump($total_articles);

curl_close($ch);


//$xmlDoc = new DOMDocument();
//$xmlDoc->load($temp);
//    print $xmlDoc->saveXML();
//$request = require('request');
//request('https://ithelp.ithome.com.tw/articles/10190796');
//$request = require('request');
//for($i = 0; $i<3; $i++){
//    request('https://ithelp.ithome.com.tw/articles/10190796');
//}




