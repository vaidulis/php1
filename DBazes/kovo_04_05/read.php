<?php
$host = '127.0.0.1';
$db   = 'bebras';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>



<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="" method="POST">
  Last name:<br>
  <input type="text" name="pavarde" value="">
  <br><br>
  <input type="submit" value="Submit">
</form> 

<p></p>

</body>
</html>

<?php
if(!empty($_POST)) {
    //"SELECT * FROM table1 WHERE `lastname` = '   ' OR '1' = '1  '";
$sql = "SELECT * FROM table1 WHERE `lastname` = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_POST['pavarde']]);
foreach ($stmt as $row)
{
    echo $row['firstname'] . ' - ' . $row['lastname'] .  "<br>";
}
}