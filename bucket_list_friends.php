<?php

echo "Hoeveel vrienden zal ik vragen om hun droom?" . "\n";

$g = readline("");

if(is_numeric($g)){

} else {
    echo $g . " is geen getal, probeer het nogmaals" . "\n";
    exit;
}

$arry[] = "";

for($i = 1; $i <= $g; $i++){
    echo "Wat is jouw naam?" . "\n";
    $n = readline("");
    echo "Wat is jouw droom?" . "\n";
    $d = readline("");
    $arry[$n] = $d;
}

foreach($arry as $val => $key){
    echo $val . " heeft dit als droom: " . $key . "\n";
}
