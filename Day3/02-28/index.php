<?php

require __DIR__.'/Oras.php';
require __DIR__.'/Miestas.php';


$vilnius = new Miestas;
echo '<br>';
echo $vilnius->miestoPavadinimas('Vilnius');
echo '<br>';
echo $vilnius->temperatura(25);
echo '<br>';
echo $vilnius::$metuLaikas;
echo '<br>';
$kaunas = new Miestas;
echo '<br>';
echo $kaunas->miestoPavadinimas('Kaunas');
echo '<br>';
echo $kaunas->temperatura(11);
echo '<br>';
echo $kaunas::$metuLaikas;
echo '<br><br>';
$birstonas = new Miestas;
echo $birstonas->miestoPavadinimas('Birstonas');
echo '<br>';
echo $birstonas->temperatura(15);
echo '<br>';
echo $birstonas::$metuLaikas;