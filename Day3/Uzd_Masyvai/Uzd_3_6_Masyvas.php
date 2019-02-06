<?php

echo '<h2>3 Uzdavinys</h2>';
$masyvas = [];
for ($x = 0; $x < 10; $x++) {
    for ($y = 1; $y <= 5; $y++)
    $masyvas[$x][] = rand(5,25);

}

echo '<pre>';
print_r($masyvas);

echo '<h2>4a Uzdavinys</h2>';
$elem_daugiau10 = 0;
foreach ($masyvas as $value) {
    
    foreach ($value as $value1) { 
        // print_r($value1);
        // echo '<br>';
        if ($value1 > 10) {
        $elem_daugiau10++;
        }
    }      
}
// var_dump ($value1);
echo 'Elementų daugiau už 10 skaičius: ' .$elem_daugiau10;

echo '<h2>4b Uzdavinys</h2>';

$didziausias_skaicius = $masyvas[0][0];
foreach ($masyvas as $value) {
    
    foreach ($value as $value1) { 
        if ($value1 > $didziausias_skaicius) {
        $didziausias_skaicius = $value1;
        }
    }      
}

echo 'Didžiausias skaičius: ' .$didziausias_skaicius;

echo '<h2>4c Uzdavinys</h2>';

foreach ($masyvas as $index => $value) {
    for ($x=1; $x<=2; $x++){
        $masyvas[$index][] = rand(5,25);
    }
}

print_r($masyvas);

echo '<h2>4d Uzdavinys</h2>';


foreach ($masyvas as $index => $value) {
    $m_masyvo_suma = 0;
    foreach ($value as $index1 => $value1) {
        $m_masyvo_suma = $masyvas[$index][$index1] + $m_masyvo_suma;
    }
    echo 'Masyvo '.$index.' suma '. $m_masyvo_suma .'<br>';
    $naujas_masyvas[] = $m_masyvo_suma;
}
print_r($naujas_masyvas);

echo '<h2>4e Uzdavinys</h2>';
   
    $new_array = array_fill(0, 7, 0);

foreach ($masyvas as $index => $value) {
    foreach ($value as $index1 => $value1){     
        $new_array[$index1]  += $value1;
    }    
}
print_r($new_array);

echo '<h2>5 Uzdavinys</h2>';

$masyvas_rand = [];
for ($x = 0; $x <= 9; $x++) {
    $elem_sk = rand(2,20);
    for ($y = 0; $y<=$elem_sk; $y++){
        $masyvas_rand[$x][] = '';
    }
}
print_r($masyvas_rand);


echo '<h2>6 Uzdavinys</h2>';

$masyvas_rand1 = [];
for ($x = 0; $x <= 9; $x++) {
    $elem_sk = rand(2,20);
    if(!($elem_sk%2)) {
        for ($y = 1; $y<=$elem_sk; $y++){
        $masyvas_rand1[$x][] = '';
        }
    }
    else {
        $x--;
    }   
}
print_r($masyvas_rand1);