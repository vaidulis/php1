<?php
session_start();
$_SESSION['pirmas_zaidejas_rez'] = 0;
$_SESSION['antras_zaidejas_rez'] = 0;
$_SESSION['eile'] = 1;

?>    
<h2>Žaidimas Kauliukai</h2>
<div class="container">    
    <div class="cont">
        <h3>ŽAIDĖJAI</h3>
        <form action="" method="post">
            <label>Pirmas Žaidėjas</label><br>
            <input type="text" style="" name="pirmas"><br><br>
            <label>Antras Žaidėjas</label><br>
            <input type="text" style="" name="antras"><br><br>
            <button type="submit" style="" name="pradeti">PRADĖTI</button><br>
        </form>
    </div>
</div>
<?php

if(!empty($_POST)){
    $_SESSION['pirmas_zaidejas'] = $_POST['pirmas'];
    $_SESSION['antras_zaidejas'] = $_POST['antras'];
    header('Location: kauliukai.php?page=1');
    die();
    // echo $_SESSION['pirmas_zaidejas'];
    // echo $_SESSION['antras_zaidejas'];
}

?>