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

$sql = "CREATE TABLE IF NOT EXISTS Photos(
    PhotoID int unsigned not null auto_increment primary key,
    Photo longblob not null)";

$stmt = $pdo->query($sql);
$img = file_get_contents('1.jpg');
$sql = "INSERT INTO Photos (`Photo`) VALUES (?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$img]);
$sql = "SELECT Photo FROM Photos WHERE PhotoID = 3";
$stmt = $pdo->query($sql);
//dc($stmt->fetchAll()[0]['Photo']);
header("Content-Type: image/jpeg");
echo $stmt->fetchAll()[0]['Photo'];