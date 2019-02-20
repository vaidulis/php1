<?php
define('DIR', __DIR__.'/');
require DIR.'inc/bootstrap.php';
require DIR.'front/header.php';
//body
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'textarea') {
        require DIR.'inc/text.php';
    }
    elseif ($_GET['page'] == 'failai') {
        require DIR.'inc/file.php';
    }
    else {
        require DIR.'inc/home.php'; 
    }
}
else {
    require DIR.'inc/home.php'; 
}
require DIR.'front/footer.php';


