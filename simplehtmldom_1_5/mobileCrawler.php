<?php
$urls = [
    'https://ithelp.ithome.com.tw/m/api/users/20120024/ironman/2459'
];
foreach ($urls as $url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, False);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //將獲取的訊息以文字流的形式返回給temp，而不是直接輸出
    $temp = curl_exec($ch);
    $json = json_decode($temp, true);
    $total_articles = $json['paginator']['total_count'];
    var_dump($total_articles);
    curl_close($ch);
}


