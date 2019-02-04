<?php

echo '<h2>3 Uzdavinys</h2>';
$masyvas = [];
for ($x = 1; $x <= 10; $x++) {
    for ($y = 1; $y <= 5; $y++)
    $masyvas[$x][] = rand(5,25);

}

echo '<pre>';
print_r($masyvas);

echo '<h2>3a Uzdavinys</h2>';
foreach ($masyvas as $value) {
    $elem_daugiau10 = 0;
    foreach ($masyvas as $value1){ 
        if ($value1 > 10)
        $elem_daugiau10++;
    }      
}
echo 'Elementų daugiau už 10 skaičius: ' .$elem_daugiau10;