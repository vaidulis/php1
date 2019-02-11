<!DOCTYPE HTML>  
<html>
<head>
<style>
.green {
    color: green;
}
.red {
    color: red;
}
.container {
    display: flex;
}
.cont {
    margin-left: 1rem;
    margin-right: 1rem;
}
</style>
</head>
<body>

<?php


$zverys = $_POST["zverys"] ?? "";
$zverys1 = $_POST["zverys1"] ?? "";
$zverys2 = $_POST["zverys2"] ?? "";
$teisingas_atsakymas = 0;
$briedis1 = 0;
if(($zverys)&&($zverys=="briedis")){
    $teisingas_atsakymas++;
}
if(($zverys1)&&($zverys1=="bebras")){
    $teisingas_atsakymas++;
}
if(($zverys2)&&($zverys2=="vilkas")){
    $teisingas_atsakymas++;
}
?>


<h1>APKLAUSA</h1>
<form action="" method="post">
<?php
echo 'Jūs atsakėte teisingai į '.$teisingas_atsakymas .' iš 3 ir surinkote '.$teisingas_atsakymas/3*100 .'%<br>' ;
?>
<div class="container">    
    <div class="cont">        
        <img src="https://www.atviraklaipeda.lt/wp-content/uploads/brie960.jpg" width="250" alt="Briedis">
    </div>
    <div class="cont">
        <p>Koks tai gyvūnas?</p>        

        <input type="radio" name="zverys" value="lape" <?php if (isset($zverys) && $zverys=="lape") echo "checked";?>>Tai Lapė<br>
        <input type="radio" name="zverys" value="briedis" <?php if (isset($zverys) && $zverys=="briedis") echo "checked";?>>Tai Briedis<br>
        <input type="radio" name="zverys" value="vilkas" <?php if (isset($zverys) && $zverys=="vilkas") echo "checked";?>>Tai Vilkas<br>
        <input type="radio" name="zverys" value="bebras"<?php if (isset($zverys) && $zverys=="bebras") echo "checked";?>>Tai Bebras<br>
  
        <?php
        if($zverys){ 
            if($zverys=="briedis"){
            echo ' <br><p class="green">Jūsų atsakymas teisingas, tai yra Briedis</p>';        
            }
            else  {
                echo '<br><p class="red"> Jūsų atsakymas neteisingas</p>';
            }
        } 
        else echo '<br><p class="red"> Pasirinkite atsakymą </p>';  ?>
        <br> 
    </div>
</div>
<div class="container">    
    <div class="cont">        
        <img src="http://www.linava.lt/wp-content/themes/linava/timthumb.php?src=http://www.linava.lt/wp-content/uploads/2014/02/bottom-teeth.jpg&w=390&q=100" width="250" alt="Briedis">
    </div>
    <div class="cont">
        <p>Koks tai gyvūnas?</p>
      
        <input type="radio" name="zverys1" value="lape" <?php if (isset($zverys1) && $zverys1=="lape") echo "checked";?>>Tai Lapė<br>
        <input type="radio" name="zverys1" value="briedis" <?php if (isset($zverys1) && $zverys1=="briedis") echo "checked";?>>Tai Briedis<br>
        <input type="radio" name="zverys1" value="vilkas" <?php if (isset($zverys1) && $zverys1=="vilkas") echo "checked";?>>Tai Vilkas<br>
        <input type="radio" name="zverys1" value="bebras"<?php if (isset($zverys1) && $zverys1=="bebras") echo "checked";?>>Tai Bebras<br>
<?php
if($zverys1){ 
    if($zverys1=="bebras"){
        echo ' <br><p class="green">Jūsų atsakymas teisingas, tai yra Bebras</p>';
    }
    else  {
        echo '<br><p class="red"> Jūsų atsakymas neteisingas</p>';
    }
}
else {
   echo '<br><p class="red"> Pasirinkite atsakymą </p>';
} ?>
        <br>      
    </div>
</div>

<div class="container">    
    <div class="cont">        
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/Howlsnow.jpg/200px-Howlsnow.jpg" width="250" alt="Briedis">
    </div>
    <div class="cont">
        <p>Koks tai gyvūnas?</p>
       

        <input type="radio" name="zverys2" value="lape" <?php if (isset($zverys2) && $zverys2=="lape") echo "checked";?>>Tai Lapė<br>
        <input type="radio" name="zverys2" value="briedis" <?php if (isset($zverys2) && $zverys2=="briedis") echo "checked";?>>Tai Briedis<br>
        <input type="radio" name="zverys2" value="vilkas" <?php if (isset($zverys2) && $zverys2=="vilkas") echo "checked";?>>Tai Vilkas<br>
        <input type="radio" name="zverys2" value="bebras"<?php if (isset($zverys2) && $zverys2=="bebras") echo "checked";?>>Tai Bebras<br>
<?php 
if($zverys2){ 
    if($zverys2=="vilkas"){
        echo ' <br><p class="green">Jūsų atsakymas teisingas, tai yra Vilkas</p>';
    }
    else  {
        echo '<br><p class="red"> Jūsų atsakymas neteisingas</p>';
    }
}
else {
   echo '<br><p class="red"> Pasirinkite atsakymą </p>';
}
?>
        <br>        
    </div>
</div>

<button type="submit" name="mygtukas" value="spausti">SPĖTI</button>

 </form>
</body>
</html>