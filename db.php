<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=testdb", 'root', '');
    echo "It's working";
} catch (PDOException $e) {
    echo $e->getMessage();
}

$id = $_GET['id'];
var_dump($id);
die;
$var = $pdo->prepare("SELECT * FROM users WHERE id=2");
$var->execute();
$vard = $var->fetchAll();
var_dump($vard);