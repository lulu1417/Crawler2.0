<?php
include_once('simple_html_dom.php');
$curl = curl_init();
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl, CURLOPT_URL, "https://ithelp.ithome.com.tw/2020ironman/signup/team/78");
$html=curl_exec($curl);
$dom = new simple_html_dom(null, true, true, DEFAULT_TARGET_CHARSET, true, DEFAULT_BR_TEXT, DEFAULT_SPAN_TEXT);
$html=$dom->load($html, true, true);
// Find all links
$i = 1;
    foreach ($html->find('div[class=team-detail-lists] a[class=contestants-list__title]') as $a){
        echo $i."-".$a->innertext."-".$a->href."\n";
        $i++;
    }
//    }
//}