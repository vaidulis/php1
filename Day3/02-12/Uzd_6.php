<?php
session_start();

$vardas = $_POST['vardas'] ?? false;
$password = $_POST['password'] ?? false;
$prisijungti = $_POST['prisijungti'] ?? '';
$user = 'vardas';
$pass = '123123';

//slaptazodzio tikrinimas
if(!empty($_POST)){ //jeigu siunciam
    if(($vardas==$user)&&($password==$pass)&&($prisijungti==1)){ //tai tikrinam
        $_SESSION['login'] = 1; //jei teisinga pasizymim sesijoi
        header("location: Uzd_4_6_7.php"); //nurodom kur eit
        die(); //butinai reikia stabdyt koda
    }
    else echo '<p style="color:red;">Neteisingi prisijungimo duomenys</p>';
}   
?>
<!-- prisijungimo forma -->
<h2>PRISIJUNKITE</h2>
<form action="" method="POST">
    Name: <input type="text" value="<?php echo $vardas ?>" name="vardas">
    <?php 

        if(!($vardas)) echo '<p style="color:red;">įveskite vardą</p>' 
        
        ?> <br><br>
    Password: <input type="password" value="<?php echo $password ?>" name="password">
    <?php
        if(!($password)) echo '<p style="color:red;">įveskite slaptažodį</p>' 
        ?><br><br>
    <button type="submit" value="1" name="prisijungti">Prisijungti</button><br><br>
    <!-- <input type="hidden" name="" value=""> 
        <input type="hidden" name="" value="">
        <input type="hidden" name="" value="">    -->
</form>