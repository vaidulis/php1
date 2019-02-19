<?php
session_start();
define('DIR', __DIR__.'/');
// 4. Sukurti programą:
// a) Login forma
// b) Vartotojo sukūrimas (vardas, el. paštas, slaptažodis)
// c) Vartotojo trynimas
// d) Vartotojo redagavimas
// e) Vartotojų sąrašas

// $_SESSION['duombaze'] = array(array("name"=>"petras","email"=>"petras@email.com", "pass"=>"petris"));
// echo '<pre>';
// print_r($_SESSION['duombaze']);

// visus ivestus duomenis irasome i txt faila
if(isset($_POST['registr'])){
    // $file = fopen('db.txt', 'a') or die('file not open');
    $file = 'db.txt';
    $struktura = $_POST['name1'].', '.$_POST['email'].', '.$_POST['pass'];
    file_put_contents($file, $struktura . "\r\n", FILE_APPEND);
    // fwrite($file, $struktura) or die('Data not write');
    // fclose($file);
    // array_push($_SESSION['duombaze'], array("name"=>$_POST['name1'],"email"=>$_POST['email'], "pass"=>$_POST['pass']));
    
    // echo '<pre>';
    // print_r($_SESSION['duombaze']);
    }
//txt faila perrasom i masyva
$file = DIR.'db.txt';
$lines = file($file);
// var_dump($lines);
foreach($lines as $line){
    $var = explode(',', $line);
    $arr_db[] = $var; 
}
$_SESSION['duombaze'] = array($arr_db);
// echo '<pre>';
// print_r($_SESSION['duombaze']);


//tikrinam prisijungimo passworda
if(isset($_POST['login'])) {// jeigu siunciam
    foreach($_SESSION['duombaze'] as $value){
        foreach($value as $index => $val){
            if((trim($_POST['name']) == trim($_SESSION['duombaze'][0][$index][0])) && (trim($_POST['pass']) == trim($_SESSION['duombaze'][0][$index][2]))) {// tai tikrinam
                $_SESSION['login'] = 1;//jei teisinga pasizymim sesijoj
                header('Location: nd_funkcijos.php?page=1'); //nurodom narsyklei kur
                die();
            }
            else {
                echo '<h1 style="color:red;">Neteisingi prisijungimo duomenys</h1>';
            }
        }
    }
    
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
    if($_SESSION['login'] == 1){
        // Vartotoju sarasas
        echo '<h2>Sveikiname prisijungus</h2>';
        $file = fopen('db.txt', 'r') or die("file not open");
        while(!feof($file)){
            echo fgets($file).'<br>';
        }
        fclose($file);
    }
    else {
        echo '<h4><a href="nd_funkcijos.php?page=login"> PRISIJUNKITE</a></h4>';
    }

}