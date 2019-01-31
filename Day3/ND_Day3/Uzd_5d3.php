<?php
echo "<h1>Uždavinys 5a</h1><br><br>";

$h = 0;
$s = 0;

while ($h<1)  {
    $moneta = rand(0,1);
    if ($moneta){
        echo "<h3 style='display:inline;'>S</h3>";
        $s++;
    }
    else {
        echo "<h3 style='display:inline;'>H</h3>"; 
        $h++;
    }
} 

echo "<h1 >Uždavinys 5b</h1><br><br>";

$h1 = 0;
$s1 = 0;


while ($s1<1)  {
    $monet = rand(0,1);
    if ($monet){
        echo "<h3 style='display:inline;'>S</h3>";
        $s1++;
    }
    else {
        echo "<h3 style='display:inline;'>H</h3>"; 
        $h1++;
    }
} 

echo "<h1 >Uždavinys 5c</h1><br><br>";

$h2 = 0;
$s2 = 0;

while ($s2<3)  {
    $moneta1 = rand(0,1);
    if ($moneta1){
        echo "<h3 style='display:inline;'>S</h3>";
        $s2++;
    }
    else {
        echo "<h3 style='display:inline;'>H</h3>"; 
        $h2++;
    }
} 
$h3 = 0;
$s3 = 0;

echo "<h1 >Uždavinys 5d</h1><br><br>";
while ($h3<3)  {
    $moneta2 = rand(0,1);
    if ($moneta2){
        echo "<h3 style='display:inline;'>S</h3>";
        $h3=0;
    }
    else {
        echo "<h3 style='display:inline;'>H</h3>"; 
        $h3++;
    }
}
