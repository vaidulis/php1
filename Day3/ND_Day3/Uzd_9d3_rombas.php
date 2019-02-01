<?php

echo "<h1>Uždavinys 9 rombas - </h1><br>";


for ($y = 1; $y <= 21; $y++){
    for ($x = 1; $x <= 21; $x++){
        if(((11-$y)<$x)&&($x<(11+$y))&&($y<=11)){
            echo "<p style='line-height: 33%; display:inline;'>*</p>";
        }
        elseif(($y>11)&&(($y-11)<$x)&&($x<(33-$y))){
            echo "<p style='line-height: 33%; display:inline;'>*</p>";
        }
        else echo "<p style='line-height: 33%; display:inline; color:white;'>*</p>";
    }
    echo '<br>';
}


echo '--------------------------------------------------------------------------------<br><br>';
for ($y = 1; $y <= 21; $y++){
    for ($x = 1; $x <= 21; $x++){
        if(abs(11-$y)<$x && $x<22-abs(11-$y)){
            $r = rand(0,255);
            $g = rand(0,255);
            $b = rand(0,255);
            echo "<p style='line-height: 33%; color:rgb($r, $g, $b); display:inline;'>*</p>";
     }
        else echo "<p style='line-height: 33%; display:inline; color:white;'>*</p>";
    }
    echo '<br>';
}