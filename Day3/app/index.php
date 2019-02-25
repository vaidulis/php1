<?php
define('DIR', __DIR__.'/');
require DIR.'inc/bootstrap.php';
require DIR.'front/header.php';
//body

if(empty($_GET)&&empty($_POST)){
    require DIR.'inc/index.php';
}
elseif(isset($_GET['page'])&&($_GET['page'] == 'create')&&empty($_POST)){
    
}










require DIR.'front/footer.php';


