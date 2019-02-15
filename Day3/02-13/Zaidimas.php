<?php
session_start();

$re = '/^1|2|3|4|5|6$/m';   //ivedamas skaicius nuo 1 iki 6 tikrinimas


$button_name ='SPĖTI'; //mygtuko pradinis pavadinimas
$label = ''; //teksto lauko aprasymas
$display = ''; //ivedimo lauko rodymas
$action = ''; 

if(!empty($_POST)){
    // $spejimai = $_SESSION['spejimai'];
    $display = '';
    $rand = $_SESSION['rand'];
    $label = 'Spėjimas';
    // $button_name = 'SPETI';
    $str =  $_POST['spejimas']??'';
    echo $rand;
    // echo '<br> Spejimu skaicius: '.$_SESSION['spejimai'];
    if(preg_match($re, $str)&&($str == $rand)){
        $_SESSION['spejimai'] = $_SESSION['spejimai'] + 1;
        echo '<h2>Atspėjote</h2><br>';
        echo '<h3>Spejimu skaicius: </h3>'.$_SESSION['spejimai'];
        $label = '';
        $display = 'display:none;';
        $button_name = 'GRYŽTI';
        $action = 'Zaidimas_pradzia.php'; //gryzimas i zaidimo pradzia
    }
    elseif(preg_match($re, $str)) {
        echo '<h2>Neatspejote</h2><br>';
        $_SESSION['spejimai'] = $_SESSION['spejimai'] + 1;
        $label = 'Naujas spėjimas';

    }
    else echo '<br><p style="color:red;">Skaičius turi būti nuo 1 iki 6 </p>';

}



?>

<form action="<?php echo $action; ?>" method="post">
    <label><?php echo $label ?></label><br>
    <input type="text" style="<?php echo $display ?>" name="spejimas"><br><br>
    <button type="submit" style="" name="pradeti"><?php echo $button_name ?></button><br>    


</form>