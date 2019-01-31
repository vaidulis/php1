<?php

echo "<h1>Uždavinys 3</h1><br><br>";

$skaicius = 1;

while ($skaicius<3000) {
    if ($skaicius%77==0) {
        echo "<p style='display:inline; word-wrap: break-word;'>$skaicius,</p>";
    }
    $skaicius++;
}

echo "<br>------------------------------------------------------------<br>";
echo "<h1>Uždavinys 3 II variantas </h1><br><br>";

$pirmas_jau_buvo = false;
for ($x = 1; $x <= 3000; $x++) {
    if ($x%77==0) {
        if($pirmas_jau_buvo) {
            echo "<p style='display:inline; word-wrap: break-word;'>, $x</p>";
        }
        else{
            echo "<p style='display:inline; word-wrap: break-word;'>$x</p>";
        } 
        $pirmas_jau_buvo = true;  
    }
}
