<?php
echo "<h1>Uždavinys 1a</h1><br><br>";
$zvaigzdute = 1;
echo "<div style='word-wrap: break-word;'>";
while ($zvaigzdute<401) {
            echo '*';
            $zvaigzdute++;
}
echo "</div>";

echo "<br>------------------------------------------------------------<br>";
echo "<h1>Uždavinys 1b</h1><br><br>";

$symbol = 1;
$zvaigzd = 1;

while ($zvaigzd<401) {
    if ($symbol%51==0){
        echo '<br>';
        $symbol++;
    }
     else {
        echo '*';
        $zvaigzd++;
        $symbol++;
     }     
}

echo "<br>------------------------------------------------------------<br>";
echo "<h1>Uždavinys 1b II variantas </h1><br><br>";

for ($x = 1; $x <= 400; $x++) {
    echo '*';
    if(!($x % 50))echo '<br>';
}