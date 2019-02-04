<?php
$masyvas = [];
for ($x = 1; $x <= 30; $x++) {
    $masyvas[] = rand(5,25);

}

echo '<pre>';
print_r($masyvas);

echo '<br><br>';

$skaiciai_virs10 = 0;
$didziausias_skaicius = $masyvas[0];
$reiksmiu_suma = 0;
$reiksmes_index_skirtumas = 0;
foreach ($masyvas as $index => $value) {
    if ($value>10){
        $skaiciai_virs10++;
    }
    if ( $value > $didziausias_skaicius){
        $didziausias_skaicius = $value;
    }
    $reiksmiu_suma = $reiksmiu_suma + $value;
    $reiksmes_index_skirtumas = $value - $index;
    echo $reiksmes_index_skirtumas .'<br>';
}
echo 'Skaiciai virs 10:'.$skaiciai_virs10;
echo '<br>';
echo 'Didziausia reiksme:'.$didziausias_skaicius;
echo '<br>';
echo 'Reiksmiu suma:'.$reiksmiu_suma;

echo '<br>';

echo '<h2>e dalis</h2>';
echo '<br>';

foreach ($masyvas as $index => $value) {
    $index = abs($index - 29);
    $masyvas[$index] =  $value;
}
print_r($masyvas);

echo '<h2>f dalis</h2>';

for ($x = 1; $x <= 10; $x++) {
    $masyvas[] = rand(5,25);
}
print_r($masyvas);
echo '<h2>g dalis</h2>';

$masyvas1 = [];
$masyvas2 = [];
foreach ($masyvas as $index => $value) {
    if(($index % 2) == 0){
        $masyvas1[] = $value;
    }
    if(($index % 2) == 1){
        $masyvas2[] = $value;
    }
}
print_r($masyvas1);
echo '<br>';
print_r($masyvas2);

echo '<h2>h dalis</h2>';
foreach ($masyvas as $index => $value) {
    if((($index % 2) == 0)&&($value > 15)){
        $masyvas[$index] = 0;
    }
}
print_r($masyvas);

echo '<h2>i dalis</h2>';
foreach ($masyvas as $index => $value) {
    if($value > 10){
        print_r($masyvas[$index]);
        break;
    }
}
echo '<h2>j dalis</h2>';
foreach ($masyvas as $index => $value) {
    if(($index % 2) == 0){
        unset($masyvas[$index]);
    }
}
print_r($masyvas);

echo '<h2>k dalis</h2>';
foreach ($masyvas as $index => $value) {
    $masyvas[$index] = $value + 24;
}
print_r($masyvas);
