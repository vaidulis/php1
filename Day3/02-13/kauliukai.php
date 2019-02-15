<?php
session_start();
?>

<!DOCTYPE HTML>  
<html>
<head>
<style>
.red {
    color: red;
}
div.container {
    display: flex;
}
.cont {
    margin-left: 3rem;
    margin-right: 1rem;
}
</style>
</head>
<body>

<?php

if(isset($_GET['page']) && $_GET['page']=='1') { 
    if(isset($_POST['mesti'])) {
        $metimas = rand(1,6);
        echo 'Iskrito taskai: <br>' .$metimas;
        
        if($_SESSION['eile']==1){        
            $_SESSION['pirmas_zaidejas_rez'] += $metimas;
            $_SESSION['eile']=2;

            if($_SESSION['pirmas_zaidejas_rez'] >= 30){
                $_SESSION['laimetojas'] = $_SESSION['pirmas_zaidejas'];
                header('Location: kauliukai.php?page=laimejo');
                die();
            }
        }
        else {
            $_SESSION['antras_zaidejas_rez'] += $metimas;
            $_SESSION['eile']=1;

            if($_SESSION['antras_zaidejas_rez'] >= 30){
                $_SESSION['laimetojas'] = $_SESSION['antras_zaidejas'];
                header('Location: kauliukai.php?page=laimejo');
                die();
            }
        }
    }    
?>
<div class="container">    
    <div class="cont">
        <h3>Meta kauliuką: <?=($_SESSION['eile']==2)? $_SESSION['antras_zaidejas']:$_SESSION['pirmas_zaidejas']; ?></h3>
        <form action="kauliukai.php?page=1" method="post">            
            <button type="submit" style="" name="mesti">MESTI KAULIUKĄ</button><br>    

        </form>
    </div>
    <div class="cont">
        <h3>REZULTATAI</h3>
        <h4><?php echo $_SESSION['pirmas_zaidejas']; ?></h4>
        <h4>Rezultatas: <?php echo $_SESSION['pirmas_zaidejas_rez']; ?> taškų </h4>
        <h4><?php echo $_SESSION['antras_zaidejas']; ?></h4>
        <h4>Rezultatas: <?php echo $_SESSION['antras_zaidejas_rez']; ?> taškų </h4>
    </div>
</div>
<?php
die();
}


if(isset($_GET['page']) && $_GET['page']=='laimejo') {
    echo '<h2 class="red"> Laimėjo '.$_SESSION['laimetojas'].' </h2>';
?>
<a href="kauliukai1.php">Pradėti žaidimą iš naujo</a>
<?php
}

