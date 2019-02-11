<?php
/////////////////////////////////// 1 ////////////////////////////////////////////
/* Duoti trys skaičiai, kuriuos sugeneruoja toks kodas: */
$skaicius = rand(0, 50);
$A = rand(0, 100);
$B = rand(0, 100);
echo "DUOTI SKAIČIAI: skaicius: $skaicius ir A=$A B=$B"; //Šita kodo eilutė spausdina duotą sąlygą. Panaudokite jį savo sprendime sąlygai atvaizduoti
/* Jeigu $A ir $B daugiau už $skaicius atspausdinkite atsakymą: "GERAI"
Jeigu $A arba $B daugiau už $skaicius atspausdinkite atsakymą: "VIDUTUNIŠKAI"
Jeigu $A ir $B mažiau už $skaicius atspausdinkite atsakymą: "BLOGAI"*/

if(($A>$skaicius)&&($B>$skaicius)) {
    echo '<br> GERAI';
}
elseif(($A>$skaicius)||($B>$skaicius)) {
    echo '<br> VIDUTUNIŠKAI';
}
else {
    echo '<br> BLOGAI';
}





/////////////////////////////////// 2 ////////////////////////////////////////////
/* Nupaišykite šviesaforą, kuris perkrovus puslapį, atsitiktine tvarka "uždegtų" vieną iš šviesų.
Juoda spalva- šviesa nedega, kitokia spalva- šviesa dega. Šviesaforui nupaišyti pasinaudokite kodu:
*/
$spalva = rand(1,3);

if ($spalva == 1){
    echo "<h1 style='color:red;'>O</h1><h1>O</h1><h1 >O</h1>";
}
elseif ($spalva == 2){
   echo "<h1>O</h1><h1 style='color:yellow;'>O</h1><h1>O</h1>";
}
else {
    echo "<h1>O</h1><h1>O</h1><h1 style='color:green;'>O</h1>";
}

echo '///////////////// 2 variantas /////////////////////////';
$spalva = rand(1,3);
?>
<h1<?php if ($spalva == 1) echo ' style="color:red;"' ?>>0</h1>
<h1<?php if ($spalva == 2) echo ' style="color:yellow;"' ?>>0</h1>
<h1<?php if ($spalva == 3) echo ' style="color:green;"' ?>>0</h1>




<?php
/////////////////////////////////// 3 ////////////////////////////////////////////
/* Reikia sugeneruoti 10 atsitiktinių "Dovanų Kuponų" numerių ir juos atspausdinti.
Kupono numerio formatas: DKxxx-xxxxx kur "xxx" atsitiktiniai skaitmenys nuo 000 iki 999, o xxxxx - nuo 00000 iki 99999.
Ar nėra vienodų kupono numerių, tikrinti nereikia. Tarsim, kad nėra :)
*/



for($x = 1; $x<=10; $x++){
    $skaicius1 = rand(000,999);
    $skaicius2 = rand(00000,99999);
    echo 'DK'.sprintf("%'.03d\n", $skaicius1) .'-' .sprintf("%'.05d\n", $skaicius2) .'<br>';
}