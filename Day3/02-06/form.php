

<form action="" method="post">
Jūsų vardas
<input type="text" name="vardas" value="<?php echo $_POST['vardas'] ?? 'tuscia' ?>">
<br>
<br>
Jūsų el. pašto adresas:
<input type="text" name="elpastas" value="">
<input type="submit" value="Išsiųsti">
</form>

<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
?>

<form action="" method="post">
X:
<input type="text" name="x" value="<?php echo $_POST['x'] ?? '' ?>">
<br>
<br>
Y:
<input type="text" name="y" value="<?php echo $_POST['y'] ?? '' ?>"><br><br>
<input type="submit" value="Sumuoti">
</form>

<?php
if(isset($_POST['x'])){

echo 'Atsiustu skaiciu (x) ir (y) suma: ';
echo $_POST['x']+$_POST['y'];
}
echo '<br><br>'
?>

