<?php

//ND 01-29 kitas sprendimo budas
$kint_1 = rand(0,2);
$kint_2 = rand(0,2);
$kint_3 = rand(0,2);
$kint_4 = rand(0,2);
echo 'SKAICIAI '.$kint_1.' '.$kint_2.' '.$kint_3.' '.$kint_4;

$u2 = 0;
if($kint_1 ==2)$u2++;
if($kint_2 ==2)$u2++;
if($kint_3 ==2)$u2++;
if($kint_4 ==2)$u2++;

$suma = $kint_1 + $kint_2 + $kint_3 + $kint_4;
$u1 = $suma - ($u2 * 2);
$u0 = $u2 - $u1;

//isvesti i ekrana U1 u2 ir u0; 