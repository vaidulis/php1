<?php

echo "<h1>Uždavinys 7 - Vinies kalimas - a dalis</h1><br>";

echo '<h3>';
for ($x = 1; $x <= 3; $x++) {
    $kalimo_gylis = 0;
    $silpnas_smugis_skaicius = 0;
    while ($kalimo_gylis <= 85){
        $silpnas_smugis = rand(5,20);
        $kalimo_gylis = $kalimo_gylis + $silpnas_smugis;
        $silpnas_smugis_skaicius++;
    }
    echo 'Vinis nr.: '.$x.' silpnų smūgių skaičius: '.$silpnas_smugis_skaicius .'<br>';
}
echo '</h3><br>';
echo "<h1>Uždavinys 7 - Vinies kalimas - b dalis</h1><br>";
echo '<h3>';
for ($y = 1; $y <= 5; $y++) {
    $kalimo_gylis1 = 0;
    $stiprus_smugis_skaicius = 0;
    while ($kalimo_gylis1 <= 85){
        $stiprus_smugis_skaicius++;
        $pataikimo_tikimybe = rand(0,1);
        if($pataikimo_tikimybe) {
            continue;
        }
        $stiprus_smugis = rand(20,30);        
        $kalimo_gylis1 = $kalimo_gylis1 + $stiprus_smugis;        
    }
    echo 'Vinis nr.: '.$y.' stiprių smūgių skaičius: '.$stiprus_smugis_skaicius .'<br>';
}
echo '</h3><br>';

echo "<h1>Uždavinys 7 - Vinies kalimas - c dalis</h1><br>";
echo '<h3>';
for ($z = 1; $z <= 7; $z++) {
    $kalimo_gylis2 = 0;
    $ivairiu_smugis_skaicius = 0;
    while ($kalimo_gylis2 <= 85){
        $ivairiu_smugis_skaicius++;
        $pataikimo_tikimybe1 = rand(0,100);
        $esamas_vinies_ikalimas = (($kalimo_gylis2/85)*100);
        $pataikymo_tikimybes_skaiciavimas = ($esamas_vinies_ikalimas/50)*30+25;
        if($pataikimo_tikimybe1>$pataikymo_tikimybes_skaiciavimas) {
            continue;
        }
        $ivairus_smugis = rand(5,45);        
        $kalimo_gylis2 = $kalimo_gylis2 + $ivairus_smugis;        
    }
    echo 'Vinis nr.: '.$z.' įvairių smūgių skaičius: '.$ivairiu_smugis_skaicius .'<br>';
}
echo '</h3><br>';