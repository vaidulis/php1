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
$sql = "CREATE TABLE IF NOT EXISTS table1 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL
    )";
$stmt = $pdo->query($sql); 

$sql = "INSERT INTO table1 (`firstname`, `lastname`)
VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['Henrikas', 'Judovikas']);

$sql = "INSERT INTO table1 (`firstname`, `lastname`)
VALUES (:fi, :la)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['la' => 'Kukovicius', 'fi' => 'Gegutis']);

$sql = "SELECT * FROM table1";
$stmt = $pdo->query($sql);
foreach ($stmt as $row)
{
    echo $row['firstname'] . ' - ' . $row['lastname'] .  "<br>";
}