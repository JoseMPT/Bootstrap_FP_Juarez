<?php
include_once '../php_PDO/PDO_Connection.php';

$name1 = $_POST['text_name1'] != '' ? $_POST['text_name1'] : null;
$name2 = $_POST['text_name2'] != '' ? $_POST['text_name2'] : null;
$lastname1 = $_POST['text_lastname1'] != '' ? $_POST['text_lastname1'] : null;
$lastname2 = $_POST['text_name2'] != '' ? $_POST['text_lastname2'] : null;
$email = $_POST['text_email'] != '' ? $_POST['text_email'] : null;
$pass = password_hash($_POST['text_pass'], PASSWORD_DEFAULT);
$type = 1;

$connection = new PDO_Connection();
$pdo = $connection->getPDO();

$command = $pdo->prepare('INSERT INTO users_data VALUES (:name1, :name2, :lastname1, :lastname2, :email, :pass, :type)');

$command->bindParam(':name1', $name1);
$command->bindParam(':name2', $name2);
$command->bindParam(':lastname1', $lastname1);
$command->bindParam(':lastname2', $lastname2);
$command->bindParam(':email', $email);
$command->bindParam(':pass', $pass);
$command->bindParam(':type', $type);

try {
    $command->execute();
}catch (PDOException $ex){
    echo 'Failed';
}