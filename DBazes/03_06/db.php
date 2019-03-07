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


$sql = "CREATE TABLE IF NOT EXISTS table_2 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    birth_date YEAR NOT NULL,
    shoe_size DECIMAL(3,1) UNSIGNED,
    have_cats TINYINT UNSIGNED,
    biography VARCHAR(255)
    ) COLLATE utf8mb4_bin";

$stmt = $pdo->query($sql);


$sql = "INSERT INTO table_2 (`firstname`, `lastname`, `birth_date`, `shoe_size`, `have_cats`, `biography`)
VALUES (
    'Jonas', 
    'Petraitis',
    1999,
    44.4,
    0,
    'Gimė ir užaugo Ariogaloje.'
    ),(
    'Lina', 
    'Petronis',
    1972,
    36.4,
    2,
    'Laisto gėles ir nieko neveikia.'
    ),(
    'Jurga', 
    'Jurgevičienė',
    1955,
    37.4,
    0,
    'Gimė ir užaugo Vilniuje Dirba maisto prekių parduotuvėje.'
    ),(
    'Jonas', 
    'Petraitis',
    1999,
    44.4,
    0,
    'Gimė ir užaugo Ariogaloje.'
    ),(
    'Petras', 
    'Jonikas',
    1989,
    40.0,
    1,
    'Dirba darbininku Vilniuje.' 
    )";

$stmt = $pdo->query($sql);
$sql = "SELECT * FROM table_2";
$stmt = $pdo->query($sql);
foreach ($stmt as $row)
{
    echo $row['firstname'] . ' - ' . $row['lastname'] . ' - ' . $row['birth_date'] . 
    ' - ' .$row['shoe_size'] . ' - ' . $row['have_cats'] . ' - ' . $row['biography'] ."<br>";
}