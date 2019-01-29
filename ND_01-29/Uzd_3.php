<?php

$kint_1 = rand(0,2);
$kint_2 = rand(0,2);
$kint_3 = rand(0,2);
$kint_4 = rand(0,2);

echo 'SKAICIAI '.$kint_1.' '.$kint_2.' '.$kint_3.' '.$kint_4;

$nuliu_sk = (($kint_1==0) ? '1' : '0') + (($kint_2==0) ? '1' : '0') + (($kint_3==0) ? '1' : '0') + (($kint_4==0) ? '1' : '0');
$vien_sk = (($kint_1==1) ? '1' : '0') + (($kint_2==1) ? '1' : '0') + (($kint_3==1) ? '1' : '0') + (($kint_4==1) ? '1' : '0');
$dvej_sk = (($kint_1==2) ? '1' : '0') + (($kint_2==2) ? '1' : '0') + (($kint_3==2) ? '1' : '0') + (($kint_4==2) ? '1' : '0');

echo '<br>';
echo '<br>';

echo '0 skaicius = '.$nuliu_sk.'vnt';
echo '<br>';
echo '1 skaicius = '.$vien_sk.'vnt';
echo '<br>';
echo '2 skaicius = '.$dvej_sk.'vnt';
