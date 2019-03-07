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
// turi kates
$sql = "SELECT `lastname`, `firstname` FROM table_2 WHERE have_cats >0";
$stmt = $pdo->query($sql);
// 
dc($stmt->fetchAll());
//kiek neturi kaciu

$sql = "SELECT COUNT(`lastname`) FROM table_2 WHERE have_cats = 0";
$stmt = $pdo->query($sql);
// 
dc('Turi kates');
dc($stmt->fetchAll());

//visi nuo jauniausio iki vyriausio
$sql = "SELECT `lastname`, `birth_date` FROM table_2 
ORDER BY `birth_date` DESC";
$stmt = $pdo->query($sql);
// 
dc('Pagal Gimimo data nuo jauniausio');
dc($stmt->fetchAll());

//visi kas turi bendro su Vilnium
$sql = "SELECT `lastname`, `biography` FROM table_2 
WHERE `biography` LIKE '%Viln%'";
$stmt = $pdo->query($sql);
// 
dc('Kas susije su Vilniumi');
dc($stmt->fetchAll());