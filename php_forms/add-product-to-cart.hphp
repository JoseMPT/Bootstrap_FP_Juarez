<?php
include '../php_PDO/PDO_Connection.php';
$id = $_POST['product-id'];
$amount = $_POST['sale-amount'];
session_start();
if (isset($_SESSION['user_email'])){
    //echo '<meta http-equiv="refresh" content="0; URL=./loggin.php">';
    $connection = new PDO_Connection();
    $buy_id = $connection->getCartID($_SESSION['user_email']);
    $connection->addToCart($id, $amount, $buy_id);
    echo 'Successful';
}else{
    echo 'Failed';
}