<?php

//Markes validacija - Raides ir skaiciai
$re_marke = '/^[a-zA-Z \d]*$/m';

// Nr. Validacija ABC-123
$re_nr = '/^[A-Z]{3}-\d{3}$/m';

//Pagaminimo metai validacija

$re_metai = '/^(19\d{2})|((201\d)|(200\d))$/m';

$style_red = ''; 
$style_red1 = ''; 
$style_red2 = '';

if(!empty($_POST)){//jei siunciam data - netinka tikrinti isset, nes $_POST visada yra, tikrinam ar vidui kazkas yra/
                                
    $str = $_POST['marke'];
    $str1 = $_POST['numeris'];
    $str2 = $_POST['metai'];
    if(preg_match($re_marke, $str)) {
        echo 'GERAI marke <br>';
    }
    else {
        echo 'BLOGAI marke <br>';
        $style_red = 'style="border: 3px solid red;"';
        $val1 = $str;
        $val2 = $str1;
        $val3 = $str2;
    }

    if(preg_match($re_nr, $str1)) {
        echo 'GERAI numeris <br>';
    }
    else {
        echo 'BLOGAI numeris <br>';
        $style_red1 = 'style="border: 3px solid red;"'; 
        $val1 = $str;
        $val2 = $str1;
        $val3 = $str2;
    }
    if(preg_match($re_metai, $str2)) {
        echo 'GERAI data <br>';
    }
    else {
        echo 'BLOGAI data <br>';
        $style_red2 = 'style="border: 3px solid red;"';
        $val1 = $str;
        $val2 = $str1;
        $val3 = $str2;
    }

}



?>

    <form action="" method="post">
        <label>Automobilio markė</label>
        <input type="text" name="marke" value="<?php echo $val1??''; ?>" <?php echo $style_red; ?>><br><br>
        <label>Valstybinis numeris</label>
        <input type="text" name="numeris" value="<?php echo $val2??''; ?>" <?php echo $style_red1; ?>><br><br>
        <label>Pagaminimo metai</label>
        <input type="text" name="metai" value="<?php echo $val3??''; ?>" <?php echo $style_red2; ?>><br><br>
        <button type="submit" name="ivesti">Įvesti</button>
    </form>