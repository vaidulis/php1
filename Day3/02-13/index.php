<?php
?>
<a href="index.php">Joks</a>
<a href="index.php?page=1">I</a>
<a href="index.php?page=2">II</a>
<a href="index.php?page=3">III</a>
<a href="index.php?page=login">Prisijungt</a>
<a href="index.php?page=logout">Atsijungti</a>
<br><br><br><br>

<?php
session_start();
$db_name = 'Jonas';
$db_pass = '123';
//slaptazodcio tikrinimas
if(!empty($_POST)) {// jeigu siunciam
    if($_POST['name'] == $db_name && $_POST['pass'] == $db_pass) {// tai tikrinam
        $_SESSION['login'] = 1;//jei teisinga pasizymim sesijoj
        header('Location: index.php?page=1'); //nurodom narsyklei kur
        die();
    }
    else {
        echo '<h1 style="color:red;">Neteisingi prisijungimo duomenys</h1>';
    }
}
//atsijungimo tikrinimas
if(isset($_GET['page']) && $_GET['page']=='logout') {
    $_SESSION['login'] = 0;//atjugiam
    header('Location: index.php?page=login'); //nurodom narsyklei kur
    die();
}
//prisijungimo formos rodymas
if(isset($_GET['page'])) {
    if($_GET['page']=='login') {
?>
    <form action="index.php?page=login" method="post">
        <label>Vardas</label>
        <input type="text" name="name"><br>
        <label>Slaptazodis</label>
        <input type="password" name="pass"><br><br>
        <button type="submit" name="login">PRISIJUNGTI</button>
    </form>
<?php
    die();
    }
}
//musu tinklapis
if(isset($_SESSION['login']) && $_SESSION['login'] ==1 ) {// tikrinam ar prisijunges
    //Taip prisijunges
    if(isset($_GET['page'])) {// tikrina ar is vis tas page yra siunciamas
        
        if($_GET['page']==1) {
            
            echo 'PUSLAPIS PIRMAS--';
            echo rand(1,50);
            die;
        }
        if($_GET['page']==2) {
            echo 'PUSLAPIS ANTRAS--';
            echo rand(51,100);
            exit;
        }
        if($_GET['page']==3) {
            echo 'PUSLAPIS TRECIAS--';
            echo rand(101,150);
            die();
        }
    }
    else {
        echo 'HOME PUSLAPIS';
    }
}
else {// neprisijunges
    header('Location: index.php?page=login'); // siunciam i logino forma
    die();
}