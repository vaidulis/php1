<?php

echo "<h1>Uždavinys 4</h1><br><br>";
$symbol = 1;

while ($symbol<10100) {
    if ($symbol%101==0){
        echo '<br>';
        $symbol++;
    }
     else {
        echo "<p style='line-height: 33%; display:inline;'>*</p>";
        $symbol++;
     }     
}

echo "<h1>Uždavinys nr. 8</h1><br><br>";

for ($x = 1; $x <= 100; $x++){
    for ($y = 1; $y <= 100; $y++){
        if(($x==1)||($x==100)){
            echo "<p style='line-height: 33%; display:inline;'>*</p>";
        }
        elseif(($y == 1)||($y == 100)){
            echo "<p style='line-height: 33%; display:inline;'>*</p>";
        }
        else echo "<p style='line-height: 33%; display:inline; color:white;'>*</p>";
    }
    echo '<br>';
}
