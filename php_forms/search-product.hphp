<?php
include_once '../php_PDO/PDO_Connection.php';

$product = $_GET['text_search'];

$connection = new PDO_Connection();
$pdo = $connection->getPDO();

$command =  $pdo->prepare('SELECT * FROM products_data WHERE upper(:product) LIKE upper(product_name);');