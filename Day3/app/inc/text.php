
<?php
defined('DIR') or exit;
?>

<?php
if(file_exists(DIR.'files/text.txt')) {
    $old_text = file_get_contents(DIR.'files/text.txt');
}
else {
    $old_text = '';
}
?>


<form action="" method="POST">
<textarea row="10" name="text"><?=$old_text?></textarea><br><br>
<button type="submit" name="add_textarea" value="1">PRIDET</button>
</form>


<?php
if(!empty($_POST)) {
    file_put_contents(DIR.'files/text.txt', $_POST['text']);
    header('Location: '.URL.'/?page=textarea');
    exit;
}