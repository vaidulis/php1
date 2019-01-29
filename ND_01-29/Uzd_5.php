<?php

$krastine_1 = rand(1,10);
$krastine_2 = rand(1,10);
$krastine_3 = rand(1,10);

echo 'Kraštinė a '.$krastine_1;
    echo '<br>';
    echo 'Kraštinė b '.$krastine_2;
    echo '<br>';
    echo 'Kraštinė c '.$krastine_3;
    echo '<br>';
    echo '<br>';

if ((($krastine_1+$krastine_2)<=$krastine_3) || (($krastine_3+$krastine_2)<=$krastine_1) || (($krastine_1+$krastine_3)<=$krastine_2)) {
    echo 'Trikampis nesusidaro';   
}
else {
    echo 'Trikampį sudaryti galima'; 
}