<?php

echo "<h1>Uždavinys 3</h1><br><br>";

$skaicius = 1;

while ($skaicius<3000) {
    if ($skaicius%77==0) {
        echo "<p style='display:inline; word-wrap: break-word;'>$skaicius,</p>";
    }
    $skaicius++;
}

