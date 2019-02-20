<form action="" method="POST">
<textarea row="10" name="text"></textarea><br><br>
<input type="text" name="file_name"><br><br>
<button type="submit" name="add_textarea" value="1">PRIDET</button>
</form>

<nav>
<ul>
<?php
foreach ($dir as $val) {
    if ($val == '.' || $val == '..') {
        continue;
    }
    $link = preg_replace('/\.txt$/i', '', $val);
?>
    <li><a href="<?= URL.'/?page=textarea&file_by_name='.$link ?>"><?= $val ?></a></li>
<?php
}
?>
</ul>
<nav>