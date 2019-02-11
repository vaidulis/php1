<?php

$masyvas = array(2, 11, 25, 8, 7);
$kaiciai_daugiau = 0;
foreach($masyvas as $value){
    if($value>10){
        $kaiciai_daugiau++;
    }
}

echo $kaiciai_daugiau;