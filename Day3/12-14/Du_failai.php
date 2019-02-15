<?php

// dd(__DIR__); //parodo kelia iki sito failo

define("KONST", "KAZKOKIA KONSTANTA"); //aprasoma konstanta - pavadinimas, reiksme


echo 'pries';
include __DIR__.'/'. 'Du_failai2.php'; //praktikoj nenaudojama. Naudoti require
echo 'po';

require_once __DIR__.'/'. 'Du_failai2.php'; //reikalauja failo. Jei failo nera kodas nutruksta. Butinai del saugumo naudoti konstanta __DIR__
echo 'po - require';

require_once __DIR__.'/'. 'Du_failai2.php';
require_once __DIR__.'/'. 'Du_failai2.php'; // itraukia tik 1 karta - svarbu nes f-jos gali buti naudojamos tik 1 karta.
echo '<br><br>';
$f = sudeti(6,1);
echo $f;
echo '<br><br>';

echo KONST;

?>

