<?php

$petras = rand(10,20); //parenka randomu skaiciu nuo 10 iki 20
$jonas = rand(5,25);

if ($jonas>$petras) {
    echo 'Laimejo Jonas. Tasku Jonas - Petras:'.$jonas. '-' .$petras;
}
elseif($jonas==$petras) {
    echo 'Lygiosios. Tasku Jonas - Petras:'.$jonas. '-' .$petras;
}
else {
   echo 'Laimejo Petras. Tasku Jonas - Petras:'.$jonas. '-' .$petras; 
}