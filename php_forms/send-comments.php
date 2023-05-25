<?php
try {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    echo 'Successful';
}catch (Exception $exception){
    echo 'Failed';
}