<?php
session_start();
// 4. Sukurti programą:
// a) Login forma
// b) Vartotojo sukūrimas (vardas, el. paštas, slaptažodis)
// c) Vartotojo trynimas
// d) Vartotojo redagavimas
// e) Vartotojų sąrašas

$_SESSION['duombaze'] = array(array("name"=>"petras","email"=>"petras@email.com", "pass"=>"petris"));
// echo '<pre>';
// print_r($_SESSION['duombaze']);


if(isset($_POST['registr'])){
    array_push($_SESSION['duombaze'], array("name"=>$_POST['name1'],"email"=>$_POST['email'], "pass"=>$_POST['pass']));
    
    // echo '<pre>';
    // print_r($_SESSION['duombaze']);
}
if(isset($_POST['login'])) {// jeigu siunciam
    $db_name = array_search($_POST['name'], array_column($_SESSION['duombaze'], 'name'));
    $db_pass = array_search($_POST['pass'], array_column($_SESSION['duombaze'], 'pass'));
    if($_POST['name'] == $db_name && $_POST['pass'] == $db_pass) {// tai tikrinam
        $_SESSION['login'] = 1;//jei teisinga pasizymim sesijoj
        header('Location: nd_funkcijos.php?page=1'); //nurodom narsyklei kur
        die();
    }
    else {
        echo '<h1 style="color:red;">Neteisingi prisijungimo duomenys</h1>';
    }

?>

<h2> 4. Programa </h2>

<?php if(!isset($_GET['page'])){ ?>

<h4><a href="nd_funkcijos.php?page=login"> PRISIJUNKITE</a></h4>
<h4>Naujas Vartotojas?? <br><a href="nd_funkcijos.php?page=registr"> REGISRTUOKITĖS</a></h4>

<?php 
}
if(isset($_GET['page']) && $_GET['page']=='login'){ ?>

        <form action="" method="post">
            <label>Vardas</label>
            <input type="text" name="name"><br><br>
            <label>Slaptazodis</label>
            <input type="password" name="pass"><br><br>
            <button type="submit" name="login">PRISIJUNGTI</button>
        </form>
<?php
} 
if(isset($_GET['page']) && $_GET['page']=='registr'){ ?>
    
        <form action="nd_funkcijos.php?page=success" method="post">
            <label>Vardas:</label>
            <input type="text" name="name1"><br><br>
            <label>El. paštas:</label>
            <input type="text" name="email"><br><br>
            <label>Slaptazodis</label>
            <input type="password" name="pass"><br><br>
            <button type="submit" name="registr">Registruotis</button>
        </form>
<?php
}
if(isset($_GET['page']) && $_GET['page']=='success'){ 
    echo '<h4>Sveikiname sėkmingai prisiregistravus </h4> <br>';
    echo '<h4><a href="nd_funkcijos.php?page=login"> PRISIJUNKITE</a></h4>';
}
if(isset($_GET['page']) && $_GET['page']=='1'){ 
    // Vartotoju sarasas

    // Atsijungti

}
?>