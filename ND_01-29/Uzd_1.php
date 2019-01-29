<?php

$pirmas_sk = rand(0,100);
$antras_sk = rand(0,100);

if($pirmas_sk>$antras_sk) {
    echo $pirmas_sk. '/' .$antras_sk. '=' .($pirmas_sk/$antras_sk);
}
elseif($pirmas_sk<$antras_sk) {
    echo $antras_sk. '/' .$pirmas_sk. '=' .($antras_sk/$pirmas_sk);
}
else {
    echo 'Dalyba = 1';
}