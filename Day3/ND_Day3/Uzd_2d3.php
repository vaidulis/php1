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

echo "<br>------------------------------------------------------------<br>";
echo "<h1>Uždavinys 2 II variantas </h1><br><br>";

$count = 0;
for ($x = 1; $x <= 300; $x++) {
    $sk = rand(0,300);
    echo $sk.' ';
    if($sk > 150) $count++;
    if($sk > 275) {
        echo '<b style="color:red;">'.$sk.' '.'</b>';
    }
}
echo '<h3>Skaitmenų virš 150 skaičius</h3> '.$count;
