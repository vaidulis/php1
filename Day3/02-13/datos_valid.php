<?php
$re = '/^[12]\d{3}[\.\- ](0[1-9]|1[0-2])[\.\- ](0[1-9]|[12]\d|3[01])$/';

if(!empty($_POST)){//jei siunciam data - netinka tikrinti isset, nes $_POST visada yra, tikrinam ar vidui kazkas yra/
                                        //galima ta paty uzrasyti: isset($_POST['data'])
    $str = $_POST['data'];
    if(preg_match($re, $str)) {
        echo 'GERAI';
    }
    else echo 'BLOGAI';
}

// preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
// var_dump($matches);



?>
<br><br>
<form action="" method="post">
        <label>Data</label>
        <input type="text" name="data"><br><br>
        <!-- <label>Slaptazodis</label>
        <input type="password" name="pass"><br><br> -->
        <button type="submit" name="login">PIveskite data</button>
    </form>