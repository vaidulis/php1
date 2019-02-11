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
?>
<h1>APKLAUSA</h1>
<div class="container">
    
    <div class="cont">        
        <img src="https://www.atviraklaipeda.lt/wp-content/uploads/brie960.jpg" width="250" alt="Briedis">
    </div>
    <div class="cont">
        <p>Koks tai gyvūnas?</p>
        <form action="" method="post">

        <input type="radio" name="zverys" value="lape" <?php if (isset($zverys) && $zverys=="lape") echo "checked";?>>Tai Lapė<br>
        <input type="radio" name="zverys" value="briedis" <?php if (isset($zverys) && $zverys=="briedis") echo "checked";?>>Tai Briedis<br>
        <input type="radio" name="zverys" value="vilkas" <?php if (isset($zverys) && $zverys=="vilkas") echo "checked";?>>Tai Vilkas<br>
        <input type="radio" name="zverys" value="bebras"<?php if (isset($zverys) && $zverys=="bebras") echo "checked";?>>Tai Bebras<br>

        <br>

        <input type="submit" value="Spėti">
        </form>
    </div>
</div>
<?php
if(isset($zverys) && $zverys=="briedis"){
    echo ' <br><p class="green">Jūsų atsakymas teisingas, tai yra Briedis</p>';
}
else {
    echo '<br><p class="red"> Jūsų atsakymas neteisingas</p>';
}
?>


</body>
</html>