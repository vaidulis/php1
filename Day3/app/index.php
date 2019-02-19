<?php
define('DIR', __DIR__.'/');

require DIR.'inc/bootstrap.php';

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'textarea') {
        require DIR.'inc/text.php';
    }
    else {
        require DIR.'inc/home.php'; 
    }
}
else {
    require DIR.'inc/home.php'; 
}



