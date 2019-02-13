<!DOCTYPE html>
    <html>
    <body>

 /////////////////////////////UZDAVINYS 5////////////////////////////////////////<br><br>
<?php

    if(isset($_POST['page'])) {
        $buves = $_POST['buves_skaicius'];
        if($_POST['page'] == 1){
            $dabar = rand(1,50);
        }
        if($_POST['page'] == 2){
            $dabar = rand(51,100);
        }
        if($_POST['page'] == 3){
            $dabar = rand(101,150);
        }
        $rodyti = $buves. ' ' .$dabar;
        echo $rodyti;
    }
        
?>

<br><br>
    <form action="" method="POST">
        <button type="submit" value="1" name="page">Pirmas puslapis</button><br><br>
        <button type="submit" value="2" name="page">Antras puslapis</button><br><br>
        <button type="submit" value="3" name="page">Trecias puslapis</button><br><br>
        <input type="hidden" name="buves_skaicius" value="<?php echo $dabar??'' ?>">
    
    </form>

     </body>
    </html>