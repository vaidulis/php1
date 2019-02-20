<?php
defined('DIR') or exit;
?>

<?php
$file_name = 'text';
if(isset($_GET['file_by_name'])) {
    $file_name = $_GET['file_by_name'];
}
if(file_exists(DIR.'files/'.$file_name.'.txt')) {
    $old_text = file_get_contents(DIR.'files/'.$file_name.'.txt');
}
else {
    $old_text = '';
}
require DIR.'front/text.php';
if(!empty($_POST)) {
    file_put_contents(DIR.'files/'.$file_name.'.txt', $_POST['text']);
    header('Location: '.URL.'/?page=textarea&file_by_name='.$file_name);
    exit;
}

