<?php
// define('DIR', __DIR__.'/');
// require DIR.'Vaidas/zveris.php';
// require DIR.'Vaidas/priziuretojas.php';
// require DIR.'Vaidas/zoosodas.php';

require __DIR__.'/autoload.php';




$pirmas_zveris = new Vaidas\zoosodas();
$pirmas_zveris->setTipas("Dramblys");
$pirmas_zveris->setVardas("Petras Tomo");
$pirmas_zveris->info();