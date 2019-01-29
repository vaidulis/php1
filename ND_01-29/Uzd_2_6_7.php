<?php

$valandos = rand(0,23);
$minutes = rand(0,59);
$sekundes = rand(0,59);

echo 'Valandos '.$valandos;
echo '<br>';
echo 'Minutes '.$minutes;
echo '<br>';
echo 'Sekundes '.$sekundes;
echo '<br>';
echo '<br>';

if ($valandos<12) {
     $laikas1 = 'AM'. ' ' .sprintf("%'.02d\n", $valandos).':'.sprintf("%'.02d\n", $minutes).':'.sprintf("%'.02d\n", $sekundes);
     echo "<p style='color:blue; font-size: 20px; font-family: monospace; font-weight:bold;'>$laikas1</p>";
}
else {
     $laikas2 = 'PM'. ' ' .sprintf("%'.02d\n", ($valandos - 12)).':'.sprintf("%'.02d\n", $minutes).':'.sprintf("%'.02d\n", $sekundes);
     echo "<p style='color:blue; font-size: 20px; font-family: monospace; font-weight:bold;'>$laikas2</p>";
}

echo '<br>';
echo '<br>';

$pridedamos_sekundes = rand(1,60);

echo 'Pridedamos sekundes '.$pridedamos_sekundes;
echo '<br>';
echo '<br>';


$sekundes = $sekundes + $pridedamos_sekundes;

if ($sekundes>59) {
    $sekundes = $sekundes - 60;
    $minutes = $minutes + 1;
    if ($minutes>59) {
        $minutes = $minutes - 60;
        $valandos = $valandos + 1;
        if ($valandos>23) {
            $valandos = $valandos - 24;
        }
    }
}
if ($valandos<12) {
     $laikas1 = 'AM'. ' ' .sprintf("%'.02d\n", $valandos).':'.sprintf("%'.02d\n", $minutes).':'.sprintf("%'.02d\n", $sekundes);
     echo "<p style='color:blue; font-size: 20px; font-family: monospace; font-weight:bold;'>$laikas1</p>";
}
else {
     $laikas2 = 'PM'. ' ' .sprintf("%'.02d\n", ($valandos - 12)).':'.sprintf("%'.02d\n", $minutes).':'.sprintf("%'.02d\n", $sekundes);
     echo "<p style='color:blue; font-size: 20px; font-family: monospace; font-weight:bold;'>$laikas2</p>";
}

