<?php
session_start();
include_once '../php_PDO/PDO_Connection.php';
$connection = new PDO_Connection();

$id = $_POST['product_Id_delete'];
$cart_id = $connection->getCartID($_SESSION['user_email']);

$connection->deleteFromCart($id, $cart_id);
echo '<meta http-equiv="refresh" content="0; URL=../shopping-cart.php">';