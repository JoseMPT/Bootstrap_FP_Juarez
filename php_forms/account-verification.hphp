<?php
include_once '../php_PDO/PDO_Connection.php';

$email = $_POST['login_email'];
$pass = $_POST['login_pass'];

$connection = new PDO_Connection();
$pdo = $connection->getPDO();

$command = $pdo->prepare('SELECT * FROM users_data WHERE :email = user_email;');

$command->bindParam(':email', $email);
$command->execute();

$result = $command->fetchAll(PDO::FETCH_CLASS);

if (count($result) == 0){
    echo 'Failed';
} else if (password_verify($pass, $result[0]->user_password) AND $result[0]->user_email == $email){
    session_start();
    $_SESSION['user_name1'] =  $result[0]->user_name1;
    $_SESSION['user_name2'] =  $result[0]->user_name2;
    $_SESSION['user_lastname1'] =  $result[0]->user_lastname1;
    $_SESSION['user_lastname2'] =  $result[0]->user_lastname2;
    $_SESSION['user_email'] = $result[0]->user_email;
    $_SESSION['user_type'] = $result[0]->user_type;
    //'<meta http-equiv="refresh" content="0; URL=./index.php">';
    echo 'Successful';
} else  {
    echo 'Failed';
}