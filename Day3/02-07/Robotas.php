<!DOCTYPE HTML>  
<html>
<head>
<style>
*{
    box-sizing: border-box;
}
input {
    display: none;
}
input:checked + label {
    /* border-style: solid;
    border-width: 5px; */
    background-color:red;
    width: 165px;
    height: 165px;
}
img {
    width: 150px;
    height: 150px;
}
label {    
}
.container {
    display: flex;
    width: 550px;
    flex-wrap: wrap;

}
.green { 
    color: green;
}
.red {
    color: red;
}
</style>
</head>
<body>    
<?php


//sudedam nuotraukas i masyva
$foto0 = $_POST["foto0"] ?? 0;
$foto1 = $_POST["foto1"] ?? 0;
$foto2 = $_POST["foto2"] ?? 0;
$foto3 = $_POST["foto3"] ?? 0;
$foto4 = $_POST["foto4"] ?? 0;
$foto5 = $_POST["foto5"] ?? 0;
$foto6 = $_POST["foto6"] ?? 0;
$foto7 = $_POST["foto7"] ?? 0;
$foto8 = $_POST["foto8"] ?? 0;
$foto9 = $_POST["foto9"] ?? 0;
$test_vyr = $_POST["test_vyr"] ?? 0;
$test_mot = $_POST["test_mot"] ?? 0;

$galery = [];
$value = 0;
for($x=1; $x<=10; $x++){
    $value = rand(100,999);
    $galery[] = array($x, $value);
    
}
// echo '<pre>';
// vyrai 1,3,8,9,10 
$sum_vyr = $galery[0][1]+$galery[2][1]+$galery[7][1]+$galery[8][1]+$galery[9][1];
$sum_mot = $galery[1][1]+$galery[3][1]+$galery[4][1]+$galery[5][1]+$galery[6][1];
// echo $sum_vyr.' vyr <br>  vyrai 1,3,8,9,10 <br>';
// echo $sum_mot.' mot <br>';
// d($galery);
// echo $galery[0][1];
shuffle($galery);




?>


<h2>NUOTRAUKOS PAVYZDYS</h2>
<img src="img/<?php echo $galery[0][0] ?>.jpg">
<h2>PARINKITE TOS PAČIOS LYTIES NUOTRAUKAS</h2>

<form action="" method="post">
    <div class="container">     
            <div class="cont">
                <input name="foto1" id="check" type="checkbox" value="<?php echo $galery[1][1] ?>" <?php if (isset($foto1) && $foto1>=1) echo "checked";?>>
                <label for="check"><img src="img/<?php echo $galery[1][0] ?>.jpg"></label>
            </div>
            <div class="cont">
                <input name="foto2" id="check1" type="checkbox" value="<?php echo $galery[2][1] ?>" <?php if (isset($foto2) && $foto2>=1) echo "checked";?>>
                <label for="check1"><img src="img/<?php echo $galery[2][0] ?>.jpg"> </label>
            </div>
            <div class="cont">
                <input name="foto3" id="check2" type="checkbox" value="<?php echo $galery[3][1] ?>" <?php if (isset($foto3) && $foto3>=1) echo "checked";?>>
                <label for="check2"><img src="img/<?php echo $galery[3][0] ?>.jpg"> </label>
            </div>
            <div class="cont">
                <input name="foto4" id="check3" type="checkbox" value="<?php echo $galery[4][1] ?>" <?php if (isset($foto4) && $foto4>=1) echo "checked";?>>
                <label for="check3"><img src="img/<?php echo $galery[4][0] ?>.jpg"> </label>
            </div>
                <div class="cont">
                <input name="foto5" id="check4" type="checkbox" value="<?php echo $galery[5][1] ?>" <?php if (isset($foto5) && $foto5>=1) echo "checked";?>>
            <label for="check4"><img src="img/<?php echo $galery[5][0] ?>.jpg"> </label>
            </div>
            <div class="cont">
                <input name="foto6" id="check5" type="checkbox" value="<?php echo $galery[6][1] ?>" <?php if (isset($foto6) && $foto6>=1) echo "checked";?>>
                <label for="check5"><img src="img/<?php echo $galery[6][0] ?>.jpg"> </label>
            </div>
            <div class="cont">
                <input name="foto7" id="check6" type="checkbox" value="<?php echo $galery[7][1] ?>" <?php if (isset($foto7) && $foto7>=1) echo "checked";?>>
                <label for="check6"><img src="img/<?php echo $galery[7][0] ?>.jpg"> </label>
            </div>
            <div class="cont">
                <input name="foto8" id="check7" type="checkbox" value="<?php echo $galery[8][1] ?>" <?php if (isset($foto8) && $foto8>=1) echo "checked";?>>
                <label for="check7"><img src="img/<?php echo $galery[8][0] ?>.jpg"> </label>
            </div>
            <div class="cont"> 
                <input name="foto9" id="check8" type="checkbox" value="<?php echo $galery[9][1] ?>" <?php if (isset($foto9) && $foto9>=1) echo "checked";?>>
                <label for="check8"><img src="img/<?php echo $galery[9][0] ?>.jpg"> </label>
            </div>  
                <input type="hidden" name="test_vyr" value="<?= $sum_vyr ?>">  
                <input type="hidden" name="test_mot" value="<?= $sum_mot ?>"> 
                <input type="hidden" name="foto0" value="<?= $galery[0][1] ?>">
   </div>
    <button type="submit" name="mygtukas" value="spausti">VERIFY</button>
</form>
<?php
    $sum_check = $foto0 + $foto1 + $foto2 + $foto3 + $foto4 + $foto5 + $foto6 + $foto7 + $foto8 + $foto9;
    // echo $sum_check .' sum check <br>';
    // echo $test_vyr .' vyr <br>';
    // echo $test_mot .' mot <br>';
    
if(($test_vyr == $sum_check)||($test_mot == $sum_check)){
    echo '<h3 class="green">ESI ŽMOGUS</h3>';
}
else echo '<h3 class="red">ESI ROBOTAS</h3>';
// d($galery);
  
?>
 


</body>
