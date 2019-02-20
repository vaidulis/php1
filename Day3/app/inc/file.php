<?php
defined('DIR') or exit;
?>

<?php
// if(file_exists(DIR.'files/text.txt')) {
//     $old_text = file_get_contents(DIR.'files/text.txt');
// }
// else {
//     $old_text = '';
// }
$dir = [];
if ($handle = opendir(DIR.'files')) {
    while (false !== ($entry = readdir($handle))) {
        $dir[] =  $entry;
    }
    closedir($handle);
 }
 
require DIR.'front/file.php';
if(!empty($_POST)) {
    $file_name = $_POST['file_name'];
    $file_name = ($file_name) ? $file_name : 'text';
    file_put_contents(DIR.'files/'.$file_name.'.txt', $_POST['text']);
    header('Location: '.URL.'/?page=failai');
    exit;
}