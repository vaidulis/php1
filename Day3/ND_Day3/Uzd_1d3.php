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

while ($symbol<401) {
    if ($symbol%61==0){
        echo '<br>';
        $symbol++;
    }
     else {
        echo '*';
        $symbol++;
     }     
}