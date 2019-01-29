<?php

$valandos = rand(0,23);
$minutes = rand(0,59);
$sekundes = rand(0,59);

if ($valandos<12) {
    echo 'AM'. ' ' .sprintf("%'.02d\n", $valandos).':'.sprintf("%'.02d\n", $minutes).':'.sprintf("%'.02d\n", $sekundes);
}
else {
    echo 'PM'. ' ' .sprintf("%'.02d\n", ($valandos - 12)).':'.sprintf("%'.02d\n", $minutes).':'.sprintf("%'.02d\n", $sekundes);
}