<!-- <?php

    // Pradžia
    session_start();
    ?> -->
    <!DOCTYPE html>
    <html>
    <body>
    
    <?php
    // Sesijos kintamieji
    $skaicius1 = rand(1,50);
    $skaicius2 = rand(51,100);
    $skaicius3 = rand(101,150);
    ?>
    <a href="Uzdav.php?page=1"><h2>Pirmas skaičius</h2></a>
    <a href="Uzdav.php?page=2"><h2>Antras skaičius</h2></a>
    <a href="Uzdav.php?page=3"><h2>Trecias skaičius</h2></a>
    
    <?php
        if(isset($_GET['page'])) {
            if($_GET['page'] == 1){
                echo 'Pirmas skaicius: ' .$skaicius1;
            }
            if($_GET['page'] == 2){
                echo 'Antras skaicius: ' .$skaicius2;
            }
            if($_GET['page'] == 3){
                echo 'Trecias skaicius: ' .$skaicius3;
            }
            // die('Baigesi');
        }
        // else echo "Joks Puslapis";
    ?>
    <br>
    /////////////////////////////UZDAVINYS 2////////////////////////////////////////<br><br>

    <form action="" method="POST">
        <button type="submit" value="1" name="page">Pirmas puslapis</button><br><br>
        <button type="submit" value="2" name="page">Antras puslapis</button><br><br>
        <button type="submit" value="3" name="page">Trecias puslapis</button><br><br>
    
    </form>
       <?php
        if(isset($_POST['page'])) {
            if($_POST['page'] == 1){
                echo 'Pirmas skaicius: ' .$skaicius1;
            }
            if($_POST['page'] == 2){
                echo 'Antras skaicius: ' .$skaicius2;
            }
            if($_POST['page'] == 3){
                echo 'Trecias skaicius: ' .$skaicius3;
            }
            // die('Baigesi');
        }
        
    ?>
     <br>
    /////////////////////////////UZDAVINYS 3////////////////////////////////////////<br><br>

    <form action="" method="POST">
        <button type="submit" value="1" name="page">Pirmas puslapis</button><br><br>
        <button type="submit" value="2" name="page">Antras puslapis</button><br><br>
        <button type="submit" value="3" name="page">Trecias puslapis</button><br><br>
    
    </form>
<br>


    </body>
    </html>