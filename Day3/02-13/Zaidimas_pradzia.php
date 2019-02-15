<?php
session_start();

$_SESSION['rand'] = rand(1,6);
$_SESSION['spejimai'] = 0;
?>

<form action="Zaidimas.php" method="post">
   
    <button type="submit" style="" name="pradeti">PRADĖTI ŽAIDIMĄ</button><br>    


</form>