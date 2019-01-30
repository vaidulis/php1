<?php

echo "<h1>Uždavinys 2</h1><br><br>";


$nr = 1;
$virs150_skaicius = 0;

while ($nr<301) {
    $skaitmuo = rand(0,300);
    if ($skaitmuo>150&&$skaitmuo>275) {
        echo "<p style='display:inline; background-color:red;'>$skaitmuo</p>".' ';
        $virs150_skaicius++;
    }
    elseif ($skaitmuo>150){
        echo "<p style='display:inline;'>$skaitmuo</p>".' ';
        $virs150_skaicius++;
    }
    else {
        echo "<p style='display:inline;'>$skaitmuo</p>".' ';
    }
    $nr++;
}

echo '<h3>Skaitmenų virš 150 skaičius</h3> '.$virs150_skaicius;
