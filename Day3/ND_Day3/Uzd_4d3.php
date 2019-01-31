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