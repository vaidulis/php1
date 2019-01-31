<?php
echo "<h1>Uždavinys 6</h1><br><br>";



$petras_score = 0;
$kazys_score = 0;

while (($petras_score<=222)&&($kazys_score<=222)) {
    $petras = rand(10,20);
    $kazys = rand(5,25);
    $petras_score = ($petras_score + $petras);
    $kazys_score = ($kazys_score + $kazys);
}
echo 'Petro taškai: ' .$petras_score .'<br>';
echo 'Kazio taškai: ' .$kazys_score;



