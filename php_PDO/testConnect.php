<?php
//$pdo = new PDO('mysql:host=127.0.0.1;dbname=libros;port=3308;user=root;password=123456789M&M');
require_once 'PDO_Connection.php';
$connection = new PDO_Connection();
$pdo = $connection->getPDO();
$comando = $pdo->prepare("INSERT INTO libro VALUES (:id,:name,:amount)");

$id = rand();
$name = 'Maldad a la vista';
$amount = rand();

$comando->bindParam(':id', $id);
$comando->bindParam(':name', $name);
$comando->bindParam(':amount', $amount);

$comando->execute();