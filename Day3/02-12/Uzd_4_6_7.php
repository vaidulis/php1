<?php
session_start();





?>

<h2>UZDAVINYS 4; 6; 7</h2> <br><br>

<a href="Uzd_6.php">ATSIJUNGTI</a><br><br><br>

<?php

if(isset($_SESSION['login'])&&($_SESSION['login'])==1){ //tikriname ar prisijunges


$vardas = $_POST['vardas'] ?? false;
$pavarde = $_POST['pavarde'] ?? false;
$kodas = $_POST['kodas'] ?? false;

    if(isset($_POST['paieska'])) {
            
        if($_POST['paieska'] == 1){
            echo '<h2>paieška pagal vardą pavardę </h2><br>Vardas: '.$vardas .'<br> Pavardė: '.$pavarde .'<br><br>';
        }
        elseif($_POST['paieska'] == 2){
            echo '<h2>paieška pagal asmens kodą </h2><br>Asmens kodas: '.$kodas.'<br><br>';
        }
    }

}
else {
    header("location: Uzd_6.php"); //nurodom kur eit
        die(); //butinai reikia stabdyt koda
}

//atsijungimo tikrinimas
if (isset($_GET['page']) && ($_GET['page'] == 'logout')){
      $_SESSION['login'] = 0;//atjugiam
    header('Location: index.php?page=login'); //nurodom narsyklei kur
    die();

}
?>

    <form action="" method="POST">
        Vardas: <input type="text" value="<?php echo $vardas??'' ?>" name="vardas" pattern="[A-Za-z]"> <?php if(!($vardas)) echo '<p style="color:red;">įveskite vardą</p>' ?> <br><br>
        Pavardė: <input type="text" value="<?php echo $pavarde??'' ?>" name="pavarde" pattern="[A-Za-z]"><?php if(!($pavarde)) echo '<p style="color:red;">įveskite pavardę</p>' ?><br><br>
        Asmens Kodas: <input type="text" value="<?php echo $kodas??'' ?>" name="kodas" pattern=".{8}"><?php if(!($kodas)) echo '<p style="color:red;">įveskite asmens kodą</p>' ?><br><br>
        <button type="submit" value="1" name="paieska">Ieškoti pagal vardą ir pavardę</button><br><br>
        <button type="submit" value="2" name="paieska">Ieškoti pagal asmens kodą</button>
        <!-- <input type="hidden" name="" value=""> 
        <input type="hidden" name="" value="">
        <input type="hidden" name="" value="">    -->
    </form>