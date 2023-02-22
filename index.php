<?php

$url = "http://www.koeri.boun.edu.tr/scripts/lst0.asp";
$xml = simplexml_load_file($url);

foreach($xml->channel->item as $item){
    $description = utf8_encode($item->description);
    echo $description . "<br>";
}
