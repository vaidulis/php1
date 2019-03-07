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
if(!empty($_POST)) {
    $sql = "INSERT INTO `table1` (`firstname`, `lastname`)
    VALUES ('".$_POST['vardas']."', '".$_POST['pavarde']."')";
    
    $stmt = $pdo->query($sql);
}
?>



<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="" method="POST">
  First name:<br>
  <input type="text" name="vardas" value="">
  <br>
  Last name:<br>
  <input type="text" name="pavarde" value="">
  <br><br>
  <input type="submit" value="Submit">
</form> 

<p></p>

</body>
</html>

<?php
$offset = 6;
$limit = 10;
$sql = "SELECT * FROM table1 LIMIT ?, ?";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $offset,PDO::PARAM_INT);
$stmt->bindParam(2, $limit,PDO::PARAM_INT);
$stmt->execute();
foreach ($stmt as $row)
{
    echo $row['firstname'] . ' - ' . $row['lastname'] .  "<br>";
}