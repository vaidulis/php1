<?php

    // Pradžia
    session_start();
    ?>
    <!DOCTYPE html>
    <html>
    <body>
    
    <?php
    // Sesijos kintamieji
    $_SESSION['favcolor'] = 'green';
    $_SESSION['favanimal'] = 'cat';
    echo 'Sesijos kintamieji įrašyti.';
    ?>
    
    </body>
    </html>