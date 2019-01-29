<?php

$zvakiu_kiekis = rand(5,3000);
$zvakes_kaina = 1;

if ($zvakiu_kiekis>2000) {
    $zvakes_kaina = $zvakes_kaina * 0.96;
}
if (($zvakiu_kiekis>1001) && ($zvakiu_kiekis<2001)) {
    $zvakes_kaina = $zvakes_kaina * 0.97;
}


echo 'Perkamas žvakių kiekis '.$zvakiu_kiekis. ' vnt';
echo '<br>';
echo 'Žvakės kaina '.$zvakes_kaina. ' Eur';